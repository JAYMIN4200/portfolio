import.meta.glob(['../images/**', '../../public/images/**'], { eager: true });

document.addEventListener('DOMContentLoaded', function () {
    var reduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    document.querySelectorAll('input[name="phone"], input[name="whatsapp"]').forEach(function (input) {
        input.setAttribute('inputmode', 'tel');

        // Allow typing formatted numbers like "+91 95581 66838" or "+1 (315) 322 5888".
        input.addEventListener('input', function () {
            var value = input.value;
            var cleaned = value.replace(/[^0-9+()\-\s]/g, '');
            if (cleaned.indexOf('+') > 0) {
                cleaned = cleaned.replace(/\+/g, '');
                cleaned = '+' + cleaned;
            }
            if (cleaned.charAt(0) === '-') {
                cleaned = cleaned.slice(1);
            }
            cleaned = cleaned.replace(/\s{2,}/g, ' ');
            if (cleaned !== value) {
                input.value = cleaned;
            }
        });

        // Normalize to digits-only on blur/submit so stored & validated values stay clean.
        var normalizePhone = function () {
            var value = input.value;
            if (!value.trim()) {
                if (input.value !== '') {
                    input.value = '';
                }
                return;
            }
            var hasPlus = value.replace(/\s/g, '').charAt(0) === '+';
            var digits = value.replace(/\D/g, '');
            var normalized = (hasPlus ? '+' : '') + digits;
            if (normalized !== value) {
                input.value = normalized;
            }
        };

        input.addEventListener('blur', normalizePhone);

        var form = input.closest('form');
        if (form) {
            form.addEventListener('submit', normalizePhone);
        }
    });

    // Duplicate marquee content for a seamless loop
    document.querySelectorAll('[data-marquee]').forEach(function (marquee) {
        var track = marquee.querySelector('[data-marquee-track]');
        if (!track) return;
        track.innerHTML = track.innerHTML.trim() + track.innerHTML.trim();
    });

    if (reduced) return;

    // Auto-tag stagger grids so children reveal one after another
    document.querySelectorAll('[data-stagger]').forEach(function (grid) {
        Array.prototype.forEach.call(grid.children, function (child, index) {
            if (!child.hasAttribute('data-reveal')) {
                child.setAttribute('data-reveal', 'up');
            }
            if (!child.hasAttribute('data-reveal-delay')) {
                child.setAttribute('data-reveal-delay', String(Math.min(index * 80, 480)));
            }
        });
    });

    // Reveal on scroll
    var revealEls = document.querySelectorAll('[data-reveal]');
    if (revealEls.length) {
        if (!('IntersectionObserver' in window)) {
            revealEls.forEach(function (el) { el.classList.add('is-revealed'); });
        } else {
            var io = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (!entry.isIntersecting) return;
                    var el = entry.target;
                    var delay = parseInt(el.getAttribute('data-reveal-delay') || '0', 10);
                    var apply = function () { el.classList.add('is-revealed'); };
                    if (delay > 0) {
                        setTimeout(apply, delay);
                    } else {
                        apply();
                    }
                    io.unobserve(el);
                });
            }, { threshold: 0.12, rootMargin: '0px 0px -50px 0px' });
            revealEls.forEach(function (el) { io.observe(el); });
        }
    }

    // Subtle 3D tilt on cards (fine pointers only)
    if (window.matchMedia && window.matchMedia('(pointer: fine)').matches) {
        document.querySelectorAll('.tilt-card').forEach(function (card) {
            card.addEventListener('pointermove', function (e) {
                var rect = card.getBoundingClientRect();
                var x = (e.clientX - rect.left) / rect.width - 0.5;
                var y = (e.clientY - rect.top) / rect.height - 0.5;
                card.style.transform = 'perspective(900px) rotateX(' + (-y * 5).toFixed(2) + 'deg) rotateY(' + (x * 5).toFixed(2) + 'deg) translateY(-2px)';
            });
            card.addEventListener('pointerleave', function () {
                card.style.transform = '';
            });
        });
    }
});
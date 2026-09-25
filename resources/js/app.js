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

        // Cursor spotlight: feed the pointer position into CSS custom props
        document.querySelectorAll('.spotlight-card').forEach(function (card) {
            card.addEventListener('pointermove', function (e) {
                var rect = card.getBoundingClientRect();
                card.style.setProperty('--spot-x', (e.clientX - rect.left) + 'px');
                card.style.setProperty('--spot-y', (e.clientY - rect.top) + 'px');
            });
        });

        // Magnetic buttons pull slightly toward the cursor
        document.querySelectorAll('[data-magnetic]').forEach(function (el) {
            var strength = parseFloat(el.getAttribute('data-magnetic')) || 0.25;

            el.addEventListener('pointermove', function (e) {
                var rect = el.getBoundingClientRect();
                var x = (e.clientX - rect.left - rect.width / 2) * strength;
                var y = (e.clientY - rect.top - rect.height / 2) * strength;
                el.style.transform = 'translate(' + x.toFixed(2) + 'px,' + y.toFixed(2) + 'px)';
            });

            el.addEventListener('pointerleave', function () {
                el.style.transform = '';
            });
        });
    }

    // Count numbers up when they scroll into view
    var animateValue = function (el) {
        var target = parseFloat(el.getAttribute('data-counter'));
        if (isNaN(target)) return;

        var suffix = el.getAttribute('data-counter-suffix') || '';
        var decimals = parseInt(el.getAttribute('data-counter-decimals') || '0', 10);
        var duration = parseInt(el.getAttribute('data-counter-duration') || '1600', 10);
        var start = null;

        if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            el.textContent = target.toFixed(decimals) + suffix;
            return;
        }

        var step = function (timestamp) {
            if (start === null) start = timestamp;
            var progress = Math.min((timestamp - start) / duration, 1);
            // easeOutExpo
            var eased = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
            el.textContent = (target * eased).toFixed(decimals) + suffix;
            if (progress < 1) requestAnimationFrame(step);
        };

        requestAnimationFrame(step);
    };

    var once = function (targets, apply) {
        if (!targets.length) return;

        if (!('IntersectionObserver' in window)) {
            targets.forEach(apply);
            return;
        }

        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                apply(entry.target);
                io.unobserve(entry.target);
            });
        }, { threshold: 0.35 });

        targets.forEach(function (el) { io.observe(el); });
    };

    once(document.querySelectorAll('[data-counter]'), animateValue);

    // Skill bars grow from 0 to their stored proficiency. --target-width is
    // already in the markup so the bar is correct with JS disabled; collapse
    // it to 0 here, which is invisible because the card is still opacity 0.
    var skillBars = document.querySelectorAll('[data-skill-bar]');
    skillBars.forEach(function (bar) { bar.style.width = '0%'; });

    once(skillBars, function (bar) {
        bar.style.width = bar.getAttribute('data-target-width') + '%';
    });

    // ---------- Scroll-linked effects ----------

    var nav = document.querySelector('[data-nav]');
    var backToTop = document.querySelector('[data-back-to-top]');
    var parallaxEls = document.querySelectorAll('[data-parallax]');
    var ticking = false;

    var onScroll = function () {
        var y = window.scrollY || document.documentElement.scrollTop;

        if (nav) {
            nav.classList.toggle('is-scrolled', y > 12);
        }

        if (backToTop) {
            backToTop.classList.toggle('is-visible', y > 600);
        }

        if (parallaxEls.length) {
            parallaxEls.forEach(function (el) {
                var speed = parseFloat(el.getAttribute('data-parallax')) || 0.15;
                // Clamp so the offset can't run away on long pages.
                var offset = Math.max(-160, Math.min(y * speed, 160));
                el.style.setProperty('--parallax-y', offset.toFixed(2) + 'px');
            });
        }

        ticking = false;
    };

    var requestTick = function () {
        if (ticking) return;
        ticking = true;
        requestAnimationFrame(onScroll);
    };

    window.addEventListener('scroll', requestTick, { passive: true });
    window.addEventListener('resize', requestTick);
    onScroll();

    if (backToTop) {
        backToTop.addEventListener('click', function () {
            var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            window.scrollTo({ top: 0, behavior: reduce ? 'auto' : 'smooth' });
        });
    }
});
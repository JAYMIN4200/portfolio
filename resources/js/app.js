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
        var step = parseInt(grid.getAttribute('data-stagger-step') || '110', 10);
        var cap = parseInt(grid.getAttribute('data-stagger-cap') || '880', 10);
        Array.prototype.forEach.call(grid.children, function (child, index) {
            if (!child.hasAttribute('data-reveal')) {
                child.setAttribute('data-reveal', grid.getAttribute('data-stagger-reveal') || 'up');
            }
            if (!child.hasAttribute('data-reveal-delay')) {
                child.setAttribute('data-reveal-delay', String(Math.min(index * step, cap)));
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
            var max = parseFloat(card.getAttribute('data-tilt')) || 9;

            card.addEventListener('pointermove', function (e) {
                var rect = card.getBoundingClientRect();
                var x = (e.clientX - rect.left) / rect.width - 0.5;
                var y = (e.clientY - rect.top) / rect.height - 0.5;
                card.style.transform = 'perspective(1000px) rotateX(' + (-y * max).toFixed(2) + 'deg) rotateY(' + (x * max).toFixed(2) + 'deg) translateY(-6px) scale(1.015)';
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
            var strength = parseFloat(el.getAttribute('data-magnetic')) || 0.3;

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

/**
 * Session Timeout Warning
 * Shows a warning modal before auto-logout and allows user to extend session
 */
document.addEventListener('DOMContentLoaded', function () {
    // Check if user is authenticated (presence of logout form or user menu)
    var logoutForm = document.querySelector('form[action*="logout"]');
    var userMenu = document.querySelector('[data-user-menu]');

    if (!logoutForm && !userMenu) {
        return; // Not on an authenticated page
    }

    // Get session lifetime from a meta tag or data attribute
    var sessionLifetimeMeta = document.querySelector('meta[name="session-lifetime"]');
    var sessionLifetime = sessionLifetimeMeta ? parseInt(sessionLifetimeMeta.getAttribute('content'), 10) : 120;

    // If 0 or invalid, auto-logout is disabled
    if (!sessionLifetime || sessionLifetime <= 0 || isNaN(sessionLifetime)) {
        return;
    }

    // Ensure minimum session lifetime for warning calculation
    if (sessionLifetime < 1) {
        return;
    }

    // Show warning 30 seconds before expiry, max 5 minutes, min 10 seconds
    // For sessions < 2 minutes, don't show warning (just auto-logout)
    var warningTime;
    if (sessionLifetime <= 2) {
        warningTime = 0; // No warning for very short sessions
    } else {
        warningTime = Math.min(5, Math.max(0.5, sessionLifetime - 0.5)); // 30 sec before, max 5 min
    }
    var warningMs = warningTime * 60 * 1000;
    var totalMs = sessionLifetime * 60 * 1000;

    var warningShown = false;
    var warningTimer = null;
    var logoutTimer = null;

    var activityEvents = ['mousedown', 'mousemove', 'keypress', 'scroll', 'touchstart', 'click'];

    function doLogout() {
        // Create a form and submit it to logout via POST
        var form = document.createElement('form');
        form.method = 'POST';
        form.action = '/logout';
        form.style.display = 'none';

        var csrfInput = document.createElement('input');
        csrfInput.type = 'hidden';
        csrfInput.name = '_token';
        csrfInput.value = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';
        form.appendChild(csrfInput);

        document.body.appendChild(form);
        form.submit();
    }

    function resetTimers() {
        if (warningTimer) clearTimeout(warningTimer);
        if (logoutTimer) clearTimeout(logoutTimer);
        warningShown = false;
        startTimers();
    }

    function startTimers() {
        if (warningTime > 0) {
            warningTimer = setTimeout(showWarning, totalMs - warningMs);
        }
        logoutTimer = setTimeout(function () {
            // POST to logout
            doLogout();
        }, totalMs);
    }

    function showWarning() {
        if (warningShown) return;
        warningShown = true;

        // Create modal
        var modal = document.createElement('div');
        modal.className = 'fixed inset-0 z-50 flex items-center justify-center bg-black/50';
        
        // Format initial warning time display
        var initialDisplay = warningTime < 1 
            ? (warningTime * 60) + ' second(s)' 
            : warningTime + ' minute(s)';
        
        modal.innerHTML = `
            <div class="bg-white rounded-xl p-6 max-w-md w-full mx-4">
                <div class="flex items-center gap-3 mb-4">
                    <svg class="w-6 h-6 text-amber-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                    <h3 class="text-lg font-semibold text-slate-800">Session Expiring Soon</h3>
                </div>
                <p class="text-slate-600 mb-6">Your session will expire in <strong id="countdown" class="text-amber-600">${initialDisplay}</strong> due to inactivity.</p>
                <div class="flex gap-3 justify-end">
                    <button id="extend-session" class="px-4 py-2 rounded-lg bg-indigo-600 text-white font-medium hover:bg-indigo-700 transition-colors">Stay Logged In</button>
                    <button id="logout-now" class="px-4 py-2 rounded-lg border border-slate-300 text-slate-700 font-medium hover:bg-slate-50 transition-colors">Log Out Now</button>
                </div>
            </div>
        `;
        document.body.appendChild(modal);

        // Countdown
        var countdownEl = modal.querySelector('#countdown');
        var secondsLeft = warningTime * 60;
        var countdownInterval = setInterval(function () {
            secondsLeft--;
            var mins = Math.floor(secondsLeft / 60);
            var secs = secondsLeft % 60;
            if (countdownEl) {
                countdownEl.textContent = mins + ':' + (secs < 10 ? '0' : '') + secs;
            }
            if (secondsLeft <= 0) {
                clearInterval(countdownInterval);
            }
        }, 1000);

        // Extend session
        modal.querySelector('#extend-session').addEventListener('click', function () {
            clearInterval(countdownInterval);
            document.body.removeChild(modal);
            extendSession();
        });

        // Logout now
        modal.querySelector('#logout-now').addEventListener('click', function () {
            doLogout();
        });

        // Close on backdrop click
        modal.addEventListener('click', function (e) {
            if (e.target === modal) {
                clearInterval(countdownInterval);
                document.body.removeChild(modal);
                // User didn't respond, let logout happen
            }
        });
    }

    function extendSession() {
        // Make a request to keep session alive
        fetch('/session/extend', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
            },
            credentials: 'same-origin'
        }).then(function () {
            resetTimers();
        }).catch(function () {
            // If extend fails, restart timers anyway
            resetTimers();
        });
    }

    // Track user activity
    activityEvents.forEach(function (event) {
        document.addEventListener(event, resetTimers, { passive: true });
    });

    // Start timers
    startTimers();
});
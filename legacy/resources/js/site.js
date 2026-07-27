import { animate, inView, stagger } from 'motion';

// The layout hides reveal targets before paint and arms a failsafe in case this
// bundle never runs. It did run, so cancel it and take over the reveals.
clearTimeout(window.__revealFailsafe);

const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

const revealKeyframes = { opacity: [0, 1], transform: ['translateY(16px)', 'translateY(0px)'] };
const revealOptions = { duration: 0.5, easing: [0.16, 1, 0.3, 1] };

/** True once an element has been handed to `animate`, so it never replays. */
function play(targets, stagger_) {
    if (!targets.length) return;
    animate(targets, revealKeyframes, stagger_ ? { ...revealOptions, delay: stagger_ } : revealOptions);
}

/**
 * Reveal elements as they scroll into view. Children of a [data-reveal-group]
 * animate in sequence; standalone .reveal elements animate on their own.
 *
 * Anything already on screen at load plays straight away — `inView` would
 * otherwise skip it on tall viewports, leaving the hero blank.
 */
function setupReveals() {
    if (reducedMotion) {
        document.documentElement.classList.remove('js');
        return;
    }

    const done = new WeakSet();

    const reveal = (root, useStagger) => {
        const targets = [...root.querySelectorAll('.reveal')].filter((el) => !done.has(el));
        targets.forEach((el) => done.add(el));
        play(targets, useStagger ? stagger(0.08) : undefined);
    };

    const onScreen = (el) => {
        const { top, bottom } = el.getBoundingClientRect();
        return top < window.innerHeight && bottom > 0;
    };

    document.querySelectorAll('[data-reveal-group]').forEach((group) => {
        if (onScreen(group)) reveal(group, true);
    });

    document.querySelectorAll('.reveal:not([data-reveal-group] .reveal)').forEach((el) => {
        if (done.has(el) || !onScreen(el)) return;
        done.add(el);
        play([el]);
    });

    inView('[data-reveal-group]', (group) => reveal(group, true), { margin: '-10% 0px -10% 0px' });

    inView(
        '.reveal:not([data-reveal-group] .reveal)',
        (el) => {
            if (done.has(el)) return;
            done.add(el);
            play([el]);
        },
        { margin: '-10% 0px -10% 0px' },
    );
}

/** Count up [data-counter] values the first time they become visible. */
function setupCounters() {
    inView('[data-counter]', (el) => {
        const target = Number(el.dataset.counter || 0);
        if (!target) return;

        if (reducedMotion) {
            el.textContent = String(target);
            return;
        }

        animate(0, target, {
            duration: 1.4,
            easing: [0.16, 1, 0.3, 1],
            onUpdate: (value) => {
                el.textContent = String(Math.round(value));
            },
        });
    });
}

/** Slide-over navigation on small screens. */
function setupMobileMenu() {
    const menu = document.querySelector('[data-mobile-menu]');
    if (!menu) return;

    const toggle = (open) => {
        menu.toggleAttribute('hidden', !open);
        document.body.classList.toggle('overflow-hidden', open);
    };

    document.querySelectorAll('[data-mobile-menu-open]').forEach((btn) =>
        btn.addEventListener('click', () => toggle(true)),
    );
    document.querySelectorAll('[data-mobile-menu-close]').forEach((btn) =>
        btn.addEventListener('click', () => toggle(false)),
    );
    menu.querySelectorAll('a').forEach((link) =>
        link.addEventListener('click', () => toggle(false)),
    );

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') toggle(false);
    });
}

/** Adds a border + blur to the sticky header once the page is scrolled. */
function setupStickyHeader() {
    const header = document.querySelector('[data-sticky-header]');
    if (!header) return;

    const update = () => {
        header.classList.toggle('border-border', window.scrollY > 8);
        header.classList.toggle('border-transparent', window.scrollY <= 8);
    };

    update();
    window.addEventListener('scroll', update, { passive: true });
}

document.addEventListener('DOMContentLoaded', () => {
    setupReveals();
    setupCounters();
    setupMobileMenu();
    setupStickyHeader();
});

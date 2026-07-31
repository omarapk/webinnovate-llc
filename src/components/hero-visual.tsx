'use client';

import { motion, useReducedMotion } from 'motion/react';

/**
 * Hero illustration — the studio as an orbital system.
 *
 * The core is a wireframe globe, deliberately echoing the WebInnovate mark, and
 * the five things we sell orbit it: engineering, security, SEO, growth and
 * support. Drawn as vector art rather than a product screenshot so it stays
 * symbolic, and built from theme tokens so it follows the palette.
 */

/** Tilted orbit ellipses: [rx, ry, tilt°, spin duration, direction]. */
const ORBITS = [
  { rx: 250, ry: 96, tilt: -16, duration: '46s', reverse: false },
  { rx: 210, ry: 132, tilt: 38, duration: '62s', reverse: true },
  { rx: 268, ry: 60, tilt: 74, duration: '78s', reverse: false },
];

/** Wireframe meridians and parallels on the core globe. */
const MERIDIANS = [28, 56, 84];
const PARALLELS = [30, 58];

type Capability = {
  label: string;
  metric: string;
  /** Position of the chip, as a percentage of the illustration box. */
  position: string;
  /** Where the connector meets the chip, in SVG user units. */
  from: [number, number];
  delay: number;
  icon: React.ReactNode;
};

const CORE: [number, number] = [400, 290];

const CAPABILITIES: Capability[] = [
  {
    label: 'Engineering',
    metric: 'TypeScript · Edge',
    position: 'left-0 top-[6%]',
    from: [150, 76],
    delay: 0,
    icon: <path d="m8 6-5 6 5 6M16 6l5 6-5 6" />,
  },
  {
    label: 'Security',
    metric: '0 critical',
    position: 'right-[2%] top-0',
    from: [648, 52],
    delay: 0.1,
    icon: (
      <>
        <path d="M12 3 5 6v6c0 4.1 2.9 7.8 7 8.9 4.1-1.1 7-4.8 7-8.9V6l-7-3Z" />
        <path d="m9 12 2 2 4-4" />
      </>
    ),
  },
  {
    label: 'SEO',
    metric: 'Ranked #1',
    position: 'right-0 top-[46%]',
    from: [690, 300],
    delay: 0.2,
    icon: (
      <>
        <circle cx="11" cy="11" r="7" />
        <path d="m20 20-3.5-3.5" />
      </>
    ),
  },
  {
    label: 'Growth',
    metric: '+214% MRR',
    position: 'bottom-[4%] right-[12%]',
    from: [590, 520],
    delay: 0.3,
    icon: (
      <>
        <path d="M3 17l6-6 4 4 7-7" />
        <path d="M14 8h6v6" />
      </>
    ),
  },
  {
    label: 'Support',
    metric: '99.98% uptime',
    position: 'bottom-[10%] left-[1%]',
    from: [140, 494],
    delay: 0.4,
    icon: <path d="M3 12h4l2.5-6 5 12L17 12h4" />,
  },
];

export function HeroVisual() {
  const reducedMotion = useReducedMotion();

  return (
    <div className="relative mx-auto aspect-[4/3] w-full max-w-4xl sm:aspect-[16/10]">
      <div className="pointer-events-none absolute -inset-16 -z-10 overflow-hidden" aria-hidden="true">
        <div className="glow absolute left-1/2 top-1/2 size-[560px] -translate-x-1/2 -translate-y-1/2 rounded-full" style={{ '--glow': 'oklch(0.62 0.24 340 / 0.26)' } as React.CSSProperties} />
        <div className="glow absolute left-[14%] top-[8%] size-[380px] rounded-full" style={{ '--glow': 'oklch(0.55 0.22 290 / 0.20)' } as React.CSSProperties} />
        <div className="glow absolute bottom-[2%] right-[10%] size-[420px] rounded-full" style={{ '--glow': 'oklch(0.68 0.19 150 / 0.14)' } as React.CSSProperties} />
      </div>

      <svg
        className="absolute inset-0 size-full"
        viewBox="0 0 800 580"
        fill="none"
        preserveAspectRatio="xMidYMid meet"
        aria-hidden="true"
      >
        <defs>
          <radialGradient id="core-body" cx="34%" cy="28%">
            <stop offset="0%" stopColor="#F5D0FE" />
            <stop offset="28%" stopColor="#D946EF" />
            <stop offset="62%" stopColor="#9333EA" />
            <stop offset="100%" stopColor="#3B0764" />
          </radialGradient>

          <radialGradient id="core-sheen" cx="30%" cy="24%">
            <stop offset="0%" stopColor="#FFFFFF" stopOpacity="0.55" />
            <stop offset="100%" stopColor="#FFFFFF" stopOpacity="0" />
          </radialGradient>

          <linearGradient id="orbit-line" x1="0" x2="1" y1="0" y2="1">
            <stop offset="0%" stopColor="#A21CAF" stopOpacity="0" />
            <stop offset="30%" stopColor="#A21CAF" stopOpacity="0.55" />
            <stop offset="70%" stopColor="#7C3AED" stopOpacity="0.55" />
            <stop offset="100%" stopColor="#7C3AED" stopOpacity="0" />
          </linearGradient>

          <linearGradient id="link-line" x1="0" x2="1" y1="0" y2="0">
            <stop offset="0%" stopColor="#A21CAF" stopOpacity="0.05" />
            <stop offset="100%" stopColor="#A21CAF" stopOpacity="0.5" />
          </linearGradient>
        </defs>

        {/* Orbits */}
        <g>
          {ORBITS.map((orbit) => (
            <g
              key={orbit.tilt}
              className={orbit.reverse ? 'animate-orbit-reverse' : 'animate-orbit'}
              style={{
                transformOrigin: `${CORE[0]}px ${CORE[1]}px`,
                animationDuration: orbit.duration,
              }}
            >
              <ellipse
                cx={CORE[0]}
                cy={CORE[1]}
                rx={orbit.rx}
                ry={orbit.ry}
                stroke="url(#orbit-line)"
                strokeWidth="1.5"
                transform={`rotate(${orbit.tilt} ${CORE[0]} ${CORE[1]})`}
              />
              {/* Satellite riding the ring */}
              <circle
                cx={CORE[0] + orbit.rx * Math.cos((orbit.tilt * Math.PI) / 180)}
                cy={CORE[1] + orbit.rx * Math.sin((orbit.tilt * Math.PI) / 180)}
                r="4"
                fill="#D946EF"
              />
            </g>
          ))}
        </g>

        {/* Connectors from each capability to the core */}
        {CAPABILITIES.map((capability) => (
          <line
            key={capability.label}
            x1={capability.from[0]}
            y1={capability.from[1]}
            x2={CORE[0]}
            y2={CORE[1]}
            stroke="url(#link-line)"
            strokeWidth="1.5"
            strokeDasharray="3 7"
            className="animate-flow"
            style={{ animationDelay: `${capability.delay * -3}s` }}
          />
        ))}

        {/* Core globe */}
        <motion.g
          initial={reducedMotion ? false : { scale: 0.82, opacity: 0 }}
          animate={{ scale: 1, opacity: 1 }}
          transition={{ duration: 0.9, ease: [0.16, 1, 0.3, 1] }}
          style={{ transformOrigin: `${CORE[0]}px ${CORE[1]}px` }}
        >
          <circle cx={CORE[0]} cy={CORE[1]} r="104" fill="#A21CAF" opacity="0.16" />
          <circle cx={CORE[0]} cy={CORE[1]} r="88" fill="url(#core-body)" />

          <g stroke="#FFFFFF" strokeOpacity="0.42" strokeWidth="1.5" fill="none">
            {MERIDIANS.map((rx) => (
              <ellipse key={`m${rx}`} cx={CORE[0]} cy={CORE[1]} rx={rx} ry="88" />
            ))}
            {PARALLELS.map((ry) => (
              <ellipse key={`p${ry}`} cx={CORE[0]} cy={CORE[1]} rx="88" ry={ry} />
            ))}
            <line x1={CORE[0] - 88} y1={CORE[1]} x2={CORE[0] + 88} y2={CORE[1]} />
          </g>

          <circle cx={CORE[0]} cy={CORE[1]} r="88" fill="url(#core-sheen)" />
          <circle cx={CORE[0]} cy={CORE[1]} r="88" stroke="#FFFFFF" strokeWidth="3" />

          {/* Network nodes on the globe, straight from the mark */}
          {[
            [CORE[0] - 62, CORE[1] - 34],
            [CORE[0] + 58, CORE[1] - 48],
            [CORE[0] + 22, CORE[1] + 66],
          ].map(([cx, cy]) => (
            <g key={`${cx}-${cy}`}>
              <circle cx={cx} cy={cy} r="11" fill="#FFFFFF" />
              <circle cx={cx} cy={cy} r="8" fill="#DB2777" />
            </g>
          ))}
        </motion.g>
      </svg>

      {/* Capability chips, anchored around the orbit */}
      {CAPABILITIES.map((capability) => (
        <motion.div
          key={capability.label}
          className={`absolute ${capability.position}`}
          initial={reducedMotion ? false : { opacity: 0, y: 12 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.5, delay: 0.35 + capability.delay, ease: [0.16, 1, 0.3, 1] }}
        >
          <div className="chip animate-float" style={{ animationDelay: `${capability.delay * -4}s` }}>
            <span className="flex size-7 shrink-0 items-center justify-center rounded-lg bg-foreground text-background">
              <svg className="size-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.2" strokeLinecap="round" strokeLinejoin="round">
                {capability.icon}
              </svg>
            </span>
            <span className="whitespace-nowrap">
              {capability.label}
              <span className="block text-[11px] font-normal text-muted-foreground">
                {capability.metric}
              </span>
            </span>
          </div>
        </motion.div>
      ))}
    </div>
  );
}

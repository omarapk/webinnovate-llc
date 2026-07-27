'use client';

import { motion } from 'motion/react';

/**
 * Hero studio illustration.
 *
 * A SaaS product surface: revenue climbing, an intelligence layer reasoning
 * over it, and the engineering signals underneath. Deliberately abstract —
 * it sells the studio, not the WEBI apps (those live in #references).
 */

const REVENUE_LINE =
  'M0,104 C18,100 30,94 44,90 C60,86 70,96 84,93 C102,89 112,74 128,70 C146,66 156,63 172,60 C190,56 200,47 216,44 C234,40 244,38 260,33 C278,27 292,18 312,10';

const REVENUE_AREA = `${REVENUE_LINE} L320,120 L0,120 Z`;

/** Nodes of the small "intelligence" graph, in a 120×120 viewBox. */
const NODES = [
  { cx: 60, cy: 22, r: 5 },
  { cx: 22, cy: 54, r: 4 },
  { cx: 98, cy: 52, r: 4 },
  { cx: 40, cy: 96, r: 4 },
  { cx: 84, cy: 98, r: 4 },
  { cx: 60, cy: 60, r: 7 },
];

const EDGES = [
  [0, 5],
  [1, 5],
  [2, 5],
  [3, 5],
  [4, 5],
  [0, 1],
  [0, 2],
  [1, 3],
  [2, 4],
  [3, 4],
];

const kpis = [
  { label: 'Conversion', value: '+38%' },
  { label: 'Uptime', value: '99.9%' },
  { label: 'Response', value: '< 1h' },
];

const capabilities = [
  { label: 'Development', detail: 'Shipping', color: '#A21CAF' },
  { label: 'Security', detail: 'Hardened', color: '#DB2777' },
  { label: 'SEO', detail: 'Indexed', color: '#9333EA' },
  { label: 'Support', detail: 'Monitored', color: '#7C3AED' },
];

export function HeroVisual() {
  return (
    <div className="relative mx-auto max-w-4xl">
      <div className="pointer-events-none absolute -inset-x-24 -bottom-16 -top-24 -z-10 overflow-hidden" aria-hidden="true">
        <div className="glow absolute left-[6%] top-[8%] size-[380px] rounded-full" style={{ '--glow': 'oklch(0.62 0.24 340 / 0.20)' } as React.CSSProperties} />
        <div className="glow absolute right-[4%] top-[20%] size-[400px] rounded-full" style={{ '--glow': 'oklch(0.55 0.22 290 / 0.16)' } as React.CSSProperties} />
        <div className="glow absolute -bottom-[8%] left-[40%] size-[440px] rounded-full" style={{ '--glow': 'oklch(0.68 0.19 150 / 0.12)' } as React.CSSProperties} />
      </div>

      <div className="mockup">
        <div className="mockup-bar">
          <span className="mockup-dot" />
          <span className="mockup-dot" />
          <span className="mockup-dot" />
          <div className="ml-3 flex flex-1 items-center gap-2 rounded-md bg-background px-2.5 py-1 text-[11px] text-muted-foreground">
            <svg className="size-3 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true">
              <rect x="3" y="4" width="18" height="16" rx="2" />
              <path d="M3 9h18" />
            </svg>
            your-saas.app / growth
          </div>
        </div>

        <div className="grid sm:grid-cols-[1.45fr_1fr]">
          {/* Growth */}
          <div className="border-b border-border p-5 sm:border-b-0 sm:border-r sm:p-6">
            <div className="flex items-start justify-between gap-4">
              <div>
                <p className="text-[11px] font-semibold uppercase tracking-wider text-muted-foreground">
                  Recurring revenue
                </p>
                <p className="mt-2 text-3xl font-semibold tracking-tight tabular-nums">
                  $2.4M<span className="text-muted-foreground">+</span>
                </p>
              </div>
              <span className="inline-flex items-center gap-1 rounded-full bg-emerald-500/10 px-2 py-1 text-[11px] font-semibold text-emerald-600">
                <svg className="size-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="3" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true">
                  <path d="M6 15l6-6 6 6" />
                </svg>
                +214%
              </span>
            </div>

            <svg className="mt-5 h-32 w-full" viewBox="0 0 320 120" fill="none" preserveAspectRatio="none" aria-hidden="true">
              <defs>
                <linearGradient id="growth-stroke" x1="0" x2="1" y1="1" y2="0">
                  <stop offset="0%" stopColor="#A21CAF" />
                  <stop offset="55%" stopColor="#DB2777" />
                  <stop offset="100%" stopColor="#7C3AED" />
                </linearGradient>
                <linearGradient id="growth-fill" x1="0" x2="0" y1="0" y2="1">
                  <stop offset="0%" stopColor="#DB2777" stopOpacity="0.22" />
                  <stop offset="100%" stopColor="#DB2777" stopOpacity="0" />
                </linearGradient>
              </defs>

              {[24, 56, 88].map((y) => (
                <line key={y} x1="0" y1={y} x2="320" y2={y} stroke="currentColor" strokeWidth="1" className="text-border" strokeDasharray="3 6" />
              ))}

              <motion.path
                d={REVENUE_AREA}
                fill="url(#growth-fill)"
                initial={{ opacity: 0 }}
                whileInView={{ opacity: 1 }}
                viewport={{ once: true }}
                transition={{ duration: 0.8, delay: 0.5 }}
              />
              <motion.path
                d={REVENUE_LINE}
                stroke="url(#growth-stroke)"
                strokeWidth="2.5"
                strokeLinecap="round"
                initial={{ pathLength: 0 }}
                whileInView={{ pathLength: 1 }}
                viewport={{ once: true }}
                transition={{ duration: 1.4, ease: [0.16, 1, 0.3, 1] }}
              />
            </svg>

            <div className="mt-5 grid grid-cols-3 gap-2">
              {kpis.map((kpi) => (
                <div key={kpi.label} className="rounded-lg border border-border px-3 py-2.5">
                  <p className="text-[10px] uppercase tracking-wide text-muted-foreground">{kpi.label}</p>
                  <p className="mt-0.5 text-sm font-semibold tabular-nums">{kpi.value}</p>
                </div>
              ))}
            </div>
          </div>

          {/* Intelligence */}
          <div className="flex flex-col p-5 sm:p-6">
            <div className="flex items-center justify-between">
              <span className="text-[11px] font-semibold uppercase tracking-wider text-muted-foreground">
                Intelligence
              </span>
              <span className="inline-flex items-center gap-1.5 text-[11px] text-muted-foreground">
                <span className="relative flex size-1.5">
                  <span className="animate-ping-soft absolute inline-flex size-full rounded-full bg-emerald-500" />
                  <span className="relative inline-flex size-1.5 rounded-full bg-emerald-500" />
                </span>
                Live
              </span>
            </div>

            <div className="mt-4 flex justify-center rounded-xl border border-border bg-muted/40 py-4">
              <svg className="size-32" viewBox="0 0 120 120" fill="none" aria-hidden="true">
                <defs>
                  <linearGradient id="node-fill" x1="0" x2="1" y1="0" y2="1">
                    <stop offset="0%" stopColor="#A21CAF" />
                    <stop offset="100%" stopColor="#7C3AED" />
                  </linearGradient>
                </defs>

                {EDGES.map(([from, to], index) => (
                  <motion.line
                    key={`${from}-${to}`}
                    x1={NODES[from].cx}
                    y1={NODES[from].cy}
                    x2={NODES[to].cx}
                    y2={NODES[to].cy}
                    stroke="url(#node-fill)"
                    strokeWidth="1"
                    strokeOpacity="0.45"
                    initial={{ pathLength: 0, opacity: 0 }}
                    whileInView={{ pathLength: 1, opacity: 1 }}
                    viewport={{ once: true }}
                    transition={{ duration: 0.6, delay: 0.3 + index * 0.06 }}
                  />
                ))}

                {NODES.map((node, index) => (
                  <motion.circle
                    key={`${node.cx}-${node.cy}`}
                    cx={node.cx}
                    cy={node.cy}
                    r={node.r}
                    fill="url(#node-fill)"
                    initial={{ scale: 0, opacity: 0 }}
                    whileInView={{ scale: 1, opacity: 1 }}
                    viewport={{ once: true }}
                    transition={{
                      duration: 0.4,
                      delay: 0.5 + index * 0.08,
                      type: 'spring',
                      bounce: 0.5,
                    }}
                    style={{ originX: `${node.cx}px`, originY: `${node.cy}px` }}
                  />
                ))}
              </svg>
            </div>

            <div className="mt-4 space-y-1.5">
              {capabilities.map((capability) => (
                <div
                  key={capability.label}
                  className="flex items-center justify-between rounded-lg border border-border px-3 py-2 text-[11px]"
                >
                  <span className="flex items-center gap-2">
                    <span className="size-1.5 rounded-full" style={{ background: capability.color }} />
                    {capability.label}
                  </span>
                  <span className="text-muted-foreground">{capability.detail}</span>
                </div>
              ))}
            </div>
          </div>
        </div>
      </div>

      <div className="chip animate-float absolute right-full top-28 -mr-4 hidden whitespace-nowrap xl:flex" style={{ animationDelay: '-1s' }}>
        <span className="flex size-6 items-center justify-center rounded-md bg-foreground text-background">
          <svg className="size-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.2" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true">
            <path d="m8 6-5 6 5 6M16 6l5 6-5 6" />
          </svg>
        </span>
        <span>
          Built by engineers
          <span className="block text-[11px] font-normal text-muted-foreground">
            Production code, not prototypes
          </span>
        </span>
      </div>

      <div className="chip animate-float absolute bottom-24 left-full -ml-4 hidden whitespace-nowrap xl:flex" style={{ animationDelay: '-3.5s' }}>
        <span className="flex size-6 items-center justify-center rounded-md bg-emerald-500/10 text-emerald-600">
          <svg className="size-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true">
            <path d="M12 3 5 6v6c0 4.1 2.9 7.8 7 8.9 4.1-1.1 7-4.8 7-8.9V6l-7-3Z" />
            <path d="m9 12 2 2 4-4" />
          </svg>
        </span>
        <span>
          Secure &amp; scalable
          <span className="block text-[11px] font-normal text-muted-foreground">
            Audited, monitored, maintained
          </span>
        </span>
      </div>
    </div>
  );
}

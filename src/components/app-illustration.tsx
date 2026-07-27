import type { App } from '@/data/apps';

/** A small, app-specific UI mock shown at the top of each portfolio card. */
export function AppIllustration({ app }: { app: App }) {
  const { from, to } = app.accent;

  return (
    <div
      className="relative h-44 overflow-hidden rounded-lg border border-border"
      style={{ background: `linear-gradient(160deg, ${from}12, ${to}08 55%, transparent)` }}
    >
      <div className="bg-dots pointer-events-none absolute inset-0 opacity-60" aria-hidden="true" />

      {app.slug === 'leadform' && <LeadFormMock from={from} to={to} />}
      {app.slug === 'landing-page-builder' && <BuilderMock from={from} to={to} />}
      {app.slug === 'ordersheet' && <OrderSheetMock from={from} to={to} />}
    </div>
  );
}

type MockProps = { from: string; to: string };

/** The one-page cash-on-delivery form. */
function LeadFormMock({ from, to }: MockProps) {
  return (
    <div className="absolute inset-x-6 top-6 rounded-lg border border-border bg-card p-3 shadow-sm transition-transform duration-500 group-hover:-translate-y-1">
      <div className="flex items-center justify-between">
        <span className="text-[10px] font-semibold uppercase tracking-wider text-muted-foreground">
          Order form
        </span>
        <span className="rounded-full px-1.5 py-0.5 text-[9px] font-semibold text-white" style={{ background: to }}>
          COD
        </span>
      </div>
      <div className="mt-2.5 space-y-1.5">
        <div className="h-5 rounded border border-border" />
        <div className="h-5 rounded border border-border" />
        <div className="grid grid-cols-3 gap-1.5">
          <div className="h-5 rounded border border-border" />
          <div className="h-5 rounded" style={{ background: `linear-gradient(135deg, ${from}, ${to})` }} />
          <div className="h-5 rounded border border-border" />
        </div>
      </div>
      <div
        className="mt-2.5 flex h-7 items-center justify-center rounded text-[10px] font-semibold text-white"
        style={{ background: `linear-gradient(135deg, ${from}, ${to})` }}
      >
        Complete order
      </div>
    </div>
  );
}

/** Prompt in, generated page out. */
function BuilderMock({ from, to }: MockProps) {
  const variants = [
    { name: 'A', rate: '1.4%', lift: 'group-hover:-translate-y-1' },
    { name: 'B', rate: '3.1%', lift: 'group-hover:-translate-y-2' },
  ];

  return (
    <>
      <div className="absolute inset-x-6 top-5 flex items-center gap-2 rounded-lg border border-border bg-card px-2.5 py-2 shadow-sm">
        <svg className="size-3.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" style={{ color: to }} aria-hidden="true">
          <path d="M12 3v4M12 17v4M3 12h4M17 12h4M5.6 5.6l2.8 2.8M15.6 15.6l2.8 2.8M18.4 5.6l-2.8 2.8M8.4 15.6l-2.8 2.8" />
        </svg>
        <span className="truncate text-[10px] text-muted-foreground">aliexpress.com/item/beauty-oil…</span>
        <span
          className="ml-auto rounded px-1.5 py-0.5 text-[9px] font-semibold text-white"
          style={{ background: `linear-gradient(135deg, ${from}, ${to})` }}
        >
          Generate
        </span>
      </div>

      <div className="absolute inset-x-6 top-[4.75rem] grid grid-cols-2 gap-2">
        {variants.map((variant) => (
          <div
            key={variant.name}
            className={`rounded-lg border border-border bg-card p-2 shadow-sm transition-transform duration-500 ${variant.lift}`}
          >
            <div className="flex items-center justify-between">
              <span className="text-[9px] font-semibold text-muted-foreground">Variant {variant.name}</span>
              <span className="text-[9px] font-semibold" style={{ color: to }}>
                {variant.rate}
              </span>
            </div>
            <div className="mt-1.5 h-6 rounded" style={{ background: `linear-gradient(135deg, ${from}25, ${to}20)` }} />
            <div className="mt-1 h-1.5 w-3/4 rounded-full bg-border" />
            <div className="mt-1 h-1.5 w-1/2 rounded-full bg-border" />
          </div>
        ))}
      </div>
    </>
  );
}

/** Orders landing in a spreadsheet. */
function OrderSheetMock({ from, to }: MockProps) {
  const rows = [
    ['#1048', 'Sara B.', '$44.00'],
    ['#1047', 'Youssef A.', '$24.90'],
    ['#1046', 'Amina K.', '$59.00'],
  ];

  return (
    <>
      <div className="absolute inset-x-6 top-6 overflow-hidden rounded-lg border border-border bg-card shadow-sm transition-transform duration-500 group-hover:-translate-y-1">
        <div className="flex items-center gap-1.5 border-b border-border px-2.5 py-1.5" style={{ background: `${from}0f` }}>
          <span className="size-2 rounded-sm" style={{ background: to }} />
          <span className="text-[9px] font-semibold text-muted-foreground">Orders — July</span>
        </div>
        <table className="w-full table-fixed">
          <tbody>
            {rows.map((row) => (
              <tr key={row[0]} className="border-b border-border last:border-0">
                {row.map((cell, index) => (
                  <td
                    key={cell}
                    className={`truncate px-2.5 py-[7px] text-[9px] ${index === 0 ? 'font-mono text-muted-foreground' : ''} ${
                      index === row.length - 1 ? 'text-right font-semibold tabular-nums' : ''
                    }`}
                  >
                    {cell}
                  </td>
                ))}
              </tr>
            ))}
          </tbody>
        </table>
      </div>

      <div className="absolute bottom-5 left-1/2 flex -translate-x-1/2 items-center gap-1.5 rounded-full border border-border bg-card px-2.5 py-1 text-[9px] font-medium shadow-sm">
        <span className="relative flex size-1.5">
          <span className="animate-ping-soft absolute inline-flex size-full rounded-full" style={{ background: to }} />
          <span className="relative inline-flex size-1.5 rounded-full" style={{ background: to }} />
        </span>
        Synced in real time
      </div>
    </>
  );
}

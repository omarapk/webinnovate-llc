'use client';

import { useState } from 'react';

import { leadform } from '@/data/leadform';

const ACCENT = `linear-gradient(135deg, ${leadform.accent.from}, ${leadform.accent.to})`;

function Check({ className = '' }: { className?: string }) {
  return (
    <svg
      className={`size-3.5 shrink-0 ${className}`}
      viewBox="0 0 24 24"
      fill="none"
      stroke="currentColor"
      strokeWidth="2.8"
      strokeLinecap="round"
      strokeLinejoin="round"
      aria-hidden="true"
    >
      <path d="m5 13 4 4L19 7" />
    </svg>
  );
}

export function Pricing() {
  const [yearly, setYearly] = useState(false);

  return (
    <>
      <div className="mt-8 flex justify-center">
        <div
          className="inline-flex items-center rounded-full border border-border bg-card p-1"
          role="group"
          aria-label="Billing period"
        >
          {(['monthly', 'yearly'] as const).map((period) => {
            const active = (period === 'yearly') === yearly;

            return (
              <button
                key={period}
                type="button"
                onClick={() => setYearly(period === 'yearly')}
                aria-pressed={active}
                className={`rounded-full px-4 py-1.5 text-sm font-medium capitalize transition-colors ${
                  active ? 'text-white' : 'text-muted-foreground hover:text-foreground'
                }`}
                style={active ? { backgroundImage: ACCENT } : undefined}
              >
                {period}
                {period === 'yearly' && (
                  <span className={active ? 'ml-1.5 opacity-90' : 'ml-1.5 text-muted-foreground'}>
                    −17%
                  </span>
                )}
              </button>
            );
          })}
        </div>
      </div>

      <div className="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
        {leadform.pricing.plans.map((plan) => (
          <div
            key={plan.name}
            className={`relative flex flex-col rounded-2xl border p-6 ${
              plan.featured ? 'border-transparent bg-card shadow-lg ring-2' : 'border-border bg-card'
            }`}
            style={
              plan.featured
                ? ({ '--tw-ring-color': leadform.accent.to } as React.CSSProperties)
                : undefined
            }
          >
            {plan.featured && (
              <span
                className="absolute -top-3 left-6 rounded-full px-2.5 py-1 text-[11px] font-semibold text-white"
                style={{ backgroundImage: ACCENT }}
              >
                Most popular
              </span>
            )}

            <h3 className="text-sm font-semibold">{plan.name}</h3>

            <p className="mt-4 flex items-baseline gap-1">
              <span className="text-3xl font-semibold tracking-tight">
                {yearly ? plan.yearly : plan.monthly}
              </span>
              {plan.monthly !== 'Free' && (
                <span className="text-sm text-muted-foreground">{yearly ? '/year' : '/month'}</span>
              )}
            </p>

            <p className="mt-1 h-4 text-xs font-medium" style={{ color: leadform.accent.to }}>
              {yearly ? plan.yearlyNote : ''}
            </p>

            <p className="mt-4 border-t border-border pt-4 text-sm font-medium">{plan.headline}</p>

            <ul className="mt-4 flex-1 space-y-2.5 text-sm text-muted-foreground">
              {leadform.pricing.commonFeatures.map((feature) => (
                <li key={feature} className="flex items-start gap-2">
                  <Check className="mt-0.5 text-emerald-600" />
                  <span>{feature}</span>
                </li>
              ))}
            </ul>

            <a
              href={leadform.appStoreUrl}
              rel="noopener"
              className={`mt-6 inline-flex h-10 items-center justify-center rounded-lg text-sm font-medium transition-opacity hover:opacity-90 ${
                plan.featured ? 'text-white' : 'border border-border bg-background text-foreground'
              }`}
              style={plan.featured ? { backgroundImage: ACCENT } : undefined}
            >
              {plan.cta}
            </a>
          </div>
        ))}
      </div>

      <p className="mt-8 text-center text-xs text-muted-foreground">{leadform.pricing.note}</p>
    </>
  );
}

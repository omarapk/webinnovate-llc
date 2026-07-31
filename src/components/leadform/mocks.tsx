import { BrandMark } from '@/components/brand-mark';
import { leadform } from '@/data/leadform';

/**
 * LeadForm product mockups.
 *
 * Every illustration on the page is real markup rather than a screenshot, so it
 * stays sharp at any size, follows the theme tokens and costs a few kB instead
 * of a few hundred. Animation is pure CSS (see `animate-cycle` in globals.css)
 * so these all stay server components.
 */

const ACCENT = `linear-gradient(135deg, ${leadform.accent.from}, ${leadform.accent.to})`;

/** Fake input: a label with a filled or placeholder value. */
function Field({
  label,
  value,
  placeholder,
  className = '',
}: {
  label: string;
  value?: string;
  placeholder?: string;
  className?: string;
}) {
  return (
    <div className={className}>
      <p className="text-[10px] font-medium text-muted-foreground">{label}</p>
      <div className="mt-1 flex h-8 items-center rounded-lg border border-border bg-background px-2.5 text-[11px]">
        {value ? (
          <span className="font-medium">{value}</span>
        ) : (
          <span className="text-muted-foreground/60">{placeholder}</span>
        )}
      </div>
    </div>
  );
}

function SummaryRow({
  label,
  value,
  strong,
  muted,
}: {
  label: string;
  value: string;
  strong?: boolean;
  muted?: boolean;
}) {
  return (
    <div
      className={`flex items-center justify-between text-[11px] ${
        strong ? 'font-semibold text-foreground' : muted ? 'text-muted-foreground' : ''
      }`}
    >
      <span>{label}</span>
      <span className={strong ? '' : 'font-medium text-foreground'}>{value}</span>
    </div>
  );
}

/** Window frame shared by every mockup. */
function Frame({
  title,
  children,
  className = '',
}: {
  title: string;
  children: React.ReactNode;
  className?: string;
}) {
  return (
    <div className={`mockup ${className}`}>
      <div className="mockup-bar">
        <span className="mockup-dot" />
        <span className="mockup-dot" />
        <span className="mockup-dot" />
        <span className="ml-2 truncate text-[10px] font-medium text-muted-foreground">{title}</span>
      </div>
      {children}
    </div>
  );
}

/*
| 1. The order form itself
|--------------------------------------------------------------------------
*/

const QUANTITY_TIERS = [
  { units: '1 Unit', save: null, price: '$24.00', was: null, badge: null },
  { units: '2 Units', save: 'Save 20%', price: '$38.40', was: '$48.00', badge: 'Most popular' },
  { units: '3 Units', save: 'Save 30%', price: '$50.40', was: '$72.00', badge: null },
];

export function OrderFormMock() {
  return (
    <Frame title="Checkout · your-store.com">
      <div className="space-y-3.5 p-4">
        <div className="flex items-center gap-3">
          <div
            className="flex size-11 shrink-0 items-center justify-center rounded-lg text-white"
            style={{ backgroundImage: ACCENT }}
          >
            <svg
              className="size-5"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              strokeWidth="1.8"
              strokeLinecap="round"
              strokeLinejoin="round"
              aria-hidden="true"
            >
              <path d="M4 11a8 8 0 0 1 16 0v5a3 3 0 0 1-3 3h-1v-8h4M8 19H7a3 3 0 0 1-3-3v-5h4v8Z" />
            </svg>
          </div>
          <div className="min-w-0">
            <p className="truncate text-xs font-semibold">Premium Wireless Headphones</p>
            <p className="text-[11px] text-muted-foreground">$24.00 per unit</p>
          </div>
        </div>

        <div className="space-y-2">
          {QUANTITY_TIERS.map((tier, index) => {
            const selected = index === 1;

            return (
              <div
                key={tier.units}
                className={`relative flex items-center gap-2.5 rounded-lg border p-2.5 ${
                  selected ? 'border-transparent bg-muted/60 ring-2' : 'border-border'
                }`}
                style={selected ? { '--tw-ring-color': leadform.accent.to } as React.CSSProperties : undefined}
              >
                <span
                  className={`size-3.5 shrink-0 rounded-full border-2 ${
                    selected ? 'border-transparent' : 'border-border'
                  }`}
                  style={selected ? { backgroundImage: ACCENT } : undefined}
                />
                <div className="min-w-0 flex-1">
                  <p className="text-[11px] font-semibold">{tier.units}</p>
                  {tier.save && (
                    <p className="text-[10px] font-medium" style={{ color: leadform.accent.to }}>
                      {tier.save}
                    </p>
                  )}
                </div>
                <div className="shrink-0 text-right">
                  <p className="text-[11px] font-semibold">{tier.price}</p>
                  {tier.was && (
                    <p className="text-[10px] text-muted-foreground line-through">{tier.was}</p>
                  )}
                </div>
                {tier.badge && (
                  <span
                    className="absolute -top-2 right-3 rounded-full px-1.5 py-0.5 text-[9px] font-semibold text-white"
                    style={{ backgroundImage: ACCENT }}
                  >
                    {tier.badge}
                  </span>
                )}
              </div>
            );
          })}
        </div>

        <div className="grid grid-cols-2 gap-2.5">
          <Field label="Full name*" value="James Wilson" />
          <Field label="Mobile number*" value="+1 555 482 7391" />
          <Field className="col-span-2" label="City" value="Austin, TX" />
        </div>

        <div className="space-y-1.5 rounded-lg bg-muted/50 p-2.5">
          <SummaryRow label="Subtotal" value="$48.00" muted />
          <SummaryRow label="Discount" value="−$9.60" muted />
          <SummaryRow label="Shipping" value="Free" muted />
          <div className="border-t border-border pt-1.5">
            <SummaryRow label="Total" value="$38.40" strong />
          </div>
        </div>

        <div
          className="flex h-10 items-center justify-center rounded-lg text-xs font-semibold text-white"
          style={{ backgroundImage: ACCENT }}
        >
          Buy it now — $38.40
        </div>

        <p className="text-center text-[10px] text-muted-foreground">
          Cash on delivery · No account needed
        </p>
      </div>
    </Frame>
  );
}

/*
| 1b. The same form, on a phone
|--------------------------------------------------------------------------
| Most COD traffic is mobile, so the "one-page checkout" section shows the
| phone rather than repeating the desktop card from the hero.
*/

export function MobileFormMock() {
  return (
    <div className="mx-auto flex max-w-sm items-end justify-center gap-5">
      <div className="w-[228px] shrink-0 rounded-[2rem] border-[6px] border-foreground bg-card p-1 shadow-2xl">
        <div className="relative overflow-hidden rounded-[1.6rem] bg-background">
          <div className="absolute left-1/2 top-1.5 h-1 w-14 -translate-x-1/2 rounded-full bg-foreground/15" />

          <div className="space-y-3 px-3.5 pb-4 pt-6">
            <div className="flex items-center gap-2">
              <span className="size-8 shrink-0 rounded-lg bg-muted" />
              <div className="min-w-0">
                <p className="truncate text-[10px] font-semibold">Wireless Pro Headphones</p>
                <p className="text-[10px] text-muted-foreground">Black · $79.99</p>
              </div>
            </div>

            <Field label="Full name" value="James Wilson" />
            <Field label="Mobile number" value="+1 555 482 7391" />
            <Field label="City" value="Austin, TX" />

            <div
              className="flex h-9 items-center justify-center rounded-lg text-[11px] font-semibold text-white"
              style={{ backgroundImage: ACCENT }}
            >
              Place order · $79.99
            </div>

            <div className="flex items-center justify-center gap-1.5 text-[9px] text-muted-foreground">
              <span className="relative flex size-1.5">
                <span className="animate-ping-soft absolute inline-flex size-full rounded-full bg-emerald-500" />
                <span className="relative inline-flex size-1.5 rounded-full bg-emerald-500" />
              </span>
              Loads in 0.4s
            </div>
          </div>
        </div>
      </div>

      <div className="hidden w-[150px] shrink-0 space-y-3 pb-8 sm:block">
        <div className="rounded-xl border border-border bg-card p-3 shadow-sm">
          <span className="flex size-7 items-center justify-center rounded-full bg-emerald-500/10 text-emerald-600">
            <svg
              className="size-3.5"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              strokeWidth="3"
              strokeLinecap="round"
              strokeLinejoin="round"
              aria-hidden="true"
            >
              <path d="m5 13 4 4L19 7" />
            </svg>
          </span>
          <p className="mt-2 text-[11px] font-semibold">Order received</p>
          <p className="text-[10px] text-muted-foreground">No account, no checkout</p>
        </div>

        <div className="rounded-xl border border-border bg-card p-3 shadow-sm">
          <p className="text-[10px] text-muted-foreground">Time to order</p>
          <p className="text-xl font-semibold tracking-tight">2.3s</p>
          <div className="mt-2 h-1 overflow-hidden rounded-full bg-muted">
            <div className="animate-fill h-full rounded-full" style={{ backgroundImage: ACCENT }} />
          </div>
        </div>
      </div>
    </div>
  );
}

/*
| 2. Upsells & bundles
|--------------------------------------------------------------------------
*/

const BUNDLE_ITEMS = [
  { name: 'Wireless headphones', price: '$24.00' },
  { name: 'Protective case', price: '$10.00' },
  { name: 'Fast charger', price: '$6.00' },
];

export function UpsellMock() {
  return (
    <div className="space-y-4">
      <Frame title="Bundle offer">
        <div className="p-4">
          <div className="flex items-center justify-between">
            <div>
              <p className="text-xs font-semibold">Complete Pack</p>
              <p className="text-[11px] text-muted-foreground">3 products · 1 order</p>
            </div>
            <span
              className="rounded-full px-2 py-1 text-[10px] font-semibold text-white"
              style={{ backgroundImage: ACCENT }}
            >
              Save 25%
            </span>
          </div>

          <div className="mt-3 space-y-2">
            {BUNDLE_ITEMS.map((item, index) => (
              <div
                key={item.name}
                className="animate-cycle flex items-center gap-2.5 rounded-lg border border-border p-2"
                style={{ animationDelay: `${index * 0.5}s` }}
              >
                <span className="size-7 shrink-0 rounded-md bg-muted" />
                <p className="min-w-0 flex-1 truncate text-[11px] font-medium">{item.name}</p>
                <p className="shrink-0 text-[11px] text-muted-foreground">{item.price}</p>
              </div>
            ))}
          </div>

          <div className="mt-3 flex items-center justify-between rounded-lg bg-muted/50 px-2.5 py-2">
            <span className="text-[11px] text-muted-foreground">Pack price</span>
            <span className="text-xs font-semibold">
              <span className="mr-1.5 font-normal text-muted-foreground line-through">$40.00</span>
              $30.00
            </span>
          </div>
        </div>
      </Frame>

      <Frame title="Post-purchase offer">
        <div className="flex items-center gap-3 p-4">
          <span className="size-11 shrink-0 rounded-lg bg-muted" />
          <div className="min-w-0 flex-1">
            <p className="truncate text-xs font-semibold">Screen Protector Pack</p>
            <p className="text-[11px]">
              <span className="mr-1.5 text-muted-foreground line-through">$14.99</span>
              <span className="font-semibold" style={{ color: leadform.accent.to }}>
                $7.99
              </span>
            </p>
          </div>
          <div
            className="shrink-0 rounded-lg px-3 py-2 text-[11px] font-semibold text-white"
            style={{ backgroundImage: ACCENT }}
          >
            Add
          </div>
        </div>
      </Frame>
    </div>
  );
}

/*
| 3. Google Sheets sync
|--------------------------------------------------------------------------
*/

const SHEET_ROWS = [
  ['#1042', 'James Wilson', '+1 555 482…', '$38.40', 'Confirmed'],
  ['#1041', 'Yasmine B.', '+212 661 22…', '$24.00', 'Confirmed'],
  ['#1040', 'Marco Rossi', '+39 340 118…', '$50.40', 'Pending'],
  ['#1039', 'Sara Ahmed', '+966 55 704…', '$38.40', 'Confirmed'],
];

export function SheetsMock() {
  return (
    <Frame title="COD orders — Google Sheets">
      <div className="flex items-center gap-2 border-b border-border px-4 py-2.5">
        <BrandMark name="googlesheets" size={16} className="size-4" />
        <p className="text-[11px] font-medium">Orders 2026</p>
        <span className="ml-auto inline-flex items-center gap-1.5 text-[10px] font-medium text-muted-foreground">
          <span className="relative flex size-1.5">
            <span className="animate-ping-soft absolute inline-flex size-full rounded-full bg-emerald-500" />
            <span className="relative inline-flex size-1.5 rounded-full bg-emerald-500" />
          </span>
          Live sync
        </span>
      </div>

      <div className="overflow-hidden">
        <div className="grid grid-cols-[52px_1fr_1fr_60px_72px] gap-2 border-b border-border bg-muted/50 px-4 py-2 text-[10px] font-semibold text-muted-foreground">
          <span>Order</span>
          <span>Customer</span>
          <span>Phone</span>
          <span>Total</span>
          <span>Status</span>
        </div>

        {SHEET_ROWS.map((row, index) => (
          <div
            key={row[0]}
            className="animate-cycle grid grid-cols-[52px_1fr_1fr_60px_72px] items-center gap-2 border-b border-border px-4 py-2.5 text-[10px] last:border-0"
            style={{ animationDelay: `${index * 0.45}s` }}
          >
            <span className="font-medium">{row[0]}</span>
            <span className="truncate">{row[1]}</span>
            <span className="truncate text-muted-foreground">{row[2]}</span>
            <span className="font-medium">{row[3]}</span>
            <span
              className={`w-fit rounded-full px-1.5 py-0.5 text-[9px] font-medium ${
                row[4] === 'Confirmed'
                  ? 'bg-emerald-500/10 text-emerald-700'
                  : 'bg-amber-500/10 text-amber-700'
              }`}
            >
              {row[4]}
            </span>
          </div>
        ))}
      </div>
    </Frame>
  );
}

/*
| 4. Multi-pixel tracking
|--------------------------------------------------------------------------
*/

const PIXELS = [
  { name: 'Meta', logo: 'meta', event: 'Purchase', value: '$38.40' },
  { name: 'TikTok', logo: 'tiktok', event: 'CompletePayment', value: '$38.40' },
  { name: 'Snapchat', logo: 'snapchat', event: 'PURCHASE', value: '$38.40' },
];

export function PixelsMock() {
  return (
    <Frame title="Pixel events">
      <div className="p-4">
        <div className="flex items-center gap-2 rounded-lg bg-muted/50 px-3 py-2.5">
          <span
            className="flex size-6 shrink-0 items-center justify-center rounded-md text-white"
            style={{ backgroundImage: ACCENT }}
          >
            <svg
              className="size-3.5"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              strokeWidth="2.4"
              strokeLinecap="round"
              strokeLinejoin="round"
              aria-hidden="true"
            >
              <path d="m5 13 4 4L19 7" />
            </svg>
          </span>
          <p className="text-[11px] font-medium">Order #1042 confirmed</p>
          <span className="ml-auto font-mono text-[10px] text-muted-foreground">0.4s</span>
        </div>

        <div className="relative my-3 h-6">
          <span className="absolute left-[11px] top-0 h-full w-px bg-border" />
          <span className="absolute left-[9px] top-1/2 size-1.5 -translate-y-1/2 rounded-full bg-border" />
        </div>

        <div className="space-y-2">
          {PIXELS.map((pixel, index) => (
            <div
              key={pixel.name}
              className="animate-cycle flex items-center gap-2.5 rounded-lg border border-border p-2.5"
              style={{ animationDelay: `${0.3 + index * 0.4}s` }}
            >
              <BrandMark name={pixel.logo} className="size-5 shrink-0" />
              <div className="min-w-0 flex-1">
                <p className="text-[11px] font-semibold">{pixel.name}</p>
                <p className="truncate font-mono text-[10px] text-muted-foreground">{pixel.event}</p>
              </div>
              <div className="shrink-0 text-right">
                <p className="text-[11px] font-medium">{pixel.value}</p>
                <p className="text-[9px] font-medium text-emerald-600">Sent</p>
              </div>
            </div>
          ))}
        </div>

        <p className="mt-3 text-center text-[10px] text-muted-foreground">
          Server-side events · No duplicates
        </p>
      </div>
    </Frame>
  );
}

/*
| 5. WhatsApp recovery
|--------------------------------------------------------------------------
*/

const MESSAGES = [
  {
    from: 'store' as const,
    text: "Hi James 👋 You left your order for Premium Wireless Headphones. Still want it?",
    time: '14:02',
  },
  { from: 'customer' as const, text: 'Yes! I got interrupted.', time: '14:09' },
  { from: 'store' as const, text: 'No problem — confirm here and we ship today. 🚚', time: '14:09' },
];

export function RecoveryMock() {
  return (
    <Frame title="Abandoned order recovery">
      <div className="flex items-center gap-2.5 border-b border-border px-4 py-2.5">
        <BrandMark name="whatsapp" className="size-5" />
        <div className="min-w-0">
          <p className="truncate text-[11px] font-semibold">James Wilson</p>
          <p className="text-[10px] text-muted-foreground">Abandoned 12 min ago</p>
        </div>
        <span className="ml-auto shrink-0 rounded-full bg-muted px-2 py-0.5 text-[9px] font-medium text-muted-foreground">
          Automated
        </span>
      </div>

      <div className="space-y-2.5 bg-muted/30 p-4">
        {MESSAGES.map((message, index) => (
          <div
            key={message.text}
            className={`animate-cycle flex ${message.from === 'customer' ? 'justify-end' : 'justify-start'}`}
            style={{ animationDelay: `${index * 0.7}s` }}
          >
            <div
              className={`max-w-[78%] rounded-2xl px-3 py-2 text-[11px] leading-relaxed ${
                message.from === 'customer'
                  ? 'rounded-br-sm bg-emerald-500/15 text-foreground'
                  : 'rounded-bl-sm border border-border bg-card'
              }`}
            >
              {message.text}
              <span className="mt-0.5 block text-right text-[9px] text-muted-foreground">
                {message.time}
              </span>
            </div>
          </div>
        ))}
      </div>

      <div className="flex items-center gap-2 border-t border-border px-4 py-2.5">
        <span
          className="flex size-5 shrink-0 items-center justify-center rounded-full text-white"
          style={{ backgroundImage: ACCENT }}
        >
          <svg
            className="size-3"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            strokeWidth="3"
            strokeLinecap="round"
            strokeLinejoin="round"
            aria-hidden="true"
          >
            <path d="m5 13 4 4L19 7" />
          </svg>
        </span>
        <p className="text-[11px] font-medium">Order recovered — $38.40</p>
      </div>
    </Frame>
  );
}

/*
| 6. Fraud prevention
|--------------------------------------------------------------------------
*/

const CHECKS = [
  { label: 'Phone number', detail: '3 orders today', status: 'flagged' as const },
  { label: 'Quantity', detail: '47 units · exceeds limit', status: 'flagged' as const },
  { label: 'IP address', detail: '192.168.•••', status: 'blocked' as const },
];

export function FraudMock() {
  return (
    <div className="space-y-4">
      <Frame title="Order screening">
        <div className="p-4">
          <div className="flex items-center gap-2">
            <span className="flex size-6 shrink-0 items-center justify-center rounded-md bg-destructive/10 text-destructive">
              <svg
                className="size-3.5"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                strokeWidth="2.4"
                strokeLinecap="round"
                strokeLinejoin="round"
                aria-hidden="true"
              >
                <path d="M12 8v5M12 17h.01" />
                <path d="M10.3 3.9 2.4 18a2 2 0 0 0 1.7 3h15.8a2 2 0 0 0 1.7-3L13.7 3.9a2 2 0 0 0-3.4 0Z" />
              </svg>
            </span>
            <p className="text-xs font-semibold">Suspicious order detected</p>
          </div>

          <div className="mt-3 space-y-2">
            {CHECKS.map((check, index) => (
              <div
                key={check.label}
                className="animate-cycle flex items-center gap-2.5 rounded-lg border border-border p-2.5"
                style={{ animationDelay: `${index * 0.5}s` }}
              >
                <div className="min-w-0 flex-1">
                  <p className="text-[11px] font-medium">{check.label}</p>
                  <p className="truncate text-[10px] text-muted-foreground">{check.detail}</p>
                </div>
                <span className="shrink-0 rounded-full bg-destructive/10 px-1.5 py-0.5 text-[9px] font-semibold uppercase tracking-wide text-destructive">
                  {check.status}
                </span>
              </div>
            ))}
          </div>

          <div className="mt-3 rounded-lg bg-destructive/5 px-2.5 py-2 text-[10px] font-medium text-destructive">
            Rule triggered — order rejected automatically
          </div>
        </div>
      </Frame>

      <Frame title="Approved order">
        <div className="flex items-center gap-3 p-4">
          <span className="flex size-8 shrink-0 items-center justify-center rounded-full bg-emerald-500/10 text-emerald-600">
            <svg
              className="size-4"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              strokeWidth="2.6"
              strokeLinecap="round"
              strokeLinejoin="round"
              aria-hidden="true"
            >
              <path d="m5 13 4 4L19 7" />
            </svg>
          </span>
          <div className="min-w-0">
            <p className="text-xs font-semibold">Order #1042 approved</p>
            <p className="text-[11px] text-muted-foreground">
              Phone verified · IP clean · Within limits
            </p>
          </div>
        </div>
      </Frame>
    </div>
  );
}

/** Maps a feature's `mock` key to its illustration. */
export const MOCKS = {
  form: MobileFormMock,
  upsell: UpsellMock,
  sheets: SheetsMock,
  pixels: PixelsMock,
  recovery: RecoveryMock,
  fraud: FraudMock,
} as const;

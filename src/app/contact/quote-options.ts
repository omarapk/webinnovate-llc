export const budgetOptions = ['< $5k', '$5k – $15k', '$15k – $50k', '$50k+', 'Not sure yet'];

export const timelineOptions = ['ASAP', '1–3 months', '3–6 months', 'Just exploring'];

export type QuoteState = {
  status: 'idle' | 'success' | 'error';
  message?: string;
  /** Field name → error message. */
  errors?: Record<string, string>;
};

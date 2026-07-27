export type ServiceIcon = 'code' | 'shield' | 'search' | 'support';

export const services: {
  title: string;
  description: string;
  points: string[];
  icon: ServiceIcon;
}[] = [
  {
    title: 'Development',
    description:
      'Product architecture, clean codebases and integrations that ship to production — not prototypes that die in a deck.',
    points: ['Custom SaaS & platforms', 'APIs & third-party integrations', 'Modern stacks built to scale'],
    icon: 'code',
  },
  {
    title: 'Security',
    description:
      'Hardened auth, encryption and least-privilege access so your customers’ data — and your business — stay protected.',
    points: ['Secure auth & permissions', 'Encryption in transit & at rest', 'Review-ready delivery'],
    icon: 'shield',
  },
  {
    title: 'SEO & performance',
    description:
      'Technical SEO, Core Web Vitals and crawl-ready structure so the product you ship can actually be found and convert.',
    points: ['Technical SEO foundations', 'Speed & Core Web Vitals', 'Schema & indexability'],
    icon: 'search',
  },
  {
    title: 'Support & maintenance',
    description:
      'Monitoring, fixes and continuous shipping after launch — an expert team that stays with the product, not a one-off delivery.',
    points: ['Priority support', 'Monitoring & incident response', 'Ongoing product evolution'],
    icon: 'support',
  },
];

export const process: {
  index: string;
  title: string;
  description: string;
  timing: string;
  deliverables: string[];
  accent: string;
  icon: string;
}[] = [
  {
    index: '01',
    title: 'Discover',
    description:
      'We map the business goal, users and constraints — what must generate revenue, what can wait.',
    timing: 'Week 1',
    deliverables: ['Scope & goals', 'Success metrics'],
    accent: '#A21CAF',
    icon: 'M11 4a7 7 0 1 0 0 14 7 7 0 0 0 0-14ZM20 20l-4-4',
  },
  {
    index: '02',
    title: 'Architect',
    description:
      'Stack, security model, SEO baseline and delivery plan locked before a single feature is rushed.',
    timing: 'Week 2',
    deliverables: ['Tech & security plan', 'SEO baseline'],
    accent: '#DB2777',
    icon: 'm12 3 9 5-9 5-9-5 9-5ZM3 13l9 5 9-5',
  },
  {
    index: '03',
    title: 'Build',
    description:
      'Iterative product delivery with demos you can click — not status reports you have to trust blindly.',
    timing: 'Weeks 3+',
    deliverables: ['Sprint demos', 'QA & reviews'],
    accent: '#9333EA',
    icon: 'm8 6-5 6 5 6M16 6l5 6-5 6',
  },
  {
    index: '04',
    title: 'Launch & operate',
    description:
      'Go-live, monitoring, support and maintenance so the product keeps earning after day one.',
    timing: 'Ongoing',
    deliverables: ['Go-live & monitoring', 'Support & evolution'],
    accent: '#7C3AED',
    icon: 'M12 3c3.5 2.5 5.5 6 5.5 10L12 19l-5.5-6C6.5 9 8.5 5.5 12 3ZM9.5 19.5 8 22M14.5 19.5 16 22',
  },
];

export const pillars = [
  {
    title: 'Revenue-first product design',
    description:
      'Every flow is built around conversion, retention and monetization — software that is meant to make money, not just look finished.',
  },
  {
    title: 'An expert team end to end',
    description:
      'Development, security, SEO, support and maintenance under one roof. One partner accountable for the whole product.',
  },
  {
    title: 'Production, not prototypes',
    description:
      'We ship systems merchants and teams already depend on daily — battle-tested delivery, not slideware.',
  },
];

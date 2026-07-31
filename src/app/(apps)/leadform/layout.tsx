import { AppFooter } from '@/components/leadform/app-footer';
import { AppHeader } from '@/components/leadform/app-header';

export default function LeadformLayout({ children }: { children: React.ReactNode }) {
  return (
    <>
      <AppHeader />
      <main id="main">{children}</main>
      <AppFooter />
    </>
  );
}

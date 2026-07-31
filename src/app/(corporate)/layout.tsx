import { Footer } from '@/components/footer';
import { Header } from '@/components/header';

export default function CorporateLayout({ children }: { children: React.ReactNode }) {
  return (
    <>
      <Header />
      <main id="main">{children}</main>
      <Footer />
    </>
  );
}

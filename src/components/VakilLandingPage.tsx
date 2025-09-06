import HeroSection from "./HeroSection";
import ServicesSection from "./ServicesSection";
import HowItWorksSection from "./HowItWorksSection";
import PricingSection from "./PricingSection";
import TestimonialsSection from "./TestimonialsSection";
import TrustedBySection from "./TrustedBySection";
import FAQSection from "./FAQSection";
import Footer from "./Footer";

const VakilLandingPage = () => {
  return (
    <div className="min-h-screen">
      <HeroSection />
      <TrustedBySection />
      <ServicesSection />
      <HowItWorksSection />
      <PricingSection />
      <TestimonialsSection />
      <FAQSection />
      <Footer />
    </div>
  );
};

export default VakilLandingPage;
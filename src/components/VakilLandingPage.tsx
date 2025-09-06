import { useState } from "react";
import NewNavigation from "./NewNavigation";
import NewHeroSection from "./NewHeroSection";
import ServicesSection from "./ServicesSection";
import HowItWorksSection from "./HowItWorksSection";
import PricingSection from "./PricingSection";
import TestimonialsSection from "./TestimonialsSection";
import TrustedBySection from "./TrustedBySection";
import FAQSection from "./FAQSection";
import Footer from "./Footer";
import RequestModal from "./RequestModal";

const VakilLandingPage = () => {
  const [isModalOpen, setIsModalOpen] = useState(false);

  return (
    <div className="min-h-screen">
      <NewNavigation onStartNowClick={() => setIsModalOpen(true)} />
      <div className="pt-16">
        <NewHeroSection onStartNowClick={() => setIsModalOpen(true)} />
        <TrustedBySection />
        <div id="services">
          <ServicesSection />
        </div>
        <div id="how-it-works">
          <HowItWorksSection />
        </div>
        <div id="pricing">
          <PricingSection onStartNowClick={() => setIsModalOpen(true)} />
        </div>
        <div id="testimonials">
          <TestimonialsSection />
        </div>
        <FAQSection />
        <Footer />
      </div>
      <RequestModal isOpen={isModalOpen} onClose={() => setIsModalOpen(false)} />
    </div>
  );
};

export default VakilLandingPage;
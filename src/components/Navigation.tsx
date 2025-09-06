import { useState } from "react";
import { Button } from "@/components/ui/button";
import { Menu, X, Scale, Phone, Users, FileText } from "lucide-react";

interface NavigationProps {
  onStartNowClick: () => void;
}

const Navigation = ({ onStartNowClick }: NavigationProps) => {
  const [isMenuOpen, setIsMenuOpen] = useState(false);

  const scrollToSection = (id: string) => {
    const element = document.getElementById(id);
    if (element) {
      element.scrollIntoView({ behavior: 'smooth' });
      setIsMenuOpen(false);
    }
  };

  return (
    <nav className="fixed top-0 w-full bg-card/95 backdrop-blur-md border-b border-border/50 z-50">
      <div className="container mx-auto px-4">
        <div className="flex items-center justify-between h-16 md:h-20">
          {/* Logo */}
          <div className="flex items-center gap-3">
            <div className="p-2 bg-primary/10 rounded-xl">
              <Scale className="w-6 h-6 text-primary" />
            </div>
            <div className="text-right">
              <div className="text-xl font-bold text-primary">Vakil.My</div>
              <div className="text-xs text-muted-foreground font-persian">وکیل هوشمند</div>
            </div>
          </div>

          {/* Desktop Menu */}
          <div className="hidden md:flex items-center gap-8">
            <button 
              onClick={() => scrollToSection('services')}
              className="text-foreground hover:text-primary transition-colors font-persian"
            >
              خدمات
            </button>
            <button 
              onClick={() => scrollToSection('how-it-works')}
              className="text-foreground hover:text-primary transition-colors font-persian"
            >
              نحوه کار
            </button>
            <button 
              onClick={() => scrollToSection('pricing')}
              className="text-foreground hover:text-primary transition-colors font-persian"
            >
              تعرفه‌ها
            </button>
            <button 
              onClick={() => scrollToSection('testimonials')}
              className="text-foreground hover:text-primary transition-colors font-persian"
            >
              نظرات
            </button>
            <Button 
              variant="hero" 
              size="sm" 
              onClick={onStartNowClick}
              className="font-persian"
            >
              شروع رایگان
            </Button>
          </div>

          {/* Mobile Menu Button */}
          <button 
            onClick={() => setIsMenuOpen(!isMenuOpen)}
            className="md:hidden p-2 hover:bg-accent/10 rounded-lg transition-colors"
          >
            {isMenuOpen ? <X className="w-6 h-6" /> : <Menu className="w-6 h-6" />}
          </button>
        </div>

        {/* Mobile Menu */}
        {isMenuOpen && (
          <div className="md:hidden py-4 border-t border-border/50">
            <div className="flex flex-col gap-4">
              <button 
                onClick={() => scrollToSection('services')}
                className="flex items-center gap-3 p-3 hover:bg-accent/10 rounded-lg transition-colors text-right"
              >
                <FileText className="w-5 h-5 text-accent" />
                <span className="font-persian">خدمات</span>
              </button>
              <button 
                onClick={() => scrollToSection('how-it-works')}
                className="flex items-center gap-3 p-3 hover:bg-accent/10 rounded-lg transition-colors text-right"
              >
                <Users className="w-5 h-5 text-accent" />
                <span className="font-persian">نحوه کار</span>
              </button>
              <button 
                onClick={() => scrollToSection('pricing')}
                className="flex items-center gap-3 p-3 hover:bg-accent/10 rounded-lg transition-colors text-right"
              >
                <Scale className="w-5 h-5 text-accent" />
                <span className="font-persian">تعرفه‌ها</span>
              </button>
              <button 
                onClick={() => scrollToSection('testimonials')}
                className="flex items-center gap-3 p-3 hover:bg-accent/10 rounded-lg transition-colors text-right"
              >
                <Phone className="w-5 h-5 text-accent" />
                <span className="font-persian">نظرات</span>
              </button>
              <div className="pt-2 border-t border-border/50">
                <Button 
                  variant="hero" 
                  size="lg" 
                  onClick={onStartNowClick}
                  className="w-full font-persian"
                >
                  شروع رایگان
                </Button>
              </div>
            </div>
          </div>
        )}
      </div>
    </nav>
  );
};

export default Navigation;
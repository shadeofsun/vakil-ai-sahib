import { Button } from "@/components/ui/button";
import { ArrowLeft, Shield, Scale, Zap } from "lucide-react";
import heroImage from "@/assets/hero-legal-ai.jpg";

interface HeroSectionProps {
  onStartNowClick: () => void;
}

const HeroSection = ({ onStartNowClick }: HeroSectionProps) => {
  return (
    <section className="relative min-h-screen bg-gradient-subtle overflow-hidden">
      {/* Background decoration */}
      <div className="absolute inset-0 bg-[radial-gradient(ellipse_80%_80%_at_50%_-20%,rgba(120,119,198,0.3),rgba(255,255,255,0))]"></div>
      
      <div className="container mx-auto px-4 py-16 lg:py-24 relative z-10">
        <div className="grid lg:grid-cols-2 gap-12 items-center min-h-[calc(100vh-8rem)]">
          {/* Content Side */}
          <div className="text-center lg:text-right space-y-8 order-2 lg:order-1">
            <div className="space-y-6">
              <div className="inline-flex items-center gap-2 bg-accent/10 text-accent-foreground px-4 py-2 rounded-full text-sm font-medium border border-accent/20">
                <Zap className="w-4 h-4" />
                <span className="font-persian">جدیدترین فناوری هوش مصنوعی</span>
              </div>
              
              <h1 className="text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold leading-tight">
                <span className="bg-gradient-hero bg-clip-text text-transparent block mb-2">
                  Vakil.My
                </span>
                <span className="text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-medium text-muted-foreground block font-persian">
                  وکیل هوشمند همراه شما
                </span>
              </h1>
              
              <p className="text-lg md:text-xl lg:text-2xl text-muted-foreground max-w-2xl mx-auto lg:mx-0 leading-relaxed font-persian">
                خدمات حقوقی سریع، دقیق و حرفه‌ای با هوش مصنوعی و وکلای پایه یک دادگستری. 
                <span className="block mt-2 text-primary font-semibold">
                  در کمتر از ۱۰ دقیقه، اسناد حقوقی خود را دریافت کنید.
                </span>
              </p>
            </div>

            {/* Features */}
            <div className="grid grid-cols-1 sm:grid-cols-3 gap-6 py-6">
              <div className="flex items-center gap-3 justify-center lg:justify-end bg-card/50 backdrop-blur-sm rounded-xl p-4 border border-border/50">
                <div className="text-right">
                  <div className="text-2xl font-bold text-primary">۱۰</div>
                  <div className="text-sm text-muted-foreground font-persian">دقیقه تحویل</div>
                </div>
                <div className="p-2 bg-accent/10 rounded-lg">
                  <Zap className="w-5 h-5 text-accent" />
                </div>
              </div>
              
              <div className="flex items-center gap-3 justify-center lg:justify-end bg-card/50 backdrop-blur-sm rounded-xl p-4 border border-border/50">
                <div className="text-right">
                  <div className="text-2xl font-bold text-primary">۲۴/۷</div>
                  <div className="text-sm text-muted-foreground font-persian">در دسترس</div>
                </div>
                <div className="p-2 bg-accent/10 rounded-lg">
                  <Shield className="w-5 h-5 text-accent" />
                </div>
              </div>
              
              <div className="flex items-center gap-3 justify-center lg:justify-end bg-card/50 backdrop-blur-sm rounded-xl p-4 border border-border/50">
                <div className="text-right">
                  <div className="text-2xl font-bold text-primary">۱۰۰٪</div>
                  <div className="text-sm text-muted-foreground font-persian">قانونی</div>
                </div>
                <div className="p-2 bg-accent/10 rounded-lg">
                  <Scale className="w-5 h-5 text-accent" />
                </div>
              </div>
            </div>

            {/* CTA Buttons */}
            <div className="flex flex-col sm:flex-row gap-4 justify-center lg:justify-end pt-4">
              <Button 
                variant="hero" 
                size="lg" 
                onClick={onStartNowClick}
                className="text-lg px-10 py-6 font-persian"
              >
                اکنون شروع کنید
                <ArrowLeft className="w-6 h-6 mr-3" />
              </Button>
              <Button variant="minimal" size="lg" className="text-lg px-10 py-6 font-persian">
                مشاهده نمونه کارها
              </Button>
            </div>

            {/* Trust Indicators */}
            <div className="pt-8 border-t border-border/50">
              <p className="text-sm text-muted-foreground mb-4 font-persian">
                مورد اعتماد بیش از ۱,۰۰۰ کسب و کار
              </p>
              <div className="flex items-center gap-3 justify-center lg:justify-end">
                <div className="flex gap-1">
                  {[...Array(5)].map((_, i) => (
                    <svg key={i} className="w-5 h-5 fill-accent text-accent" viewBox="0 0 20 20">
                      <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                    </svg>
                  ))}
                </div>
                <span className="text-lg font-bold text-primary mr-2">۴.۹</span>
                <span className="text-sm text-muted-foreground font-persian">از ۵</span>
              </div>
            </div>
          </div>

          {/* Image Side */}
          <div className="relative order-1 lg:order-2">
            <div className="relative group">
              {/* Main Image Container */}
              <div className="relative shadow-large rounded-3xl overflow-hidden bg-gradient-to-br from-primary/5 to-accent/5 p-2">
                <img 
                  src={heroImage} 
                  alt="Vakil.My Legal AI Platform - پلتفرم هوش مصنوعی حقوقی"
                  className="w-full h-auto rounded-2xl object-cover transition-transform duration-500 group-hover:scale-105"
                />
                <div className="absolute inset-0 bg-gradient-to-t from-primary/20 via-transparent to-transparent rounded-2xl"></div>
              </div>
              
              {/* Floating Elements */}
              <div className="absolute -top-6 -left-6 bg-accent text-accent-foreground p-6 rounded-2xl shadow-medium animate-[float_3s_ease-in-out_infinite] z-10">
                <div className="text-center">
                  <div className="text-3xl font-bold">۷۰٪</div>
                  <div className="text-xs font-persian">کاهش هزینه</div>
                </div>
              </div>
              
              <div className="absolute -bottom-6 -right-6 bg-primary text-primary-foreground p-6 rounded-2xl shadow-medium animate-[float_3s_ease-in-out_infinite_1.5s] z-10">
                <div className="text-center">
                  <div className="text-3xl font-bold">۹۵٪</div>
                  <div className="text-xs font-persian">رضایت مشتری</div>
                </div>
              </div>
              
              <div className="absolute top-1/2 -right-12 bg-card text-foreground p-4 rounded-xl shadow-soft border border-border animate-[float_3s_ease-in-out_infinite_0.5s] z-10">
                <div className="text-center">
                  <div className="text-xl font-bold text-accent">AI</div>
                  <div className="text-xs font-persian">هوش مصنوعی</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default HeroSection;
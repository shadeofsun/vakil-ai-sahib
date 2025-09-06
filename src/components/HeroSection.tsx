import { Button } from "@/components/ui/button";
import { ArrowLeft, Shield, Scale, Zap } from "lucide-react";
import heroImage from "@/assets/hero-legal-ai.jpg";

const HeroSection = () => {
  return (
    <section className="relative min-h-screen bg-gradient-subtle overflow-hidden">
      <div className="container mx-auto px-4 py-16 lg:py-24">
        <div className="grid lg:grid-cols-2 gap-12 items-center">
          {/* Content Side */}
          <div className="text-center lg:text-right rtl space-y-8">
            <div className="space-y-4">
              <h1 className="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                <span className="bg-gradient-hero bg-clip-text text-transparent">
                  Vakil.My
                </span>
                <br />
                <span className="text-2xl md:text-3xl lg:text-4xl font-medium text-muted-foreground">
                  وکیل هوشمند همراه شما
                </span>
              </h1>
              <p className="text-lg md:text-xl text-muted-foreground max-w-2xl mx-auto lg:mx-0 leading-relaxed font-persian">
                خدمات حقوقی سریع، دقیق و حرفه‌ای با هوش مصنوعی و وکلای پایه یک دادگستری. 
                در کمتر از ۱۰ دقیقه، اسناد حقوقی خود را دریافت کنید.
              </p>
            </div>

            {/* Features */}
            <div className="grid grid-cols-1 md:grid-cols-3 gap-6 text-center lg:text-right">
              <div className="flex items-center gap-3 justify-center lg:justify-end">
                <div className="text-2xl font-bold text-primary">۱۰</div>
                <div className="text-sm text-muted-foreground">دقیقه تحویل</div>
                <Zap className="w-5 h-5 text-accent" />
              </div>
              <div className="flex items-center gap-3 justify-center lg:justify-end">
                <div className="text-2xl font-bold text-primary">۲۴/۷</div>
                <div className="text-sm text-muted-foreground">در دسترس</div>
                <Shield className="w-5 h-5 text-accent" />
              </div>
              <div className="flex items-center gap-3 justify-center lg:justify-end">
                <div className="text-2xl font-bold text-primary">۱۰۰٪</div>
                <div className="text-sm text-muted-foreground">قانونی</div>
                <Scale className="w-5 h-5 text-accent" />
              </div>
            </div>

            {/* CTA Buttons */}
            <div className="flex flex-col sm:flex-row gap-4 justify-center lg:justify-end">
              <Button variant="hero" size="lg" className="text-base px-8 py-4">
                اکنون شروع کنید
                <ArrowLeft className="w-5 h-5 mr-2" />
              </Button>
              <Button variant="minimal" size="lg" className="text-base px-8 py-4">
                مشاهده نمونه کارها
              </Button>
            </div>

            {/* Trust Indicators */}
            <div className="pt-8 border-t border-border">
              <p className="text-sm text-muted-foreground mb-4 font-persian">
                مورد اعتماد بیش از ۱,۰۰۰ کسب و کار
              </p>
              <div className="flex items-center gap-2 justify-center lg:justify-end text-accent">
                {[...Array(5)].map((_, i) => (
                  <svg key={i} className="w-5 h-5 fill-current" viewBox="0 0 20 20">
                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                  </svg>
                ))}
                <span className="text-sm font-medium mr-2">۴.۹ از ۵</span>
              </div>
            </div>
          </div>

          {/* Image Side */}
          <div className="relative">
            <div className="relative shadow-large rounded-2xl overflow-hidden">
              <img 
                src={heroImage} 
                alt="Vakil.My Legal AI Platform"
                className="w-full h-auto"
              />
              <div className="absolute inset-0 bg-gradient-to-t from-primary/20 to-transparent"></div>
            </div>
            {/* Floating Elements */}
            <div className="absolute -top-6 -left-6 bg-accent text-accent-foreground p-4 rounded-xl shadow-medium">
              <div className="text-2xl font-bold">۷۰٪</div>
              <div className="text-xs">کاهش هزینه</div>
            </div>
            <div className="absolute -bottom-6 -right-6 bg-primary text-primary-foreground p-4 rounded-xl shadow-medium">
              <div className="text-2xl font-bold">۹۵٪</div>
              <div className="text-xs">رضایت مشتری</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default HeroSection;
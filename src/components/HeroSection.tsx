import { Button } from "@/components/ui/button";
import { ArrowLeft, Shield, Scale, Zap, Sparkles, Clock, CheckCircle } from "lucide-react";
import heroImage from "@/assets/hero-legal-ai.jpg";

interface HeroSectionProps {
  onStartNowClick: () => void;
}

const HeroSection = ({ onStartNowClick }: HeroSectionProps) => {
  return (
    <section className="relative min-h-screen bg-gradient-subtle-premium overflow-hidden">
      {/* Modern Background Elements */}
      <div className="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,rgba(16,185,129,0.1),transparent_50%)]"></div>
      <div className="absolute inset-0 bg-[radial-gradient(circle_at_70%_80%,rgba(14,165,233,0.1),transparent_50%)]"></div>
      
      <div className="container mx-auto px-4 py-16 lg:py-24 relative z-10">
        <div className="grid lg:grid-cols-2 gap-12 items-center min-h-[calc(100vh-8rem)]">
          
          {/* Content Side */}
          <div className="text-center lg:text-right space-y-8 order-2 lg:order-1">
            <div className="space-y-6 animate-fade-in-up">
              
              {/* Premium Badge */}
              <div className="inline-flex items-center gap-2 bg-primary/10 text-primary px-6 py-3 rounded-full text-sm font-semibold border border-primary/20 shadow-soft">
                <Sparkles className="w-5 h-5" />
                <span className="font-persian">هوش مصنوعی پیشرفته حقوقی</span>
              </div>
              
              {/* Main Headline */}
              <h1 className="text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold leading-tight">
                <span className="text-gradient block mb-2">
                  Vakil.My
                </span>
                <span className="text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-medium text-muted-foreground block font-persian">
                  وکیل هوشمند حرفه‌ای شما
                </span>
              </h1>
              
              {/* Value Proposition */}
              <p className="text-lg md:text-xl lg:text-2xl text-muted-foreground max-w-2xl mx-auto lg:mx-0 leading-relaxed font-persian">
                خدمات حقوقی سریع، دقیق و حرفه‌ای با هوش مصنوعی پیشرفته و وکلای پایه یک دادگستری
              </p>

              {/* Mobile Conversion Banner */}
              <div className="md:hidden bg-gradient-to-r from-emerald-500 to-green-600 text-white p-6 rounded-2xl shadow-premium animate-scale-in">
                <div className="text-center space-y-3">
                  <div className="flex items-center justify-center gap-2">
                    <Clock className="w-5 h-5" />
                    <span className="text-lg font-bold font-persian">فقط ۱۰ دقیقه!</span>
                  </div>
                  <div className="text-3xl font-bold">۲۷۰,۰۰۰ تومان</div>
                  <div className="text-sm opacity-90 font-persian">به جای ۵ میلیون تومان وکیل سنتی</div>
                  <div className="bg-white/20 backdrop-blur-sm rounded-xl p-3">
                    <div className="text-sm font-persian">۷۰٪ صرفه‌جویی - تخفیف ویژه امروز!</div>
                  </div>
                </div>
              </div>

            </div>

            {/* Services Quick Preview */}
            <div className="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3 my-8 animate-slide-in-right">
              {[
                { icon: "📄", title: "دادخواست", time: "۱۰ دقیقه" },
                { icon: "⚖️", title: "لایحه", time: "۱۰ دقیقه" },
                { icon: "💬", title: "شکواییه", time: "۱۰ دقیقه" },
                { icon: "📋", title: "قرارداد", time: "۱۰ دقیقه" },
                { icon: "📑", title: "اظهارنامه", time: "۱۰ دقیقه" },
                { icon: "👥", title: "مشاوره", time: "۱۰ دقیقه" }
              ].map((service, index) => (
                <div key={index} className="card-premium card-hover p-4 text-center group">
                  <div className="text-2xl mb-2 group-hover:scale-110 transition-transform duration-300">
                    {service.icon}
                  </div>
                  <h3 className="text-sm font-semibold text-foreground font-persian mb-1">{service.title}</h3>
                  <p className="text-xs text-primary font-bold font-persian">{service.time}</p>
                </div>
              ))}
            </div>

            {/* Key Features */}
            <div className="grid grid-cols-1 sm:grid-cols-3 gap-4 py-6">
              <div className="card-premium p-5 text-center group hover:bg-primary/5">
                <div className="flex items-center justify-center gap-3">
                  <div className="p-3 bg-primary/10 rounded-xl group-hover:bg-primary/20 transition-colors duration-300">
                    <Zap className="w-6 h-6 text-primary" />
                  </div>
                  <div className="text-right">
                    <div className="text-2xl font-bold text-primary">۱۰ دقیقه</div>
                    <div className="text-sm text-muted-foreground font-persian">تحویل فوری</div>
                  </div>
                </div>
              </div>
              
              <div className="card-premium p-5 text-center group hover:bg-accent/5">
                <div className="flex items-center justify-center gap-3">
                  <div className="p-3 bg-accent/10 rounded-xl group-hover:bg-accent/20 transition-colors duration-300">
                    <Shield className="w-6 h-6 text-accent" />
                  </div>
                  <div className="text-right">
                    <div className="text-2xl font-bold text-accent">۲۴/۷</div>
                    <div className="text-sm text-muted-foreground font-persian">همیشه آماده</div>
                  </div>
                </div>
              </div>
              
              <div className="card-premium p-5 text-center group hover:bg-emerald-500/5">
                <div className="flex items-center justify-center gap-3">
                  <div className="p-3 bg-emerald-500/10 rounded-xl group-hover:bg-emerald-500/20 transition-colors duration-300">
                    <CheckCircle className="w-6 h-6 text-emerald-500" />
                  </div>
                  <div className="text-right">
                    <div className="text-2xl font-bold text-emerald-500">۱۰۰٪</div>
                    <div className="text-sm text-muted-foreground font-persian">تضمین کیفیت</div>
                  </div>
                </div>
              </div>
            </div>

            {/* Mobile CTA Section */}
            <div className="md:hidden space-y-4">
              <Button 
                variant="premium" 
                size="lg" 
                onClick={onStartNowClick}
                className="w-full text-lg py-6 font-persian animate-pulse"
              >
                همین الان شروع کنید
                <ArrowLeft className="w-6 h-6 mr-3" />
              </Button>
              <div className="text-center">
                <div className="inline-flex items-center gap-2 bg-emerald-50 text-emerald-700 px-4 py-2 rounded-full text-sm font-persian">
                  <CheckCircle className="w-4 h-4" />
                  بدون نیاز به پیش پرداخت
                </div>
              </div>
            </div>

            {/* Desktop CTA Buttons */}
            <div className="hidden md:flex flex-col sm:flex-row gap-4 justify-center lg:justify-end pt-4">
              <Button 
                variant="premium" 
                size="lg" 
                onClick={onStartNowClick}
                className="text-lg px-10 py-6 font-persian relative group"
              >
                اکنون شروع کنید
                <ArrowLeft className="w-6 h-6 mr-3 group-hover:translate-x-1 transition-transform duration-300" />
              </Button>
              <Button variant="minimal" size="lg" className="text-lg px-10 py-6 font-persian">
                مشاهده نمونه کارها
              </Button>
            </div>

            {/* Trust Indicators */}
            <div className="pt-8 border-t border-border/50 space-y-4">
              <p className="text-sm text-muted-foreground font-persian text-center lg:text-right">
                مورد اعتماد بیش از ۱,۰۰۰ کسب و کار و شخص حقیقی
              </p>
              <div className="flex items-center gap-4 justify-center lg:justify-end">
                <div className="flex gap-1">
                  {[...Array(5)].map((_, i) => (
                    <svg key={i} className="w-5 h-5 fill-yellow-400 text-yellow-400" viewBox="0 0 20 20">
                      <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                    </svg>
                  ))}
                </div>
                <span className="text-lg font-bold text-primary mr-2">۴.۹</span>
                <span className="text-sm text-muted-foreground font-persian">از ۵ (۱۲۳ نظر)</span>
              </div>
            </div>
          </div>

          {/* Image Side */}
          <div className="relative order-1 lg:order-2 animate-scale-in">
            <div className="relative group">
              {/* Main Image Container */}
              <div className="relative shadow-premium rounded-3xl overflow-hidden bg-gradient-card p-2">
                <img 
                  src={heroImage} 
                  alt="Vakil.My Legal AI Platform - پلتفرم هوش مصنوعی حقوقی"
                  className="w-full h-auto rounded-2xl object-cover transition-transform duration-700 group-hover:scale-105"
                />
                <div className="absolute inset-0 bg-gradient-to-t from-primary/20 via-transparent to-transparent rounded-2xl"></div>
              </div>
              
              {/* Modern Floating Elements */}
              <div className="absolute -top-4 -left-4 md:-top-6 md:-left-6 bg-gradient-to-br from-emerald-500 to-green-600 text-white p-4 md:p-6 rounded-2xl shadow-accent float z-10">
                <div className="text-center">
                  <div className="text-xl md:text-3xl font-bold">۷۰٪</div>
                  <div className="text-xs md:text-sm font-persian">صرفه‌جویی</div>
                </div>
              </div>
              
              <div className="absolute -bottom-4 -right-4 md:-bottom-6 md:-right-6 bg-gradient-to-br from-blue-500 to-cyan-600 text-white p-4 md:p-6 rounded-2xl shadow-accent float-delayed z-10">
                <div className="text-center">
                  <div className="text-xl md:text-3xl font-bold">۹۵٪</div>
                  <div className="text-xs md:text-sm font-persian">رضایت مشتری</div>
                </div>
              </div>
              
              <div className="absolute top-1/2 -right-6 md:-right-12 bg-white text-primary p-4 md:p-5 rounded-2xl shadow-premium border border-primary/10 float-slow z-10">
                <div className="text-center">
                  <div className="text-lg md:text-xl font-bold">AI</div>
                  <div className="text-xs md:text-sm font-persian text-muted-foreground">هوش مصنوعی</div>
                </div>
              </div>

              {/* Success Indicator */}
              <div className="absolute top-4 left-4 md:hidden bg-white text-green-600 p-3 rounded-xl shadow-medium border border-green-200 z-20">
                <div className="flex items-center gap-2">
                  <CheckCircle className="w-5 h-5" />
                  <div className="text-xs font-bold font-persian">تضمین موفقیت</div>
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
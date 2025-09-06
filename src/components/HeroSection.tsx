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
                خدمات حقوقی سریع، دقیق و حرفه‌ای با هوش مصنوعی و وکلای پایه یک دادگستری
              </p>

              {/* Conversion Section - Visible on all devices */}
              <div className="bg-gradient-success p-6 rounded-2xl text-center shadow-large">
                <div className="text-white">
                  <div className="text-2xl md:text-3xl font-bold mb-2 font-persian">فقط ۱۰ دقیقه!</div>
                  <div className="text-lg md:text-xl mb-4 font-persian">دادخواست شما آماده می‌شود</div>
                  <div className="bg-white/20 backdrop-blur-sm rounded-lg p-4 inline-block">
                    <div className="text-3xl md:text-4xl font-bold">۲۷۰,۰۰۰</div>
                    <div className="text-sm md:text-base font-persian">تومان (به جای ۵ میلیون!)</div>
                  </div>
                </div>
              </div>


              {/* Services Quick Overview */}
              <div className="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 my-8">
                <div className="text-center p-4 bg-card/50 backdrop-blur-sm rounded-xl border border-border/20 hover:border-accent/30 transition-all duration-300">
                  <div className="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mx-auto mb-3">
                    <svg className="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                  </div>
                  <h3 className="text-sm font-semibold text-foreground font-persian mb-1">دادخواست</h3>
                  <p className="text-xs text-muted-foreground font-persian">۱۰ دقیقه</p>
                </div>
                <div className="text-center p-4 bg-card/50 backdrop-blur-sm rounded-xl border border-border/20 hover:border-accent/30 transition-all duration-300">
                  <div className="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mx-auto mb-3">
                    <Scale className="w-6 h-6 text-accent" />
                  </div>
                  <h3 className="text-sm font-semibold text-foreground font-persian mb-1">لایحه</h3>
                  <p className="text-xs text-muted-foreground font-persian">۱۰ دقیقه</p>
                </div>
                <div className="text-center p-4 bg-card/50 backdrop-blur-sm rounded-xl border border-border/20 hover:border-accent/30 transition-all duration-300">
                  <div className="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mx-auto mb-3">
                    <svg className="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                  </div>
                  <h3 className="text-sm font-semibold text-foreground font-persian mb-1">شکواییه</h3>
                  <p className="text-xs text-muted-foreground font-persian">۱۰ دقیقه</p>
                </div>
                <div className="text-center p-4 bg-card/50 backdrop-blur-sm rounded-xl border border-border/20 hover:border-accent/30 transition-all duration-300">
                  <div className="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mx-auto mb-3">
                    <svg className="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                  </div>
                  <h3 className="text-sm font-semibold text-foreground font-persian mb-1">قرارداد</h3>
                  <p className="text-xs text-muted-foreground font-persian">۱۰ دقیقه</p>
                </div>
                <div className="text-center p-4 bg-card/50 backdrop-blur-sm rounded-xl border border-border/20 hover:border-accent/30 transition-all duration-300">
                  <div className="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mx-auto mb-3">
                    <svg className="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                  </div>
                  <h3 className="text-sm font-semibold text-foreground font-persian mb-1">اظهارنامه</h3>
                  <p className="text-xs text-muted-foreground font-persian">۱۰ دقیقه</p>
                </div>
                <div className="text-center p-4 bg-card/50 backdrop-blur-sm rounded-xl border border-border/20 hover:border-accent/30 transition-all duration-300">
                  <div className="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mx-auto mb-3">
                    <svg className="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                  </div>
                  <h3 className="text-sm font-semibold text-foreground font-persian mb-1">مشاوره</h3>
                  <p className="text-xs text-muted-foreground font-persian">۱۰ دقیقه</p>
                </div>
              </div>

              <div className="text-center">
                <div className="inline-flex items-center gap-3 bg-accent/10 text-accent px-6 py-3 rounded-full text-lg font-bold font-persian">
                  <Zap className="w-5 h-5" />
                  شروع از ۲۷۰ هزار تومان
                </div>
              </div>
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
            <div className="flex justify-center lg:justify-end pt-4">
              <Button 
                variant="hero" 
                size="lg" 
                onClick={onStartNowClick}
                className="text-lg px-10 py-6 font-persian relative overflow-hidden group"
              >
                <span className="relative z-10">اکنون شروع کنید</span>
                <ArrowLeft className="w-6 h-6 mr-3 relative z-10" />
                <div className="absolute inset-0 bg-gradient-success transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
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
              
              {/* Floating Elements - Mobile Optimized */}
              <div className="absolute -top-4 -left-4 md:-top-6 md:-left-6 bg-accent text-accent-foreground p-3 md:p-6 rounded-xl md:rounded-2xl shadow-medium animate-[float_3s_ease-in-out_infinite] z-10">
                <div className="text-center">
                  <div className="text-xl md:text-3xl font-bold">۷۰٪</div>
                  <div className="text-[10px] md:text-xs font-persian">کاهش هزینه</div>
                </div>
              </div>
              
              <div className="absolute -bottom-4 -right-4 md:-bottom-6 md:-right-6 bg-primary text-primary-foreground p-3 md:p-6 rounded-xl md:rounded-2xl shadow-medium animate-[float_3s_ease-in-out_infinite_1.5s] z-10">
                <div className="text-center">
                  <div className="text-xl md:text-3xl font-bold">۹۵٪</div>
                  <div className="text-[10px] md:text-xs font-persian">رضایت مشتری</div>
                </div>
              </div>
              
              <div className="absolute top-1/2 -right-6 md:-right-12 bg-card text-foreground p-3 md:p-4 rounded-lg md:rounded-xl shadow-soft border border-border animate-[float_3s_ease-in-out_infinite_0.5s] z-10">
                <div className="text-center">
                  <div className="text-lg md:text-xl font-bold text-accent">AI</div>
                  <div className="text-[10px] md:text-xs font-persian">هوش مصنوعی</div>
                </div>
              </div>

              {/* Mobile Conversion Booster - Only visible on mobile */}
              <div className="absolute top-4 left-4 md:hidden bg-gradient-to-r from-green-500 to-emerald-600 text-white p-3 rounded-xl shadow-lg animate-pulse z-20">
                <div className="text-center">
                  <div className="text-sm font-bold font-persian">۲۷۰ هزار تومان</div>
                  <div className="text-xs font-persian">تا ۱۰ دقیقه آماده!</div>
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
import { Button } from "@/components/ui/button";
import { ArrowLeft, Shield, Scale, Zap, FileText, MessageSquare, Users, Briefcase, ClipboardList } from "lucide-react";
interface HeroSectionProps {
  onStartNowClick: () => void;
}
const HeroSection = ({
  onStartNowClick
}: HeroSectionProps) => {
  const services = [{
    name: "دادخواست",
    icon: FileText,
    delay: "0s",
    position: "top-8 left-12",
    animation: "animate-gentle-float-1"
  }, {
    name: "لایحه",
    icon: Scale,
    delay: "1.2s",
    position: "top-32 right-8",
    animation: "animate-gentle-float-2"
  }, {
    name: "شکواییه",
    icon: MessageSquare,
    delay: "0.7s",
    position: "top-16 left-1/2 transform -translate-x-1/2",
    animation: "animate-gentle-float-3"
  }, {
    name: "قرارداد",
    icon: Briefcase,
    delay: "2.1s",
    position: "bottom-32 left-16",
    animation: "animate-gentle-float-4"
  }, {
    name: "اظهارنامه",
    icon: ClipboardList,
    delay: "0.3s",
    position: "bottom-8 right-12",
    animation: "animate-gentle-float-5"
  }, {
    name: "مشاوره",
    icon: Users,
    delay: "1.8s",
    position: "bottom-16 left-1/2 transform -translate-x-1/2",
    animation: "animate-gentle-float-6"
  }];
  return <section className="relative min-h-screen bg-gradient-subtle overflow-hidden">
      {/* Background decoration */}
      <div className="absolute inset-0 bg-[radial-gradient(ellipse_80%_80%_at_50%_-20%,rgba(13,42,148,0.15),rgba(255,255,255,0))]"></div>
      
      <div className="container mx-auto px-4 py-16 lg:py-24 relative z-10">
        <div className="grid lg:grid-cols-12 gap-8 items-center min-h-[calc(100vh-8rem)]">
          {/* Animated Services Icons - Left Side */}
          <div className="lg:col-span-5 order-1">
            <div className="relative">
              {/* Background Circle */}
              <div className="w-full max-w-md mx-auto aspect-square bg-gradient-to-br from-primary/5 to-accent/10 rounded-full relative">
                {/* Animated Service Icons */}
                {services.map((service, index) => {
                return <div key={service.name} className={`absolute ${service.position}`} style={{
                  animationDelay: service.delay
                }}>
                      <div className="animate-subtle-fade-in" style={{
                    animationDelay: service.delay
                  }}>
                        <div className={`bg-white shadow-medium rounded-2xl p-5 border border-border/30 hover:border-accent/20 transition-all duration-700 hover:shadow-glow group ${service.animation}`}>
                          <div className="text-center">
                            <div className="w-12 h-12 bg-primary/5 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:bg-accent/10 transition-all duration-500">
                              <service.icon className="w-6 h-6 text-primary group-hover:text-accent transition-colors duration-500" />
                            </div>
                            <h3 className="text-sm font-semibold text-foreground font-persian group-hover:text-primary transition-colors duration-500">
                              {service.name}
                            </h3>
                          </div>
                        </div>
                      </div>
                    </div>;
              })}
                
                {/* Center Logo/Badge */}
                <div className="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                  <div className="bg-gradient-hero text-white p-8 rounded-full shadow-large animate-soft-glow">
                    <div className="text-center">
                      <div className="text-2xl font-bold mb-1">AI</div>
                      <div className="text-xs font-persian">قانونی</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {/* Content Side - Right on Desktop */}
          <div className="lg:col-span-7 text-center lg:text-right space-y-6 order-2">
            <div className="space-y-6">
              <div className="inline-flex items-center gap-2 bg-accent/10 text-primary px-4 py-2 rounded-full text-sm font-medium border border-accent/20">
                <Zap className="w-4 h-4" />
                <span className="font-persian">وکیل دات مای ، وکیل آنلاین شما</span>
              </div>
              
              <h1 className="text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight">
                <span className="bg-gradient-hero bg-clip-text text-transparent block mb-2">
                  Vakil.My
                </span>
                <span className="text-xl md:text-2xl lg:text-3xl xl:text-4xl font-medium text-muted-foreground block font-persian text-right">تنظیم لایحه، اظهارنامه، قرارداد و شکواییه در 10 دقیقه!</span>
              </h1>
              
              <p className="text-lg md:text-xl text-foreground/80 max-w-xl mx-auto lg:mx-0 leading-relaxed font-persian">
                خدمات حقوقی سریع، دقیق و حرفه‌ای با هوش مصنوعی و وکلای پایه یک دادگستری
              </p>

              {/* Conversion Section - Highlighted */}
              <div className="bg-gradient-success p-6 rounded-2xl text-center shadow-large border border-accent/20">
                <div className="text-white">
                  <div className="text-2xl md:text-3xl font-bold mb-2 font-persian">فقط ۱۰ دقیقه!</div>
                  <div className="text-lg md:text-xl mb-4 font-persian">دادخواست شما آماده می‌شود</div>
                  <div className="bg-white/20 backdrop-blur-sm rounded-lg p-4 inline-block">
                    <div className="text-3xl md:text-4xl font-bold">۲۷۰,۰۰۰</div>
                    <div className="text-sm md:text-base font-persian">تومان (به جای ۵ میلیون!)</div>
                  </div>
                </div>
              </div>
            </div>

            {/* Services Quick Overview - Compact Grid */}
            <div className="grid grid-cols-3 md:grid-cols-6 gap-3">
              {services.map((service, index) => <div key={service.name} className="text-center p-3 bg-card/50 backdrop-blur-sm rounded-xl border border-border/20 hover:border-accent/30 transition-all duration-300">
                  <div className="w-10 h-10 bg-accent/10 rounded-xl flex items-center justify-center mx-auto mb-2">
                    <service.icon className="w-5 h-5 text-accent" />
                  </div>
                  <h3 className="text-xs font-semibold text-foreground font-persian">{service.name}</h3>
                </div>)}
            </div>

            {/* Features */}
            <div className="grid grid-cols-1 sm:grid-cols-3 gap-4">
              <div className="flex items-center gap-3 justify-center lg:justify-end bg-card/50 backdrop-blur-sm rounded-xl p-4 border border-border/50">
                <div className="text-right">
                  <div className="text-xl font-bold text-primary">۱۰</div>
                  <div className="text-xs text-muted-foreground font-persian">دقیقه تحویل</div>
                </div>
                <div className="p-2 bg-accent/10 rounded-lg">
                  <Zap className="w-4 h-4 text-accent" />
                </div>
              </div>
              
              <div className="flex items-center gap-3 justify-center lg:justify-end bg-card/50 backdrop-blur-sm rounded-xl p-4 border border-border/50">
                <div className="text-right">
                  <div className="text-xl font-bold text-primary">۲۴/۷</div>
                  <div className="text-xs text-muted-foreground font-persian">در دسترس</div>
                </div>
                <div className="p-2 bg-accent/10 rounded-lg">
                  <Shield className="w-4 h-4 text-accent" />
                </div>
              </div>
              
              <div className="flex items-center gap-3 justify-center lg:justify-end bg-card/50 backdrop-blur-sm rounded-xl p-4 border border-border/50">
                <div className="text-right">
                  <div className="text-xl font-bold text-primary">۱۰۰٪</div>
                  <div className="text-xs text-muted-foreground font-persian">قانونی</div>
                </div>
                <div className="p-2 bg-accent/10 rounded-lg">
                  <Scale className="w-4 h-4 text-accent" />
                </div>
              </div>
            </div>

            {/* CTA Button */}
            <div className="flex justify-center lg:justify-end pt-4">
              <Button variant="hero" size="lg" onClick={onStartNowClick} className="text-lg px-10 py-6 font-persian relative overflow-hidden group">
                <span className="relative z-10">اکنون شروع کنید</span>
                <ArrowLeft className="w-6 h-6 mr-3 relative z-10" />
                <div className="absolute inset-0 bg-gradient-success transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
              </Button>
            </div>

            {/* Trust Indicators */}
            <div className="pt-6 border-t border-border/50">
              <p className="text-sm text-muted-foreground mb-3 font-persian">
                مورد اعتماد بیش از ۱,۰۰۰ کسب و کار
              </p>
              <div className="flex items-center gap-3 justify-center lg:justify-end">
                <div className="flex gap-1">
                  {[...Array(5)].map((_, i) => <svg key={i} className="w-4 h-4 fill-accent text-accent" viewBox="0 0 20 20">
                      <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>)}
                </div>
                <span className="text-lg font-bold text-primary mr-2">۴.۹</span>
                <span className="text-sm text-muted-foreground font-persian">از ۵</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>;
};
export default HeroSection;
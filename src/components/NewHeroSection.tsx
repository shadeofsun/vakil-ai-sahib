import { Button } from "@/components/ui/button";
import { ArrowLeft, Shield, Scale, Zap, Clock, Star } from "lucide-react";

interface HeroSectionProps {
  onStartNowClick: () => void;
}

const NewHeroSection = ({ onStartNowClick }: HeroSectionProps) => {
  return (
    <section className="section-padding bg-gradient-subtle">
      <div className="container mx-auto px-4">
        <div className="grid lg:grid-cols-2 gap-12 items-center">
          
          {/* Content */}
          <div className="space-y-8">
            <div className="space-y-4">
              <h1 className="text-4xl md:text-5xl lg:text-6xl font-bold text-foreground leading-tight">
                مشاوره حقوقی
                <span className="text-primary block">هوشمند و سریع</span>
              </h1>
              <p className="text-lg text-muted-foreground leading-relaxed max-w-lg">
                دسترسی به بهترین وکلای کشور در کمتر از ۲۴ ساعت. مشاوره آنلاین، پیگیری پرونده و خدمات حقوقی تخصصی
              </p>
            </div>

            {/* CTA Buttons */}
            <div className="flex flex-col sm:flex-row gap-4">
              <Button 
                onClick={onStartNowClick}
                size="lg"
                className="btn-primary text-lg px-8 py-4"
              >
                شروع مشاوره
                <ArrowLeft className="mr-2 h-5 w-5" />
              </Button>
              <Button 
                variant="outline"
                size="lg"
                className="btn-outline text-lg px-8 py-4"
              >
                مشاهده نمونه کارها
              </Button>
            </div>

            {/* Trust Indicators */}
            <div className="flex items-center gap-6 pt-4">
              <div className="flex items-center gap-2">
                <div className="flex">
                  {[1, 2, 3, 4, 5].map((star) => (
                    <Star key={star} className="h-5 w-5 fill-yellow-400 text-yellow-400" />
                  ))}
                </div>
                <span className="text-sm text-muted-foreground">امتیاز ۴.۹ از ۵</span>
              </div>
              <div className="text-sm text-muted-foreground">
                <span className="font-semibold text-foreground">+۱۰۰۰</span> مشتری راضی
              </div>
            </div>
          </div>

          {/* Features Grid */}
          <div className="grid grid-cols-2 gap-6">
            <div className="card-clean text-center space-y-3">
              <div className="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mx-auto">
                <Clock className="h-6 w-6 text-primary" />
              </div>
              <h3 className="font-semibold">پاسخ در ۲۴ ساعت</h3>
              <p className="text-sm text-muted-foreground">دریافت پاسخ سریع و دقیق</p>
            </div>
            
            <div className="card-clean text-center space-y-3">
              <div className="w-12 h-12 bg-accent/10 rounded-lg flex items-center justify-center mx-auto">
                <Shield className="h-6 w-6 text-accent" />
              </div>
              <h3 className="font-semibold">محرمانگی کامل</h3>
              <p className="text-sm text-muted-foreground">حفظ حریم خصوصی شما</p>
            </div>
            
            <div className="card-clean text-center space-y-3">
              <div className="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mx-auto">
                <Scale className="h-6 w-6 text-primary" />
              </div>
              <h3 className="font-semibold">وکلای متخصص</h3>
              <p className="text-sm text-muted-foreground">تیم مجرب و حرفه‌ای</p>
            </div>
            
            <div className="card-clean text-center space-y-3">
              <div className="w-12 h-12 bg-accent/10 rounded-lg flex items-center justify-center mx-auto">
                <Zap className="h-6 w-6 text-accent" />
              </div>
              <h3 className="font-semibold">قیمت مناسب</h3>
              <p className="text-sm text-muted-foreground">خدمات با کیفیت و مقرون به صرفه</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default NewHeroSection;
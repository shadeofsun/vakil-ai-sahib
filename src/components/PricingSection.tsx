import { Button } from "@/components/ui/button";
import { Check, Star, ArrowLeft, Shield } from "lucide-react";

const plans = [
  {
    name: "پلن لایت",
    nameEn: "Light Plan",
    price: "۲۷۰,۰۰۰",
    currency: "تومان",
    description: "مناسب برای استفاده شخصی و کسب‌وکارهای کوچک",
    popular: false,
    features: [
      "دریافت ۳ نسخه پیش‌نویس",
      "قدرت گرفته از هوش مصنوعی اختصاصی Vakil.My",
      "متن حقوقی مطابق با آخرین قوانین",
      "تحویل در کمتر از ۱۰ دقیقه",
      "خروجی در فرمت PDF و متنی",
      "بدون بازنگری انسانی"
    ],
    ctaText: "انتخاب پلن لایت",
    ctaVariant: "minimal" as const
  },
  {
    name: "پلن پیشرفته",
    nameEn: "Advanced Plan",
    price: "۸۷۰,۰۰۰",
    currency: "تومان",
    description: "مناسب برای کسب‌وکارها و موارد پیچیده حقوقی",
    popular: true,
    features: [
      "۳ پیش‌نویس هوش مصنوعی + ۱ نسخه بازنگری شده توسط وکیل مجاز",
      "قدرت گرفته از هوش مصنوعی اختصاصی Vakil.My",
      "متن حقوقی مطابق با آخرین قوانین",
      "تحویل در کمتر از ۱۰ دقیقه",
      "خروجی در فرمت PDF و متنی",
      "شامل بازنگری و اصلاحات وکیل متخصص"
    ],
    ctaText: "انتخاب پلن پیشرفته",
    ctaVariant: "hero" as const
  }
];

const PricingSection = () => {
  return (
    <section className="py-20 bg-gradient-subtle">
      <div className="container mx-auto px-4">
        {/* Header */}
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-bold mb-6 text-right font-persian">
            تعرفه‌ها
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto text-right font-persian leading-relaxed">
            پلن مناسب نیاز خود را انتخاب کنید و از خدمات حقوقی حرفه‌ای بهره‌مند شوید
          </p>
        </div>

        {/* Pricing Cards */}
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-5xl mx-auto mb-12">
          {plans.map((plan, index) => (
            <div 
              key={index}
              className={`relative bg-card rounded-2xl p-8 shadow-soft border ${
                plan.popular 
                  ? 'border-accent shadow-glow scale-105' 
                  : 'border-border hover:border-accent/50'
              } transition-smooth`}
            >
              {/* Popular Badge */}
              {plan.popular && (
                <div className="absolute -top-4 right-1/2 transform translate-x-1/2">
                  <div className="bg-gradient-premium text-accent-foreground px-6 py-2 rounded-full text-sm font-bold flex items-center gap-2 shadow-medium">
                    <Star className="w-4 h-4" />
                    محبوب‌ترین انتخاب
                  </div>
                </div>
              )}

              {/* Header */}
              <div className="text-right mb-8">
                <h3 className="text-2xl font-bold text-foreground mb-2 font-persian">
                  {plan.name}
                </h3>
                <p className="text-muted-foreground text-sm font-persian">
                  {plan.description}
                </p>
              </div>

              {/* Price */}
              <div className="text-right mb-8">
                <div className="flex items-baseline justify-end gap-2">
                  <span className="text-sm text-muted-foreground font-persian">{plan.currency}</span>
                  <span className="text-4xl font-bold text-primary">{plan.price}</span>
                </div>
                <p className="text-sm text-muted-foreground mt-1 font-persian">برای هر سند</p>
              </div>

              {/* Features */}
              <div className="space-y-4 mb-8">
                {plan.features.map((feature, i) => (
                  <div key={i} className="flex items-start gap-3">
                    <Check className="w-5 h-5 text-accent mt-0.5 flex-shrink-0" />
                    <span className="text-sm text-muted-foreground font-persian text-right">
                      {feature}
                    </span>
                  </div>
                ))}
              </div>

              {/* CTA */}
              <Button 
                variant={plan.ctaVariant} 
                size="lg" 
                className="w-full font-persian"
              >
                {plan.ctaText}
                <ArrowLeft className="w-5 h-5 mr-2" />
              </Button>
            </div>
          ))}
        </div>

        {/* Guarantee */}
        <div className="text-center">
          <div className="inline-flex items-center gap-3 bg-card px-6 py-3 rounded-full shadow-soft border border-border">
            <Shield className="w-5 h-5 text-accent" />
            <span className="text-sm font-medium text-muted-foreground font-persian">
              تمامی پلن‌ها شامل ۷ روز گارانتی بازگشت وجه هستند
            </span>
          </div>
        </div>

        {/* Additional Info */}
        <div className="grid grid-cols-1 md:grid-cols-3 gap-6 mt-16">
          <div className="text-center">
            <div className="text-2xl font-bold text-primary mb-2">۱۰۰٪</div>
            <div className="text-muted-foreground font-persian">ایمن و محرمانه</div>
          </div>
          <div className="text-center">
            <div className="text-2xl font-bold text-primary mb-2">۲۴/۷</div>
            <div className="text-muted-foreground font-persian">پشتیبانی فنی</div>
          </div>
          <div className="text-center">
            <div className="text-2xl font-bold text-primary mb-2">۹۵٪</div>
            <div className="text-muted-foreground font-persian">رضایت مشتریان</div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default PricingSection;
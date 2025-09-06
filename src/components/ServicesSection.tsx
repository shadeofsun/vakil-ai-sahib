import { Scale, FileText, Gavel, Users, Shield, MessageSquare } from "lucide-react";
import { Button } from "@/components/ui/button";

const services = [
  {
    icon: FileText,
    title: "تهیه دادخواست",
    description: "دادخواست‌های حرفه‌ای با رعایت تمام اصول حقوقی",
    features: ["مطابق با قوانین روز", "تنظیم در ۱۰ دقیقه", "بازنگری حرفه‌ای"]
  },
  {
    icon: Gavel,
    title: "تهیه لایحه",
    description: "لایحه‌های دقیق برای دفاع قدرتمند در دادگاه",
    features: ["استدلال حقوقی قوی", "منابع قانونی معتبر", "ساختار استاندارد"]
  },
  {
    icon: Scale,
    title: "تهیه شکواییه",
    description: "شکواییه‌های قانونی برای رسیدگی سریع",
    features: ["فرمت رسمی", "مستندات کامل", "پیگیری آسان"]
  },
  {
    icon: Users,
    title: "تهیه قرارداد",
    description: "قراردادهای استاندارد و سفارشی‌سازی‌شده",
    features: ["انواع قراردادها", "شرایط حمایتی", "قابل ویرایش"]
  },
  {
    icon: Shield,
    title: "تهیه اظهارنامه",
    description: "اظهارنامه‌های رسمی با نگارش حرفه‌ای",
    features: ["فرمت استاندارد", "زبان رسمی", "تایید شده"]
  },
  {
    icon: MessageSquare,
    title: "مشاوره حقوقی",
    description: "مشاوره تخصصی با وکلای پایه یک و هوش مصنوعی",
    features: ["۲۴/۷ در دسترس", "پاسخ فوری", "مشاوره تخصصی"]
  }
];

const ServicesSection = () => {
  return (
    <section className="py-20 bg-background">
      <div className="container mx-auto px-4">
        {/* Header */}
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-bold mb-6 text-right font-persian">
            خدمات ما
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto text-right font-persian leading-relaxed">
            مجموعه کاملی از خدمات حقوقی برای تمام نیازهای شما، از تهیه اسناد تا مشاوره تخصصی
          </p>
        </div>

        {/* Services Grid */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
          {services.map((service, index) => (
            <div 
              key={index}
              className="group bg-card rounded-xl p-8 shadow-soft hover:shadow-medium transition-smooth border border-border hover:border-accent/50"
            >
              {/* Icon */}
              <div className="flex justify-end mb-6">
                <div className="p-3 bg-gradient-premium rounded-lg group-hover:scale-110 transition-bounce">
                  <service.icon className="w-6 h-6 text-accent-foreground" />
                </div>
              </div>

              {/* Content */}
              <div className="text-right">
                <h3 className="text-xl font-bold mb-3 text-foreground font-persian">
                  {service.title}
                </h3>
                <p className="text-muted-foreground mb-6 leading-relaxed font-persian">
                  {service.description}
                </p>

                {/* Features */}
                <ul className="space-y-2 mb-6">
                  {service.features.map((feature, i) => (
                    <li key={i} className="flex items-center justify-end gap-2 text-sm">
                      <span className="text-muted-foreground font-persian">{feature}</span>
                      <div className="w-2 h-2 bg-accent rounded-full"></div>
                    </li>
                  ))}
                </ul>

                {/* CTA */}
                <Button variant="minimal" className="w-full font-persian">
                  شروع کنید
                </Button>
              </div>
            </div>
          ))}
        </div>

        {/* Bottom CTA */}
        <div className="text-center bg-gradient-subtle rounded-2xl p-12 shadow-soft">
          <h3 className="text-2xl font-bold mb-4 text-right font-persian">
            خدمت مورد نظر خود را پیدا نکردید؟
          </h3>
          <p className="text-muted-foreground mb-8 text-right font-persian">
            با تیم پشتیبانی ما تماس بگیرید تا راه‌حل مناسب برای شما پیدا کنیم
          </p>
          <div className="flex gap-4 justify-center">
            <Button variant="hero" size="lg">
              درخواست مشاوره رایگان
            </Button>
            <Button variant="minimal" size="lg">
              ارتباط با پشتیبانی
            </Button>
          </div>
        </div>
      </div>
    </section>
  );
};

export default ServicesSection;
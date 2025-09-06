import { Search, Edit, Download, CheckCircle } from "lucide-react";

const steps = [
  {
    icon: Search,
    number: "۱",
    title: "انتخاب خدمت",
    description: "نوع سند یا خدمت حقوقی مورد نیاز خود را انتخاب کنید"
  },
  {
    icon: Edit,
    number: "۲", 
    title: "ورود اطلاعات",
    description: "اطلاعات مورد نیاز را از طریق فرم ساده وارد کنید"
  },
  {
    icon: Download,
    number: "۳",
    title: "دریافت خروجی",
    description: "سند حقوقی خود را در کمتر از ۱۰ دقیقه دریافت کنید"
  },
  {
    icon: CheckCircle,
    number: "۴",
    title: "بازنگری حرفه‌ای",
    description: "در صورت انتخاب پلن پیشرفته، سند توسط وکیل بازنگری می‌شود"
  }
];

const HowItWorksSection = () => {
  return (
    <section className="py-20 bg-muted/30">
      <div className="container mx-auto px-4">
        {/* Header */}
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-bold mb-6 text-right font-persian">
            چگونه کار می‌کند؟
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto text-right font-persian leading-relaxed">
            تنها با ۴ قدم ساده، سند حقوقی مورد نیاز خود را دریافت کنید
          </p>
        </div>

        {/* Steps */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
          {steps.map((step, index) => (
            <div key={index} className="text-center group">
              {/* Step Number & Icon */}
              <div className="relative mb-8">
                <div className="w-20 h-20 bg-gradient-hero rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-bounce shadow-medium">
                  <step.icon className="w-8 h-8 text-primary-foreground" />
                </div>
                <div className="absolute -top-2 -right-2 w-8 h-8 bg-accent rounded-full flex items-center justify-center text-accent-foreground font-bold text-sm shadow-soft">
                  {step.number}
                </div>
                {/* Connection Line */}
                {index < steps.length - 1 && (
                  <div className="hidden lg:block absolute top-10 right-full w-full h-0.5 bg-gradient-to-l from-border to-transparent"></div>
                )}
              </div>

              {/* Content */}
              <div className="text-right">
                <h3 className="text-xl font-bold mb-3 text-foreground font-persian">
                  {step.title}
                </h3>
                <p className="text-muted-foreground leading-relaxed font-persian">
                  {step.description}
                </p>
              </div>
            </div>
          ))}
        </div>

        {/* Features */}
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div className="bg-card rounded-xl p-8 shadow-soft text-right">
            <div className="text-3xl font-bold text-primary mb-2">۱۰ دقیقه</div>
            <div className="text-muted-foreground font-persian">زمان تحویل سند</div>
          </div>
          <div className="bg-card rounded-xl p-8 shadow-soft text-right">
            <div className="text-3xl font-bold text-accent mb-2">۹۹٪</div>
            <div className="text-muted-foreground font-persian">دقت هوش مصنوعی</div>
          </div>
          <div className="bg-card rounded-xl p-8 shadow-soft text-right">
            <div className="text-3xl font-bold text-primary mb-2">۲۴/۷</div>
            <div className="text-muted-foreground font-persian">پشتیبانی آنلاین</div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default HowItWorksSection;
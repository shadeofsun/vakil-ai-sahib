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
        <div className="relative">
          {/* Connection Line - Desktop Only */}
          <div className="hidden lg:block absolute top-10 left-0 right-0 h-0.5 bg-gradient-to-r from-transparent via-border to-transparent"></div>
          
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-6 mb-16">
            {steps.map((step, index) => (
              <div key={index} className="text-center group relative">
                {/* Step Number & Icon */}
                <div className="relative mb-8">
                  <div className="w-24 h-24 bg-gradient-hero rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-all duration-300 shadow-medium group-hover:shadow-large">
                    <step.icon className="w-10 h-10 text-primary-foreground" />
                  </div>
                  <div className="absolute -top-3 -right-3 w-10 h-10 bg-accent rounded-2xl flex items-center justify-center text-accent-foreground font-bold text-lg shadow-soft">
                    {step.number}
                  </div>
                </div>

                {/* Content */}
                <div className="text-right px-4">
                  <h3 className="text-xl lg:text-2xl font-bold mb-4 text-foreground font-persian group-hover:text-primary transition-colors duration-300">
                    {step.title}
                  </h3>
                  <p className="text-muted-foreground leading-relaxed font-persian text-base lg:text-lg group-hover:text-foreground/80 transition-colors duration-300">
                    {step.description}
                  </p>
                </div>
              </div>
            ))}
          </div>
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
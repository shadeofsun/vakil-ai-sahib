import { Star, Quote } from "lucide-react";

const testimonials = [
  {
    name: "علی رضایی",
    title: "مدیرعامل شرکت پارس تجارت",
    content: "Vakil.My ساعت‌ها وقت ما را در تهیه قراردادها صرفه‌جویی کرد. کیفیت اسناد فوق‌العاده است.",
    rating: 5,
    avatar: "AR"
  },
  {
    name: "مریم احمدی",
    title: "وکیل دادگستری",
    content: "به عنوان وکیل، از دقت و جامعیت اسناد تولید شده توسط این پلتفرم بسیار راضی هستم.",
    rating: 5,
    avatar: "MA"
  },
  {
    name: "حسین مرادی",
    title: "صاحب کسب‌وکار",
    content: "قیمت‌ها خیلی مناسب و خدمات سریع. دیگر نیازی به هزینه‌های سنگین حقوقی ندارم.",
    rating: 5,
    avatar: "HM"
  },
  {
    name: "فاطمه نوری",
    title: "مشاور حقوقی",
    content: "پلتفرم بسیار حرفه‌ای و کاربرپسند. برای همکارانم نیز توصیه می‌کنم.",
    rating: 5,
    avatar: "FN"
  },
  {
    name: "محمد کریمی",
    title: "مدیر شرکت فناوری",
    content: "تجربه فوق‌العاده‌ای داشتیم. هم سرعت عالی و هم کیفیت بالا. عالی بود!",
    rating: 5,
    avatar: "MK"
  }
];

const TestimonialsSection = () => {
  return (
    <section className="py-20 bg-background">
      <div className="container mx-auto px-4">
        {/* Header */}
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-bold mb-6 text-right font-persian">
            نظرات مشتریان
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto text-right font-persian leading-relaxed">
            ببینید مشتریان ما چه نظری درباره خدمات Vakil.My دارند
          </p>
        </div>

        {/* Testimonials Grid */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          {testimonials.map((testimonial, index) => (
            <div 
              key={index}
              className="bg-card rounded-xl p-6 shadow-soft border border-border hover:shadow-medium transition-smooth relative"
            >
              {/* Quote Icon */}
              <div className="absolute top-4 left-4">
                <Quote className="w-6 h-6 text-accent/30" />
              </div>

              {/* Stars */}
              <div className="flex justify-end gap-1 mb-4">
                {[...Array(testimonial.rating)].map((_, i) => (
                  <Star key={i} className="w-4 h-4 fill-accent text-accent" />
                ))}
              </div>

              {/* Content */}
              <div className="text-right mb-6">
                <p className="text-muted-foreground leading-relaxed font-persian">
                  "{testimonial.content}"
                </p>
              </div>

              {/* Author */}
              <div className="flex items-center justify-end gap-4">
                <div className="text-right">
                  <div className="font-bold text-foreground font-persian">
                    {testimonial.name}
                  </div>
                  <div className="text-sm text-muted-foreground font-persian">
                    {testimonial.title}
                  </div>
                </div>
                <div className="w-12 h-12 bg-gradient-premium rounded-full flex items-center justify-center text-accent-foreground font-bold text-sm">
                  {testimonial.avatar}
                </div>
              </div>
            </div>
          ))}
        </div>

        {/* Overall Rating */}
        <div className="text-center mt-16">
          <div className="inline-flex items-center gap-4 bg-card px-8 py-4 rounded-full shadow-soft border border-border">
            <div className="flex gap-1">
              {[...Array(5)].map((_, i) => (
                <Star key={i} className="w-5 h-5 fill-accent text-accent" />
              ))}
            </div>
            <div className="text-right">
              <div className="text-2xl font-bold text-primary">۴.۹</div>
              <div className="text-sm text-muted-foreground font-persian">از ۱,۰۰۰+ نظر</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default TestimonialsSection;
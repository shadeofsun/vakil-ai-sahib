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
              className="bg-card rounded-2xl p-8 shadow-soft border border-border hover:shadow-medium hover:border-accent/30 transition-all duration-300 relative group hover:-translate-y-1"
            >
              {/* Quote Icon */}
              <div className="absolute top-6 left-6 opacity-20 group-hover:opacity-30 transition-opacity duration-300">
                <Quote className="w-8 h-8 text-accent" />
              </div>

              {/* Stars */}
              <div className="flex justify-end gap-1 mb-6">
                {[...Array(testimonial.rating)].map((_, i) => (
                  <Star key={i} className="w-5 h-5 fill-accent text-accent group-hover:scale-110 transition-transform duration-200" />
                ))}
              </div>

              {/* Content */}
              <div className="text-right mb-8">
                <p className="text-muted-foreground leading-relaxed font-persian text-lg group-hover:text-foreground transition-colors duration-300">
                  "{testimonial.content}"
                </p>
              </div>

              {/* Author */}
              <div className="flex items-center justify-end gap-4 pt-4 border-t border-border group-hover:border-accent/30 transition-colors duration-300">
                <div className="text-right">
                  <div className="font-bold text-foreground font-persian text-lg">
                    {testimonial.name}
                  </div>
                  <div className="text-sm text-muted-foreground font-persian">
                    {testimonial.title}
                  </div>
                </div>
                <div className="w-14 h-14 bg-gradient-premium rounded-2xl flex items-center justify-center text-accent-foreground font-bold text-lg shadow-soft group-hover:scale-110 transition-transform duration-300">
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
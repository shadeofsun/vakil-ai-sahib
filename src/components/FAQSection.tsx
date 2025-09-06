import {
  Accordion,
  AccordionContent,
  AccordionItem,
  AccordionTrigger,
} from "@/components/ui/accordion";

const faqs = [
  {
    question: "چگونه می‌توانم خدمت مورد نظرم را انتخاب کنم؟",
    answer: "شما می‌توانید از صفحه اصلی سایت، نوع سند یا خدمت حقوقی مورد نیاز خود را انتخاب کنید. ما انواع خدمات شامل تهیه دادخواست، لایحه، شکواییه، قرارداد، اظهارنامه و مشاوره حقوقی را ارائه می‌دهیم."
  },
  {
    question: "آیا خروجی‌ها با قوانین روز مطابقت دارند؟",
    answer: "بله، تمام اسناد تولید شده توسط هوش مصنوعی ما بر اساس آخرین قوانین و مقررات جمهوری اسلامی ایران تنظیم می‌شوند. ما به‌طور مستمر دیتابیس قوانین خود را به‌روزرسانی می‌کنیم."
  },
  {
    question: "زمان تحویل اسناد چقدر است؟",
    answer: "تحویل اسناد در کمتر از ۱۰ دقیقه انجام می‌شود. برای پلن پیشرفته که شامل بازنگری وکیل است، ممکن است زمان بیشتری (تا ۲۴ ساعت) طول بکشد."
  },
  {
    question: "آیا امکان بازنگری توسط وکیل وجود دارد؟",
    answer: "در پلن پیشرفته، اسناد شما توسط وکلای پایه یک دادگستری بازنگری و در صورت نیاز اصلاح می‌شوند. این خدمت در پلن لایت موجود نیست."
  },
  {
    question: "آیا اطلاعات من محفوظ است؟",
    answer: "ما به حریم خصوصی شما احترام می‌گذاریم. تمام اطلاعات با بالاترین استانداردهای امنیتی رمزگذاری و نگهداری می‌شوند و هیچ‌گاه با اشخاص ثالث به اشتراک گذاشته نمی‌شوند."
  },
  {
    question: "چه فرمت‌هایی برای دریافت سند در دسترس است؟",
    answer: "شما می‌توانید اسناد خود را در فرمت‌های PDF (برای چاپ) و متنی (برای ویرایش) دریافت کنید. هر دو فرمت در تمام پلن‌ها موجود است."
  }
];

const FAQSection = () => {
  return (
    <section className="py-20 bg-muted/30">
      <div className="container mx-auto px-4 max-w-4xl">
        {/* Header */}
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-bold mb-6 text-right font-persian">
            سوالات متداول
          </h2>
          <p className="text-xl text-muted-foreground text-right font-persian leading-relaxed">
            پاسخ سوالات رایج درباره خدمات Vakil.My را اینجا بیابید
          </p>
        </div>

        {/* FAQ Accordion */}
        <Accordion type="single" collapsible className="space-y-4">
          {faqs.map((faq, index) => (
            <AccordionItem 
              key={index} 
              value={`item-${index}`}
              className="bg-card rounded-xl border border-border shadow-soft overflow-hidden"
            >
              <AccordionTrigger className="px-6 py-4 text-right font-persian font-medium hover:no-underline hover:bg-muted/50 transition-smooth">
                {faq.question}
              </AccordionTrigger>
              <AccordionContent className="px-6 pb-6 text-right font-persian text-muted-foreground leading-relaxed">
                {faq.answer}
              </AccordionContent>
            </AccordionItem>
          ))}
        </Accordion>

        {/* Contact for more questions */}
        <div className="text-center mt-12">
          <p className="text-muted-foreground mb-4 font-persian">
            سوال دیگری دارید؟
          </p>
          <div className="flex gap-4 justify-center">
            <button className="text-primary hover:text-primary/80 font-medium font-persian transition-smooth">
              تماس با پشتیبانی
            </button>
            <span className="text-muted-foreground">|</span>
            <button className="text-primary hover:text-primary/80 font-medium font-persian transition-smooth">
              ارسال ایمیل
            </button>
          </div>
        </div>
      </div>
    </section>
  );
};

export default FAQSection;
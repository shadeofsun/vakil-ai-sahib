import { Button } from "@/components/ui/button";
import { Scale, Mail, Phone, MapPin, ArrowLeft } from "lucide-react";

const Footer = () => {
  return (
    <footer className="bg-primary text-primary-foreground">
      {/* Main Footer */}
      <div className="container mx-auto px-4 py-16">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          {/* Brand */}
          <div className="text-right">
            <div className="flex items-center justify-end gap-2 mb-4">
              <span className="text-2xl font-bold">Vakil.My</span>
              <Scale className="w-8 h-8 text-accent" />
            </div>
            <p className="text-primary-foreground/80 mb-6 font-persian leading-relaxed">
              وکیل هوشمند همراه شما برای تمام نیازهای حقوقی. سریع، دقیق و حرفه‌ای.
            </p>
            <div className="flex items-center justify-end gap-4">
              <div className="text-right">
                <div className="text-2xl font-bold text-accent">۴.۹</div>
                <div className="text-xs text-primary-foreground/60 font-persian">از ۱,۰۰۰+ نظر</div>
              </div>
              <div className="flex gap-1">
                {[...Array(5)].map((_, i) => (
                  <svg key={i} className="w-4 h-4 fill-accent text-accent" viewBox="0 0 20 20">
                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                  </svg>
                ))}
              </div>
            </div>
          </div>

          {/* Services */}
          <div className="text-right">
            <h4 className="text-lg font-bold mb-4 font-persian">خدمات</h4>
            <ul className="space-y-2">
              {[
                "تهیه دادخواست",
                "تهیه لایحه",
                "تهیه شکواییه", 
                "تهیه قرارداد",
                "تهیه اظهارنامه",
                "مشاوره حقوقی"
              ].map((service, i) => (
                <li key={i}>
                  <a href="#" className="text-primary-foreground/80 hover:text-accent transition-smooth font-persian">
                    {service}
                  </a>
                </li>
              ))}
            </ul>
          </div>

          {/* Support */}
          <div className="text-right">
            <h4 className="text-lg font-bold mb-4 font-persian">پشتیبانی</h4>
            <ul className="space-y-2">
              {[
                "راهنمای استفاده",
                "سوالات متداول",
                "تماس با ما",
                "شرایط و قوانین",
                "حریم خصوصی",
                "گارانتی بازگشت وجه"
              ].map((item, i) => (
                <li key={i}>
                  <a href="#" className="text-primary-foreground/80 hover:text-accent transition-smooth font-persian">
                    {item}
                  </a>
                </li>
              ))}
            </ul>
          </div>

          {/* Contact */}
          <div className="text-right">
            <h4 className="text-lg font-bold mb-4 font-persian">تماس با ما</h4>
            <div className="space-y-4">
              <div className="flex items-center justify-end gap-3">
                <span className="text-primary-foreground/80 font-persian">۰۲۱-۱۲۳۴۵۶۷۸</span>
                <Phone className="w-4 h-4 text-accent" />
              </div>
              <div className="flex items-center justify-end gap-3">
                <span className="text-primary-foreground/80">info@vakil.my</span>
                <Mail className="w-4 h-4 text-accent" />
              </div>
              <div className="flex items-start justify-end gap-3">
                <span className="text-primary-foreground/80 font-persian text-right">
                  تهران، خیابان ولیعصر، پلاک ۱۲۳
                </span>
                <MapPin className="w-4 h-4 text-accent mt-1" />
              </div>
            </div>

            {/* Newsletter */}
            <div className="mt-6">
              <h5 className="font-bold mb-2 font-persian">خبرنامه</h5>
              <p className="text-sm text-primary-foreground/80 mb-3 font-persian">
                از آخرین اخبار حقوقی باخبر شوید
              </p>
              <div className="flex gap-2">
                <Button variant="premium" size="sm">
                  عضویت
                  <ArrowLeft className="w-4 h-4 mr-1" />
                </Button>
                <input 
                  type="email" 
                  placeholder="ایمیل شما"
                  className="flex-1 px-3 py-2 rounded-md bg-primary-foreground/10 border border-primary-foreground/20 text-primary-foreground placeholder:text-primary-foreground/60 text-sm text-right"
                />
              </div>
            </div>
          </div>
        </div>
      </div>

      {/* Bottom Bar */}
      <div className="border-t border-primary-foreground/20">
        <div className="container mx-auto px-4 py-6">
          <div className="flex flex-col md:flex-row justify-between items-center gap-4">
            <div className="text-center md:text-left">
              <p className="text-primary-foreground/60 text-sm">
                © 2024 Vakil.My. All rights reserved.
              </p>
            </div>
            <div className="text-center md:text-right">
              <p className="text-primary-foreground/60 text-sm font-persian">
                طراحی و توسعه با ❤️ برای عدالت
              </p>
            </div>
          </div>
        </div>
      </div>

      {/* Final CTA */}
      <div className="bg-gradient-premium">
        <div className="container mx-auto px-4 py-8 text-center">
          <h3 className="text-2xl font-bold text-accent-foreground mb-4 font-persian">
            همین حالا شروع کنید
          </h3>
          <p className="text-accent-foreground/80 mb-6 font-persian">
            اولین سند حقوقی خود را با ۵۰٪ تخفیف دریافت کنید
          </p>
          <Button variant="hero" size="lg" className="bg-primary text-primary-foreground hover:bg-primary/90">
            دریافت تخفیف
            <ArrowLeft className="w-5 h-5 mr-2" />
          </Button>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
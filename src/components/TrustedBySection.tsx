const brands = [
  { name: "پارس لاو", logo: "PL" },
  { name: "حقوقی تهران", logo: "HT" },
  { name: "مشاوران ایرانیان", logo: "MI" },
  { name: "دادگستر", logo: "DG" },
  { name: "وکلای برتر", logo: "VB" },
  { name: "حقوقی آریا", logo: "HA" }
];

const TrustedBySection = () => {
  return (
    <section className="py-16 bg-background border-y border-border">
      <div className="container mx-auto px-4">
        {/* Header */}
        <div className="text-center mb-12">
          <h3 className="text-2xl font-bold mb-4 text-right font-persian">
            مورد اعتماد برندهای برتر
          </h3>
          <p className="text-muted-foreground text-right font-persian">
            بیش از ۱,۰۰۰ شرکت و دفتر حقوقی به ما اعتماد کرده‌اند
          </p>
        </div>

        {/* Brands Grid */}
        <div className="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 items-center">
          {brands.map((brand, index) => (
            <div 
              key={index}
              className="group flex flex-col items-center justify-center p-6 rounded-lg hover:bg-muted/50 transition-smooth"
            >
              {/* Logo Placeholder */}
              <div className="w-16 h-16 bg-gradient-to-br from-primary/10 to-accent/10 rounded-xl flex items-center justify-center mb-3 group-hover:scale-110 transition-bounce">
                <span className="text-xl font-bold text-primary">
                  {brand.logo}
                </span>
              </div>
              {/* Brand Name */}
              <span className="text-sm font-medium text-muted-foreground group-hover:text-foreground transition-smooth font-persian">
                {brand.name}
              </span>
            </div>
          ))}
        </div>

        {/* Stats */}
        <div className="grid grid-cols-1 md:grid-cols-4 gap-8 mt-16 pt-16 border-t border-border">
          <div className="text-center">
            <div className="text-3xl font-bold text-primary mb-2">۱,۰۰۰+</div>
            <div className="text-sm text-muted-foreground font-persian">مشتری فعال</div>
          </div>
          <div className="text-center">
            <div className="text-3xl font-bold text-primary mb-2">۱۰,۰۰۰+</div>
            <div className="text-sm text-muted-foreground font-persian">سند تولید شده</div>
          </div>
          <div className="text-center">
            <div className="text-3xl font-bold text-primary mb-2">۹۵٪</div>
            <div className="text-sm text-muted-foreground font-persian">رضایت مشتری</div>
          </div>
          <div className="text-center">
            <div className="text-3xl font-bold text-primary mb-2">۲۴/۷</div>
            <div className="text-sm text-muted-foreground font-persian">پشتیبانی</div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default TrustedBySection;
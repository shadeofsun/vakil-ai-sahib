import { useState } from "react";
import { Dialog, DialogContent, DialogHeader, DialogTitle } from "@/components/ui/dialog";
import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import { Textarea } from "@/components/ui/textarea";
import { RadioGroup, RadioGroupItem } from "@/components/ui/radio-group";
import { Label } from "@/components/ui/label";
import { useToast } from "@/hooks/use-toast";
import { FileText, Scale, MessageSquare, File, Sheet, Users, Loader2 } from "lucide-react";

interface RequestModalProps {
  isOpen: boolean;
  onClose: () => void;
}

const services = [
  { id: "petition", name: "تهیه دادخواست", icon: FileText },
  { id: "brief", name: "تهیه لایحه", icon: Scale },
  { id: "complaint", name: "تهیه شکواییه", icon: MessageSquare },
  { id: "contract", name: "تهیه قرارداد", icon: File },
  { id: "declaration", name: "تهیه اظهارنامه", icon: Sheet },
  { id: "consultation", name: "مشاوره حقوقی", icon: Users },
];

const RequestModal = ({ isOpen, onClose }: RequestModalProps) => {
  const [formData, setFormData] = useState({
    title: "",
    type: "",
    content: ""
  });
  const [isSubmitting, setIsSubmitting] = useState(false);
  const { toast } = useToast();

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    
    if (!formData.title || !formData.type || !formData.content) {
      toast({
        title: "خطا",
        description: "لطفاً تمام فیلدها را پر کنید",
        variant: "destructive",
      });
      return;
    }

    setIsSubmitting(true);

    try {
      const response = await fetch("https://vakil.my/api/req", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(formData),
      });

      if (response.ok) {
        toast({
          title: "درخواست ارسال شد",
          description: "درخواست شما با موفقیت ثبت شد. بزودی با شما تماس می‌گیریم.",
        });
        setFormData({ title: "", type: "", content: "" });
        onClose();
      } else {
        throw new Error("خطا در ارسال درخواست");
      }
    } catch (error) {
      toast({
        title: "خطا",
        description: "خطا در ارسال درخواست. لطفاً دوباره تلاش کنید.",
        variant: "destructive",
      });
    } finally {
      setIsSubmitting(false);
    }
  };

  return (
    <Dialog open={isOpen} onOpenChange={onClose}>
      <DialogContent className="max-w-2xl max-h-[90vh] overflow-y-auto">
        <DialogHeader>
          <DialogTitle className="text-2xl font-bold text-center font-persian">
            شروع درخواست حقوقی
          </DialogTitle>
        </DialogHeader>

        <form onSubmit={handleSubmit} className="space-y-6 mt-6">
          {/* عنوان درخواست */}
          <div className="space-y-2">
            <Label htmlFor="title" className="text-right block font-persian">
              عنوان درخواست *
            </Label>
            <Input
              id="title"
              value={formData.title}
              onChange={(e) => setFormData(prev => ({ ...prev, title: e.target.value }))}
              placeholder="مثال: تهیه قرارداد خرید و فروش آپارتمان"
              className="text-right font-persian"
              required
            />
          </div>

          {/* نوع درخواست */}
          <div className="space-y-4">
            <Label className="text-right block font-persian">
              نوع درخواست *
            </Label>
            <RadioGroup
              value={formData.type}
              onValueChange={(value) => setFormData(prev => ({ ...prev, type: value }))}
              className="grid grid-cols-1 md:grid-cols-2 gap-4"
            >
              {services.map((service) => {
                const Icon = service.icon;
                return (
                  <div key={service.id} className="flex items-center space-x-2 space-x-reverse">
                    <RadioGroupItem value={service.id} id={service.id} />
                    <Label 
                      htmlFor={service.id} 
                      className="flex items-center gap-3 cursor-pointer p-3 rounded-lg border border-border hover:bg-accent/5 transition-colors flex-1"
                    >
                      <Icon className="w-5 h-5 text-accent" />
                      <span className="font-persian">{service.name}</span>
                    </Label>
                  </div>
                );
              })}
            </RadioGroup>
          </div>

          {/* متن درخواست */}
          <div className="space-y-2">
            <Label htmlFor="content" className="text-right block font-persian">
              متن درخواست و جزئیات *
            </Label>
            <Textarea
              id="content"
              value={formData.content}
              onChange={(e) => setFormData(prev => ({ ...prev, content: e.target.value }))}
              placeholder="لطفاً جزئیات کاملی از درخواست خود ارائه دهید. هر چه اطلاعات بیشتری ارائه دهید، خروجی دقیق‌تری دریافت خواهید کرد."
              className="min-h-[120px] text-right font-persian"
              required
            />
          </div>

          {/* دکمه ثبت */}
          <div className="flex gap-4 pt-4">
            <Button
              type="button"
              variant="outline"
              onClick={onClose}
              className="flex-1 font-persian"
            >
              انصراف
            </Button>
            <Button
              type="submit"
              variant="hero"
              disabled={isSubmitting}
              className="flex-1 font-persian"
            >
              {isSubmitting ? (
                <>
                  <Loader2 className="w-4 h-4 mr-2 animate-spin" />
                  در حال ارسال...
                </>
              ) : (
                "ثبت درخواست"
              )}
            </Button>
          </div>
        </form>

        {/* اطلاعات تکمیلی */}
        <div className="mt-6 p-4 bg-accent/5 rounded-lg border border-accent/20">
          <p className="text-sm text-muted-foreground font-persian text-center">
            پس از ثبت درخواست، تیم ما در کمتر از ۱۰ دقیقه پاسخ شما را آماده خواهد کرد.
          </p>
        </div>
      </DialogContent>
    </Dialog>
  );
};

export default RequestModal;
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>وکیل.من - سرویس جامع حقوقی آنلاین</title>
    <meta name="description" content="وکیل.من - دسترسی آسان به خدمات حقوقی با کیفیت، مشاوره آنلاین، تنظیم قرارداد و پیگیری امور حقوقی">
    <meta name="keywords" content="وکیل آنلاین, مشاوره حقوقی, قرارداد, خدمات حقوقی">
    <link rel="canonical" href="https://vakil.my">
    
    <!-- Persian Font -->
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        /* Design System - Professional Legal Tech Brand */
        
        :root {
            /* Brand Colors - Professional Legal */
            --background: 0 0% 100%;
            --foreground: 210 20% 20%;

            --card: 0 0% 100%;
            --card-foreground: 210 20% 20%;

            --popover: 0 0% 100%;
            --popover-foreground: 210 20% 20%;

            /* Primary - Navy Blue */
            --primary: 210 100% 15%;
            --primary-foreground: 0 0% 100%;
            --primary-glow: 210 85% 25%;

            /* Secondary - Charcoal Gray */
            --secondary: 210 10% 35%;
            --secondary-foreground: 0 0% 100%;

            /* Muted & Subtle */
            --muted: 210 15% 96%;
            --muted-foreground: 210 10% 50%;

            /* Accent - Sophisticated Gold */
            --accent: 38 70% 50%;
            --accent-foreground: 0 0% 100%;

            --destructive: 0 84.2% 60.2%;
            --destructive-foreground: 0 0% 100%;

            --border: 210 15% 90%;
            --input: 210 15% 90%;
            --ring: 210 100% 15%;

            /* Brand Gradients */
            --gradient-hero: linear-gradient(135deg, hsl(210 100% 15%) 0%, hsl(210 85% 25%) 100%);
            --gradient-premium: linear-gradient(135deg, hsl(38 70% 50%) 0%, hsl(35 65% 45%) 100%);
            --gradient-subtle: linear-gradient(180deg, hsl(0 0% 100%) 0%, hsl(210 20% 99%) 100%);
            --gradient-success: linear-gradient(135deg, hsl(210 100% 15%) 0%, hsl(38 70% 50%) 100%);

            /* Shadows */
            --shadow-soft: 0 2px 8px -2px hsl(210 20% 20% / 0.08);
            --shadow-medium: 0 8px 25px -8px hsl(210 20% 20% / 0.12);
            --shadow-large: 0 20px 40px -15px hsl(210 20% 20% / 0.15);
            --shadow-glow: 0 0 0 1px hsl(38 70% 50% / 0.2);
            --shadow-premium: 0 10px 30px -10px hsl(210 100% 15% / 0.2);

            /* Animations */
            --transition-smooth: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --transition-bounce: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);

            --radius: 0.5rem;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Vazirmatn', 'Inter', sans-serif;
            font-feature-settings: "kern" 1, "liga" 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
            background-color: hsl(var(--background));
            color: hsl(var(--foreground));
            line-height: 1.6;
        }

        /* Utility Classes */
        .container { max-width: 1200px; margin: 0 auto; padding: 0 1rem; }
        .text-center { text-align: center; }
        .text-right { text-align: right; }
        .text-left { text-align: left; }
        .hidden { display: none; }
        .flex { display: flex; }
        .grid { display: grid; }
        .block { display: block; }
        .inline-block { display: inline-block; }
        .relative { position: relative; }
        .absolute { position: absolute; }
        .fixed { position: fixed; }
        .inset-0 { top: 0; right: 0; bottom: 0; left: 0; }
        .z-10 { z-index: 10; }
        .z-20 { z-index: 20; }
        .z-50 { z-index: 50; }
        
        /* Spacing */
        .p-4 { padding: 1rem; }
        .p-6 { padding: 1.5rem; }
        .p-8 { padding: 2rem; }
        .px-4 { padding-left: 1rem; padding-right: 1rem; }
        .py-4 { padding-top: 1rem; padding-bottom: 1rem; }
        .px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
        .py-6 { padding-top: 1.5rem; padding-bottom: 1.5rem; }
        .px-8 { padding-left: 2rem; padding-right: 2rem; }
        .py-8 { padding-top: 2rem; padding-bottom: 2rem; }
        .py-12 { padding-top: 3rem; padding-bottom: 3rem; }
        .py-16 { padding-top: 4rem; padding-bottom: 4rem; }
        .py-20 { padding-top: 5rem; padding-bottom: 5rem; }
        .pt-16 { padding-top: 4rem; }
        .pt-20 { padding-top: 5rem; }
        .mb-4 { margin-bottom: 1rem; }
        .mb-6 { margin-bottom: 1.5rem; }
        .mb-8 { margin-bottom: 2rem; }
        .mb-12 { margin-bottom: 3rem; }
        .mt-8 { margin-top: 2rem; }
        .mr-2 { margin-right: 0.5rem; }
        .ml-2 { margin-left: 0.5rem; }
        
        /* Layout */
        .w-full { width: 100%; }
        .h-full { height: 100%; }
        .min-h-screen { min-height: 100vh; }
        .max-w-7xl { max-width: 80rem; }
        .max-w-4xl { max-width: 56rem; }
        .max-w-md { max-width: 28rem; }
        .mx-auto { margin-left: auto; margin-right: auto; }
        
        /* Flexbox */
        .items-center { align-items: center; }
        .items-start { align-items: flex-start; }
        .justify-center { justify-content: center; }
        .justify-between { justify-content: space-between; }
        .justify-start { justify-content: flex-start; }
        .flex-col { flex-direction: column; }
        .flex-row { flex-direction: row; }
        .flex-wrap { flex-wrap: wrap; }
        .gap-4 { gap: 1rem; }
        .gap-6 { gap: 1.5rem; }
        .gap-8 { gap: 2rem; }
        
        /* Grid */
        .grid-cols-1 { grid-template-columns: repeat(1, minmax(0, 1fr)); }
        .grid-cols-2 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        .grid-cols-3 { grid-template-columns: repeat(3, minmax(0, 1fr)); }
        .grid-cols-4 { grid-template-columns: repeat(4, minmax(0, 1fr)); }
        
        /* Typography */
        .text-xs { font-size: 0.75rem; line-height: 1rem; }
        .text-sm { font-size: 0.875rem; line-height: 1.25rem; }
        .text-base { font-size: 1rem; line-height: 1.5rem; }
        .text-lg { font-size: 1.125rem; line-height: 1.75rem; }
        .text-xl { font-size: 1.25rem; line-height: 1.75rem; }
        .text-2xl { font-size: 1.5rem; line-height: 2rem; }
        .text-3xl { font-size: 1.875rem; line-height: 2.25rem; }
        .text-4xl { font-size: 2.25rem; line-height: 2.5rem; }
        .text-5xl { font-size: 3rem; line-height: 1; }
        .font-light { font-weight: 300; }
        .font-normal { font-weight: 400; }
        .font-medium { font-weight: 500; }
        .font-semibold { font-weight: 600; }
        .font-bold { font-weight: 700; }
        .font-extrabold { font-weight: 800; }
        .leading-tight { line-height: 1.25; }
        .leading-relaxed { line-height: 1.625; }
        
        /* Colors */
        .text-primary { color: hsl(var(--primary)); }
        .text-secondary { color: hsl(var(--secondary)); }
        .text-muted-foreground { color: hsl(var(--muted-foreground)); }
        .text-accent { color: hsl(var(--accent)); }
        .text-white { color: white; }
        .bg-primary { background-color: hsl(var(--primary)); }
        .bg-secondary { background-color: hsl(var(--secondary)); }
        .bg-muted { background-color: hsl(var(--muted)); }
        .bg-accent { background-color: hsl(var(--accent)); }
        .bg-white { background-color: white; }
        .bg-background { background-color: hsl(var(--background)); }
        .bg-card { background-color: hsl(var(--card)); }
        .bg-transparent { background-color: transparent; }
        .bg-gradient-hero { background: var(--gradient-hero); }
        .bg-gradient-premium { background: var(--gradient-premium); }
        
        /* Border */
        .border { border-width: 1px; border-color: hsl(var(--border)); }
        .border-primary { border-color: hsl(var(--primary)); }
        .border-accent { border-color: hsl(var(--accent)); }
        .rounded { border-radius: 0.25rem; }
        .rounded-md { border-radius: 0.375rem; }
        .rounded-lg { border-radius: 0.5rem; }
        .rounded-xl { border-radius: 0.75rem; }
        .rounded-full { border-radius: 9999px; }
        
        /* Shadow */
        .shadow-sm { box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05); }
        .shadow { box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1); }
        .shadow-md { box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1); }
        .shadow-lg { box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1); }
        .shadow-soft { box-shadow: var(--shadow-soft); }
        .shadow-medium { box-shadow: var(--shadow-medium); }
        .shadow-large { box-shadow: var(--shadow-large); }
        
        /* Transitions */
        .transition { transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-duration: 150ms; }
        .transition-all { transition-property: all; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-duration: 150ms; }
        .duration-300 { transition-duration: 300ms; }
        .ease-out { transition-timing-function: cubic-bezier(0, 0, 0.2, 1); }
        
        /* Transform */
        .scale-95 { transform: scale(0.95); }
        .scale-100 { transform: scale(1); }
        .scale-105 { transform: scale(1.05); }
        .hover\:scale-105:hover { transform: scale(1.05); }
        
        /* Opacity */
        .opacity-0 { opacity: 0; }
        .opacity-100 { opacity: 1; }
        
        /* Backdrop */
        .backdrop-blur-sm { backdrop-filter: blur(4px); -webkit-backdrop-filter: blur(4px); }
        
        /* Overflow */
        .overflow-hidden { overflow: hidden; }
        .overflow-y-auto { overflow-y: auto; }
        
        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            font-weight: 500;
            text-decoration: none;
            transition: var(--transition-smooth);
            cursor: pointer;
            border: none;
            white-space: nowrap;
        }
        
        .btn-primary {
            background-color: hsl(var(--primary));
            color: hsl(var(--primary-foreground));
        }
        
        .btn-primary:hover {
            background-color: hsl(var(--primary-glow));
            transform: translateY(-1px);
            box-shadow: var(--shadow-medium);
        }
        
        .btn-secondary {
            background-color: hsl(var(--secondary));
            color: hsl(var(--secondary-foreground));
        }
        
        .btn-outline {
            background-color: transparent;
            border: 1px solid hsl(var(--primary));
            color: hsl(var(--primary));
        }
        
        .btn-outline:hover {
            background-color: hsl(var(--primary));
            color: hsl(var(--primary-foreground));
        }
        
        .btn-accent {
            background: var(--gradient-premium);
            color: hsl(var(--accent-foreground));
        }
        
        .btn-lg {
            padding: 0.75rem 2rem;
            font-size: 1.125rem;
        }
        
        /* Forms */
        .form-input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid hsl(var(--border));
            border-radius: 0.375rem;
            background-color: hsl(var(--background));
            color: hsl(var(--foreground));
            font-family: inherit;
        }
        
        .form-input:focus {
            outline: none;
            border-color: hsl(var(--primary));
            box-shadow: 0 0 0 2px hsl(var(--primary) / 0.2);
        }
        
        .form-textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid hsl(var(--border));
            border-radius: 0.375rem;
            background-color: hsl(var(--background));
            color: hsl(var(--foreground));
            font-family: inherit;
            resize: vertical;
            min-height: 100px;
        }
        
        .form-textarea:focus {
            outline: none;
            border-color: hsl(var(--primary));
            box-shadow: 0 0 0 2px hsl(var(--primary) / 0.2);
        }
        
        /* Cards */
        .card {
            background-color: hsl(var(--card));
            border-radius: 0.5rem;
            padding: 1.5rem;
            box-shadow: var(--shadow-soft);
            border: 1px solid hsl(var(--border));
            transition: var(--transition-smooth);
        }
        
        .card:hover {
            box-shadow: var(--shadow-medium);
            transform: translateY(-2px);
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(2deg); }
        }
        
        .animate-fade-in {
            animation: fadeIn 0.5s ease-out;
        }
        
        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }
        
        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
        
        /* Responsive Design */
        @media (min-width: 640px) {
            .sm\:text-lg { font-size: 1.125rem; line-height: 1.75rem; }
            .sm\:text-xl { font-size: 1.25rem; line-height: 1.75rem; }
            .sm\:text-2xl { font-size: 1.5rem; line-height: 2rem; }
            .sm\:text-3xl { font-size: 1.875rem; line-height: 2.25rem; }
            .sm\:text-4xl { font-size: 2.25rem; line-height: 2.5rem; }
            .sm\:text-5xl { font-size: 3rem; line-height: 1; }
            .sm\:px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
            .sm\:py-16 { padding-top: 4rem; padding-bottom: 4rem; }
            .sm\:grid-cols-2 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .sm\:flex-row { flex-direction: row; }
            .sm\:block { display: block; }
            .sm\:hidden { display: none; }
        }
        
        @media (min-width: 768px) {
            .md\:text-2xl { font-size: 1.5rem; line-height: 2rem; }
            .md\:text-3xl { font-size: 1.875rem; line-height: 2.25rem; }
            .md\:text-4xl { font-size: 2.25rem; line-height: 2.5rem; }
            .md\:text-5xl { font-size: 3rem; line-height: 1; }
            .md\:text-6xl { font-size: 3.75rem; line-height: 1; }
            .md\:pt-20 { padding-top: 5rem; }
            .md\:grid-cols-3 { grid-template-columns: repeat(3, minmax(0, 1fr)); }
            .md\:flex-row { flex-direction: row; }
        }
        
        @media (min-width: 1024px) {
            .lg\:text-3xl { font-size: 1.875rem; line-height: 2.25rem; }
            .lg\:text-4xl { font-size: 2.25rem; line-height: 2.5rem; }
            .lg\:text-5xl { font-size: 3rem; line-height: 1; }
            .lg\:text-6xl { font-size: 3.75rem; line-height: 1; }
            .lg\:text-7xl { font-size: 4.5rem; line-height: 1; }
            .lg\:px-8 { padding-left: 2rem; padding-right: 2rem; }
            .lg\:py-20 { padding-top: 5rem; padding-bottom: 5rem; }
            .lg\:grid-cols-3 { grid-template-columns: repeat(3, minmax(0, 1fr)); }
            .lg\:grid-cols-4 { grid-template-columns: repeat(4, minmax(0, 1fr)); }
        }
        
        @media (min-width: 1280px) {
            .xl\:text-7xl { font-size: 4.5rem; line-height: 1; }
            .xl\:grid-cols-4 { grid-template-columns: repeat(4, minmax(0, 1fr)); }
        }
        
        /* Mobile Menu */
        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
        }
        
        .mobile-menu.active {
            transform: translateX(0);
        }
        
        /* FAQ Styles */
        .faq-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-in-out;
        }
        
        .faq-icon {
            transition: transform 0.3s ease-in-out;
        }
        
        /* Modal Styles */
        .modal-content {
            transform: scale(0.95);
            opacity: 0;
            transition: all 0.2s ease-out;
        }
        
        .modal-content.scale-100 {
            transform: scale(1);
        }
        
        .modal-content.opacity-100 {
            opacity: 1;
        }
        
        /* Radio Button Styles */
        .radio-group {
            display: grid;
            gap: 0.75rem;
        }
        
        .radio-item {
            display: flex;
            align-items: center;
            padding: 1rem;
            border: 1px solid hsl(var(--border));
            border-radius: 0.5rem;
            cursor: pointer;
            transition: var(--transition-smooth);
        }
        
        .radio-item:hover {
            border-color: hsl(var(--primary));
            background-color: hsl(var(--muted));
        }
        
        .radio-item input[type="radio"] {
            margin-left: 0.75rem;
        }
        
        .radio-item.selected {
            border-color: hsl(var(--primary));
            background-color: hsl(var(--primary) / 0.05);
        }
        
        /* Star Rating */
        .star {
            color: #fbbf24;
            font-size: 1.25rem;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-transparent transition-all duration-300">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center">
                    <div class="bg-gradient-hero text-white p-2 rounded-lg ml-3">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                    <span class="text-2xl font-bold text-primary">وکیل.من</span>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center gap-8">
                    <a href="#services" class="text-muted-foreground hover:text-primary transition-all duration-300">خدمات</a>
                    <a href="#how-it-works" class="text-muted-foreground hover:text-primary transition-all duration-300">نحوه کار</a>
                    <a href="#pricing" class="text-muted-foreground hover:text-primary transition-all duration-300">قیمت‌ها</a>
                    <a href="#testimonials" class="text-muted-foreground hover:text-primary transition-all duration-300">نظرات</a>
                    <button onclick="openRequestModal()" class="btn btn-primary btn-lg">شروع کنید</button>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="md:hidden p-2 rounded-lg hover:bg-muted transition-all">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden hidden bg-background border-t border-border py-4">
                <div class="flex flex-col gap-4">
                    <a href="#services" class="text-muted-foreground hover:text-primary px-4 py-2 transition-all">خدمات</a>
                    <a href="#how-it-works" class="text-muted-foreground hover:text-primary px-4 py-2 transition-all">نحوه کار</a>
                    <a href="#pricing" class="text-muted-foreground hover:text-primary px-4 py-2 transition-all">قیمت‌ها</a>
                    <a href="#testimonials" class="text-muted-foreground hover:text-primary px-4 py-2 transition-all">نظرات</a>
                    <button onclick="openRequestModal()" class="btn btn-primary mx-4 mt-2">شروع کنید</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="py-20 bg-gradient-hero text-white overflow-hidden relative">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 pt-16 md:pt-20">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold mb-6 leading-tight">
                    حقوق شما با
                    <span class="bg-gradient-premium bg-clip-text text-transparent">هوش مصنوعی</span>
                </h1>
                <p class="text-xl sm:text-2xl mb-12 leading-relaxed opacity-90">
                    دسترسی آسان به خدمات حقوقی با کیفیت، مشاوره آنلاین و تنظیم اسناد حقوقی در کمترین زمان
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-16">
                    <button onclick="openRequestModal()" class="btn btn-accent btn-lg px-8 py-4 text-lg">
                        شروع رایگان
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                        </svg>
                    </button>
                    <button class="btn btn-outline border-white text-white hover:bg-white hover:text-primary px-8 py-4 text-lg">
                        مشاهده نمونه‌کار
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </button>
                </div>

                <!-- Statistics -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 counters-section">
                    <div class="text-center">
                        <div class="text-3xl sm:text-4xl font-bold mb-2 counter" data-target="10000">10,000</div>
                        <div class="text-base opacity-80">مشتری راضی</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl sm:text-4xl font-bold mb-2 counter" data-target="50000">50,000</div>
                        <div class="text-base opacity-80">سند تنظیم شده</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl sm:text-4xl font-bold mb-2">98%</div>
                        <div class="text-base opacity-80">رضایت مشتری</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl sm:text-4xl font-bold mb-2">24/7</div>
                        <div class="text-base opacity-80">پشتیبانی</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Background Shapes -->
        <div class="absolute top-20 right-10 w-20 h-20 bg-white/10 rounded-full animate-float"></div>
        <div class="absolute bottom-20 left-10 w-16 h-16 bg-accent/20 rounded-full animate-float" style="animation-delay: 1s;"></div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 lg:py-20 bg-gradient-subtle">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-primary mb-6">خدمات ما</h2>
                <p class="text-lg sm:text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
                    ما طیف کاملی از خدمات حقوقی را با بهره‌گیری از آخرین فناوری‌ها ارائه می‌دهیم
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1: Contract Drafting -->
                <div class="card animate-on-scroll">
                    <div class="bg-primary/10 w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-primary mb-4">تنظیم قرارداد</h3>
                    <p class="text-muted-foreground mb-6 leading-relaxed">
                        تنظیم انواع قراردادها با دقت و سرعت بالا توسط سیستم هوش مصنوعی
                    </p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center text-sm">
                            <svg class="w-4 h-4 text-accent ml-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            قرارداد خرید و فروش
                        </li>
                        <li class="flex items-center text-sm">
                            <svg class="w-4 h-4 text-accent ml-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            قرارداد کار و استخدام
                        </li>
                        <li class="flex items-center text-sm">
                            <svg class="w-4 h-4 text-accent ml-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            قرارداد اجاره و رهن
                        </li>
                    </ul>
                    <button onclick="openRequestModal()" class="btn btn-primary w-full">شروع کنید</button>
                </div>

                <!-- Service 2: Legal Consultation -->
                <div class="card animate-on-scroll">
                    <div class="bg-accent/10 w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-primary mb-4">مشاوره حقوقی</h3>
                    <p class="text-muted-foreground mb-6 leading-relaxed">
                        دریافت مشاوره تخصصی از وکلای مجرب در زمینه‌های مختلف حقوقی
                    </p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center text-sm">
                            <svg class="w-4 h-4 text-accent ml-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            مشاوره آنلاین
                        </li>
                        <li class="flex items-center text-sm">
                            <svg class="w-4 h-4 text-accent ml-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            پاسخ در ۲۴ ساعت
                        </li>
                        <li class="flex items-center text-sm">
                            <svg class="w-4 h-4 text-accent ml-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            قیمت مقرون‌به‌صرفه
                        </li>
                    </ul>
                    <button onclick="openRequestModal()" class="btn btn-primary w-full">شروع کنید</button>
                </div>

                <!-- Service 3: Document Review -->
                <div class="card animate-on-scroll">
                    <div class="bg-secondary/10 w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-primary mb-4">بررسی اسناد</h3>
                    <p class="text-muted-foreground mb-6 leading-relaxed">
                        بررسی دقیق اسناد حقوقی و شناسایی نکات مهم توسط متخصصان
                    </p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center text-sm">
                            <svg class="w-4 h-4 text-accent ml-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            تحلیل هوش مصنوعی
                        </li>
                        <li class="flex items-center text-sm">
                            <svg class="w-4 h-4 text-accent ml-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            بررسی متخصص
                        </li>
                        <li class="flex items-center text-sm">
                            <svg class="w-4 h-4 text-accent ml-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            گزارش کامل
                        </li>
                    </ul>
                    <button onclick="openRequestModal()" class="btn btn-primary w-full">شروع کنید</button>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="mt-20 text-center bg-muted rounded-xl p-12">
                <h3 class="text-2xl font-bold text-primary mb-4">خدمت مورد نظر خود را پیدا نکردید؟</h3>
                <p class="text-muted-foreground mb-8 max-w-2xl mx-auto">
                    ما آماده ارائه مشاوره رایگان برای بررسی نیازهای خاص شما هستیم
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button onclick="openRequestModal()" class="btn btn-primary btn-lg">درخواست مشاوره رایگان</button>
                    <button class="btn btn-outline btn-lg">تماس با پشتیبانی</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Trusted By Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-2xl font-semibold text-primary mb-4">مورد اعتماد شرکت‌های معتبر</h2>
                <p class="text-muted-foreground">بیش از ۱۰۰۰ شرکت و سازمان به ما اعتماد کرده‌اند</p>
            </div>

            <!-- Brand Logos -->
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center opacity-60">
                <div class="text-center">
                    <div class="bg-gray-100 h-12 w-20 mx-auto rounded mb-2 flex items-center justify-center">
                        <span class="text-sm font-medium">دیجی‌کالا</span>
                    </div>
                </div>
                <div class="text-center">
                    <div class="bg-gray-100 h-12 w-20 mx-auto rounded mb-2 flex items-center justify-center">
                        <span class="text-sm font-medium">اسنپ</span>
                    </div>
                </div>
                <div class="text-center">
                    <div class="bg-gray-100 h-12 w-20 mx-auto rounded mb-2 flex items-center justify-center">
                        <span class="text-sm font-medium">تپسی</span>
                    </div>
                </div>
                <div class="text-center">
                    <div class="bg-gray-100 h-12 w-20 mx-auto rounded mb-2 flex items-center justify-center">
                        <span class="text-sm font-medium">کافه‌بازار</span>
                    </div>
                </div>
                <div class="text-center">
                    <div class="bg-gray-100 h-12 w-20 mx-auto rounded mb-2 flex items-center justify-center">
                        <span class="text-sm font-medium">بانک پاسارگاد</span>
                    </div>
                </div>
                <div class="text-center">
                    <div class="bg-gray-100 h-12 w-20 mx-auto rounded mb-2 flex items-center justify-center">
                        <span class="text-sm font-medium">ایران‌سل</span>
                    </div>
                </div>
            </div>

            <!-- Statistics -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-16">
                <div class="text-center">
                    <div class="text-3xl font-bold text-primary mb-2">۱۰,۰۰۰+</div>
                    <div class="text-muted-foreground">مشتری راضی</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-primary mb-2">۵۰,۰۰۰+</div>
                    <div class="text-muted-foreground">سند تنظیم شده</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-primary mb-2">۹۸%</div>
                    <div class="text-muted-foreground">رضایت مشتری</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-primary mb-2">۲۴/۷</div>
                    <div class="text-muted-foreground">پشتیبانی</div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="py-16 lg:py-20 bg-gradient-subtle">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-primary mb-6">چگونه کار می‌کند؟</h2>
                <p class="text-lg sm:text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
                    فرآیند دریافت خدمات حقوقی در وکیل.من بسیار ساده و سریع است
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
                <!-- Step 1 -->
                <div class="text-center animate-on-scroll">
                    <div class="bg-primary/10 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 relative">
                        <svg class="w-10 h-10 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        <div class="absolute -top-2 -right-2 bg-accent text-white w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold">۱</div>
                    </div>
                    <h3 class="text-xl font-semibold text-primary mb-4">ثبت درخواست</h3>
                    <p class="text-muted-foreground leading-relaxed">
                        نوع خدمت مورد نیاز خود را انتخاب کرده و جزئیات درخواست را وارد کنید
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="text-center animate-on-scroll">
                    <div class="bg-accent/10 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 relative">
                        <svg class="w-10 h-10 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                        <div class="absolute -top-2 -right-2 bg-accent text-white w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold">۲</div>
                    </div>
                    <h3 class="text-xl font-semibold text-primary mb-4">پردازش هوش مصنوعی</h3>
                    <p class="text-muted-foreground leading-relaxed">
                        سیستم هوش مصنوعی درخواست شما را تحلیل کرده و بهترین راه‌حل را ارائه می‌دهد
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="text-center animate-on-scroll">
                    <div class="bg-secondary/10 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 relative">
                        <svg class="w-10 h-10 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                        <div class="absolute -top-2 -right-2 bg-accent text-white w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold">۳</div>
                    </div>
                    <h3 class="text-xl font-semibold text-primary mb-4">تحویل سریع</h3>
                    <p class="text-muted-foreground leading-relaxed">
                        اسناد آماده شده توسط وکلای مجرب بررسی و در کوتاه‌ترین زمان تحویل داده می‌شود
                    </p>
                </div>
            </div>

            <!-- Key Features -->
            <div class="bg-white rounded-2xl p-8 md:p-12 shadow-large">
                <div class="text-center mb-12">
                    <h3 class="text-2xl font-bold text-primary mb-4">ویژگی‌های کلیدی</h3>
                    <p class="text-muted-foreground">چرا وکیل.من بهترین انتخاب شماست؟</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="bg-primary/10 w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-primary mb-2">تحویل ۲۴ ساعته</h4>
                        <p class="text-sm text-muted-foreground">اکثر درخواست‌ها در کمتر از ۲۴ ساعت آماده می‌شوند</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="bg-accent/10 w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-primary mb-2">دقت ۹۸ درصدی</h4>
                        <p class="text-sm text-muted-foreground">سیستم هوش مصنوعی ما دقت بالایی در تنظیم اسناد دارد</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="bg-secondary/10 w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-primary mb-2">پشتیبانی مداوم</h4>
                        <p class="text-sm text-muted-foreground">تیم پشتیبانی ما ۲۴/۷ در خدمت شماست</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-16 lg:py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-primary mb-6">قیمت‌گذاری شفاف</h2>
                <p class="text-lg sm:text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
                    پلن مناسب خود را انتخاب کنید و از خدمات حقوقی با کیفیت بهره‌مند شوید
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
                <!-- Basic Plan -->
                <div class="card border-2 border-transparent hover:border-primary/20">
                    <div class="text-center mb-8">
                        <h3 class="text-xl font-semibold text-primary mb-2">پایه</h3>
                        <div class="mb-4">
                            <span class="text-4xl font-bold text-primary">۴۹,۰۰۰</span>
                            <span class="text-muted-foreground"> تومان</span>
                        </div>
                        <p class="text-muted-foreground">برای افراد و کسب‌وکارهای کوچک</p>
                    </div>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-accent ml-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            تنظیم ۱ قرارداد ساده
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-accent ml-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            مشاوره ۳۰ دقیقه‌ای
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-accent ml-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            پشتیبانی ایمیلی
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-accent ml-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            تحویل ۴۸ ساعته
                        </li>
                    </ul>
                    
                    <button onclick="openRequestModal()" class="btn btn-outline w-full">انتخاب پلن</button>
                </div>

                <!-- Professional Plan -->
                <div class="card border-2 border-primary bg-primary/5 scale-105 relative">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="bg-gradient-premium text-white px-4 py-1 rounded-full text-sm font-medium">محبوب</span>
                    </div>
                    
                    <div class="text-center mb-8">
                        <h3 class="text-xl font-semibold text-primary mb-2">حرفه‌ای</h3>
                        <div class="mb-4">
                            <span class="text-4xl font-bold text-primary">۱۲۹,۰۰۰</span>
                            <span class="text-muted-foreground"> تومان</span>
                        </div>
                        <p class="text-muted-foreground">برای کسب‌وکارهای متوسط</p>
                    </div>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-accent ml-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            تنظیم ۳ قرارداد
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-accent ml-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            مشاوره ۲ ساعته
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-accent ml-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            پشتیبانی تلفنی
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-accent ml-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            تحویل ۲۴ ساعته
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-accent ml-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            بررسی رایگان اسناد
                        </li>
                    </ul>
                    
                    <button onclick="openRequestModal()" class="btn btn-primary w-full">انتخاب پلن</button>
                </div>

                <!-- Enterprise Plan -->
                <div class="card border-2 border-transparent hover:border-primary/20">
                    <div class="text-center mb-8">
                        <h3 class="text-xl font-semibold text-primary mb-2">سازمانی</h3>
                        <div class="mb-4">
                            <span class="text-4xl font-bold text-primary">۴۹۹,۰۰۰</span>
                            <span class="text-muted-foreground"> تومان</span>
                        </div>
                        <p class="text-muted-foreground">برای شرکت‌ها و سازمان‌های بزرگ</p>
                    </div>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-accent ml-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            قرارداد نامحدود
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-accent ml-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            مشاوره نامحدود
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-accent ml-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            مدیر حساب اختصاصی
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-accent ml-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            تحویل فوری
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-accent ml-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            امکانات سفارشی
                        </li>
                    </ul>
                    
                    <button onclick="openRequestModal()" class="btn btn-accent w-full">تماس برای قیمت</button>
                </div>
            </div>

            <!-- Guarantee -->
            <div class="text-center bg-gradient-subtle p-8 rounded-xl">
                <div class="max-w-2xl mx-auto">
                    <div class="bg-accent/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-4">ضمانت بازگشت وجه</h3>
                    <p class="text-muted-foreground mb-6">
                        اگر از کیفیت خدمات ما راضی نباشید، تا ۷ روز فرصت دارید وجه خود را بازپس بگیرید
                    </p>
                    <div class="text-sm text-muted-foreground">
                        ⭐ رضایت ۹۸% مشتریان ⭐ بیش از ۱۰,۰۰۰ مشتری راضی ⭐ پشتیبانی ۲۴/۷
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-16 lg:py-20 bg-gradient-subtle">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-primary mb-6">نظرات مشتریان</h2>
                <p class="text-lg sm:text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
                    ببینید مشتریان ما در مورد خدمات وکیل.من چه می‌گویند
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <!-- Testimonial 1 -->
                <div class="card animate-on-scroll">
                    <div class="mb-4">
                        <svg class="w-8 h-8 text-accent mb-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                        </svg>
                        
                        <div class="flex mb-4">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                        </div>
                        
                        <p class="text-muted-foreground mb-6 leading-relaxed">
                            "خدمات فوق‌العاده‌ای از وکیل.من دریافت کردم. قرارداد خرید خانه‌ام در کمتر از ۲۴ ساعت آماده شد و کیفیت کار بسیار بالا بود."
                        </p>
                    </div>
                    
                    <div class="flex items-center">
                        <div class="bg-primary/10 w-12 h-12 rounded-full flex items-center justify-center ml-4">
                            <span class="text-primary font-medium">ع.ح</span>
                        </div>
                        <div>
                            <div class="font-medium text-primary">علی حسینی</div>
                            <div class="text-sm text-muted-foreground">کارآفرین</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="card animate-on-scroll">
                    <div class="mb-4">
                        <svg class="w-8 h-8 text-accent mb-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                        </svg>
                        
                        <div class="flex mb-4">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                        </div>
                        
                        <p class="text-muted-foreground mb-6 leading-relaxed">
                            "مشاوره حقوقی که از وکیل.من گرفتم بسیار حرفه‌ای و مفید بود. قیمت‌ها نیز بسیار مناسب است."
                        </p>
                    </div>
                    
                    <div class="flex items-center">
                        <div class="bg-accent/10 w-12 h-12 rounded-full flex items-center justify-center ml-4">
                            <span class="text-accent font-medium">ز.ا</span>
                        </div>
                        <div>
                            <div class="font-medium text-primary">زهرا احمدی</div>
                            <div class="text-sm text-muted-foreground">مدیر فروش</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="card animate-on-scroll">
                    <div class="mb-4">
                        <svg class="w-8 h-8 text-accent mb-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                        </svg>
                        
                        <div class="flex mb-4">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                        </div>
                        
                        <p class="text-muted-foreground mb-6 leading-relaxed">
                            "پلتفرم بسیار کاربرپسندی دارند و فرآیند ثبت درخواست بسیار ساده است. پیشنهاد می‌کنم حتماً امتحان کنید."
                        </p>
                    </div>
                    
                    <div class="flex items-center">
                        <div class="bg-secondary/10 w-12 h-12 rounded-full flex items-center justify-center ml-4">
                            <span class="text-secondary font-medium">م.ر</span>
                        </div>
                        <div>
                            <div class="font-medium text-primary">محمد رضایی</div>
                            <div class="text-sm text-muted-foreground">مهندس نرم‌افزار</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Overall Rating -->
            <div class="text-center bg-white rounded-xl p-8">
                <div class="flex justify-center mb-4">
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                </div>
                <div class="text-3xl font-bold text-primary mb-2">۴.۹ از ۵</div>
                <div class="text-muted-foreground">بر اساس نظر ۱,۰۰۰+ مشتری</div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 lg:py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-primary mb-6">سوالات متداول</h2>
                <p class="text-lg sm:text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
                    پاسخ سوالات رایج در مورد خدمات وکیل.من
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="space-y-6">
                    <!-- FAQ 1 -->
                    <div class="faq-item border border-border rounded-lg">
                        <button class="faq-trigger w-full p-6 text-right flex justify-between items-center">
                            <span class="font-medium text-primary">چگونه می‌توانم از خدمات وکیل.من استفاده کنم؟</span>
                            <svg class="faq-icon w-6 h-6 text-muted-foreground transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </button>
                        <div class="faq-content px-6 pb-6">
                            <p class="text-muted-foreground leading-relaxed">
                                برای استفاده از خدمات وکیل.من، کافی است روی دکمه "شروع کنید" کلیک کرده و نوع خدمت مورد نیاز خود را انتخاب کنید. سپس جزئیات درخواست خود را وارد کنید و درخواست را ثبت کنید. تیم ما در اسرع وقت با شما تماس خواهد گرفت.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="faq-item border border-border rounded-lg">
                        <button class="faq-trigger w-full p-6 text-right flex justify-between items-center">
                            <span class="font-medium text-primary">هزینه خدمات چقدر است؟</span>
                            <svg class="faq-icon w-6 h-6 text-muted-foreground transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </button>
                        <div class="faq-content px-6 pb-6">
                            <p class="text-muted-foreground leading-relaxed">
                                هزینه خدمات بر اساس نوع و پیچیدگی درخواست شما متفاوت است. ما سه پلن پایه، حرفه‌ای و سازمانی داریم که شروع از ۴۹,۰۰۰ تومان است. برای اطلاع از قیمت دقیق، می‌توانید درخواست خود را ثبت کنید تا قیمت نهایی به شما اعلام شود.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="faq-item border border-border rounded-lg">
                        <button class="faq-trigger w-full p-6 text-right flex justify-between items-center">
                            <span class="font-medium text-primary">چقدر طول می‌کشد تا درخواست من آماده شود؟</span>
                            <svg class="faq-icon w-6 h-6 text-muted-foreground transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </button>
                        <div class="faq-content px-6 pb-6">
                            <p class="text-muted-foreground leading-relaxed">
                                بسته به نوع خدمت، زمان تحویل متفاوت است. قراردادهای ساده معمولاً در کمتر از ۲۴ ساعت آماده می‌شوند. درخواست‌های پیچیده‌تر ممکن است تا ۷۲ ساعت زمان ببرند. زمان دقیق تحویل هنگام ثبت درخواست به شما اعلام می‌شود.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="faq-item border border-border rounded-lg">
                        <button class="faq-trigger w-full p-6 text-right flex justify-between items-center">
                            <span class="font-medium text-primary">آیا خدمات شما دارای اعتبار قانونی است؟</span>
                            <svg class="faq-icon w-6 h-6 text-muted-foreground transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </button>
                        <div class="faq-content px-6 pb-6">
                            <p class="text-muted-foreground leading-relaxed">
                                بله، تمامی اسناد و قراردادهای تنظیم شده توسط وکیل.من توسط وکلای پایه یک دادگستری بررسی و تأیید می‌شوند و دارای اعتبار کامل قانونی هستند. همچنین تمامی خدمات ما مطابق با قوانین جمهوری اسلامی ایران ارائه می‌شود.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="faq-item border border-border rounded-lg">
                        <button class="faq-trigger w-full p-6 text-right flex justify-between items-center">
                            <span class="font-medium text-primary">آیا امکان تغییر و اصلاح اسناد وجود دارد؟</span>
                            <svg class="faq-icon w-6 h-6 text-muted-foreground transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </button>
                        <div class="faq-content px-6 pb-6">
                            <p class="text-muted-foreground leading-relaxed">
                                بله، شما تا ۷ روز پس از تحویل امکان درخواست اصلاح سند را دارید. اولین بار اصلاح رایگان است و اصلاحات بعدی با هزینه جزئی انجام می‌شود. همچنین اگر از کیفیت کار راضی نباشید، می‌توانید وجه خود را بازپس بگیرید.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Contact Support -->
                <div class="mt-16 text-center bg-gradient-subtle rounded-xl p-8">
                    <h3 class="text-xl font-bold text-primary mb-4">سوال دیگری دارید؟</h3>
                    <p class="text-muted-foreground mb-6">
                        تیم پشتیبانی ما آماده پاسخگویی به سوالات شماست
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button onclick="openRequestModal()" class="btn btn-primary">ارسال سوال</button>
                        <button class="btn btn-outline">تماس تلفنی</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-white py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                <!-- Brand -->
                <div>
                    <div class="flex items-center mb-6">
                        <div class="bg-white text-primary p-2 rounded-lg ml-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <span class="text-2xl font-bold">وکیل.من</span>
                    </div>
                    <p class="text-white/80 mb-6 leading-relaxed">
                        ارائه خدمات حقوقی مدرن و قابل اعتماد با بهره‌گیری از فناوری هوش مصنوعی
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="bg-white/10 p-2 rounded-lg hover:bg-white/20 transition-all">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="bg-white/10 p-2 rounded-lg hover:bg-white/20 transition-all">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                        <a href="#" class="bg-white/10 p-2 rounded-lg hover:bg-white/20 transition-all">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="text-lg font-semibold mb-6">خدمات</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-white/80 hover:text-white transition-all">تنظیم قرارداد</a></li>
                        <li><a href="#" class="text-white/80 hover:text-white transition-all">مشاوره حقوقی</a></li>
                        <li><a href="#" class="text-white/80 hover:text-white transition-all">بررسی اسناد</a></li>
                        <li><a href="#" class="text-white/80 hover:text-white transition-all">وکالت دادگستری</a></li>
                        <li><a href="#" class="text-white/80 hover:text-white transition-all">ثبت شرکت</a></li>
                    </ul>
                </div>

                <!-- Support -->
                <div>
                    <h4 class="text-lg font-semibold mb-6">پشتیبانی</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-white/80 hover:text-white transition-all">مرکز راهنمایی</a></li>
                        <li><a href="#" class="text-white/80 hover:text-white transition-all">تماس با ما</a></li>
                        <li><a href="#" class="text-white/80 hover:text-white transition-all">قوانین و مقررات</a></li>
                        <li><a href="#" class="text-white/80 hover:text-white transition-all">حریم خصوصی</a></li>
                        <li><a href="#" class="text-white/80 hover:text-white transition-all">شرایط استفاده</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-lg font-semibold mb-6">تماس</h4>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span class="text-white/80">۰۲۱-۸۸۰۰۰۰۰۰</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-white/80">info@vakil.my</span>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-5 h-5 ml-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="text-white/80">تهران، خیابان ولیعصر، پلاک ۱۲۳۴</span>
                        </div>
                    </div>

                    <!-- Newsletter -->
                    <div class="mt-8">
                        <h5 class="font-medium mb-4">عضویت در خبرنامه</h5>
                        <div class="flex">
                            <input type="email" placeholder="ایمیل شما" class="form-input rounded-r-none bg-white/10 border-white/20 text-white placeholder-white/60">
                            <button class="btn btn-accent rounded-l-none px-4">عضویت</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-white/20 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="text-white/80 mb-4 md:mb-0">
                        © ۱۴۰۳ وکیل.من. تمامی حقوق محفوظ است.
                    </div>
                    <div class="text-white/60 text-sm">
                        طراحی و توسعه توسط تیم وکیل.من
                    </div>
                </div>
            </div>
        </div>

        <!-- Final CTA -->
        <div class="mt-16 bg-white/10 backdrop-blur-sm rounded-t-3xl p-8 text-center">
            <h3 class="text-2xl font-bold mb-4">آماده شروع هستید؟</h3>
            <p class="text-white/80 mb-6 max-w-2xl mx-auto">
                همین حالا درخواست خود را ثبت کنید و ۲۰% تخفیف ویژه دریافت کنید
            </p>
            <button onclick="openRequestModal()" class="btn btn-accent btn-lg">
                شروع با ۲۰% تخفیف
                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                </svg>
            </button>
        </div>
    </footer>

    <!-- Request Modal -->
    <div id="request-modal" class="fixed inset-0 z-50 hidden">
        <!-- Overlay -->
        <div id="modal-overlay" class="absolute inset-0 bg-black/50 backdrop-blur-sm hidden"></div>
        
        <!-- Modal Content -->
        <div class="flex items-center justify-center min-h-full p-4">
            <div class="modal-content bg-white rounded-xl max-w-md w-full p-8 relative scale-95 opacity-0 transition-all duration-200">
                <!-- Close Button -->
                <button onclick="closeRequestModal()" class="absolute top-4 left-4 text-muted-foreground hover:text-foreground">
                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>

                <!-- Header -->
                <div class="text-center mb-8">
                    <h2 class="text-2xl font-bold text-primary mb-2">درخواست خدمات حقوقی</h2>
                    <p class="text-muted-foreground">اطلاعات درخواست خود را وارد کنید</p>
                </div>

                <!-- Form -->
                <form id="request-form">
                    <!-- Title -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-foreground mb-2">عنوان درخواست</label>
                        <input type="text" name="title" class="form-input" placeholder="مثلاً: تنظیم قرارداد خرید خانه" required>
                    </div>

                    <!-- Service Type -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-foreground mb-4">نوع خدمت</label>
                        <div class="radio-group">
                            <label class="radio-item">
                                <div class="flex-1">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-primary ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                        <span class="font-medium">تنظیم قرارداد</span>
                                    </div>
                                    <p class="text-sm text-muted-foreground mt-1 mr-7">تنظیم انواع قراردادها</p>
                                </div>
                                <input type="radio" name="type" value="contract" class="text-primary">
                            </label>

                            <label class="radio-item">
                                <div class="flex-1">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-accent ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="font-medium">مشاوره حقوقی</span>
                                    </div>
                                    <p class="text-sm text-muted-foreground mt-1 mr-7">مشاوره با وکلای مجرب</p>
                                </div>
                                <input type="radio" name="type" value="consultation" class="text-primary">
                            </label>

                            <label class="radio-item">
                                <div class="flex-1">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-secondary ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                        </svg>
                                        <span class="font-medium">بررسی اسناد</span>
                                    </div>
                                    <p class="text-sm text-muted-foreground mt-1 mr-7">بررسی و تحلیل اسناد</p>
                                </div>
                                <input type="radio" name="type" value="review" class="text-primary">
                            </label>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-foreground mb-2">توضیحات درخواست</label>
                        <textarea name="content" class="form-textarea" placeholder="لطفاً جزئیات درخواست خود را شرح دهید..." required></textarea>
                    </div>

                    <!-- Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button type="button" onclick="closeRequestModal()" class="btn btn-outline flex-1">انصراف</button>
                        <button type="submit" class="btn btn-primary flex-1">ارسال درخواست</button>
                    </div>

                    <!-- Info -->
                    <div class="mt-6 p-4 bg-muted rounded-lg">
                        <div class="flex items-center text-sm text-muted-foreground">
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            پس از ارسال درخواست، طی ۲۴ ساعت پاسخ شما را خواهیم داد
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Mobile Menu Toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    const isHidden = mobileMenu.classList.contains('hidden');
                    if (isHidden) {
                        mobileMenu.classList.remove('hidden');
                        mobileMenu.classList.add('animate-fade-in');
                    } else {
                        mobileMenu.classList.add('hidden');
                        mobileMenu.classList.remove('animate-fade-in');
                    }
                });
            }

            // Smooth Scrolling for Navigation Links
            const navLinks = document.querySelectorAll('a[href^="#"]');
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);
                    
                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                        
                        // Close mobile menu if open
                        if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                            mobileMenu.classList.add('hidden');
                        }
                    }
                });
            });

            // Request Modal Functions
            window.openRequestModal = function() {
                const modal = document.getElementById('request-modal');
                const overlay = document.getElementById('modal-overlay');
                if (modal && overlay) {
                    modal.classList.remove('hidden');
                    overlay.classList.remove('hidden');
                    document.body.style.overflow = 'hidden';
                    
                    // Animate modal in
                    setTimeout(() => {
                        modal.querySelector('.modal-content').classList.add('scale-100', 'opacity-100');
                        modal.querySelector('.modal-content').classList.remove('scale-95', 'opacity-0');
                    }, 10);
                }
            };

            window.closeRequestModal = function() {
                const modal = document.getElementById('request-modal');
                const overlay = document.getElementById('modal-overlay');
                const modalContent = modal?.querySelector('.modal-content');
                
                if (modal && overlay && modalContent) {
                    // Animate modal out
                    modalContent.classList.remove('scale-100', 'opacity-100');
                    modalContent.classList.add('scale-95', 'opacity-0');
                    
                    setTimeout(() => {
                        modal.classList.add('hidden');
                        overlay.classList.add('hidden');
                        document.body.style.overflow = 'auto';
                    }, 200);
                }
            };

            // Close modal when clicking overlay
            const overlay = document.getElementById('modal-overlay');
            if (overlay) {
                overlay.addEventListener('click', function(e) {
                    if (e.target === this) {
                        closeRequestModal();
                    }
                });
            }

            // Close modal with Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    const modal = document.getElementById('request-modal');
                    if (modal && !modal.classList.contains('hidden')) {
                        closeRequestModal();
                    }
                }
            });

            // FAQ Accordion
            const faqItems = document.querySelectorAll('.faq-item');
            faqItems.forEach(item => {
                const trigger = item.querySelector('.faq-trigger');
                const content = item.querySelector('.faq-content');
                const icon = item.querySelector('.faq-icon');
                
                if (trigger && content && icon) {
                    trigger.addEventListener('click', function() {
                        const isOpen = content.style.maxHeight && content.style.maxHeight !== '0px';
                        
                        // Close all other FAQ items
                        faqItems.forEach(otherItem => {
                            if (otherItem !== item) {
                                const otherContent = otherItem.querySelector('.faq-content');
                                const otherIcon = otherItem.querySelector('.faq-icon');
                                if (otherContent && otherIcon) {
                                    otherContent.style.maxHeight = '0px';
                                    otherIcon.style.transform = 'rotate(0deg)';
                                }
                            }
                        });
                        
                        // Toggle current item
                        if (isOpen) {
                            content.style.maxHeight = '0px';
                            icon.style.transform = 'rotate(0deg)';
                        } else {
                            content.style.maxHeight = content.scrollHeight + 'px';
                            icon.style.transform = 'rotate(45deg)';
                        }
                    });
                }
            });

            // Form Submission
            const requestForm = document.getElementById('request-form');
            if (requestForm) {
                requestForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    const formData = new FormData(this);
                    const submitButton = this.querySelector('button[type="submit"]');
                    const originalText = submitButton.textContent;
                    
                    // Show loading state
                    submitButton.textContent = 'در حال ارسال...';
                    submitButton.disabled = true;
                    
                    // Simulate form submission (replace with actual API call)
                    setTimeout(() => {
                        // Show success message
                        alert('درخواست شما با موفقیت ارسال شد. به زودی با شما تماس خواهیم گرفت.');
                        
                        // Reset form
                        this.reset();
                        
                        // Close modal
                        closeRequestModal();
                        
                        // Reset button
                        submitButton.textContent = originalText;
                        submitButton.disabled = false;
                    }, 2000);
                });
            }

            // Radio button styling
            const radioItems = document.querySelectorAll('.radio-item');
            radioItems.forEach(item => {
                const radioInput = item.querySelector('input[type="radio"]');
                if (radioInput) {
                    radioInput.addEventListener('change', function() {
                        // Remove selected class from all items
                        radioItems.forEach(otherItem => {
                            otherItem.classList.remove('selected');
                        });
                        
                        // Add selected class to current item
                        if (this.checked) {
                            item.classList.add('selected');
                        }
                    });
                }
            });

            // Intersection Observer for Animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fade-in-up');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Observe elements for animation
            const animatedElements = document.querySelectorAll('.animate-on-scroll');
            animatedElements.forEach(el => observer.observe(el));

            // Navbar Background on Scroll
            const navbar = document.querySelector('nav');
            if (navbar) {
                window.addEventListener('scroll', function() {
                    if (window.scrollY > 50) {
                        navbar.classList.add('bg-background/95', 'backdrop-blur-sm', 'shadow-sm');
                        navbar.classList.remove('bg-transparent');
                    } else {
                        navbar.classList.remove('bg-background/95', 'backdrop-blur-sm', 'shadow-sm');
                        navbar.classList.add('bg-transparent');
                    }
                });
            }

            // Number Counter Animation
            function animateCounters() {
                const counters = document.querySelectorAll('.counter');
                counters.forEach(counter => {
                    const target = parseInt(counter.getAttribute('data-target'));
                    const increment = target / 100;
                    let current = 0;
                    
                    const updateCounter = () => {
                        if (current < target) {
                            current += increment;
                            counter.textContent = Math.ceil(current).toLocaleString('fa-IR');
                            requestAnimationFrame(updateCounter);
                        } else {
                            counter.textContent = target.toLocaleString('fa-IR');
                        }
                    };
                    
                    updateCounter();
                });
            }

            // Trigger counter animation when in view
            const countersSection = document.querySelector('.counters-section');
            if (countersSection) {
                const counterObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            animateCounters();
                            counterObserver.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.5 });
                
                counterObserver.observe(countersSection);
            }
        });
    </script>
</body>
</html>
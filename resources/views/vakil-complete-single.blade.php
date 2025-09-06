<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vakil.My - وکیل هوشمند شما</title>
    <meta name="description" content="تنظیم لایحه، اظهارنامه، قرارداد و شکواییه در 10 دقیقه! خدمات حقوقی سریع، دقیق و حرفه‌ای با هوش مصنوعی">
    <meta name="keywords" content="وکیل آنلاین, دادخواست, لایحه, شکواییه, قرارداد, اظهارنامه, مشاوره حقوقی">
    <link rel="canonical" href="https://vakil.my">
    
    <!-- Persian Font -->
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        /* Vakil.My Design System - Professional Legal Tech Brand */
        
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
        .inline-flex { display: inline-flex; }
        .relative { position: relative; }
        .absolute { position: absolute; }
        .fixed { position: fixed; }
        .inset-0 { top: 0; right: 0; bottom: 0; left: 0; }
        .z-10 { z-index: 10; }
        .z-20 { z-index: 20; }
        .z-50 { z-index: 50; }
        
        /* Spacing */
        .p-2 { padding: 0.5rem; }
        .p-3 { padding: 0.75rem; }
        .p-4 { padding: 1rem; }
        .p-5 { padding: 1.25rem; }
        .p-6 { padding: 1.5rem; }
        .p-8 { padding: 2rem; }
        .p-10 { padding: 2.5rem; }
        .p-12 { padding: 3rem; }
        .px-3 { padding-left: 0.75rem; padding-right: 0.75rem; }
        .px-4 { padding-left: 1rem; padding-right: 1rem; }
        .px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
        .px-8 { padding-left: 2rem; padding-right: 2rem; }
        .px-10 { padding-left: 2.5rem; padding-right: 2.5rem; }
        .py-2 { padding-top: 0.5rem; padding-bottom: 0.5rem; }
        .py-3 { padding-top: 0.75rem; padding-bottom: 0.75rem; }
        .py-4 { padding-top: 1rem; padding-bottom: 1rem; }
        .py-6 { padding-top: 1.5rem; padding-bottom: 1.5rem; }
        .py-8 { padding-top: 2rem; padding-bottom: 2rem; }
        .py-12 { padding-top: 3rem; padding-bottom: 3rem; }
        .py-16 { padding-top: 4rem; padding-bottom: 4rem; }
        .py-20 { padding-top: 5rem; padding-bottom: 5rem; }
        .py-24 { padding-top: 6rem; padding-bottom: 6rem; }
        .pt-4 { padding-top: 1rem; }
        .pt-6 { padding-top: 1.5rem; }
        .pt-16 { padding-top: 4rem; }
        .pb-6 { padding-bottom: 1.5rem; }
        .pb-10 { padding-bottom: 2.5rem; }
        .mb-2 { margin-bottom: 0.5rem; }
        .mb-3 { margin-bottom: 0.75rem; }
        .mb-4 { margin-bottom: 1rem; }
        .mb-5 { margin-bottom: 1.25rem; }
        .mb-6 { margin-bottom: 1.5rem; }
        .mb-8 { margin-bottom: 2rem; }
        .mb-10 { margin-bottom: 2.5rem; }
        .mb-12 { margin-bottom: 3rem; }
        .mb-16 { margin-bottom: 4rem; }
        .mt-6 { margin-top: 1.5rem; }
        .mr-2 { margin-right: 0.5rem; }
        .mr-3 { margin-right: 0.75rem; }
        .ml-3 { margin-left: 0.75rem; }
        .-top-6 { top: -1.5rem; }
        .top-8 { top: 2rem; }
        .top-16 { top: 4rem; }
        .top-32 { top: 8rem; }
        .bottom-8 { bottom: 2rem; }
        .bottom-16 { bottom: 4rem; }
        .bottom-32 { bottom: 8rem; }
        .left-8 { left: 2rem; }
        .left-12 { left: 3rem; }
        .left-16 { left: 4rem; }
        .left-1\/2 { left: 50%; }
        .right-8 { right: 2rem; }
        .right-12 { right: 3rem; }
        .right-1\/2 { right: 50%; }
        
        /* Layout */
        .w-4 { width: 1rem; }
        .w-5 { width: 1.25rem; }
        .w-6 { width: 1.5rem; }
        .w-8 { width: 2rem; }
        .w-10 { width: 2.5rem; }
        .w-12 { width: 3rem; }
        .w-16 { width: 4rem; }
        .w-20 { width: 5rem; }
        .w-full { width: 100%; }
        .h-4 { height: 1rem; }
        .h-5 { height: 1.25rem; }
        .h-6 { height: 1.5rem; }
        .h-8 { height: 2rem; }
        .h-10 { height: 2.5rem; }
        .h-11 { height: 2.75rem; }
        .h-12 { height: 3rem; }
        .h-16 { height: 4rem; }
        .h-20 { height: 5rem; }
        .h-full { height: 100%; }
        .min-h-screen { min-height: 100vh; }
        .max-w-xs { max-width: 20rem; }
        .max-w-md { max-width: 28rem; }
        .max-w-xl { max-width: 36rem; }
        .max-w-2xl { max-width: 42rem; }
        .max-w-3xl { max-width: 48rem; }
        .max-w-6xl { max-width: 72rem; }
        .mx-auto { margin-left: auto; margin-right: auto; }
        .aspect-square { aspect-ratio: 1 / 1; }
        
        /* Flexbox */
        .items-center { align-items: center; }
        .items-start { align-items: flex-start; }
        .items-baseline { align-items: baseline; }
        .justify-center { justify-content: center; }
        .justify-between { justify-content: space-between; }
        .justify-end { justify-content: flex-end; }
        .flex-col { flex-direction: column; }
        .flex-row { flex-direction: row; }
        .flex-1 { flex: 1 1 0%; }
        .flex-shrink-0 { flex-shrink: 0; }
        .gap-2 { gap: 0.5rem; }
        .gap-3 { gap: 0.75rem; }
        .gap-4 { gap: 1rem; }
        .gap-6 { gap: 1.5rem; }
        .gap-8 { gap: 2rem; }
        
        /* Grid */
        .grid-cols-1 { grid-template-columns: repeat(1, minmax(0, 1fr)); }
        .grid-cols-2 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        .grid-cols-3 { grid-template-columns: repeat(3, minmax(0, 1fr)); }
        .col-span-5 { grid-column: span 5 / span 5; }
        .col-span-7 { grid-column: span 7 / span 7; }
        
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
        .text-6xl { font-size: 3.75rem; line-height: 1; }
        .font-medium { font-weight: 500; }
        .font-semibold { font-weight: 600; }
        .font-bold { font-weight: 700; }
        .leading-tight { line-height: 1.25; }
        .leading-relaxed { line-height: 1.625; }
        
        /* Colors */
        .text-primary { color: hsl(var(--primary)); }
        .text-secondary { color: hsl(var(--secondary)); }
        .text-muted-foreground { color: hsl(var(--muted-foreground)); }
        .text-accent { color: hsl(var(--accent)); }
        .text-white { color: white; }
        .text-foreground { color: hsl(var(--foreground)); }
        .text-accent-foreground { color: hsl(var(--accent-foreground)); }
        .bg-primary { background-color: hsl(var(--primary)); }
        .bg-secondary { background-color: hsl(var(--secondary)); }
        .bg-muted { background-color: hsl(var(--muted)); }
        .bg-accent { background-color: hsl(var(--accent)); }
        .bg-white { background-color: white; }
        .bg-background { background-color: hsl(var(--background)); }
        .bg-card { background-color: hsl(var(--card)); }
        .bg-gradient-hero { background: var(--gradient-hero); }
        .bg-gradient-premium { background: var(--gradient-premium); }
        .bg-gradient-subtle { background: var(--gradient-subtle); }
        .bg-gradient-success { background: var(--gradient-success); }
        
        /* Background utilities */
        .bg-primary\/5 { background-color: hsl(var(--primary) / 0.05); }
        .bg-primary\/10 { background-color: hsl(var(--primary) / 0.1); }
        .bg-accent\/5 { background-color: hsl(var(--accent) / 0.05); }
        .bg-accent\/10 { background-color: hsl(var(--accent) / 0.1); }
        .bg-card\/50 { background-color: hsl(var(--card) / 0.5); }
        .bg-card\/95 { background-color: hsl(var(--card) / 0.95); }
        
        /* Border */
        .border { border-width: 1px; border-color: hsl(var(--border)); }
        .border-b { border-bottom-width: 1px; border-color: hsl(var(--border)); }
        .border-primary { border-color: hsl(var(--primary)); }
        .border-accent { border-color: hsl(var(--accent)); }
        .border-border { border-color: hsl(var(--border)); }
        .border-border\/20 { border-color: hsl(var(--border) / 0.2); }
        .border-border\/50 { border-color: hsl(var(--border) / 0.5); }
        .border-accent\/20 { border-color: hsl(var(--accent) / 0.2); }
        .border-accent\/30 { border-color: hsl(var(--accent) / 0.3); }
        .border-accent\/50 { border-color: hsl(var(--accent) / 0.5); }
        .rounded { border-radius: 0.25rem; }
        .rounded-lg { border-radius: 0.5rem; }
        .rounded-xl { border-radius: 0.75rem; }
        .rounded-2xl { border-radius: 1rem; }
        .rounded-3xl { border-radius: 1.5rem; }
        .rounded-full { border-radius: 9999px; }
        
        /* Shadow */
        .shadow-soft { box-shadow: var(--shadow-soft); }
        .shadow-medium { box-shadow: var(--shadow-medium); }
        .shadow-large { box-shadow: var(--shadow-large); }
        .shadow-glow { box-shadow: var(--shadow-glow); }
        
        /* Transitions */
        .transition-all { transition-property: all; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-duration: 300ms; }
        .transition-colors { transition-property: color, background-color, border-color; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-duration: 300ms; }
        .transition-smooth { transition: var(--transition-smooth); }
        .duration-200 { transition-duration: 200ms; }
        .duration-300 { transition-duration: 300ms; }
        .duration-500 { transition-duration: 500ms; }
        .duration-700 { transition-duration: 700ms; }
        
        /* Transform */
        .scale-105 { transform: scale(1.05); }
        .scale-110 { transform: scale(1.1); }
        .hover\:scale-105:hover { transform: scale(1.05); }
        .hover\:scale-110:hover { transform: scale(1.1); }
        .hover\:-translate-y-2:hover { transform: translateY(-0.5rem); }
        .transform { transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); }
        .-translate-x-1\/2 { --tw-translate-x: -50%; transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); }
        .-translate-y-1\/2 { --tw-translate-y: -50%; transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); }
        .translate-x-1\/2 { --tw-translate-x: 50%; transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); }
        
        /* Overflow */
        .overflow-hidden { overflow: hidden; }
        .overflow-y-auto { overflow-y: auto; }
        
        /* Backdrop */
        .backdrop-blur-sm { backdrop-filter: blur(4px); -webkit-backdrop-filter: blur(4px); }
        .backdrop-blur-md { backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); }
        
        /* Spacing utilities */
        .space-y-3 > * + * { margin-top: 0.75rem; }
        .space-y-4 > * + * { margin-top: 1rem; }
        .space-y-5 > * + * { margin-top: 1.25rem; }
        .space-y-6 > * + * { margin-top: 1.5rem; }
        
        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            font-weight: 500;
            text-decoration: none;
            transition: var(--transition-smooth);
            cursor: pointer;
            border: none;
            white-space: nowrap;
            font-family: inherit;
        }
        
        .btn-primary {
            background-color: hsl(var(--primary));
            color: hsl(var(--primary-foreground));
        }
        
        .btn-primary:hover {
            background-color: hsl(var(--primary-glow));
            transform: scale(1.05);
            box-shadow: var(--shadow-large);
        }
        
        .btn-hero {
            background: var(--gradient-hero);
            color: hsl(var(--primary-foreground));
            font-weight: 600;
        }
        
        .btn-hero:hover {
            box-shadow: var(--shadow-large);
            transform: scale(1.05);
        }
        
        .btn-premium {
            background: var(--gradient-premium);
            color: hsl(var(--accent-foreground));
            font-weight: 600;
        }
        
        .btn-minimal {
            background-color: hsl(var(--background));
            color: hsl(var(--foreground));
            border: 1px solid hsl(var(--border));
        }
        
        .btn-minimal:hover {
            background-color: hsl(var(--muted));
            box-shadow: var(--shadow-medium);
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
        
        .btn-sm {
            height: 2.25rem;
            padding: 0 0.75rem;
            border-radius: 0.375rem;
        }
        
        .btn-lg {
            height: 2.75rem;
            padding: 0 2rem;
            border-radius: 0.375rem;
        }
        
        /* Cards */
        .card {
            background-color: hsl(var(--card));
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: var(--shadow-soft);
            border: 1px solid hsl(var(--border));
            transition: var(--transition-smooth);
        }
        
        .card:hover {
            box-shadow: var(--shadow-medium);
        }
        
        /* Persian Font Support */
        .font-persian {
            font-family: 'Vazirmatn', 'Inter', sans-serif;
            font-feature-settings: "kern" 1, "liga" 1;
        }
        
        /* Animations */
        @keyframes gentle-float-1 {
            0%, 100% { transform: translateY(0px) translateX(0px); }
            50% { transform: translateY(-1.5px) translateX(0.5px); }
        }
        
        @keyframes gentle-float-2 {
            0%, 100% { transform: translateY(0px) translateX(0px); }
            33% { transform: translateY(1px) translateX(-0.5px); }
            66% { transform: translateY(-0.5px) translateX(0.5px); }
        }
        
        @keyframes gentle-float-3 {
            0%, 100% { transform: translateY(0px) translateX(0px); }
            40% { transform: translateY(-1px) translateX(-0.5px); }
            80% { transform: translateY(0.5px) translateX(0.5px); }
        }
        
        @keyframes gentle-float-4 {
            0%, 100% { transform: translateY(0px) translateX(0px); }
            30% { transform: translateY(1px) translateX(0.5px); }
            70% { transform: translateY(-0.5px) translateX(0px); }
        }
        
        @keyframes gentle-float-5 {
            0%, 100% { transform: translateY(0px) translateX(0px); }
            45% { transform: translateY(-1px) translateX(0.5px); }
            85% { transform: translateY(1px) translateX(-0.5px); }
        }
        
        @keyframes gentle-float-6 {
            0%, 100% { transform: translateY(0px) translateX(0px); }
            35% { transform: translateY(0.5px) translateX(-1px); }
            75% { transform: translateY(-1.5px) translateX(0.5px); }
        }
        
        @keyframes subtle-fade-in {
            0% { 
                transform: translateY(10px) scale(0.95);
                opacity: 0;
            }
            100% { 
                transform: translateY(0) scale(1);
                opacity: 1;
            }
        }
        
        @keyframes soft-glow {
            0%, 100% { 
                box-shadow: 0 4px 20px hsl(var(--primary) / 0.1);
            }
            50% { 
                box-shadow: 0 8px 30px hsl(var(--primary) / 0.2);
            }
        }
        
        .animate-gentle-float-1 {
            animation: gentle-float-1 65s ease-in-out infinite;
        }
        
        .animate-gentle-float-2 {
            animation: gentle-float-2 72s ease-in-out infinite;
        }
        
        .animate-gentle-float-3 {
            animation: gentle-float-3 68s ease-in-out infinite;
        }
        
        .animate-gentle-float-4 {
            animation: gentle-float-4 70s ease-in-out infinite;
        }
        
        .animate-gentle-float-5 {
            animation: gentle-float-5 75s ease-in-out infinite;
        }
        
        .animate-gentle-float-6 {
            animation: gentle-float-6 67s ease-in-out infinite;
        }
        
        .animate-subtle-fade-in {
            animation: subtle-fade-in 0.8s ease-out forwards;
        }
        
        .animate-soft-glow {
            animation: soft-glow 4s ease-in-out infinite;
        }
        
        /* Responsive Design */
        @media (min-width: 768px) {
            .md\:text-2xl { font-size: 1.5rem; line-height: 2rem; }
            .md\:text-3xl { font-size: 1.875rem; line-height: 2.25rem; }
            .md\:text-4xl { font-size: 2.25rem; line-height: 2.5rem; }
            .md\:text-5xl { font-size: 3rem; line-height: 1; }
            .md\:h-20 { height: 5rem; }
            .md\:hidden { display: none; }
            .md\:flex { display: flex; }
            .md\:grid-cols-2 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .md\:grid-cols-3 { grid-template-columns: repeat(3, minmax(0, 1fr)); }
            .md\:p-10 { padding: 2.5rem; }
        }
        
        @media (min-width: 1024px) {
            .lg\:text-3xl { font-size: 1.875rem; line-height: 2.25rem; }
            .lg\:text-4xl { font-size: 2.25rem; line-height: 2.5rem; }
            .lg\:text-5xl { font-size: 3rem; line-height: 1; }
            .lg\:text-6xl { font-size: 3.75rem; line-height: 1; }
            .lg\:py-24 { padding-top: 6rem; padding-bottom: 6rem; }
            .lg\:grid-cols-2 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .lg\:grid-cols-3 { grid-template-columns: repeat(3, minmax(0, 1fr)); }
            .lg\:grid-cols-12 { grid-template-columns: repeat(12, minmax(0, 1fr)); }
            .lg\:col-span-5 { grid-column: span 5 / span 5; }
            .lg\:col-span-7 { grid-column: span 7 / span 7; }
            .lg\:scale-110 { transform: scale(1.1); }
        }
        
        @media (min-width: 1280px) {
            .xl\:text-4xl { font-size: 2.25rem; line-height: 2.5rem; }
            .xl\:text-6xl { font-size: 3.75rem; line-height: 1; }
        }
        
        /* Special utility classes for the design */
        .bg-clip-text {
            -webkit-background-clip: text;
            background-clip: text;
        }
        
        .text-transparent {
            color: transparent;
        }
        
        .hover\:border-accent\/20:hover {
            border-color: hsl(var(--accent) / 0.2);
        }
        
        .hover\:border-accent\/30:hover {
            border-color: hsl(var(--accent) / 0.3);
        }
        
        .hover\:border-accent\/50:hover {
            border-color: hsl(var(--accent) / 0.5);
        }
        
        .hover\:text-primary:hover {
            color: hsl(var(--primary));
        }
        
        .hover\:text-accent:hover {
            color: hsl(var(--accent));
        }
        
        .hover\:text-foreground:hover {
            color: hsl(var(--foreground));
        }
        
        .hover\:bg-accent\/10:hover {
            background-color: hsl(var(--accent) / 0.1);
        }
        
        .hover\:shadow-glow:hover {
            box-shadow: var(--shadow-glow);
        }
        
        .cursor-pointer {
            cursor: pointer;
        }
        
        .group:hover .group-hover\:text-primary {
            color: hsl(var(--primary));
        }
        
        .group:hover .group-hover\:text-accent {
            color: hsl(var(--accent));
        }
        
        .group:hover .group-hover\:text-foreground {
            color: hsl(var(--foreground));
        }
        
        .group:hover .group-hover\:bg-accent\/10 {
            background-color: hsl(var(--accent) / 0.1);
        }
        
        .group:hover .group-hover\:scale-110 {
            transform: scale(1.1);
        }
        
        .group:hover .group-hover\:scale-125 {
            transform: scale(1.25);
        }
        
        .mt-0\.5 { margin-top: 0.125rem; }
        
        /* Special positioning for floating icons */
        .top-1\/2 { top: 50%; }
        .left-1\/2 { left: 50%; }
        
        /* Special gradients for radial backgrounds */
        .bg-radial-gradient {
            background: radial-gradient(ellipse 80% 80% at 50% -20%, rgba(13,42,148,0.15), rgba(255,255,255,0));
        }
        
        /* Order utilities for responsive layouts */
        .order-1 { order: 1; }
        .order-2 { order: 2; }
        
        /* Min height utilities */
        .min-h-\[calc\(100vh-8rem\)\] { min-height: calc(100vh - 8rem); }
        
        /* SVG icon sizing */
        .w-6.h-6 { width: 1.5rem; height: 1.5rem; }
        
        /* Hover effects for buttons */
        .hover\:shadow-large:hover { box-shadow: var(--shadow-large); }
        
        /* Backdrop blur utilities */
        .backdrop-blur-sm { backdrop-filter: blur(4px); -webkit-backdrop-filter: blur(4px); }
        
        /* Modal overlay */
        .modal-overlay {
            position: fixed;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            z-index: 50;
        }
        
        /* Modal content */
        .modal-content {
            position: relative;
            background-color: hsl(var(--card));
            border-radius: 1rem;
            box-shadow: var(--shadow-large);
            max-width: 28rem;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
            margin: 2rem auto;
            padding: 2rem;
        }
        
        /* Form styles */
        .form-input, .form-textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid hsl(var(--border));
            border-radius: 0.375rem;
            background-color: hsl(var(--background));
            color: hsl(var(--foreground));
            font-family: inherit;
            transition: var(--transition-smooth);
            direction: rtl;
            text-align: right;
        }
        
        .form-input:focus, .form-textarea:focus {
            outline: none;
            border-color: hsl(var(--primary));
            box-shadow: 0 0 0 2px hsl(var(--primary) / 0.2);
        }
        
        .form-textarea {
            resize: vertical;
            min-height: 100px;
        }
        
        /* Radio button styles */
        .radio-item {
            display: flex;
            align-items: center;
            padding: 0.75rem;
            border: 1px solid hsl(var(--border));
            border-radius: 0.5rem;
            cursor: pointer;
            transition: var(--transition-smooth);
            direction: rtl;
        }
        
        .radio-item:hover {
            border-color: hsl(var(--primary));
            background-color: hsl(var(--muted));
        }
        
        .radio-item input[type="radio"] {
            margin-left: 0.75rem;
        }
        
        /* Disabled state */
        .disabled {
            opacity: 0.5;
            pointer-events: none;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-card/95 backdrop-blur-md border-b border-border/50 z-50">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16 md:h-20">
                <!-- Logo -->
                <div class="flex items-center gap-3">
                    <div class="p-2 bg-primary/10 rounded-xl">
                        <!-- Scale icon -->
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                        </svg>
                    </div>
                    <div class="text-right">
                        <div class="text-xl font-bold text-primary">Vakil.My</div>
                        <div class="text-xs text-muted-foreground font-persian">وکیل هوشمند</div>
                    </div>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center gap-8">
                    <button onclick="scrollToSection('services')" class="text-foreground hover:text-primary transition-colors font-persian">
                        خدمات
                    </button>
                    <button onclick="scrollToSection('pricing')" class="text-foreground hover:text-primary transition-colors font-persian">
                        تعرفه‌ها
                    </button>
                    <button onclick="scrollToSection('testimonials')" class="text-foreground hover:text-primary transition-colors font-persian">
                        نظرات
                    </button>
                    <button onclick="openRequestModal()" class="btn btn-hero btn-sm font-persian">
                        شروع رایگان
                    </button>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="md:hidden p-2 hover:bg-accent/10 rounded-lg transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden py-4 border-t border-border/50">
                <div class="flex flex-col gap-4">
                    <button onclick="scrollToSection('services')" class="flex items-center gap-3 p-3 hover:bg-accent/10 rounded-lg transition-colors text-right">
                        <!-- FileText icon -->
                        <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span class="font-persian">خدمات</span>
                    </button>
                    <button onclick="scrollToSection('pricing')" class="flex items-center gap-3 p-3 hover:bg-accent/10 rounded-lg transition-colors text-right">
                        <!-- Scale icon -->
                        <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                        </svg>
                        <span class="font-persian">تعرفه‌ها</span>
                    </button>
                    <button onclick="scrollToSection('testimonials')" class="flex items-center gap-3 p-3 hover:bg-accent/10 rounded-lg transition-colors text-right">
                        <!-- Phone icon -->
                        <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span class="font-persian">نظرات</span>
                    </button>
                    <div class="pt-2 border-t border-border/50">
                        <button onclick="openRequestModal()" class="btn btn-hero w-full font-persian">
                            شروع رایگان
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative min-h-screen bg-gradient-subtle overflow-hidden">
        <!-- Background decoration -->
        <div class="absolute inset-0 bg-radial-gradient"></div>
        
        <div class="container mx-auto px-4 py-16 lg:py-24 relative z-10">
            <div class="grid lg:grid-cols-12 gap-8 items-center min-h-[calc(100vh-8rem)]">
                <!-- Animated Services Icons - Left Side -->
                <div class="lg:col-span-5 order-1">
                    <div class="relative">
                        <!-- Background Circle -->
                        <div class="w-full max-w-md mx-auto aspect-square bg-gradient-to-br from-primary/5 to-accent/10 rounded-full relative">
                            <!-- Animated Service Icons -->
                            
                            <!-- دادخواست -->
                            <div class="absolute top-8 left-12" style="animation-delay: 0s;">
                                <div class="animate-subtle-fade-in" style="animation-delay: 0s;">
                                    <div class="bg-white shadow-medium rounded-2xl p-5 border border-border/30 hover:border-accent/20 transition-all duration-700 hover:shadow-glow group animate-gentle-float-1">
                                        <div class="text-center">
                                            <div class="w-12 h-12 bg-primary/5 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:bg-accent/10 transition-all duration-500">
                                                <!-- FileText icon -->
                                                <svg class="w-6 h-6 text-primary group-hover:text-accent transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                </svg>
                                            </div>
                                            <h3 class="text-sm font-semibold text-foreground font-persian group-hover:text-primary transition-colors duration-500">
                                                دادخواست
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- لایحه -->
                            <div class="absolute top-32 right-8" style="animation-delay: 1.2s;">
                                <div class="animate-subtle-fade-in" style="animation-delay: 1.2s;">
                                    <div class="bg-white shadow-medium rounded-2xl p-5 border border-border/30 hover:border-accent/20 transition-all duration-700 hover:shadow-glow group animate-gentle-float-2">
                                        <div class="text-center">
                                            <div class="w-12 h-12 bg-primary/5 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:bg-accent/10 transition-all duration-500">
                                                <!-- Scale icon -->
                                                <svg class="w-6 h-6 text-primary group-hover:text-accent transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                                                </svg>
                                            </div>
                                            <h3 class="text-sm font-semibold text-foreground font-persian group-hover:text-primary transition-colors duration-500">
                                                لایحه
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- شکواییه -->
                            <div class="absolute top-16 left-1/2 transform -translate-x-1/2" style="animation-delay: 0.7s;">
                                <div class="animate-subtle-fade-in" style="animation-delay: 0.7s;">
                                    <div class="bg-white shadow-medium rounded-2xl p-5 border border-border/30 hover:border-accent/20 transition-all duration-700 hover:shadow-glow group animate-gentle-float-3">
                                        <div class="text-center">
                                            <div class="w-12 h-12 bg-primary/5 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:bg-accent/10 transition-all duration-500">
                                                <!-- MessageSquare icon -->
                                                <svg class="w-6 h-6 text-primary group-hover:text-accent transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                                </svg>
                                            </div>
                                            <h3 class="text-sm font-semibold text-foreground font-persian group-hover:text-primary transition-colors duration-500">
                                                شکواییه
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- قرارداد -->
                            <div class="absolute bottom-32 left-16" style="animation-delay: 2.1s;">
                                <div class="animate-subtle-fade-in" style="animation-delay: 2.1s;">
                                    <div class="bg-white shadow-medium rounded-2xl p-5 border border-border/30 hover:border-accent/20 transition-all duration-700 hover:shadow-glow group animate-gentle-float-4">
                                        <div class="text-center">
                                            <div class="w-12 h-12 bg-primary/5 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:bg-accent/10 transition-all duration-500">
                                                <!-- Briefcase icon -->
                                                <svg class="w-6 h-6 text-primary group-hover:text-accent transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0H8m8 0v2a2 2 0 01-2 2H10a2 2 0 01-2-2V6m8 0H8m0 0H5.5A1.5 1.5 0 004 7.5v9A1.5 1.5 0 005.5 18h13a1.5 1.5 0 001.5-1.5v-9A1.5 1.5 0 0018.5 6H16"></path>
                                                </svg>
                                            </div>
                                            <h3 class="text-sm font-semibold text-foreground font-persian group-hover:text-primary transition-colors duration-500">
                                                قرارداد
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- اظهارنامه -->
                            <div class="absolute bottom-8 right-12" style="animation-delay: 0.3s;">
                                <div class="animate-subtle-fade-in" style="animation-delay: 0.3s;">
                                    <div class="bg-white shadow-medium rounded-2xl p-5 border border-border/30 hover:border-accent/20 transition-all duration-700 hover:shadow-glow group animate-gentle-float-5">
                                        <div class="text-center">
                                            <div class="w-12 h-12 bg-primary/5 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:bg-accent/10 transition-all duration-500">
                                                <!-- ClipboardList icon -->
                                                <svg class="w-6 h-6 text-primary group-hover:text-accent transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                                </svg>
                                            </div>
                                            <h3 class="text-sm font-semibold text-foreground font-persian group-hover:text-primary transition-colors duration-500">
                                                اظهارنامه
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- مشاوره -->
                            <div class="absolute bottom-16 left-1/2 transform -translate-x-1/2" style="animation-delay: 1.8s;">
                                <div class="animate-subtle-fade-in" style="animation-delay: 1.8s;">
                                    <div class="bg-white shadow-medium rounded-2xl p-5 border border-border/30 hover:border-accent/20 transition-all duration-700 hover:shadow-glow group animate-gentle-float-6">
                                        <div class="text-center">
                                            <div class="w-12 h-12 bg-primary/5 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:bg-accent/10 transition-all duration-500">
                                                <!-- Users icon -->
                                                <svg class="w-6 h-6 text-primary group-hover:text-accent transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                                </svg>
                                            </div>
                                            <h3 class="text-sm font-semibold text-foreground font-persian group-hover:text-primary transition-colors duration-500">
                                                مشاوره
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Center Logo/Badge -->
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                <div class="bg-gradient-hero text-white p-8 rounded-full shadow-large animate-soft-glow">
                                    <div class="text-center">
                                        <div class="text-2xl font-bold mb-1">AI</div>
                                        <div class="text-xs font-persian">قانونی</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Side - Right on Desktop -->
                <div class="lg:col-span-7 text-center lg:text-right space-y-6 order-2">
                    <div class="space-y-6">
                        <div class="inline-flex items-center gap-2 bg-accent/10 text-primary px-4 py-2 rounded-full text-sm font-medium border border-accent/20">
                            <!-- Zap icon -->
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            <span class="font-persian">وکیل دات مای ، وکیل آنلاین شما</span>
                        </div>
                        
                        <h1 class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight">
                            <span class="bg-gradient-hero bg-clip-text text-transparent block mb-2">
                                Vakil.My
                            </span>
                            <span class="text-xl md:text-2xl lg:text-3xl xl:text-4xl font-medium text-muted-foreground block font-persian text-right">تنظیم لایحه، اظهارنامه، قرارداد و شکواییه در 10 دقیقه!</span>
                        </h1>
                        
                        <p class="text-lg md:text-xl text-foreground/80 max-w-xl mx-auto lg:mx-0 leading-relaxed font-persian">
                            خدمات حقوقی سریع، دقیق و حرفه‌ای با هوش مصنوعی و وکلای پایه یک دادگستری
                        </p>

                        <!-- Conversion Section - Highlighted -->
                        <div class="bg-gradient-success p-6 rounded-2xl text-center shadow-large border border-accent/20">
                            <div class="text-white">
                                <div class="text-2xl md:text-3xl font-bold mb-2 font-persian">فقط ۱۰ دقیقه!</div>
                                <div class="text-lg md:text-xl mb-4 font-persian">دادخواست شما آماده می‌شود</div>
                                <div class="bg-white/20 backdrop-blur-sm rounded-lg p-4 inline-block">
                                    <div class="text-3xl md:text-4xl font-bold">۲۷۰,۰۰۰</div>
                                    <div class="text-sm md:text-base font-persian">تومان (به جای ۵ میلیون!)</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Services Quick Overview - Compact Grid -->
                    <div class="grid grid-cols-3 md:grid-cols-6 gap-3">
                        <!-- Service items -->
                        <div class="text-center p-3 bg-card/50 backdrop-blur-sm rounded-xl border border-border/20 hover:border-accent/30 transition-all duration-300">
                            <div class="w-10 h-10 bg-accent/10 rounded-xl flex items-center justify-center mx-auto mb-2">
                                <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xs font-semibold text-foreground font-persian">دادخواست</h3>
                        </div>

                        <div class="text-center p-3 bg-card/50 backdrop-blur-sm rounded-xl border border-border/20 hover:border-accent/30 transition-all duration-300">
                            <div class="w-10 h-10 bg-accent/10 rounded-xl flex items-center justify-center mx-auto mb-2">
                                <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                                </svg>
                            </div>
                            <h3 class="text-xs font-semibold text-foreground font-persian">لایحه</h3>
                        </div>

                        <div class="text-center p-3 bg-card/50 backdrop-blur-sm rounded-xl border border-border/20 hover:border-accent/30 transition-all duration-300">
                            <div class="w-10 h-10 bg-accent/10 rounded-xl flex items-center justify-center mx-auto mb-2">
                                <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xs font-semibold text-foreground font-persian">شکواییه</h3>
                        </div>

                        <div class="text-center p-3 bg-card/50 backdrop-blur-sm rounded-xl border border-border/20 hover:border-accent/30 transition-all duration-300">
                            <div class="w-10 h-10 bg-accent/10 rounded-xl flex items-center justify-center mx-auto mb-2">
                                <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0H8m8 0v2a2 2 0 01-2 2H10a2 2 0 01-2-2V6m8 0H8m0 0H5.5A1.5 1.5 0 004 7.5v9A1.5 1.5 0 005.5 18h13a1.5 1.5 0 001.5-1.5v-9A1.5 1.5 0 0018.5 6H16"></path>
                                </svg>
                            </div>
                            <h3 class="text-xs font-semibold text-foreground font-persian">قرارداد</h3>
                        </div>

                        <div class="text-center p-3 bg-card/50 backdrop-blur-sm rounded-xl border border-border/20 hover:border-accent/30 transition-all duration-300">
                            <div class="w-10 h-10 bg-accent/10 rounded-xl flex items-center justify-center mx-auto mb-2">
                                <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                </svg>
                            </div>
                            <h3 class="text-xs font-semibold text-foreground font-persian">اظهارنامه</h3>
                        </div>

                        <div class="text-center p-3 bg-card/50 backdrop-blur-sm rounded-xl border border-border/20 hover:border-accent/30 transition-all duration-300">
                            <div class="w-10 h-10 bg-accent/10 rounded-xl flex items-center justify-center mx-auto mb-2">
                                <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xs font-semibold text-foreground font-persian">مشاوره</h3>
                        </div>
                    </div>

                    <!-- Features -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div class="flex items-center gap-3 justify-center lg:justify-end bg-card/50 backdrop-blur-sm rounded-xl p-4 border border-border/50">
                            <div class="text-right">
                                <div class="text-xl font-bold text-primary">۱۰</div>
                                <div class="text-xs text-muted-foreground font-persian">دقیقه تحویل</div>
                            </div>
                            <div class="p-2 bg-accent/10 rounded-lg">
                                <!-- Zap icon -->
                                <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-3 justify-center lg:justify-end bg-card/50 backdrop-blur-sm rounded-xl p-4 border border-border/50">
                            <div class="text-right">
                                <div class="text-xl font-bold text-primary">۲۴/۷</div>
                                <div class="text-xs text-muted-foreground font-persian">در دسترس</div>
                            </div>
                            <div class="p-2 bg-accent/10 rounded-lg">
                                <!-- Shield icon -->
                                <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-3 justify-center lg:justify-end bg-card/50 backdrop-blur-sm rounded-xl p-4 border border-border/50">
                            <div class="text-right">
                                <div class="text-xl font-bold text-primary">۱۰۰٪</div>
                                <div class="text-xs text-muted-foreground font-persian">قانونی</div>
                            </div>
                            <div class="p-2 bg-accent/10 rounded-lg">
                                <!-- Scale icon -->
                                <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <div class="flex justify-center lg:justify-end pt-4">
                        <button onclick="openRequestModal()" class="btn btn-hero text-lg px-10 py-6 font-persian relative overflow-hidden group">
                            <span class="relative z-10">اکنون شروع کنید</span>
                            <!-- ArrowLeft icon -->
                            <svg class="w-6 h-6 mr-3 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                            </svg>
                            <div class="absolute inset-0 bg-gradient-success transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                        </button>
                    </div>

                    <!-- Trust Indicators -->
                    <div class="pt-6 border-t border-border/50">
                        <p class="text-sm text-muted-foreground mb-3 font-persian">
                            مورد اعتماد بیش از ۱,۰۰۰ کسب و کار
                        </p>
                        <div class="flex items-center gap-3 justify-center lg:justify-end">
                            <div class="flex gap-1">
                                <!-- Star icons -->
                                <svg class="w-4 h-4 fill-accent text-accent" viewBox="0 0 20 20">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                </svg>
                                <svg class="w-4 h-4 fill-accent text-accent" viewBox="0 0 20 20">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                </svg>
                                <svg class="w-4 h-4 fill-accent text-accent" viewBox="0 0 20 20">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                </svg>
                                <svg class="w-4 h-4 fill-accent text-accent" viewBox="0 0 20 20">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                </svg>
                                <svg class="w-4 h-4 fill-accent text-accent" viewBox="0 0 20 20">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                </svg>
                            </div>
                            <span class="text-lg font-bold text-primary mr-2">۴.۹</span>
                            <span class="text-sm text-muted-foreground font-persian">از ۵</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-background">
        <div class="container mx-auto px-4">
            <!-- Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-right font-persian">
                    خدمات ما
                </h2>
                <p class="text-xl text-muted-foreground max-w-3xl mx-auto text-right font-persian leading-relaxed">
                    مجموعه کاملی از خدمات حقوقی برای تمام نیازهای شما، از تهیه اسناد تا مشاوره تخصصی
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <!-- Service 1: تهیه دادخواست -->
                <div class="group bg-card rounded-2xl p-8 shadow-soft hover:shadow-large transition-all duration-300 border border-border hover:border-accent/50 hover:-translate-y-2">
                    <!-- Icon -->
                    <div class="flex justify-end mb-6">
                        <div class="relative">
                            <div class="p-4 bg-gradient-premium rounded-2xl group-hover:scale-110 transition-all duration-300 shadow-soft">
                                <!-- FileText icon -->
                                <svg class="w-8 h-8 text-accent-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <div class="absolute inset-0 bg-accent/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300 opacity-0 group-hover:opacity-100"></div>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="text-right space-y-4">
                        <h3 class="text-2xl font-bold text-foreground font-persian group-hover:text-primary transition-colors duration-300">
                            تهیه دادخواست
                        </h3>
                        <p class="text-muted-foreground leading-relaxed font-persian text-lg">
                            دادخواست‌های حرفه‌ای با رعایت تمام اصول حقوقی
                        </p>

                        <!-- Features -->
                        <ul class="space-y-3">
                            <li class="flex items-center justify-end gap-3 text-sm group">
                                <span class="text-muted-foreground font-persian group-hover:text-foreground transition-colors duration-200">
                                    مطابق با قوانین روز
                                </span>
                                <div class="w-2 h-2 bg-accent rounded-full group-hover:scale-125 transition-transform duration-200"></div>
                            </li>
                            <li class="flex items-center justify-end gap-3 text-sm group">
                                <span class="text-muted-foreground font-persian group-hover:text-foreground transition-colors duration-200">
                                    تنظیم در ۱۰ دقیقه
                                </span>
                                <div class="w-2 h-2 bg-accent rounded-full group-hover:scale-125 transition-transform duration-200"></div>
                            </li>
                            <li class="flex items-center justify-end gap-3 text-sm group">
                                <span class="text-muted-foreground font-persian group-hover:text-foreground transition-colors duration-200">
                                    بازنگری حرفه‌ای
                                </span>
                                <div class="w-2 h-2 bg-accent rounded-full group-hover:scale-125 transition-transform duration-200"></div>
                            </li>
                        </ul>

                        <!-- CTA -->
                        <div class="pt-4">
                            <button onclick="openRequestModal()" class="btn btn-minimal w-full font-persian text-base py-3 group-hover:bg-accent/10 group-hover:border-accent/30 transition-all duration-300">
                                شروع کنید
                                <!-- ArrowLeft icon -->
                                <svg class="w-4 h-4 mr-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Service 2: تهیه لایحه -->
                <div class="group bg-card rounded-2xl p-8 shadow-soft hover:shadow-large transition-all duration-300 border border-border hover:border-accent/50 hover:-translate-y-2">
                    <!-- Icon -->
                    <div class="flex justify-end mb-6">
                        <div class="relative">
                            <div class="p-4 bg-gradient-premium rounded-2xl group-hover:scale-110 transition-all duration-300 shadow-soft">
                                <!-- Gavel icon -->
                                <svg class="w-8 h-8 text-accent-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                                </svg>
                            </div>
                            <div class="absolute inset-0 bg-accent/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300 opacity-0 group-hover:opacity-100"></div>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="text-right space-y-4">
                        <h3 class="text-2xl font-bold text-foreground font-persian group-hover:text-primary transition-colors duration-300">
                            تهیه لایحه
                        </h3>
                        <p class="text-muted-foreground leading-relaxed font-persian text-lg">
                            لایحه‌های دقیق برای دفاع قدرتمند در دادگاه
                        </p>

                        <!-- Features -->
                        <ul class="space-y-3">
                            <li class="flex items-center justify-end gap-3 text-sm group">
                                <span class="text-muted-foreground font-persian group-hover:text-foreground transition-colors duration-200">
                                    استدلال حقوقی قوی
                                </span>
                                <div class="w-2 h-2 bg-accent rounded-full group-hover:scale-125 transition-transform duration-200"></div>
                            </li>
                            <li class="flex items-center justify-end gap-3 text-sm group">
                                <span class="text-muted-foreground font-persian group-hover:text-foreground transition-colors duration-200">
                                    منابع قانونی معتبر
                                </span>
                                <div class="w-2 h-2 bg-accent rounded-full group-hover:scale-125 transition-transform duration-200"></div>
                            </li>
                            <li class="flex items-center justify-end gap-3 text-sm group">
                                <span class="text-muted-foreground font-persian group-hover:text-foreground transition-colors duration-200">
                                    ساختار استاندارد
                                </span>
                                <div class="w-2 h-2 bg-accent rounded-full group-hover:scale-125 transition-transform duration-200"></div>
                            </li>
                        </ul>

                        <!-- CTA -->
                        <div class="pt-4">
                            <button onclick="openRequestModal()" class="btn btn-minimal w-full font-persian text-base py-3 group-hover:bg-accent/10 group-hover:border-accent/30 transition-all duration-300">
                                شروع کنید
                                <!-- ArrowLeft icon -->
                                <svg class="w-4 h-4 mr-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Service 3: تهیه شکواییه -->
                <div class="group bg-card rounded-2xl p-8 shadow-soft hover:shadow-large transition-all duration-300 border border-border hover:border-accent/50 hover:-translate-y-2">
                    <!-- Icon -->
                    <div class="flex justify-end mb-6">
                        <div class="relative">
                            <div class="p-4 bg-gradient-premium rounded-2xl group-hover:scale-110 transition-all duration-300 shadow-soft">
                                <!-- Scale icon -->
                                <svg class="w-8 h-8 text-accent-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                                </svg>
                            </div>
                            <div class="absolute inset-0 bg-accent/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300 opacity-0 group-hover:opacity-100"></div>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="text-right space-y-4">
                        <h3 class="text-2xl font-bold text-foreground font-persian group-hover:text-primary transition-colors duration-300">
                            تهیه شکواییه
                        </h3>
                        <p class="text-muted-foreground leading-relaxed font-persian text-lg">
                            شکواییه‌های قانونی برای رسیدگی سریع
                        </p>

                        <!-- Features -->
                        <ul class="space-y-3">
                            <li class="flex items-center justify-end gap-3 text-sm group">
                                <span class="text-muted-foreground font-persian group-hover:text-foreground transition-colors duration-200">
                                    فرمت رسمی
                                </span>
                                <div class="w-2 h-2 bg-accent rounded-full group-hover:scale-125 transition-transform duration-200"></div>
                            </li>
                            <li class="flex items-center justify-end gap-3 text-sm group">
                                <span class="text-muted-foreground font-persian group-hover:text-foreground transition-colors duration-200">
                                    مستندات کامل
                                </span>
                                <div class="w-2 h-2 bg-accent rounded-full group-hover:scale-125 transition-transform duration-200"></div>
                            </li>
                            <li class="flex items-center justify-end gap-3 text-sm group">
                                <span class="text-muted-foreground font-persian group-hover:text-foreground transition-colors duration-200">
                                    پیگیری آسان
                                </span>
                                <div class="w-2 h-2 bg-accent rounded-full group-hover:scale-125 transition-transform duration-200"></div>
                            </li>
                        </ul>

                        <!-- CTA -->
                        <div class="pt-4">
                            <button onclick="openRequestModal()" class="btn btn-minimal w-full font-persian text-base py-3 group-hover:bg-accent/10 group-hover:border-accent/30 transition-all duration-300">
                                شروع کنید
                                <!-- ArrowLeft icon -->
                                <svg class="w-4 h-4 mr-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Service 4: تهیه قرارداد -->
                <div class="group bg-card rounded-2xl p-8 shadow-soft hover:shadow-large transition-all duration-300 border border-border hover:border-accent/50 hover:-translate-y-2">
                    <!-- Icon -->
                    <div class="flex justify-end mb-6">
                        <div class="relative">
                            <div class="p-4 bg-gradient-premium rounded-2xl group-hover:scale-110 transition-all duration-300 shadow-soft">
                                <!-- Users icon -->
                                <svg class="w-8 h-8 text-accent-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                </svg>
                            </div>
                            <div class="absolute inset-0 bg-accent/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300 opacity-0 group-hover:opacity-100"></div>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="text-right space-y-4">
                        <h3 class="text-2xl font-bold text-foreground font-persian group-hover:text-primary transition-colors duration-300">
                            تهیه قرارداد
                        </h3>
                        <p class="text-muted-foreground leading-relaxed font-persian text-lg">
                            قراردادهای استاندارد و سفارشی‌سازی‌شده
                        </p>

                        <!-- Features -->
                        <ul class="space-y-3">
                            <li class="flex items-center justify-end gap-3 text-sm group">
                                <span class="text-muted-foreground font-persian group-hover:text-foreground transition-colors duration-200">
                                    انواع قراردادها
                                </span>
                                <div class="w-2 h-2 bg-accent rounded-full group-hover:scale-125 transition-transform duration-200"></div>
                            </li>
                            <li class="flex items-center justify-end gap-3 text-sm group">
                                <span class="text-muted-foreground font-persian group-hover:text-foreground transition-colors duration-200">
                                    شرایط حمایتی
                                </span>
                                <div class="w-2 h-2 bg-accent rounded-full group-hover:scale-125 transition-transform duration-200"></div>
                            </li>
                            <li class="flex items-center justify-end gap-3 text-sm group">
                                <span class="text-muted-foreground font-persian group-hover:text-foreground transition-colors duration-200">
                                    قابل ویرایش
                                </span>
                                <div class="w-2 h-2 bg-accent rounded-full group-hover:scale-125 transition-transform duration-200"></div>
                            </li>
                        </ul>

                        <!-- CTA -->
                        <div class="pt-4">
                            <button onclick="openRequestModal()" class="btn btn-minimal w-full font-persian text-base py-3 group-hover:bg-accent/10 group-hover:border-accent/30 transition-all duration-300">
                                شروع کنید
                                <!-- ArrowLeft icon -->
                                <svg class="w-4 h-4 mr-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Service 5: تهیه اظهارنامه -->
                <div class="group bg-card rounded-2xl p-8 shadow-soft hover:shadow-large transition-all duration-300 border border-border hover:border-accent/50 hover:-translate-y-2">
                    <!-- Icon -->
                    <div class="flex justify-end mb-6">
                        <div class="relative">
                            <div class="p-4 bg-gradient-premium rounded-2xl group-hover:scale-110 transition-all duration-300 shadow-soft">
                                <!-- Shield icon -->
                                <svg class="w-8 h-8 text-accent-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <div class="absolute inset-0 bg-accent/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300 opacity-0 group-hover:opacity-100"></div>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="text-right space-y-4">
                        <h3 class="text-2xl font-bold text-foreground font-persian group-hover:text-primary transition-colors duration-300">
                            تهیه اظهارنامه
                        </h3>
                        <p class="text-muted-foreground leading-relaxed font-persian text-lg">
                            اظهارنامه‌های رسمی با نگارش حرفه‌ای
                        </p>

                        <!-- Features -->
                        <ul class="space-y-3">
                            <li class="flex items-center justify-end gap-3 text-sm group">
                                <span class="text-muted-foreground font-persian group-hover:text-foreground transition-colors duration-200">
                                    فرمت استاندارد
                                </span>
                                <div class="w-2 h-2 bg-accent rounded-full group-hover:scale-125 transition-transform duration-200"></div>
                            </li>
                            <li class="flex items-center justify-end gap-3 text-sm group">
                                <span class="text-muted-foreground font-persian group-hover:text-foreground transition-colors duration-200">
                                    زبان رسمی
                                </span>
                                <div class="w-2 h-2 bg-accent rounded-full group-hover:scale-125 transition-transform duration-200"></div>
                            </li>
                            <li class="flex items-center justify-end gap-3 text-sm group">
                                <span class="text-muted-foreground font-persian group-hover:text-foreground transition-colors duration-200">
                                    تایید شده
                                </span>
                                <div class="w-2 h-2 bg-accent rounded-full group-hover:scale-125 transition-transform duration-200"></div>
                            </li>
                        </ul>

                        <!-- CTA -->
                        <div class="pt-4">
                            <button onclick="openRequestModal()" class="btn btn-minimal w-full font-persian text-base py-3 group-hover:bg-accent/10 group-hover:border-accent/30 transition-all duration-300">
                                شروع کنید
                                <!-- ArrowLeft icon -->
                                <svg class="w-4 h-4 mr-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Service 6: مشاوره حقوقی -->
                <div class="group bg-card rounded-2xl p-8 shadow-soft hover:shadow-large transition-all duration-300 border border-border hover:border-accent/50 hover:-translate-y-2">
                    <!-- Icon -->
                    <div class="flex justify-end mb-6">
                        <div class="relative">
                            <div class="p-4 bg-gradient-premium rounded-2xl group-hover:scale-110 transition-all duration-300 shadow-soft">
                                <!-- MessageSquare icon -->
                                <svg class="w-8 h-8 text-accent-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                            </div>
                            <div class="absolute inset-0 bg-accent/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300 opacity-0 group-hover:opacity-100"></div>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="text-right space-y-4">
                        <h3 class="text-2xl font-bold text-foreground font-persian group-hover:text-primary transition-colors duration-300">
                            مشاوره حقوقی
                        </h3>
                        <p class="text-muted-foreground leading-relaxed font-persian text-lg">
                            مشاوره تخصصی با وکلای پایه یک و هوش مصنوعی
                        </p>

                        <!-- Features -->
                        <ul class="space-y-3">
                            <li class="flex items-center justify-end gap-3 text-sm group">
                                <span class="text-muted-foreground font-persian group-hover:text-foreground transition-colors duration-200">
                                    ۲۴/۷ در دسترس
                                </span>
                                <div class="w-2 h-2 bg-accent rounded-full group-hover:scale-125 transition-transform duration-200"></div>
                            </li>
                            <li class="flex items-center justify-end gap-3 text-sm group">
                                <span class="text-muted-foreground font-persian group-hover:text-foreground transition-colors duration-200">
                                    پاسخ فوری
                                </span>
                                <div class="w-2 h-2 bg-accent rounded-full group-hover:scale-125 transition-transform duration-200"></div>
                            </li>
                            <li class="flex items-center justify-end gap-3 text-sm group">
                                <span class="text-muted-foreground font-persian group-hover:text-foreground transition-colors duration-200">
                                    مشاوره تخصصی
                                </span>
                                <div class="w-2 h-2 bg-accent rounded-full group-hover:scale-125 transition-transform duration-200"></div>
                            </li>
                        </ul>

                        <!-- CTA -->
                        <div class="pt-4">
                            <button onclick="openRequestModal()" class="btn btn-minimal w-full font-persian text-base py-3 group-hover:bg-accent/10 group-hover:border-accent/30 transition-all duration-300">
                                شروع کنید
                                <!-- ArrowLeft icon -->
                                <svg class="w-4 h-4 mr-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom CTA -->
            <div class="text-center bg-gradient-subtle rounded-2xl p-12 shadow-soft">
                <h3 class="text-2xl font-bold mb-4 text-right font-persian">
                    خدمت مورد نظر خود را پیدا نکردید؟
                </h3>
                <p class="text-muted-foreground mb-8 text-right font-persian">
                    با تیم پشتیبانی ما تماس بگیرید تا راه‌حل مناسب برای شما پیدا کنیم
                </p>
                <div class="flex gap-4 justify-center">
                    <button onclick="openRequestModal()" class="btn btn-hero">
                        درخواست مشاوره رایگان
                    </button>
                    <button class="btn btn-minimal">
                        ارتباط با پشتیبانی
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-20 bg-gradient-subtle">
        <div class="container mx-auto px-4">
            <!-- Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-right font-persian">
                    تعرفه‌ها
                </h2>
                <p class="text-xl text-muted-foreground max-w-3xl mx-auto text-right font-persian leading-relaxed">
                    پلن مناسب نیاز خود را انتخاب کنید و از خدمات حقوقی حرفه‌ای بهره‌مند شوید
                </p>
            </div>

            <!-- Pricing Cards -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-6xl mx-auto mb-12">
                <!-- پلن لایت -->
                <div class="relative bg-card rounded-3xl p-8 lg:p-10 shadow-soft border border-border hover:border-accent/50 hover:shadow-medium hover:scale-105 transition-all duration-300">
                    <!-- Header -->
                    <div class="text-right mb-8">
                        <h3 class="text-3xl font-bold text-foreground mb-3 font-persian">
                            پلن لایت
                        </h3>
                        <p class="text-muted-foreground text-base font-persian leading-relaxed">
                            مناسب برای استفاده شخصی و کسب‌وکارهای کوچک
                        </p>
                    </div>

                    <!-- Price -->
                    <div class="text-right mb-10">
                        <div class="flex items-baseline justify-end gap-3 mb-2">
                            <span class="text-lg text-muted-foreground font-persian">تومان</span>
                            <span class="text-5xl lg:text-6xl font-bold text-primary">
                                ۲۷۰,۰۰۰
                            </span>
                        </div>
                        <p class="text-base text-muted-foreground font-persian">برای هر سند</p>
                    </div>

                    <!-- Features -->
                    <div class="space-y-5 mb-10">
                        <div class="flex items-start gap-4 group">
                            <!-- Check icon -->
                            <svg class="w-6 h-6 mt-0.5 flex-shrink-0 transition-colors duration-200 text-primary group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-base text-muted-foreground font-persian text-right leading-relaxed group-hover:text-foreground transition-colors duration-200">
                                دریافت ۳ نسخه پیش‌نویس
                            </span>
                        </div>
                        <div class="flex items-start gap-4 group">
                            <!-- Check icon -->
                            <svg class="w-6 h-6 mt-0.5 flex-shrink-0 transition-colors duration-200 text-primary group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-base text-muted-foreground font-persian text-right leading-relaxed group-hover:text-foreground transition-colors duration-200">
                                قدرت گرفته از هوش مصنوعی اختصاصی Vakil.My
                            </span>
                        </div>
                        <div class="flex items-start gap-4 group">
                            <!-- Check icon -->
                            <svg class="w-6 h-6 mt-0.5 flex-shrink-0 transition-colors duration-200 text-primary group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-base text-muted-foreground font-persian text-right leading-relaxed group-hover:text-foreground transition-colors duration-200">
                                متن حقوقی مطابق با آخرین قوانین
                            </span>
                        </div>
                        <div class="flex items-start gap-4 group">
                            <!-- Check icon -->
                            <svg class="w-6 h-6 mt-0.5 flex-shrink-0 transition-colors duration-200 text-primary group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-base text-muted-foreground font-persian text-right leading-relaxed group-hover:text-foreground transition-colors duration-200">
                                تحویل در کمتر از ۱۰ دقیقه
                            </span>
                        </div>
                        <div class="flex items-start gap-4 group">
                            <!-- Check icon -->
                            <svg class="w-6 h-6 mt-0.5 flex-shrink-0 transition-colors duration-200 text-primary group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-base text-muted-foreground font-persian text-right leading-relaxed group-hover:text-foreground transition-colors duration-200">
                                خروجی در فرمت PDF و متنی
                            </span>
                        </div>
                        <div class="flex items-start gap-4 group">
                            <!-- Check icon -->
                            <svg class="w-6 h-6 mt-0.5 flex-shrink-0 transition-colors duration-200 text-primary group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-base text-muted-foreground font-persian text-right leading-relaxed group-hover:text-foreground transition-colors duration-200">
                                بدون بازنگری انسانی
                            </span>
                        </div>
                    </div>

                    <!-- CTA -->
                    <button onclick="openRequestModal()" class="btn btn-minimal w-full font-persian text-lg py-4 transition-all duration-300 hover:scale-105">
                        انتخاب پلن لایت
                        <!-- ArrowLeft icon -->
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                        </svg>
                    </button>
                </div>

                <!-- پلن پیشرفته -->
                <div class="relative bg-card rounded-3xl p-8 lg:p-10 shadow-soft border border-accent shadow-glow scale-105 lg:scale-110">
                    <!-- Popular Badge -->
                    <div class="absolute -top-6 right-1/2 transform translate-x-1/2">
                        <div class="bg-gradient-premium text-accent-foreground px-8 py-3 rounded-2xl text-sm font-bold flex items-center gap-2 shadow-medium">
                            <!-- Star icon -->
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            محبوب‌ترین انتخاب
                        </div>
                    </div>

                    <!-- Header -->
                    <div class="text-right mb-8">
                        <h3 class="text-3xl font-bold text-foreground mb-3 font-persian">
                            پلن پیشرفته
                        </h3>
                        <p class="text-muted-foreground text-base font-persian leading-relaxed">
                            مناسب برای کسب‌وکارها و موارد پیچیده حقوقی
                        </p>
                    </div>

                    <!-- Price -->
                    <div class="text-right mb-10">
                        <div class="flex items-baseline justify-end gap-3 mb-2">
                            <span class="text-lg text-muted-foreground font-persian">تومان</span>
                            <span class="text-5xl lg:text-6xl font-bold text-accent">
                                ۸۷۰,۰۰۰
                            </span>
                        </div>
                        <p class="text-base text-muted-foreground font-persian">برای هر سند</p>
                    </div>

                    <!-- Features -->
                    <div class="space-y-5 mb-10">
                        <div class="flex items-start gap-4 group">
                            <!-- Check icon -->
                            <svg class="w-6 h-6 mt-0.5 flex-shrink-0 transition-colors duration-200 text-accent group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-base text-muted-foreground font-persian text-right leading-relaxed group-hover:text-foreground transition-colors duration-200">
                                ۳ پیش‌نویس هوش مصنوعی + ۱ نسخه بازنگری شده توسط وکیل مجاز
                            </span>
                        </div>
                        <div class="flex items-start gap-4 group">
                            <!-- Check icon -->
                            <svg class="w-6 h-6 mt-0.5 flex-shrink-0 transition-colors duration-200 text-accent group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-base text-muted-foreground font-persian text-right leading-relaxed group-hover:text-foreground transition-colors duration-200">
                                قدرت گرفته از هوش مصنوعی اختصاصی Vakil.My
                            </span>
                        </div>
                        <div class="flex items-start gap-4 group">
                            <!-- Check icon -->
                            <svg class="w-6 h-6 mt-0.5 flex-shrink-0 transition-colors duration-200 text-accent group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-base text-muted-foreground font-persian text-right leading-relaxed group-hover:text-foreground transition-colors duration-200">
                                متن حقوقی مطابق با آخرین قوانین
                            </span>
                        </div>
                        <div class="flex items-start gap-4 group">
                            <!-- Check icon -->
                            <svg class="w-6 h-6 mt-0.5 flex-shrink-0 transition-colors duration-200 text-accent group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-base text-muted-foreground font-persian text-right leading-relaxed group-hover:text-foreground transition-colors duration-200">
                                تحویل در کمتر از ۱۰ دقیقه
                            </span>
                        </div>
                        <div class="flex items-start gap-4 group">
                            <!-- Check icon -->
                            <svg class="w-6 h-6 mt-0.5 flex-shrink-0 transition-colors duration-200 text-accent group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-base text-muted-foreground font-persian text-right leading-relaxed group-hover:text-foreground transition-colors duration-200">
                                خروجی در فرمت PDF و متنی
                            </span>
                        </div>
                        <div class="flex items-start gap-4 group">
                            <!-- Check icon -->
                            <svg class="w-6 h-6 mt-0.5 flex-shrink-0 transition-colors duration-200 text-accent group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-base text-muted-foreground font-persian text-right leading-relaxed group-hover:text-foreground transition-colors duration-200">
                                شامل بازنگری و اصلاحات وکیل متخصص
                            </span>
                        </div>
                    </div>

                    <!-- CTA -->
                    <button onclick="openRequestModal()" class="btn btn-hero w-full font-persian text-lg py-4 transition-all duration-300 hover:scale-105">
                        انتخاب پلن پیشرفته
                        <!-- ArrowLeft icon -->
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Guarantee -->
            <div class="text-center">
                <div class="inline-flex items-center gap-3 bg-card px-6 py-3 rounded-full shadow-soft border border-border">
                    <!-- Shield icon -->
                    <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                    <span class="text-sm font-medium text-muted-foreground font-persian">
                        تمامی پلن‌ها شامل ۷ روز گارانتی بازگشت وجه هستند
                    </span>
                </div>
            </div>

            <!-- Additional Info -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-16">
                <div class="text-center">
                    <div class="text-2xl font-bold text-primary mb-2">۱۰۰٪</div>
                    <div class="text-muted-foreground font-persian">ایمن و محرمانه</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-primary mb-2">۲۴/۷</div>
                    <div class="text-muted-foreground font-persian">پشتیبانی فنی</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-primary mb-2">۹۵٪</div>
                    <div class="text-muted-foreground font-persian">رضایت مشتریان</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-background">
        <div class="container mx-auto px-4">
            <!-- Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-right font-persian">
                    نظرات مشتریان
                </h2>
                <p class="text-xl text-muted-foreground max-w-3xl mx-auto text-right font-persian leading-relaxed">
                    ببینید مشتریان ما در مورد خدمات Vakil.My چه می‌گویند
                </p>
            </div>

            <!-- Testimonials Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <!-- Testimonial 1 -->
                <div class="bg-card rounded-2xl p-8 shadow-soft border border-border">
                    <div class="mb-4">
                        <!-- Quote icon -->
                        <svg class="w-8 h-8 text-accent mb-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                        </svg>
                        
                        <div class="flex mb-4">
                            <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                        
                        <p class="text-muted-foreground mb-6 leading-relaxed font-persian text-right">
                            "خدمات فوق‌العاده‌ای از Vakil.My دریافت کردم. دادخواست من در کمتر از ۱۰ دقیقه آماده شد و کیفیت کار بسیار بالا بود. واقعاً حیرت‌انگیز است!"
                        </p>
                    </div>
                    
                    <div class="flex items-center justify-end">
                        <div class="text-right mr-4">
                            <div class="font-medium text-primary font-persian">علی محمدی</div>
                            <div class="text-sm text-muted-foreground font-persian">کارآفرین</div>
                        </div>
                        <div class="bg-primary/10 w-12 h-12 rounded-full flex items-center justify-center">
                            <span class="text-primary font-medium">ع.م</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-card rounded-2xl p-8 shadow-soft border border-border">
                    <div class="mb-4">
                        <!-- Quote icon -->
                        <svg class="w-8 h-8 text-accent mb-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                        </svg>
                        
                        <div class="flex mb-4">
                            <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                        
                        <p class="text-muted-foreground mb-6 leading-relaxed font-persian text-right">
                            "من یک قرارداد پیچیده کار نیاز داشتم. پلن پیشرفته Vakil.My نه تنها سریع کار کرد، بلکه بازنگری وکیل هم عالی بود. قیمت‌ها هم بسیار مناسب است."
                        </p>
                    </div>
                    
                    <div class="flex items-center justify-end">
                        <div class="text-right mr-4">
                            <div class="font-medium text-primary font-persian">زهرا احمدی</div>
                            <div class="text-sm text-muted-foreground font-persian">مدیر فروش</div>
                        </div>
                        <div class="bg-accent/10 w-12 h-12 rounded-full flex items-center justify-center">
                            <span class="text-accent font-medium">ز.ا</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-card rounded-2xl p-8 shadow-soft border border-border">
                    <div class="mb-4">
                        <!-- Quote icon -->
                        <svg class="w-8 h-8 text-accent mb-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                        </svg>
                        
                        <div class="flex mb-4">
                            <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                        
                        <p class="text-muted-foreground mb-6 leading-relaxed font-persian text-right">
                            "رابط کاربری بسیار ساده و فرآیند ثبت درخواست بسیار راحت است. تیم پشتیبانی هم فوق‌العاده است و همیشه آماده کمک هستند. پیشنهاد می‌کنم حتماً امتحان کنید."
                        </p>
                    </div>
                    
                    <div class="flex items-center justify-end">
                        <div class="text-right mr-4">
                            <div class="font-medium text-primary font-persian">محمد رضایی</div>
                            <div class="text-sm text-muted-foreground font-persian">مهندس نرم‌افزار</div>
                        </div>
                        <div class="bg-secondary/10 w-12 h-12 rounded-full flex items-center justify-center">
                            <span class="text-secondary font-medium">م.ر</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Overall Rating -->
            <div class="text-center bg-gradient-subtle rounded-xl p-8">
                <div class="flex justify-center mb-4">
                    <svg class="w-6 h-6 text-accent" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-6 h-6 text-accent" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-6 h-6 text-accent" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-6 h-6 text-accent" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-6 h-6 text-accent" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                </div>
                <div class="text-3xl font-bold text-primary mb-2 font-persian">۴.۹ از ۵</div>
                <div class="text-muted-foreground font-persian">بر اساس نظر ۱,۰۰۰+ مشتری</div>
            </div>
        </div>
    </section>

    <!-- Request Modal -->
    <div id="request-modal" class="fixed inset-0 z-50 hidden">
        <!-- Modal Overlay -->
        <div class="modal-overlay" onclick="closeRequestModal()"></div>
        
        <!-- Modal Content -->
        <div class="flex items-center justify-center min-h-full p-4">
            <div class="modal-content">
                <!-- Header -->
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-primary font-persian">شروع درخواست حقوقی</h2>
                    <button onclick="closeRequestModal()" class="text-muted-foreground hover:text-foreground">
                        <!-- X icon -->
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Form -->
                <form id="request-form" class="space-y-6">
                    <!-- عنوان درخواست -->
                    <div class="space-y-2">
                        <label for="title" class="block text-sm font-medium text-foreground font-persian text-right">
                            عنوان درخواست *
                        </label>
                        <input
                            type="text"
                            id="title"
                            name="title"
                            class="form-input"
                            placeholder="مثال: تهیه قرارداد خرید و فروش آپارتمان"
                            required
                        />
                    </div>

                    <!-- نوع درخواست -->
                    <div class="space-y-4">
                        <label class="block text-sm font-medium text-foreground font-persian text-right">
                            نوع درخواست *
                        </label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- تهیه دادخواست -->
                            <label class="radio-item">
                                <div class="flex-1">
                                    <div class="flex items-center justify-end">
                                        <span class="font-persian">تهیه دادخواست</span>
                                        <!-- FileText icon -->
                                        <svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <input type="radio" name="type" value="petition" class="text-primary">
                            </label>

                            <!-- تهیه لایحه -->
                            <label class="radio-item">
                                <div class="flex-1">
                                    <div class="flex items-center justify-end">
                                        <span class="font-persian">تهیه لایحه</span>
                                        <!-- Scale icon -->
                                        <svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                                        </svg>
                                    </div>
                                </div>
                                <input type="radio" name="type" value="brief" class="text-primary">
                            </label>

                            <!-- تهیه شکواییه -->
                            <label class="radio-item">
                                <div class="flex-1">
                                    <div class="flex items-center justify-end">
                                        <span class="font-persian">تهیه شکواییه</span>
                                        <!-- MessageSquare icon -->
                                        <svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <input type="radio" name="type" value="complaint" class="text-primary">
                            </label>

                            <!-- تهیه قرارداد -->
                            <label class="radio-item">
                                <div class="flex-1">
                                    <div class="flex items-center justify-end">
                                        <span class="font-persian">تهیه قرارداد</span>
                                        <!-- File icon -->
                                        <svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <input type="radio" name="type" value="contract" class="text-primary">
                            </label>

                            <!-- تهیه اظهارنامه -->
                            <label class="radio-item">
                                <div class="flex-1">
                                    <div class="flex items-center justify-end">
                                        <span class="font-persian">تهیه اظهارنامه</span>
                                        <!-- Sheet icon -->
                                        <svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                        </svg>
                                    </div>
                                </div>
                                <input type="radio" name="type" value="declaration" class="text-primary">
                            </label>

                            <!-- مشاوره حقوقی -->
                            <label class="radio-item">
                                <div class="flex-1">
                                    <div class="flex items-center justify-end">
                                        <span class="font-persian">مشاوره حقوقی</span>
                                        <!-- Users icon -->
                                        <svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <input type="radio" name="type" value="consultation" class="text-primary">
                            </label>
                        </div>
                    </div>

                    <!-- متن درخواست -->
                    <div class="space-y-2">
                        <label for="content" class="block text-sm font-medium text-foreground font-persian text-right">
                            متن درخواست و جزئیات *
                        </label>
                        <textarea
                            id="content"
                            name="content"
                            class="form-textarea"
                            placeholder="لطفاً جزئیات کاملی از درخواست خود ارائه دهید. هر چه اطلاعات بیشتری ارائه دهید، خروجی دقیق‌تری دریافت خواهید کرد."
                            required
                        ></textarea>
                    </div>

                    <!-- دکمه ثبت -->
                    <div class="flex gap-4 pt-4">
                        <button
                            type="button"
                            onclick="closeRequestModal()"
                            class="btn btn-outline flex-1 font-persian"
                        >
                            انصراف
                        </button>
                        <button
                            type="submit"
                            class="btn btn-hero flex-1 font-persian"
                            id="submit-button"
                        >
                            ثبت درخواست
                        </button>
                    </div>
                </form>

                <!-- اطلاعات تکمیلی -->
                <div class="mt-6 p-4 bg-accent/5 rounded-lg border border-accent/20">
                    <p class="text-sm text-muted-foreground font-persian text-center">
                        پس از ثبت درخواست، تیم ما در کمتر از ۱۰ دقیقه پاسخ شما را آماده خواهد کرد.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Utility functions
        function scrollToSection(id) {
            const element = document.getElementById(id);
            if (element) {
                element.scrollIntoView({ behavior: 'smooth' });
                closeMobileMenu();
            }
        }

        function openRequestModal() {
            const modal = document.getElementById('request-modal');
            if (modal) {
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeRequestModal() {
            const modal = document.getElementById('request-modal');
            if (modal) {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
                
                // Reset form
                const form = document.getElementById('request-form');
                if (form) {
                    form.reset();
                }
            }
        }

        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenu) {
                mobileMenu.classList.toggle('hidden');
            }
        }

        function closeMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenu) {
                mobileMenu.classList.add('hidden');
            }
        }

        // Event listeners
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            if (mobileMenuButton) {
                mobileMenuButton.addEventListener('click', toggleMobileMenu);
            }

            // Close modal with Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeRequestModal();
                }
            });

            // Form submission
            const requestForm = document.getElementById('request-form');
            if (requestForm) {
                requestForm.addEventListener('submit', async function(e) {
                    e.preventDefault();
                    
                    const formData = new FormData(this);
                    const data = {
                        title: formData.get('title'),
                        type: formData.get('type'),
                        content: formData.get('content')
                    };
                    
                    // Basic validation
                    if (!data.title || !data.type || !data.content) {
                        alert('لطفاً تمام فیلدها را پر کنید');
                        return;
                    }

                    const submitButton = document.getElementById('submit-button');
                    const originalText = submitButton.textContent;
                    
                    // Show loading state
                    submitButton.textContent = 'در حال ارسال...';
                    submitButton.disabled = true;
                    
                    try {
                        // Simulate API call (replace with actual endpoint)
                        const response = await fetch('https://vakil.my/api/req', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify(data),
                        });

                        if (response.ok) {
                            alert('درخواست شما با موفقیت ثبت شد. بزودی با شما تماس می‌گیریم.');
                            this.reset();
                            closeRequestModal();
                        } else {
                            throw new Error('خطا در ارسال درخواست');
                        }
                    } catch (error) {
                        alert('خطا در ارسال درخواست. لطفاً دوباره تلاش کنید.');
                    } finally {
                        submitButton.textContent = originalText;
                        submitButton.disabled = false;
                    }
                });
            }

            // Radio button selection styling
            const radioItems = document.querySelectorAll('.radio-item');
            radioItems.forEach(item => {
                const radioInput = item.querySelector('input[type="radio"]');
                if (radioInput) {
                    radioInput.addEventListener('change', function() {
                        // Remove selected styling from all items
                        radioItems.forEach(otherItem => {
                            otherItem.style.borderColor = 'hsl(var(--border))';
                            otherItem.style.backgroundColor = 'transparent';
                        });
                        
                        // Add selected styling to current item
                        if (this.checked) {
                            item.style.borderColor = 'hsl(var(--primary))';
                            item.style.backgroundColor = 'hsl(var(--primary) / 0.05)';
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
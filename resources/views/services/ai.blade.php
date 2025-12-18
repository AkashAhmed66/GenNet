@extends('layouts.website-layout')

@section('content')

{{-- ================= HERO SECTION (CLOUD STYLE) ================= --}}
<section class="relative min-h-[85vh] flex items-center bg-cover bg-center"
    style="background-image:url('/images/ai-solution-banner.jpg')">

    <div class="absolute inset-0 bg-gradient-to-r
        from-[#0f172a]/95 via-[#1e293b]/90 to-[#2563eb]/90"></div>

    <div class="relative max-w-7xl mx-auto px-6 text-white">
        <h1 class="text-4xl md:text-6xl font-bold max-w-3xl">
            AI Software Solutions
        </h1>
        <p class="mt-6 text-lg md:text-xl opacity-90 max-w-3xl">
            Unlock automation, insights, and intelligence with enterprise-grade
            AI systems designed for modern businesses.
        </p>
    </div>
</section>


{{-- ================= MAIN CONTENT ================= --}}
<section class="bg-white py-32">
    <div class="max-w-[1400px] mx-auto px-8 grid grid-cols-12 gap-16">

        {{-- ================= LEFT SIDEBAR ================= --}}
        <aside class="col-span-3">
            <div class="sticky top-32">

                <h3 class="text-sm font-semibold tracking-widest text-slate-500 mb-8 uppercase">
                    AI Solutions
                </h3>

                <ul class="space-y-7 text-[15px] font-medium text-slate-700">
                    <li><a href="#automation" class="sidebar-link">Automation</a></li>
                    <li><a href="#ml" class="sidebar-link">Machine Learning</a></li>
                    <li><a href="#aiapps" class="sidebar-link">AI Applications</a></li>
                    <li><a href="#usecases" class="sidebar-link">Use Cases</a></li>
                </ul>

            </div>
        </aside>

        {{-- ================= RIGHT CONTENT ================= --}}
        <div class="col-span-9 space-y-40">

            {{-- 1. AUTOMATION --}}
            <section id="automation" class="slide slide-left">
                <div class="grid grid-cols-2 gap-20 items-center">
                    <img src="\images\Ai-Software\ai-automation.png" class="service-img">
                    <div>
                        <p class="service-tag">AUTOMATION</p>
                        <h2 class="service-title">Intelligent Automation</h2>
                        <p class="service-text">
                            AI-driven automation tools that eliminate repetitive
                            tasks, improve operational efficiency, and reduce
                            operational costs.
                        </p>
                    </div>
                </div>
            </section>

            {{-- 2. MACHINE LEARNING --}}
            <section id="ml" class="slide slide-right">
                <div class="grid grid-cols-2 gap-20 items-center">
                    <div>
                        <p class="service-tag">ANALYTICS</p>
                        <h2 class="service-title">Machine Learning & Predictive Analytics</h2>
                        <p class="service-text">
                            Advanced ML models that analyze historical data,
                            predict future trends, and support data-driven
                            decision making.
                        </p>
                    </div>
                    <img src="\images\Ai-Software\Machine-learning-ai.webp" class="service-img">
                </div>
            </section>

            {{-- 3. AI APPLICATIONS --}}
            <section id="aiapps" class="slide slide-left">
                <div class="grid grid-cols-2 gap-20 items-center">
                    <img src="\images\Ai-Software\AI-Application.jpg" class="service-img">
                    <div>
                        <p class="service-tag">INTELLIGENCE</p>
                        <h2 class="service-title">Custom AI Applications</h2>
                        <p class="service-text">
                            Tailor-made AI software using NLP, computer vision,
                            and intelligent systems aligned with your business goals.
                        </p>
                    </div>
                </div>
            </section>

            {{-- 4. USE CASES --}}
            <section id="usecases" class="slide slide-right">
                <div class="grid grid-cols-2 gap-20 items-center">
                    <div>
                        <p class="service-tag">APPLICATIONS</p>
                        <h2 class="service-title">Real-World Use Cases</h2>
                        <p class="service-text">
                            Customer support automation, business forecasting,
                            recommendation systems, fraud detection, and
                            intelligent workflow optimization.
                        </p>
                    </div>
                    <img src="\images\Ai-Software\Generative-AI-Use-Cases.png" class="service-img">
                </div>
            </section>

        </div>
    </div>
</section>


{{-- ================= STYLES (SAME AS CLOUD / EMAIL) ================= --}}
<style>
.service-img{
    width:100%;
    height:440px;
    object-fit:cover;
    border-radius:18px;
    box-shadow:0 30px 60px rgba(0,0,0,.25);
    transition:transform .6s ease;
}
.service-img:hover{
    transform:scale(1.03);
}
.service-tag{
    font-size:13px;
    letter-spacing:2px;
    color:#2563eb;
    font-weight:600;
    margin-bottom:12px;
}
.service-title{
    font-size:38px;
    font-weight:700;
    color:#0f172a;
    margin-bottom:22px;
}
.service-text{
    font-size:18px;
    line-height:1.8;
    color:#475569;
    max-width:520px;
}
.sidebar-link{
    position:relative;
    padding-left:18px;
}
.sidebar-link::before{
    content:"";
    position:absolute;
    left:0;
    top:50%;
    width:6px;
    height:6px;
    background:#2563eb;
    border-radius:50%;
    transform:translateY(-50%);
    opacity:.5;
}
.slide{
    opacity:0;
    transition:all 1.2s ease;
}
.slide-left{ transform:translateX(-80px); }
.slide-right{ transform:translateX(80px); }
.slide.active{
    opacity:1;
    transform:translateX(0);
}
</style>

{{-- ================= SLIDE ON SCROLL SCRIPT ================= --}}
<script>
const slides = document.querySelectorAll('.slide');

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if(entry.isIntersecting){
            entry.target.classList.add('active');
        }
    });
},{ threshold:0.3 });

slides.forEach(slide => observer.observe(slide));
</script>

@endsection

@extends('layouts.website-layout')

@section('content')

{{-- ================= HERO SECTION (CLOUD STYLE) ================= --}}
<section class="relative min-h-[85vh] flex items-center bg-cover bg-center"
    style="background-image:url('/images/call-center-banner.jpg')">

    <div class="absolute inset-0 bg-gradient-to-r
        from-[#0f172a]/95 via-[#1e293b]/90 to-[#2563eb]/90"></div>

    <div class="relative max-w-7xl mx-auto px-6 text-white">
        <h1 class="text-4xl md:text-6xl font-bold max-w-3xl">
            Customized Call Center Services
        </h1>
        <p class="mt-6 text-lg md:text-xl opacity-90 max-w-3xl">
            Tailored inbound, outbound, IVR, analytics, and customer support
            solutions built for modern enterprises.
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
                    Call Center
                </h3>

                <ul class="space-y-7 text-[15px] font-medium text-slate-700">
                    <li><a href="#overview" class="sidebar-link">Overview</a></li>
                    <li><a href="#inbound" class="sidebar-link">Inbound & Outbound</a></li>
                    <li><a href="#ivr" class="sidebar-link">IVR Systems</a></li>
                    <li><a href="#analytics" class="sidebar-link">Monitoring & Analytics</a></li>
                    <li><a href="#usecases" class="sidebar-link">Use Cases</a></li>
                </ul>

            </div>
        </aside>

        {{-- ================= RIGHT CONTENT ================= --}}
        <div class="col-span-9 space-y-40">

            {{-- 1. OVERVIEW --}}
            <section id="overview" class="slide slide-left">
                <div class="grid grid-cols-2 gap-20 items-center">
                    <img src="/images/call-center-overview.jpg" class="service-img">
                    <div>
                        <p class="service-tag">OVERVIEW</p>
                        <h2 class="service-title">Enterprise Call Center Solutions</h2>
                        <p class="service-text">
                            Fully customizable call center services designed
                            to streamline communication, enhance customer
                            experience, and improve operational efficiency
                            across inbound, outbound, and support operations.
                        </p>
                    </div>
                </div>
            </section>

            {{-- 2. INBOUND & OUTBOUND --}}
            <section id="inbound" class="slide slide-right">
                <div class="grid grid-cols-2 gap-20 items-center">
                    <div>
                        <p class="service-tag">COMMUNICATION</p>
                        <h2 class="service-title">Inbound & Outbound Support</h2>
                        <p class="service-text">
                            Professional handling of customer inquiries,
                            technical support, sales calls, and outbound
                            campaigns with trained agents and smart routing.
                        </p>
                    </div>
                    <img src="/images/inbound-outbound.jpg" class="service-img">
                </div>
            </section>

            {{-- 3. IVR SYSTEMS --}}
            <section id="ivr" class="slide slide-left">
                <div class="grid grid-cols-2 gap-20 items-center">
                    <img src="/images/ivr-system.jpg" class="service-img">
                    <div>
                        <p class="service-tag">AUTOMATION</p>
                        <h2 class="service-title">IVR & Call Automation</h2>
                        <p class="service-text">
                            Custom IVR menus, automated workflows,
                            intelligent call routing, and self-service
                            options to reduce wait times and improve efficiency.
                        </p>
                    </div>
                </div>
            </section>

            {{-- 4. MONITORING & ANALYTICS --}}
            <section id="analytics" class="slide slide-right">
                <div class="grid grid-cols-2 gap-20 items-center">
                    <div>
                        <p class="service-tag">INSIGHTS</p>
                        <h2 class="service-title">Call Monitoring & Analytics</h2>
                        <p class="service-text">
                            Real-time dashboards, call recording,
                            agent performance tracking, and analytics
                            to ensure service quality and data-driven decisions.
                        </p>
                    </div>
                    <img src="/images/call-analytics.jpg" class="service-img">
                </div>
            </section>

            {{-- 5. USE CASES --}}
            <section id="usecases" class="slide slide-left">
                <div class="grid grid-cols-2 gap-20 items-center">
                    <img src="/images/call-center-usecases.jpg" class="service-img">
                    <div>
                        <p class="service-tag">APPLICATIONS</p>
                        <h2 class="service-title">Real-World Use Cases</h2>
                        <p class="service-text">
                            Customer care operations, telemarketing
                            campaigns, IVR-based billing systems,
                            and dedicated support center outsourcing.
                        </p>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>


{{-- ================= SHARED STYLES (GLOBAL SERVICE STYLE) ================= --}}
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

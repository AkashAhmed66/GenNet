@extends('layouts.website-layout')

@section('content')

{{-- ================= HERO SECTION (CLOUD STYLE) ================= --}}
<section class="relative min-h-[85vh] flex items-center bg-cover bg-center"
    style="background-image:url('/images/sms-banner.jpg')">

    <div class="absolute inset-0 bg-gradient-to-r
        from-[#0f172a]/95 via-[#1e293b]/90 to-[#2563eb]/90"></div>

    <div class="relative max-w-7xl mx-auto px-6 text-white">
        <h1 class="text-4xl md:text-6xl font-bold max-w-3xl">
            SMS Services
        </h1>
        <p class="mt-6 text-lg md:text-xl opacity-90 max-w-3xl">
            Enterprise bulk messaging, OTP delivery, and automated
            SMS communication solutions at scale.
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
                    SMS Services
                </h3>

                <ul class="space-y-7 text-[15px] font-medium text-slate-700">
                    <li><a href="#overview" class="sidebar-link">Overview</a></li>
                    <li><a href="#bulk" class="sidebar-link">Bulk SMS</a></li>
                    <li><a href="#otp" class="sidebar-link">OTP Delivery</a></li>
                    <li><a href="#api" class="sidebar-link">API Integration</a></li>
                    <li><a href="#usecases" class="sidebar-link">Use Cases</a></li>
                </ul>

            </div>
        </aside>

        {{-- ================= RIGHT CONTENT ================= --}}
        <div class="col-span-9 space-y-40">

            {{-- 1. OVERVIEW --}}
            <section id="overview" class="slide slide-left">
                <div class="grid grid-cols-2 gap-20 items-center">
                    <img src="/images/sms-overview.jpg" class="service-img">
                    <div>
                        <p class="service-tag">OVERVIEW</p>
                        <h2 class="service-title">Enterprise SMS Platform</h2>
                        <p class="service-text">
                            High-performance SMS platform enabling businesses
                            to send bulk messages, notifications, marketing
                            campaigns, and OTPs with reliable delivery
                            and secure messaging routes.
                        </p>
                    </div>
                </div>
            </section>

            {{-- 2. BULK SMS --}}
            <section id="bulk" class="slide slide-right">
                <div class="grid grid-cols-2 gap-20 items-center">
                    <div>
                        <p class="service-tag">CAMPAIGNS</p>
                        <h2 class="service-title">Bulk SMS Messaging</h2>
                        <p class="service-text">
                            Instantly broadcast promotional and transactional
                            SMS campaigns to thousands or millions of users
                            with high delivery success.
                        </p>
                    </div>
                    <img src="/images/bulk-sms.jpg" class="service-img">
                </div>
            </section>

            {{-- 3. OTP DELIVERY --}}
            <section id="otp" class="slide slide-left">
                <div class="grid grid-cols-2 gap-20 items-center">
                    <img src="/images/otp-delivery.jpg" class="service-img">
                    <div>
                        <p class="service-tag">SECURITY</p>
                        <h2 class="service-title">OTP & Authentication SMS</h2>
                        <p class="service-text">
                            Fast, secure, and reliable one-time password
                            delivery for banking, fintech, and authentication
                            systems.
                        </p>
                    </div>
                </div>
            </section>

            {{-- 4. API INTEGRATION --}}
            <section id="api" class="slide slide-right">
                <div class="grid grid-cols-2 gap-20 items-center">
                    <div>
                        <p class="service-tag">INTEGRATION</p>
                        <h2 class="service-title">API & System Integration</h2>
                        <p class="service-text">
                            Simple and scalable REST APIs to integrate SMS
                            services with web applications, mobile apps,
                            and enterprise systems.
                        </p>
                    </div>
                    <img src="/images/sms-api.jpg" class="service-img">
                </div>
            </section>

            {{-- 5. USE CASES --}}
            <section id="usecases" class="slide slide-left">
                <div class="grid grid-cols-2 gap-20 items-center">
                    <img src="/images/sms-usecases.jpg" class="service-img">
                    <div>
                        <p class="service-tag">APPLICATIONS</p>
                        <h2 class="service-title">Real-World Use Cases</h2>
                        <p class="service-text">
                            Customer notifications, banking OTPs, marketing
                            campaigns, e-commerce updates, and delivery
                            tracking messages.
                        </p>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>


{{-- ================= SHARED STYLES (SAME FOR ALL SERVICES) ================= --}}
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

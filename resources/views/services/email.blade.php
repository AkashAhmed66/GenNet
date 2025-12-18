@extends('layouts.website-layout')

@section('content')

{{-- ================= HERO SECTION (CLOUD STYLE) ================= --}}
<section class="relative min-h-[85vh] flex items-center bg-cover bg-center"
    style="background-image:url('/images/email-hosting-banner.jpg')">

    <div class="absolute inset-0 bg-gradient-to-r
        from-[#0f172a]/95 via-[#1e293b]/90 to-[#2563eb]/90"></div>

    <div class="relative max-w-7xl mx-auto px-6 text-white">
        <h1 class="text-4xl md:text-6xl font-bold max-w-3xl">
            Email & Hosting Solutions
        </h1>
        <p class="mt-6 text-lg md:text-xl opacity-90 max-w-3xl">
            Enterprise-grade email, hosting, and domain solutions designed
            for reliability, security, and scalable growth.
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
                    Email & Hosting
                </h3>

                <ul class="space-y-7 text-[15px] font-medium text-slate-700">
                    <li><a href="#email" class="sidebar-link">Business Email</a></li>
                    <li><a href="#workspace" class="sidebar-link">Google Workspace</a></li>
                    <li><a href="#hosting" class="sidebar-link">Secure Hosting</a></li>
                    <li><a href="#domain" class="sidebar-link">Domain Management</a></li>
                </ul>

            </div>
        </aside>

        {{-- ================= RIGHT CONTENT ================= --}}
        <div class="col-span-9 space-y-40">

            {{-- 1. BUSINESS EMAIL --}}
            <section id="email" class="slide slide-left">
                <div class="grid grid-cols-2 gap-20 items-center">
                    <img src="\images\email & hosting\Business Email.webp" class="service-img">
                    <div>
                        <p class="service-tag">COMMUNICATION</p>
                        <h2 class="service-title">Business Email Solutions</h2>
                        <p class="service-text">
                            Professional corporate email systems with advanced
                            security, spam protection, and high availability
                            tailored for enterprises.
                        </p>
                    </div>
                </div>
            </section>

            {{-- 2. GOOGLE WORKSPACE --}}
            <section id="workspace" class="slide slide-right">
                <div class="grid grid-cols-2 gap-20 items-center">
                    <div>
                        <p class="service-tag">COLLABORATION</p>
                        <h2 class="service-title">Google Workspace & Microsoft 365</h2>
                        <p class="service-text">
                            Seamless setup, email migration, and configuration
                            of Google Workspace and Microsoft 365 for
                            enterprise collaboration.
                        </p>
                    </div>
                    <img src="\images\email & hosting\Google Workspace.jpg" class="service-img">
                </div>
            </section>

            {{-- 3. HOSTING --}}
            <section id="hosting" class="slide slide-left">
                <div class="grid grid-cols-2 gap-20 items-center">
                    <img src="\images\email & hosting\Secure Hosting.jpg" class="service-img">
                    <div>
                        <p class="service-tag">INFRASTRUCTURE</p>
                        <h2 class="service-title">Secure & Scalable Hosting</h2>
                        <p class="service-text">
                            Fast, reliable, and scalable hosting solutions with
                            enterprise-grade security, backups, and monitoring.
                        </p>
                    </div>
                </div>
            </section>

            {{-- 4. DOMAIN --}}
            <section id="domain" class="slide slide-right">
                <div class="grid grid-cols-2 gap-20 items-center">
                    <div>
                        <p class="service-tag">MANAGEMENT</p>
                        <h2 class="service-title">Domain & DNS Management</h2>
                        <p class="service-text">
                            Complete domain registration, DNS management, and
                            renewal services to keep your digital identity secure.
                        </p>
                    </div>
                    <img src="\images\email & hosting\Domain Management.jpg" class="service-img">
                </div>
            </section>

        </div>
    </div>
</section>


{{-- ================= STYLES (SAME AS CLOUD PAGE) ================= --}}
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

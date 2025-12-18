@extends('layouts.website-layout')

@section('content')

{{-- ================= HERO SECTION (CLOUD STYLE) ================= --}}
<section class="relative min-h-[85vh] flex items-center bg-cover bg-center"
    style="background-image:url('/images/microsoft-banner.jpg')">

    <div class="absolute inset-0 bg-gradient-to-r
        from-[#0f172a]/95 via-[#1e293b]/90 to-[#2563eb]/90"></div>

    <div class="relative max-w-7xl mx-auto px-6 text-white">
        <h1 class="text-4xl md:text-6xl font-bold max-w-3xl">
            Microsoft Services
        </h1>
        <p class="mt-6 text-lg md:text-xl opacity-90 max-w-3xl">
            Microsoft 365, Azure Cloud, and enterprise-grade productivity
            and security solutions for modern organizations.
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
                    Microsoft Services
                </h3>

                <ul class="space-y-7 text-[15px] font-medium text-slate-700">
                    <li><a href="#overview" class="sidebar-link">Overview</a></li>
                    <li><a href="#m365" class="sidebar-link">Microsoft 365</a></li>
                    <li><a href="#azure" class="sidebar-link">Azure Cloud</a></li>
                    <li><a href="#endpoint" class="sidebar-link">Endpoint Management</a></li>
                    <li><a href="#usecases" class="sidebar-link">Use Cases</a></li>
                </ul>

            </div>
        </aside>

        {{-- ================= RIGHT CONTENT ================= --}}
        <div class="col-span-9 space-y-40">

            {{-- 1. OVERVIEW --}}
            <section id="overview" class="slide slide-left">
                <div class="grid grid-cols-2 gap-20 items-center">
                    <img src="/images/microsoft-overview.jpg" class="service-img">
                    <div>
                        <p class="service-tag">OVERVIEW</p>
                        <h2 class="service-title">Enterprise Microsoft Solutions</h2>
                        <p class="service-text">
                            End-to-end Microsoft services including cloud migration,
                            productivity enablement, endpoint security, and enterprise
                            IT modernization using Microsoft-certified best practices.
                        </p>
                    </div>
                </div>
            </section>

            {{-- 2. MICROSOFT 365 --}}
            <section id="m365" class="slide slide-right">
                <div class="grid grid-cols-2 gap-20 items-center">
                    <div>
                        <p class="service-tag">PRODUCTIVITY</p>
                        <h2 class="service-title">Microsoft 365 Deployment</h2>
                        <p class="service-text">
                            Complete setup and management of Outlook, Teams,
                            SharePoint, OneDrive, and Microsoft collaboration
                            tools to enhance team productivity.
                        </p>
                    </div>
                    <img src="/images/microsoft-365.jpg" class="service-img">
                </div>
            </section>

            {{-- 3. AZURE CLOUD --}}
            <section id="azure" class="slide slide-left">
                <div class="grid grid-cols-2 gap-20 items-center">
                    <img src="/images/azure-cloud.jpg" class="service-img">
                    <div>
                        <p class="service-tag">CLOUD</p>
                        <h2 class="service-title">Azure Cloud Services</h2>
                        <p class="service-text">
                            Scalable Azure infrastructure including virtual machines,
                            cloud security, automation, backups, and enterprise
                            workload hosting.
                        </p>
                    </div>
                </div>
            </section>

            {{-- 4. ENDPOINT MANAGEMENT --}}
            <section id="endpoint" class="slide slide-right">
                <div class="grid grid-cols-2 gap-20 items-center">
                    <div>
                        <p class="service-tag">SECURITY</p>
                        <h2 class="service-title">Endpoint & Device Management</h2>
                        <p class="service-text">
                            Secure users, devices, and applications using
                            Microsoft Intune, identity access controls,
                            and enterprise security policies.
                        </p>
                    </div>
                    <img src="/images/endpoint-management.jpg" class="service-img">
                </div>
            </section>

            {{-- 5. USE CASES --}}
            <section id="usecases" class="slide slide-left">
                <div class="grid grid-cols-2 gap-20 items-center">
                    <img src="/images/microsoft-usecases.jpg" class="service-img">
                    <div>
                        <p class="service-tag">APPLICATIONS</p>
                        <h2 class="service-title">Real-World Use Cases</h2>
                        <p class="service-text">
                            Corporate email systems, Azure cloud hosting,
                            enterprise security & compliance, and
                            collaboration-driven digital transformation.
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

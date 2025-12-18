@extends('layouts.website-layout')

@section('content')

{{-- ================= HERO SECTION ================= --}}
<section class="relative min-h-[85vh] flex items-center bg-cover bg-center"
    style="background-image:url('/images/cloud-banner.jpg')">

    <div class="absolute inset-0 bg-gradient-to-r
        from-[#0f172a]/95 via-[#1e293b]/90 to-[#2563eb]/90"></div>

    <div class="relative max-w-7xl mx-auto px-6 text-white">
        <h1 class="text-4xl md:text-6xl font-bold max-w-3xl">
            Cloud & Application Development
        </h1>
        <p class="mt-6 text-lg md:text-xl opacity-90 max-w-3xl">
            Enterprise-grade cloud infrastructure and application solutions
            built for scalability, security, and performance.
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
                    Cloud Services
                </h3>

                <ul class="space-y-7 text-[15px] font-medium text-slate-700">
                    <li><a href="#vm" class="sidebar-link">Virtual Machines</a></li>
                    <li><a href="#storage" class="sidebar-link">Cloud Storage</a></li>
                    <li><a href="#security" class="sidebar-link">Cloud Security</a></li>
                    <li><a href="#backup" class="sidebar-link">Backup & Recovery</a></li>
                    <li><a href="#monitoring" class="sidebar-link">Monitoring & Analytics</a></li>
                </ul>

            </div>
        </aside>

        {{-- ================= RIGHT CONTENT ================= --}}
        <div class="col-span-9 space-y-40">

            {{-- 1. VM --}}
            <section id="vm" class="slide slide-left">
                <div class="grid grid-cols-2 gap-20 items-center">
                    <img src="\images\cloud\virtual-machine cloude.jpg" class="service-img">
                    <div>
                        <p class="service-tag">INFRASTRUCTURE</p>
                        <h2 class="service-title">Virtual Machine Solutions</h2>
                        <p class="service-text">
                            Enterprise-grade virtual machines with optimized
                            compute, memory, and storage for mission-critical workloads.
                        </p>
                    </div>
                </div>
            </section>

            {{-- 2. STORAGE --}}
            <section id="storage" class="slide slide-right">
                <div class="grid grid-cols-2 gap-20 items-center">
                    <div>
                        <p class="service-tag">DATA MANAGEMENT</p>
                        <h2 class="service-title">Cloud Storage</h2>
                        <p class="service-text">
                            Secure, scalable cloud storage with encryption,
                            redundancy, and enterprise-level durability.
                        </p>
                    </div>
                    <img src="\images\cloud\Cloud Storage cloude.jpg" class="service-img">
                </div>
            </section>

            {{-- 3. SECURITY --}}
            <section id="security" class="slide slide-left">
                <div class="grid grid-cols-2 gap-20 items-center">
                    <img src="\images\cloud\Cloud-Security-cloude.webp" class="service-img">
                    <div>
                        <p class="service-tag">PROTECTION</p>
                        <h2 class="service-title">Cloud Security</h2>
                        <p class="service-text">
                            Advanced cloud security with firewall protection,
                            identity management, and compliance-ready architecture.
                        </p>
                    </div>
                </div>
            </section>

            {{-- 4. BACKUP --}}
            <section id="backup" class="slide slide-right">
                <div class="grid grid-cols-2 gap-20 items-center">
                    <div>
                        <p class="service-tag">RELIABILITY</p>
                        <h2 class="service-title">Backup & Recovery</h2>
                        <p class="service-text">
                            Automated backup and disaster recovery systems
                            ensuring uninterrupted business operations.
                        </p>
                    </div>
                    <img src="\images\cloud\cloude backup.jpg" class="service-img">
                </div>
            </section>

            {{-- 5. MONITORING --}}
            <section id="monitoring" class="slide slide-left">
                <div class="grid grid-cols-2 gap-20 items-center">
                    <img src="\images\cloud\monitoring cloud.webp" class="service-img">
                    <div>
                        <p class="service-tag">PERFORMANCE</p>
                        <h2 class="service-title">Monitoring & Analytics</h2>
                        <p class="service-text">
                            Real-time monitoring, logging, and analytics
                            for proactive performance optimization.
                        </p>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>


{{-- ================= STYLES ================= --}}
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

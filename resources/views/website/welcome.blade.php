@extends('layouts.website-layout')

@section('title', 'Home - GenNet Solutions')

@section('content')
<!-- Add Remix Icon CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css">

<!-- HERO SECTION -->
@php
// Prefer a local hero image if present, otherwise fall back to a reliable Unsplash image
$localHero = public_path('images/gen.jpeg');
$heroUrl = file_exists($localHero)
? asset('images/gen.jpeg')
: 'https://images.unsplash.com/photo-1460925895917-adf4ee868993?auto=format&fit=crop&w=1400&q=80';
@endphp

<section class="relative h-[80vh] bg-cover bg-center flex items-center justify-center"
    style="background-image: url('{{ $heroUrl }}');">

    <div class="absolute inset-0 bg-black bg-opacity-60"></div>

    <div class="relative text-center max-w-3xl px-4 text-white">
        <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
            Next-Gen Cloud & AI Solutions for Your Business
        </h1>

        <p class="mt-4 text-lg md:text-xl">
            Empower your enterprise with secure cloud infrastructure, AI-driven applications, and advanced security
            solutions. Deploy with 99.99% uptime guaranteed.
        </p>

        <div class="mt-8 flex flex-col md:flex-row gap-4 justify-center">
            <a href="{{ route('services') }}"
                class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg text-lg font-semibold">
                View Services
            </a>
            <a href="#contact"
                class="inline-block bg-transparent border-2 border-white hover:bg-white hover:text-blue-600 text-white px-8 py-3 rounded-lg text-lg font-semibold">
                Get Started
            </a>
        </div>
    </div>
</section>

<!-- SERVICES OVERVIEW SECTION -->
<section class="py-20 px-4 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Our Core Services</h2>
            <p class="text-xl text-gray-600">Comprehensive IT Solutions Tailored to Your Business Needs</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Cloud Solutions -->
            <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                    <i class="ri-cloud-line text-2xl text-blue-600"></i>
                </div>
                <h3 class="text-2xl font-bold mb-2">Cloud & VM Services</h3>
                <p class="text-gray-600 mb-4">Deploy secure, scalable virtual machines and web solutions with 99.99%
                    uptime—perfect for startups, enterprises, and digital platforms.</p>
                <a href="{{ route('services') }}" class="text-blue-600 font-semibold hover:text-blue-700">Learn More
                    →</a>
            </div>

            <!-- Email & Hosting -->
            <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-4">
                    <i class="ri-mail-line text-2xl text-green-600"></i>
                </div>
                <h3 class="text-2xl font-bold mb-2">Email & Hosting Solutions</h3>
                <p class="text-gray-600 mb-4">Office 365, Google Workspace & Domain Solutions. Boost productivity and
                    security with professional email and cloud collaboration tools.</p>
                <a href="{{ route('services') }}" class="text-green-600 font-semibold hover:text-green-700">Learn More
                    →</a>
            </div>

            <!-- AI Solutions -->
            <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                    <i class="ri-cpu-line text-2xl text-purple-600"></i>
                </div>
                <h3 class="text-2xl font-bold mb-2">AI Software Solutions</h3>
                <p class="text-gray-600 mb-4">Transform your business with intelligent automation, predictive analytics,
                    and AI-driven applications tailored to your needs.</p>
                <a href="{{ route('services') }}" class="text-purple-600 font-semibold hover:text-purple-700">Learn More
                    →</a>
            </div>

            <!-- Security Solutions -->
            <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-4">
                    <i class="ri-shield-lock-line text-2xl text-red-600"></i>
                </div>
                <h3 class="text-2xl font-bold mb-2">AI-Powered Security</h3>
                <p class="text-gray-600 mb-4">Enhance your defense with real-time threat detection, intelligent
                    surveillance, and proactive security analytics powered by AI.</p>
                <a href="{{ route('services') }}" class="text-red-600 font-semibold hover:text-red-700">Learn More →</a>
            </div>

            <!-- Surveillance -->
            <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition">
                <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-4">
                    <i class="ri-camera-line text-2xl text-yellow-600"></i>
                </div>
                <h3 class="text-2xl font-bold mb-2">24/7 Surveillance</h3>
                <p class="text-gray-600 mb-4">Protect your home and business with cutting-edge surveillance systems,
                    real-time alerts, and remote access capabilities.</p>
                <a href="{{ route('services') }}" class="text-yellow-600 font-semibold hover:text-yellow-700">Learn More
                    →</a>
            </div>

            <!-- Network Services -->
            <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                    <i class="ri-router-line text-2xl text-indigo-600"></i>
                </div>
                <h3 class="text-2xl font-bold mb-2">Managed Network Services</h3>
                <p class="text-gray-600 mb-4">CP, VPN, APN, VAS & MFS Solutions. Secure, scalable, and customizable
                    services for telecoms and enterprises.</p>
                <a href="{{ route('services') }}" class="text-indigo-600 font-semibold hover:text-indigo-700">Learn More
                    →</a>
            </div>
        </div>
    </div>
</section>

<!-- INDUSTRIES SERVED -->
<section class="py-20 px-4">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Industries We Serve</h2>
            <p class="text-xl text-gray-600">Trusted by businesses across multiple sectors</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
            <div class="text-center p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                <i class="ri-building-line text-4xl text-blue-600 mb-2 block"></i>
                <p class="font-semibold">Real Estate</p>
            </div>
            <div class="text-center p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                <i class="ri-hospital-line text-4xl text-red-600 mb-2 block"></i>
                <p class="font-semibold">Healthcare</p>
            </div>
            <div class="text-center p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                <i class="ri-capsule-line text-4xl text-green-600 mb-2 block"></i>
                <p class="font-semibold">Pharmaceuticals</p>
            </div>
            <div class="text-center p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                <i class="ri-hotel-line text-4xl text-orange-600 mb-2 block"></i>
                <p class="font-semibold">Hospitality</p>
            </div>
            <div class="text-center p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                <i class="ri-shopping-cart-line text-4xl text-purple-600 mb-2 block"></i>
                <p class="font-semibold">Retail</p>
            </div>
            <div class="text-center p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                <i class="ri-book-line text-4xl text-indigo-600 mb-2 block"></i>
                <p class="font-semibold">Education</p>
            </div>
            <div class="text-center p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                <i class="ri-flashlight-line text-4xl text-yellow-600 mb-2 block"></i>
                <p class="font-semibold">Energy</p>
            </div>
            <div class="text-center p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                <i class="ri-factory-line text-4xl text-gray-600 mb-2 block"></i>
                <p class="font-semibold">Manufacturing</p>
            </div>
            <div class="text-center p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                <i class="ri-smartphone-line text-4xl text-blue-500 mb-2 block"></i>
                <p class="font-semibold">Telecom</p>
            </div>
            <div class="text-center p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                <i class="ri-stock-line text-4xl text-green-700 mb-2 block"></i>
                <p class="font-semibold">Trading</p>
            </div>
            <div class="text-center p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                <i class="ri-restaurant-line text-4xl text-red-500 mb-2 block"></i>
                <p class="font-semibold">Restaurants</p>
            </div>
            <div class="text-center p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                <i class="ri-shirt-line text-4xl text-pink-600 mb-2 block"></i>
                <p class="font-semibold">Textiles</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="py-20 px-4 bg-blue-600 text-white">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Transform Your Business?</h2>
        <p class="text-xl mb-8">Get in touch with our team to discuss your IT needs and find the perfect solution.</p>
        <a href="#"
            class="inline-block bg-white text-blue-600 hover:bg-gray-100 px-10 py-4 rounded-lg text-lg font-semibold">
            Contact Us Today
        </a>
    </div>
</section>
@endsection

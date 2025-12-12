@extends('layouts.website-layout')

@section('title', 'Home - GenNet Solutions')

@section('content')
<!-- Add Remix Icon CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css">

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


<!-- HERO SECTION -->

<section class="relative h-[80vh] bg-cover bg-center flex items-center justify-center"
    <!-- Swiper Container -->
    <div class="swiper h-full w-full">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide bg-cover bg-center"
                 style="background-image: url('{{ asset('images/gen1.jpeg') }}');">
                <div class="absolute inset-0 bg-black bg-opacity-60"></div>
                 <div class="absolute inset-0 flex items-center justify-center">
                <div class="relative text-center max-w-3xl px-4 text-white">
                    <h1 class="text-4xl md:text-6xl font-extrabold leading-tight animate__animated animate__fadeInUp animate__delay-0.5s">
                        Next-Gen Cloud & AI Solutions
                    </h1>
                    <p class="mt-4 text-lg md:text-xl animate__animated animate__fadeInUp animate__delay-1s">Secure cloud infrastructure with 99.99% uptime.</p>
                </div>
                 </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide bg-cover bg-center"
                 style="background-image: url('{{ asset('images/gen2.jpg') }}');">
                <div class="absolute inset-0 bg-black bg-opacity-60"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                <div class="relative text-center max-w-3xl px-4 text-white">
                    <h1 class="text-4xl md:text-6xl font-extrabold leading-tight animate__animated animate__fadeInDown animate__delay-1s">
                        AI-Driven Applications
                    </h1>
                    <p class="mt-4 text-lg md:text-xl animate__animated animate__fadeInUp animate__delay-2s">Transform your business with predictive analytics.</p>
                </div>
            </div>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide bg-cover bg-center"
                 style="background-image: url('{{ asset('images/gen3.jpg') }}');">
                <div class="absolute inset-0 bg-black bg-opacity-60"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                <div class="relative text-center max-w-3xl px-4 text-white">
                    <h1 class="text-4xl md:text-6xl font-extrabold leading-tight animate__animated animate__fadeInUp animate__delay-0.5s">
                        AI-Powered Security
                    </h1>
                    <p class="mt-4 text-lg md:text-xl animate__animated animate__fadeInUp animate__delay-1s">Real-time threat detection & surveillance.</p>
                </div>
                </div>
            </div>
        </div>

        <!-- Pagination & Navigation -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>

</section>

<!-- SERVICES OVERVIEW SECTION -->
<section id="services" class="py-15 px-4 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 py-16">
        <div class="max-w-4xl mx-auto text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Discover what we offer</h2>
            <p class="text-lg md:text-xl text-gray-600">Comprehensive IT Solutions Tailored to Your Business Needs.
                 Whether you’re modernizing your workflows, creating powerful digital platforms, or designing solutions to connect with your audience, we’re here to help you succeed.</p>
        </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Cloud Solutions -->
                <div class="bg-gradient-to-r from-gray-100 to-white p-5 rounded-lg border border-gray-300 shadow-lg hover:shadow-xl transition group flex flex-col items-center justify-center text-center cursor-pointer">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <i class="ri-cloud-line text-xl text-blue-600 group-hover:text-blue-800 transition"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 group-hover:text-gray-800 transition">Cloud & VM Services</h3>
                    <a href="{{ route('services.cloud') }}" class="text-blue-600 font-semibold group-hover:text-blue-800 transition">Learn More →</a>
                </div>

                <!-- Email & Hosting -->
                <div class="bg-gradient-to-r from-gray-100 to-white p-6 rounded-lg border border-gray-300 shadow-lg hover:shadow-xl transition group flex flex-col items-center justify-center text-center cursor-pointer">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-4">
                        <i class="ri-mail-line text-xl text-green-600 group-hover:text-green-800 transition"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 group-hover:text-gray-800 transition">Email & Hosting Solutions</h3>
                    <a href="{{ route('services.email') }}" class="text-green-600 font-semibold group-hover:text-green-800 transition">Learn More →</a>
                </div>

                <!-- AI Solutions -->
                <div class="bg-gradient-to-r from-gray-100 to-white p-6 rounded-lg border border-gray-300 shadow-lg hover:shadow-xl transition group flex flex-col items-center justify-center text-center cursor-pointer">
                    <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                        <i class="ri-brain-line text-xl text-purple-600 group-hover:text-purple-800 transition"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 group-hover:text-gray-800 transition">AI Software Solutions</h3>
                    <a href="{{ route('services.ai') }}" class="text-purple-600 font-semibold group-hover:text-purple-800 transition">Learn More →</a>
                </div>

                <!-- Security Solutions -->
                <div class="bg-gradient-to-r from-gray-100 to-white p-6 rounded-lg border border-gray-300 shadow-lg hover:shadow-xl transition group flex flex-col items-center justify-center text-center cursor-pointer">
                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mb-4">
                        <i class="ri-shield-lock-line text-xl text-red-600 group-hover:text-red-800 transition"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 group-hover:text-gray-800 transition">AI-Powered Security</h3>
                    <a href="{{ route('services.security') }}" class="text-red-600 font-semibold group-hover:text-red-800 transition">Learn More →</a>
                </div>

                <!-- Surveillance -->
                <div class="bg-gradient-to-r from-gray-100 to-white p-6 rounded-lg border border-gray-300 shadow-lg hover:shadow-xl transition group flex flex-col items-center justify-center text-center cursor-pointer">
                    <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mb-4">
                        <i class="ri-camera-line text-xl text-yellow-600 group-hover:text-yellow-800 transition"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 group-hover:text-gray-800 transition">24/7 Surveillance</h3>
                    <a href="{{ route('services.surveillance') }}" class="text-yellow-600 font-semibold group-hover:text-yellow-800 transition">Learn More →</a>
                </div>

                <!-- Network Services -->
                <div class="bg-gradient-to-r from-gray-100 to-white p-6 rounded-lg border border-gray-300 shadow-lg hover:shadow-xl transition group flex flex-col items-center justify-center text-center cursor-pointer">
                    <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                        <i class="ri-router-line text-xl text-indigo-600 group-hover:text-indigo-800 transition"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 group-hover:text-gray-800 transition">Managed Network Services</h3>
                    <a href="{{ route('services.network') }}" class="text-indigo-600 font-semibold group-hover:text-indigo-800 transition">Learn More →</a>
                </div>

                <!-- SMS Services -->
                <div class="bg-gradient-to-r from-gray-100 to-white p-6 rounded-lg border border-gray-300 shadow-lg hover:shadow-xl transition group flex flex-col items-center justify-center text-center cursor-pointer">
                    <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                        <i class="ri-chat-3-line text-xl text-indigo-600 group-hover:text-indigo-800 transition"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 group-hover:text-gray-800 transition">SMS Services</h3>
                    <a href="{{ route('services.sms') }}" class="text-indigo-600 font-semibold group-hover:text-indigo-800 transition">Learn More →</a>
                </div>

                <!-- Microsoft Services -->
                <div class="bg-gradient-to-r from-gray-100 to-white p-6 rounded-lg border border-gray-300 shadow-lg hover:shadow-xl transition group flex flex-col items-center justify-center text-center cursor-pointer">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <i class="ri-microsoft-line text-xl text-blue-600 group-hover:text-blue-800 transition"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 group-hover:text-gray-800 transition">Microsoft Services</h3>
                    <a href="{{ route('services.microsoft') }}" class="text-blue-600 font-semibold group-hover:text-blue-800 transition">Learn More →</a>
                </div>

                <!-- Call Services -->
                <div class="bg-gradient-to-r from-gray-100 to-white p-6 rounded-lg border border-gray-300 shadow-lg hover:shadow-xl transition group flex flex-col items-center justify-center text-center cursor-pointer">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-4">
                        <i class="ri-phone-line text-xl text-green-600 group-hover:text-green-800 transition"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 group-hover:text-gray-800 transition">Customized Call Center Services</h3>
                    <a href="{{ route('services.call-center') }}" class="text-green-600 font-semibold group-hover:text-green-800 transition">Learn More →</a>
                </div>
            </div>


    </div>
</section>

<!-- IT SOLUTIONS SECTION -->
<section class="py-20 px-4 bg-gray-50">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

        <!-- Image Section -->
        <div class="flex justify-center">
            <img src="{{ asset('images/idea.jpg') }}"
                 alt="Hands holding puzzle pieces"
                 class="rounded-lg shadow-lg w-96 h-96">
        </div>

        <!-- Text Section -->
        <div>
            <h2 class="text-4xl md:text-5xl font-bold mb-6 text-gray-800">
                IT solutions for your business.
            </h2>
            <ul class="space-y-4 text-lg text-gray-700">
                <li>✓ Draws on over a decade of industry experience</li>
                <li>✓ Known for superior technical skills in IT solutions</li>
                <li>✓ Offers high-quality support services</li>
                <li>✓ Specializes in software development and services</li>
                <li>✓ Deep expertise in Value-Added Services (VAS)</li>
                <li>✓ Strong presence in the Banking and Corporate sectors</li>
                <li>✓ Significant footprint in the FinTech industry in Bangladesh</li>
            </ul>
        </div>
    </div>
</section>


<!-- CTA SECTION -->
<section class="py-20 px-4 bg-indigo-900 text-white">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Transform Your Business?</h2>
        <p class="text-xl mb-8">Get in touch with our team to discuss your IT needs and find the perfect solution.</p>
        <a href="#"
            class="inline-block bg-white text-blue-600 hover:bg-gray-100 px-10 py-4 rounded-lg text-lg font-semibold">
            Contact Us Today
        </a>
    </div>
</section>
<script>
  const swiper = new Swiper('.swiper', {
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    effect: 'fade', // smooth fade transition
  });
</script>

@endsection

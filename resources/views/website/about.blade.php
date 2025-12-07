@extends('layouts.website-layout')

@section('title', 'About Us - GenNet Solutions')

@section('content')

<!-- HERO SECTION -->
<section class="relative h-[70vh] bg-cover bg-center flex items-center justify-center overflow-hidden"
    style="background-image: url('https://images.unsplash.com/photo-1535223289827-42f1e9919769');">

    <div class="absolute inset-0 bg-black bg-opacity-60"></div>

    <div id="heroText"
         class="relative text-center max-w-3xl px-4 text-white opacity-0 translate-y-10 transition-all duration-[1200ms] ease-out">

        <h1 class="text-5xl md:text-6xl font-extrabold leading-tight drop-shadow-lg">
            About GenNet
        </h1>

        <p class="mt-4 text-xl md:text-2xl opacity-90">
            Transforming Businesses with Enterprise IT Solutions
        </p>

    </div>
</section>

<script>
    // Smooth animation on page load
    window.addEventListener('load', () => {
        const hero = document.getElementById('heroText');
        setTimeout(() => {
            hero.classList.remove('opacity-0', 'translate-y-10');
            hero.classList.add('opacity-100', 'translate-y-0');
        }, 200);
    });
</script>


<!-- ABOUT CONTENT -->
<section class="py-20 px-4 bg-white">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

        <div>
            <h2 class="text-4xl font-bold mb-6 text-gray-900 leading-tight">
                Driving Innovation. Delivering Technology.
            </h2>

            <p class="text-gray-700 text-lg leading-relaxed mb-6">
                GenNet is a trusted IT service provider specializing in enterprise technology, cloud infrastructure,
                AI-driven automation, cybersecurity, and digital transformation.
            </p>

            <p class="text-gray-700 text-lg leading-relaxed mb-6">
                For years, we have been empowering organizations across Bangladesh and beyond with modern, secure,
                scalable and business-ready technology solutions.
            </p>

            <p class="text-gray-700 text-lg leading-relaxed">
                Our expert engineers, creative teams, and technical consultants work together to build future-ready systems
                that elevate businesses to the next level.
            </p>
        </div>

        <div>
            <img src="https://images.unsplash.com/photo-1552664688-cf412ec27db2"
                class="rounded-lg shadow-2xl" alt="">
        </div>
    </div>
</section>

<!-- COMPANY STATS -->
<section class="py-20 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10 text-center">

            <div>
                <h3 class="text-5xl font-extrabold text-blue-600">10+</h3>
                <p class="mt-2 text-lg text-gray-600">Years of Experience</p>
            </div>

            <div>
                <h3 class="text-5xl font-extrabold text-blue-600">100+</h3>
                <p class="mt-2 text-lg text-gray-600">Corporate Clients</p>
            </div>

            <div>
                <h3 class="text-5xl font-extrabold text-blue-600">50+</h3>
                <p class="mt-2 text-lg text-gray-600">Large Projects Delivered</p>
            </div>

            <div>
                <h3 class="text-5xl font-extrabold text-blue-600">24/7</h3>
                <p class="mt-2 text-lg text-gray-600">Support Availability</p>
            </div>

        </div>
    </div>
</section>

<!-- MISSION & VISION -->
<section class="py-20 px-4 bg-white">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">

        <div class="bg-blue-50 p-10 rounded-2xl shadow">
            <h3 class="text-3xl font-bold mb-4 text-blue-700">Our Mission</h3>
            <p class="text-gray-700 text-lg leading-relaxed">
                To empower organizations through advanced, secure, and scalable IT solutions that accelerate
                business growth and support digital innovation.
            </p>
        </div>

        <div class="bg-green-50 p-10 rounded-2xl shadow">
            <h3 class="text-3xl font-bold mb-4 text-green-700">Our Vision</h3>
            <p class="text-gray-700 text-lg leading-relaxed">
                To become the most trusted and innovative IT solutions provider in South Asia, offering world-class
                digital transformation services.
            </p>
        </div>

    </div>
</section>

<!-- LEADERSHIP TEAM -->
<section class="py-20 bg-gray-50 px-4">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold text-center mb-16">Leadership Team</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">

            <div class="text-center">
                <img src="https://randomuser.me/api/portraits/men/32.jpg"
                    class="w-40 h-40 rounded-full mx-auto shadow-lg mb-4 object-cover">
                <h4 class="text-xl font-bold">Ahsan Rahman</h4>
                <p class="text-blue-600 font-semibold">Chief Executive Officer</p>
            </div>

            <div class="text-center">
                <img src="https://randomuser.me/api/portraits/men/52.jpg"
                    class="w-40 h-40 rounded-full mx-auto shadow-lg mb-4 object-cover">
                <h4 class="text-xl font-bold">Mahmud Khan</h4>
                <p class="text-blue-600 font-semibold">Chief Technology Officer</p>
            </div>

            <div class="text-center">
                <img src="https://randomuser.me/api/portraits/women/41.jpg"
                    class="w-40 h-40 rounded-full mx-auto shadow-lg mb-4 object-cover">
                <h4 class="text-xl font-bold">Sara Ahmed</h4>
                <p class="text-blue-600 font-semibold">Head of Operations</p>
            </div>

        </div>
    </div>
</section>

<!-- PARTNERS SECTION -->
<section class="py-20 bg-white px-4">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold text-center mb-16">Our Partners</h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-10 items-center">

            <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Microsoft_logo.png"
                class="h-12 grayscale hover:grayscale-0 transition mx-auto">

            <img src="https://upload.wikimedia.org/wikipedia/commons/4/4e/Google_2015_logo.svg"
                class="h-12 grayscale hover:grayscale-0 transition mx-auto">

            <img src="https://upload.wikimedia.org/wikipedia/commons/8/87/Oracle_logo.svg"
                class="h-12 grayscale hover:grayscale-0 transition mx-auto">

            <img src="https://upload.wikimedia.org/wikipedia/commons/3/31/IBM_logo.svg"
                class="h-12 grayscale hover:grayscale-0 transition mx-auto">

        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="py-20 px-4 bg-blue-600 text-white text-center">
    <h2 class="text-4xl md:text-5xl font-bold mb-6">Let’s Build Your Digital Future</h2>
    <p class="text-xl mb-8">Talk to our team today about your project or IT needs.</p>

    <a href="#" class="bg-white text-blue-600 px-10 py-4 rounded-lg text-lg font-semibold hover:bg-gray-100 transition">
        Contact Us
    </a>
</section>

@endsection

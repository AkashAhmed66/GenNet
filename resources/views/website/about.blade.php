@extends('layouts.website-layout')

@section('title', 'About Us - GenNet Solutions')

@section('content')
<!-- HERO SECTION -->
<section class="relative h-[60vh] bg-cover bg-center flex items-center justify-center"
    style="background-image: url('https://images.unsplash.com/photo-1552664730-d307ca884978');">

    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <div class="relative text-center max-w-3xl px-4 text-white">
        <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
            About GenNet
        </h1>

        <p class="mt-4 text-lg md:text-xl">
            Your Trusted Partner in Digital Transformation
        </p>
    </div>
</section>

<!-- ABOUT CONTENT -->
<section class="py-20 px-4">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20">
            <div>
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978" alt="About GenNet" class="rounded-lg shadow-lg">
            </div>

            <div>
                <h2 class="text-4xl font-bold mb-6">Who We Are</h2>

                <p class="text-lg text-gray-700 mb-4">
                    GenNet is a leading provider of comprehensive IT solutions, serving businesses across multiple industries in Bangladesh and beyond. With years of expertise in cloud computing, AI, security, and networking, we've built a reputation for delivering innovative solutions that transform businesses.
                </p>

                <p class="text-lg text-gray-700 mb-4">
                    Our team of experienced professionals is committed to understanding your unique business challenges and providing tailored solutions that drive growth, efficiency, and security.
                </p>

                <p class="text-lg text-gray-700">
                    We believe technology should empower businesses, not complicate them. That's why we focus on delivering solutions that are reliable, scalable, and user-friendly.
                </p>
            </div>
        </div>

        <!-- MISSION & VISION -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-20">
            <div class="bg-blue-50 p-8 rounded-lg">
                <h3 class="text-3xl font-bold mb-4 text-blue-600">Our Mission</h3>

                <p class="text-gray-700 text-lg">
                    To provide innovative, reliable, and cost-effective IT solutions that empower businesses to achieve their digital transformation goals and compete effectively in the global marketplace.
                </p>
            </div>

            <div class="bg-green-50 p-8 rounded-lg">
                <h3 class="text-3xl font-bold mb-4 text-green-600">Our Vision</h3>

                <p class="text-gray-700 text-lg">
                    To be the leading IT solutions provider in South Asia, recognized for excellence, innovation, and customer satisfaction. We envision a future where every business has access to world-class technology solutions.
                </p>
            </div>
        </div>

        <!-- CORE VALUES -->
        <div class="mb-20">
            <h2 class="text-4xl font-bold mb-12 text-center">Our Core Values</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition">
                    <i class="ri-target-line text-5xl text-blue-600 mb-4 block"></i>
                    <h4 class="text-xl font-bold mb-2">Excellence</h4>
                    <p class="text-gray-600">We strive for excellence in everything we do, from customer service to technology implementation.</p>
                </div>

                <div class="text-center p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition">
                    <i class="ri-lightbulb-line text-5xl text-yellow-600 mb-4 block"></i>
                    <h4 class="text-xl font-bold mb-2">Innovation</h4>
                    <p class="text-gray-600">We embrace new technologies and creative solutions to solve complex business challenges.</p>
                </div>

                <div class="text-center p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition">
                    <i class="ri-handshake-line text-5xl text-green-600 mb-4 block"></i>
                    <h4 class="text-xl font-bold mb-2">Partnership</h4>
                    <p class="text-gray-600">We believe in building long-term partnerships with our clients, working as an extension of their team.</p>
                </div>

                <div class="text-center p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition">
                    <i class="ri-shield-keyhole-line text-5xl text-red-600 mb-4 block"></i>
                    <h4 class="text-xl font-bold mb-2">Security</h4>
                    <p class="text-gray-600">Data security and privacy are paramount. We implement industry-leading security standards.</p>
                </div>
            </div>
        </div>

        <!-- WHY CHOOSE US -->
        <div class="bg-gray-50 p-12 rounded-lg">
            <h2 class="text-4xl font-bold mb-12 text-center">Why Choose GenNet?</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex gap-4">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                            ✓
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Proven Expertise</h3>
                        <p class="text-gray-700">Years of experience delivering solutions to businesses across diverse industries.</p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                            ✓
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">24/7 Support</h3>
                        <p class="text-gray-700">Our dedicated support team is available round-the-clock to assist you.</p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                            ✓
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Customized Solutions</h3>
                        <p class="text-gray-700">We tailor every solution to meet your specific business requirements.</p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                            ✓
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Latest Technology</h3>
                        <p class="text-gray-700">We use cutting-edge technology and industry best practices.</p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                            ✓
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Competitive Pricing</h3>
                        <p class="text-gray-700">Quality solutions at competitive rates without compromising on service.</p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                            ✓
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Proven Track Record</h3>
                        <p class="text-gray-700">Trusted by leading companies and organizations nationwide.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="py-20 px-4 bg-blue-600 text-white">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Let's Partner Together</h2>
        <p class="text-xl mb-8">Get in touch with our team to learn how we can help transform your business.</p>
        <a href="#" class="inline-block bg-white text-blue-600 hover:bg-gray-100 px-10 py-4 rounded-lg text-lg font-semibold">
            Contact Us
        </a>
    </div>
</section>
@endsection

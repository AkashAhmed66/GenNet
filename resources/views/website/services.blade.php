@extends('layouts.website-layout')

@section('title', 'Services - GenNet Solutions')

@section('content')
<!-- HERO SECTION -->
<section class="relative h-[60vh] bg-cover bg-center flex items-center justify-center"
    style="background-image: url('https://images.unsplash.com/photo-1460925895917-adf4ee868993');">

    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <div class="relative text-center max-w-3xl px-4 text-white">
        <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
            Our Services
        </h1>

        <p class="mt-4 text-lg md:text-xl">
            Comprehensive IT Solutions for Every Business Challenge
        </p>
    </div>
</section>

<!-- SERVICES GRID -->
<section class="py-20 px-4">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-20">
            <!-- Cloud & VM Services -->
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-lg shadow-lg hover:shadow-xl transition">
                <h3 class="text-3xl font-bold mb-4 text-blue-900">Cloud & VM Services</h3>
                <p class="text-gray-700 mb-4">Deploy secure, scalable virtual machines and web solutions with 99.99% uptime. Perfect for startups and enterprises.</p>
                <ul class="list-disc list-inside space-y-2 text-gray-700 mb-6">
                    <li>Virtual Machine Hosting</li>
                    <li>Scalable Cloud Infrastructure</li>
                    <li>Web Hosting Solutions</li>
                    <li>24/7 Uptime Guarantee</li>
                </ul>
                <a href="#" class="inline-block bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Learn More</a>
            </div>

            <!-- Email & Hosting -->
            <div class="bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-lg shadow-lg hover:shadow-xl transition">
                <h3 class="text-3xl font-bold mb-4 text-green-900">Email & Hosting Solutions</h3>
                <p class="text-gray-700 mb-4">Office 365, Google Workspace & Domain solutions for professional communication and collaboration.</p>
                <ul class="list-disc list-inside space-y-2 text-gray-700 mb-6">
                    <li>Office 365 Implementation</li>
                    <li>Google Workspace Setup</li>
                    <li>Domain Registration & Management</li>
                    <li>Email Security</li>
                </ul>
                <a href="#" class="inline-block bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">Learn More</a>
            </div>

            <!-- AI Solutions -->
            <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-lg shadow-lg hover:shadow-xl transition">
                <h3 class="text-3xl font-bold mb-4 text-purple-900">AI Software Solutions</h3>
                <p class="text-gray-700 mb-4">Transform your business with intelligent automation, predictive analytics, and AI-driven custom applications.</p>
                <ul class="list-disc list-inside space-y-2 text-gray-700 mb-6">
                    <li>Custom AI Applications</li>
                    <li>Intelligent Automation</li>
                    <li>Predictive Analytics</li>
                    <li>Machine Learning Integration</li>
                </ul>
                <a href="#" class="inline-block bg-purple-600 text-white px-6 py-2 rounded hover:bg-purple-700">Learn More</a>
            </div>

            <!-- Security Solutions -->
            <div class="bg-gradient-to-br from-red-50 to-red-100 p-8 rounded-lg shadow-lg hover:shadow-xl transition">
                <h3 class="text-3xl font-bold mb-4 text-red-900">AI-Powered Security</h3>
                <p class="text-gray-700 mb-4">Real-time threat detection, intelligent surveillance, and proactive security analytics powered by AI.</p>
                <ul class="list-disc list-inside space-y-2 text-gray-700 mb-6">
                    <li>Real-time Threat Detection</li>
                    <li>AI Security Analytics</li>
                    <li>Cybersecurity Solutions</li>
                    <li>Security Auditing</li>
                </ul>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700">Learn More</a>
            </div>

            <!-- Surveillance Systems -->
            <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 p-8 rounded-lg shadow-lg hover:shadow-xl transition">
                <h3 class="text-3xl font-bold mb-4 text-yellow-900">24/7 Surveillance Systems</h3>
                <p class="text-gray-700 mb-4">Cutting-edge surveillance systems with real-time alerts and remote access capabilities for your peace of mind.</p>
                <ul class="list-disc list-inside space-y-2 text-gray-700 mb-6">
                    <li>CCTV Installation</li>
                    <li>Remote Monitoring</li>
                    <li>Real-time Alerts</li>
                    <li>Video Analytics</li>
                </ul>
                <a href="#" class="inline-block bg-yellow-600 text-white px-6 py-2 rounded hover:bg-yellow-700">Learn More</a>
            </div>

            <!-- Network Services -->
            <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 p-8 rounded-lg shadow-lg hover:shadow-xl transition">
                <h3 class="text-3xl font-bold mb-4 text-indigo-900">Managed Network Services</h3>
                <p class="text-gray-700 mb-4">CP, VPN, APN, VAS & MFS Solutions for secure and scalable network infrastructure.</p>
                <ul class="list-disc list-inside space-y-2 text-gray-700 mb-6">
                    <li>VPN Solutions</li>
                    <li>Network Security</li>
                    <li>Managed Services</li>
                    <li>Telecom Integration</li>
                </ul>
                <a href="#" class="inline-block bg-indigo-600 text-white px-6 py-2 rounded hover:bg-indigo-700">Learn More</a>
            </div>
        </div>

        <!-- Additional Services -->
        <div class="mt-20 pt-20 border-t border-gray-300">
            <h2 class="text-4xl font-bold mb-12 text-center">Additional Services</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                    <i class="ri-smartphone-line text-4xl text-blue-600 mb-4 block"></i>
                    <h4 class="text-xl font-bold mb-2">Custom Software Development</h4>
                    <p class="text-gray-600">Tailor-made software solutions designed to meet your specific business requirements.</p>
                </div>

                <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                    <i class="ri-phone-line text-4xl text-green-600 mb-4 block"></i>
                    <h4 class="text-xl font-bold mb-2">Call Center Solutions</h4>
                    <p class="text-gray-600">Enterprise-grade communication systems for customer support and operations.</p>
                </div>

                <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                    <i class="ri-computer-line text-4xl text-purple-600 mb-4 block"></i>
                    <h4 class="text-xl font-bold mb-2">IT Consulting</h4>
                    <p class="text-gray-600">Strategic IT consulting to optimize your technology infrastructure.</p>
                </div>

                <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                    <i class="ri-map-pin-line text-4xl text-red-600 mb-4 block"></i>
                    <h4 class="text-xl font-bold mb-2">Tracking Systems</h4>
                    <p class="text-gray-600">Real-time asset and fleet tracking solutions with advanced analytics.</p>
                </div>

                <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                    <i class="ri-mobile-line text-4xl text-orange-600 mb-4 block"></i>
                    <h4 class="text-xl font-bold mb-2">Mobile App Development</h4>
                    <p class="text-gray-600">Native and cross-platform mobile applications for iOS and Android.</p>
                </div>

                <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                    <i class="ri-chat-1-line text-4xl text-indigo-600 mb-4 block"></i>
                    <h4 class="text-xl font-bold mb-2">Bulk SMS Services</h4>
                    <p class="text-gray-600">Enterprise-grade bulk messaging platform for business communication.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="py-20 px-4 bg-blue-600 text-white">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Get Started?</h2>
        <p class="text-xl mb-8">Contact our team to discuss which services are right for your organization.</p>
        <a href="#" class="inline-block bg-white text-blue-600 hover:bg-gray-100 px-10 py-4 rounded-lg text-lg font-semibold">
            Get in Touch
        </a>
    </div>
</section>
@endsection

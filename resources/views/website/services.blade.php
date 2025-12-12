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
                <p class="text-gray-700 mb-4">Secure, scalable cloud infrastructure and virtual machine deployment for modern businesses.</p>
                <ul class="list-disc list-inside space-y-2 text-gray-700 mb-6">
                    <li>Virtual Machine Hosting</li>
                    <li>Cloud Storage & Backup</li>
                    <li>Scalable Cloud Servers</li>
                    <li>High Availability Uptime</li>
                </ul>
                <a href="#" class="inline-block bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Learn More</a>
            </div>

            <!-- Email & Hosting -->
            <div class="bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-lg shadow-lg hover:shadow-xl transition">
                <h3 class="text-3xl font-bold mb-4 text-green-900">Email & Hosting Solutions</h3>
                <p class="text-gray-700 mb-4">Professional-grade email, domain and hosting systems for seamless communication.</p>
                <ul class="list-disc list-inside space-y-2 text-gray-700 mb-6">
                    <li>Business Email Setup</li>
                    <li>Google Workspace</li>
                    <li>Domain Registration</li>
                    <li>Secure Email Hosting</li>
                </ul>
                <a href="#" class="inline-block bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">Learn More</a>
            </div>

            <!-- AI Software Solutions -->
            <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-lg shadow-lg hover:shadow-xl transition">
                <h3 class="text-3xl font-bold mb-4 text-purple-900">AI Software Solutions</h3>
                <p class="text-gray-700 mb-4">Intelligent automation, machine learning systems and predictive analytics for business growth.</p>
                <ul class="list-disc list-inside space-y-2 text-gray-700 mb-6">
                    <li>AI Custom Development</li>
                    <li>Business Process Automation</li>
                    <li>Machine Learning Models</li>
                    <li>Data Insights & Analytics</li>
                </ul>
                <a href="#" class="inline-block bg-purple-600 text-white px-6 py-2 rounded hover:bg-purple-700">Learn More</a>
            </div>

            <!-- AI-Powered Security -->
            <div class="bg-gradient-to-br from-red-50 to-red-100 p-8 rounded-lg shadow-lg hover:shadow-xl transition">
                <h3 class="text-3xl font-bold mb-4 text-red-900">AI-Powered Security</h3>
                <p class="text-gray-700 mb-4">Smart security, real-time threat detection and AI-based protection systems.</p>
                <ul class="list-disc list-inside space-y-2 text-gray-700 mb-6">
                    <li>AI Threat Monitoring</li>
                    <li>Cybersecurity Solutions</li>
                    <li>Incident Detection</li>
                    <li>Security Audits</li>
                </ul>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700">Learn More</a>
            </div>

            <!-- 24/7 Surveillance -->
            <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 p-8 rounded-lg shadow-lg hover:shadow-xl transition">
                <h3 class="text-3xl font-bold mb-4 text-yellow-900">24/7 Surveillance Systems</h3>
                <p class="text-gray-700 mb-4">Advanced CCTV, remote monitoring and alert-based surveillance for complete protection.</p>
                <ul class="list-disc list-inside space-y-2 text-gray-700 mb-6">
                    <li>CCTV Installation</li>
                    <li>Remote Live Monitoring</li>
                    <li>Real-time Notifications</li>
                    <li>AI Video Analytics</li>
                </ul>
                <a href="#" class="inline-block bg-yellow-600 text-white px-6 py-2 rounded hover:bg-yellow-700">Learn More</a>
            </div>

            <!-- Managed Network Services -->
            <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 p-8 rounded-lg shadow-lg hover:shadow-xl transition">
                <h3 class="text-3xl font-bold mb-4 text-indigo-900">Managed Network Services</h3>
                <p class="text-gray-700 mb-4">Complete management of enterprise networks including VPN, APN, CP & telecom solutions.</p>
                <ul class="list-disc list-inside space-y-2 text-gray-700 mb-6">
                    <li>VPN Solutions</li>
                    <li>Network Management</li>
                    <li>Telecom Integrations</li>
                    <li>Secure Infrastructure</li>
                </ul>
                <a href="#" class="inline-block bg-indigo-600 text-white px-6 py-2 rounded hover:bg-indigo-700">Learn More</a>
            </div>

            <!-- SMS Services -->
            <div class="bg-gradient-to-br from-pink-50 to-pink-100 p-8 rounded-lg shadow-lg hover:shadow-xl transition">
                <h3 class="text-3xl font-bold mb-4 text-pink-900">SMS Services</h3>
                <p class="text-gray-700 mb-4">Enterprise-grade bulk messaging and OTP solutions for communication at scale.</p>
                <ul class="list-disc list-inside space-y-2 text-gray-700 mb-6">
                    <li>Bulk SMS</li>
                    <li>OTP Services</li>
                    <li>Transactional Messaging</li>
                    <li>API Integration</li>
                </ul>
                <a href="#" class="inline-block bg-pink-600 text-white px-6 py-2 rounded hover:bg-pink-700">Learn More</a>
            </div>

            <!-- Microsoft Services -->
            <div class="bg-gradient-to-br from-gray-100 to-gray-200 p-8 rounded-lg shadow-lg hover:shadow-xl transition">
                <h3 class="text-3xl font-bold mb-4 text-gray-900">Microsoft Services</h3>
                <p class="text-gray-700 mb-4">End-to-end Microsoft solutions including Azure, Office 365 and enterprise tools.</p>
                <ul class="list-disc list-inside space-y-2 text-gray-700 mb-6">
                    <li>Microsoft 365 Deployment</li>
                    <li>Azure Cloud Services</li>
                    <li>Enterprise Email</li>
                    <li>Device & User Management</li>
                </ul>
                <a href="#" class="inline-block bg-gray-800 text-white px-6 py-2 rounded hover:bg-gray-900">Learn More</a>
            </div>

            <!-- Customized Call Center -->
            <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-8 rounded-lg shadow-lg hover:shadow-xl transition">
                <h3 class="text-3xl font-bold mb-4 text-orange-900">Customized Call Center Services</h3>
                <p class="text-gray-700 mb-4">Fully customized inbound, outbound and automated call center systems.</p>
                <ul class="list-disc list-inside space-y-2 text-gray-700 mb-6">
                    <li>Call Center Setup</li>
                    <li>IVR Systems</li>
                    <li>Customer Support Tools</li>
                    <li>Reporting & Monitoring</li>
                </ul>
                <a href="#" class="inline-block bg-orange-600 text-white px-6 py-2 rounded hover:bg-orange-700">Learn More</a>
            </div>

        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="py-20 px-4 bg-indigo-900 text-white">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Get Started?</h2>
        <p class="text-xl mb-8">Contact our team to discuss which services are right for your organization.</p>
        <a href="#" class="inline-block bg-white text-blue-600 hover:bg-gray-100 px-10 py-4 rounded-lg text-lg font-semibold">
            Get in Touch
        </a>
    </div>
</section>

@endsection

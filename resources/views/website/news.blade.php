@extends('layouts.website-layout')

@section('title', 'News & Events - GenNet')

@section('content')
<!-- Add Remix Icon CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css">
<!-- HERO SECTION -->
<section class="relative h-[60vh] bg-cover bg-center flex items-center justify-center"
    style="background-image: url('https://images.unsplash.com/photo-1525182008055-f88b95ff7980');">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <div class="relative flex items-center justify-center h-full text-center text-white px-6">
        <div>
            <h1 class="text-4xl md:text-5xl font-bold">Latest News & Events</h1>
            <p class="mt-4 text-lg md:text-xl">Stay updated with GenNet's latest innovations and industry insights</p>
        </div>
    </div>
</section>

<!-- NEWS SECTION -->
<section class="py-20 px-4">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- News 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition">
                <img src="https://images.unsplash.com/photo-1557426272-fc759fdf7a8d" class="h-48 w-full object-cover">
                <div class="p-6">
                    <div class="text-sm text-blue-600 font-semibold mb-2">November 2025</div>
                    <h3 class="text-xl font-bold mb-3">GenNet Launches Advanced AI Platform</h3>
                    <p class="text-gray-600 mb-4">We're excited to announce the launch of our next-generation AI platform, designed to revolutionize business automation and intelligent decision-making.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:text-blue-700">Read More →</a>
                </div>
            </div>

            <!-- News 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition">
                <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0" class="h-48 w-full object-cover">
                <div class="p-6">
                    <div class="text-sm text-blue-600 font-semibold mb-2">October 2025</div>
                    <h3 class="text-xl font-bold mb-3">Cybersecurity Workshop 2025</h3>
                    <p class="text-gray-600 mb-4">Join us for an exclusive workshop on modern cybersecurity threats and best practices to protect your organization from evolving cyber attacks.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:text-blue-700">Learn More →</a>
                </div>
            </div>

            <!-- News 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition">
                <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2" class="h-48 w-full object-cover">
                <div class="p-6">
                    <div class="text-sm text-blue-600 font-semibold mb-2">September 2025</div>
                    <h3 class="text-xl font-bold mb-3">GenNet Tech Conference 2025</h3>
                    <p class="text-gray-600 mb-4">Our annual technology conference brings together industry leaders to discuss innovation, cloud solutions, and digital transformation strategies.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:text-blue-700">Explore →</a>
                </div>
            </div>

            <!-- News 4 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978" class="h-48 w-full object-cover">
                <div class="p-6">
                    <div class="text-sm text-blue-600 font-semibold mb-2">August 2025</div>
                    <h3 class="text-xl font-bold mb-3">GenNet Partners with Leading Tech Companies</h3>
                    <p class="text-gray-600 mb-4">We're thrilled to announce strategic partnerships with global technology leaders to enhance our service offerings and customer value.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:text-blue-700">Read More →</a>
                </div>
            </div>

            <!-- News 5 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition">
                <img src="https://images.unsplash.com/photo-1460925895917-adf4ee868993" class="h-48 w-full object-cover">
                <div class="p-6">
                    <div class="text-sm text-blue-600 font-semibold mb-2">July 2025</div>
                    <h3 class="text-xl font-bold mb-3">Cloud Migration Success Stories</h3>
                    <p class="text-gray-600 mb-4">Learn how leading enterprises successfully migrated to our cloud platform and achieved significant cost savings and improved performance.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:text-blue-700">Case Studies →</a>
                </div>
            </div>

            <!-- News 6 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition">
                <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c" class="h-48 w-full object-cover">
                <div class="p-6">
                    <div class="text-sm text-blue-600 font-semibold mb-2">June 2025</div>
                    <h3 class="text-xl font-bold mb-3">Introducing GenNet Enterprise Suite</h3>
                    <p class="text-gray-600 mb-4">Our new enterprise suite combines cloud infrastructure, security, and AI tools into one comprehensive platform for business excellence.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:text-blue-700">Discover →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- NEWSLETTER SECTION -->
<section class="py-20 px-4 bg-gray-50">
    <div class="max-w-2xl mx-auto text-center">
        <h2 class="text-4xl font-bold mb-6">Stay Updated</h2>
        <p class="text-lg text-gray-600 mb-8">Subscribe to our newsletter to receive the latest news, updates, and industry insights directly in your inbox.</p>
        <form class="flex flex-col md:flex-row gap-4">
            <input type="email" placeholder="Enter your email" class="flex-1 px-6 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600">
            <button type="submit" class="px-8 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-semibold">
                Subscribe
            </button>
        </form>
    </div>
</section>
@endsection

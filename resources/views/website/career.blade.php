@extends('layouts.website-layout')

@section('title', 'Career - Join GenNet')

@section('content')
<!-- Add Remix Icon CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css">

<!-- HERO SECTION -->
<section class="relative h-[50vh] bg-cover bg-center flex items-center justify-center"
    style="background-image: url('{{ asset('images/logo/pexels-fauxels-3184339.jpg')}}');">
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>

    <div class="relative flex items-center justify-center h-full text-center text-white px-6">
        <div>
            <h1 class="text-4xl md:text-6xl font-bold mb-2">Join Our Family</h1>
            <p class="mt-4 text-lg md:text-xl">We require individuals who are technically competent and highly driven by innovation, creativity, and excellence.</p>
        </div>
    </div>
</section>

<!-- CURRENT OPENINGS SECTION -->
<section class="py-20 px-4 bg-gray-50">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl md:text-5xl font-bold mb-12 text-center">Current Openings</h2>

        <!-- Search and Filter Bar -->
        <div class="mb-12 bg-white p-6 rounded-lg shadow-md">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <!-- Search -->
                <div class="relative">
                    <input id="jobSearch" type="text" placeholder="Search jobs..." 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                    <i class="ri-search-line absolute right-3 top-3 text-gray-400"></i>
                </div>

                <!-- Job Type Filter -->
                <div class="relative">
                    <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 appearance-none cursor-pointer">
                        <option>All Job Type</option>
                        <option>Full Time</option>
                        <option>Part Time</option>
                        <option>Contract</option>
                        <option>Internship</option>
                    </select>
                    <i class="ri-arrow-down-s-line absolute right-3 top-3 text-gray-400 pointer-events-none"></i>
                </div>

                <!-- Location Filter -->
                <div class="relative">
                    <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 appearance-none cursor-pointer">
                        <option>All Job Location</option>
                        <option>Dhaka</option>
                        <option>Chittagong</option>
                        <option>Sylhet</option>
                        <option>Remote</option>
                    </select>
                    <i class="ri-arrow-down-s-line absolute right-3 top-3 text-gray-400 pointer-events-none"></i>
                </div>
            </div>
        </div>

        <!-- Job Listings -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Position 1 -->
            <div class="job-card bg-gradient-to-r from-gray-400 to-white p-6 rounded border border-gray-300 hover:shadow-lg transition cursor-pointer group">
                <h3 class="text-xl font-bold mb-4 group-hover:text-gray-800 transition text-gray-900">Assistant Manager, Corporate Sales, Business Development</h3>
                <div class="space-y-2 text-gray-700">
                    <p>Full Time</p>
                    <p>Dhaka</p>
                </div>
                <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 mt-4 inline-block">
                    More Details →
                </a>
            </div>

            <!-- Position 2 -->
            <div class="job-card bg-gradient-to-r from-gray-400 to-white p-6 rounded border border-gray-300 hover:shadow-lg transition cursor-pointer group">
                <h3 class="text-xl font-bold mb-4 group-hover:text-gray-800 transition text-gray-900">Senior Executive, Corporate Sales, Business Development</h3>
                <div class="space-y-2 text-gray-700">
                    <p>Full Time</p>
                    <p>Dhaka</p>
                </div>
                <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 mt-4 inline-block">
                    More Details →
                </a>
            </div>

            <!-- Position 3 -->
            <div class="job-card bg-gradient-to-r from-gray-400 to-white p-6 rounded border border-gray-300 hover:shadow-lg transition cursor-pointer group">
                <h3 class="text-xl font-bold mb-4 group-hover:text-gray-800 transition text-gray-900">Sr. Executive/Ast, Manager – Merchant Acquisition Specialist (MAS)</h3>
                <div class="space-y-2 text-gray-700">
                    <p>Full Time</p>
                    <p>Dhaka</p>
                </div>
                <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 mt-4 inline-block">
                    More Details →
                </a>
            </div>

            <!-- Position 4 -->
            <div class="job-card bg-gradient-to-r from-gray-400 to-white p-6 rounded border border-gray-300 hover:shadow-lg transition cursor-pointer group">
                <h3 class="text-xl font-bold mb-4 group-hover:text-gray-800 transition text-gray-900">Senior Executive /Assistant Manager, ICT Sales</h3>
                <div class="space-y-2 text-gray-700">
                    <p>Full Time</p>
                    <p>Dhaka</p>
                </div>
                <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 mt-4 inline-block">
                    More Details →
                </a>
            </div>

            <!-- Position 5 -->
            <div class="job-card bg-gradient-to-r from-gray-400 to-white p-6 rounded border border-gray-300 hover:shadow-lg transition cursor-pointer group">
                <h3 class="text-xl font-bold mb-4 group-hover:text-gray-800 transition text-gray-900">Business Analyst</h3>
                <div class="space-y-2 text-gray-700">
                    <p>Full Time</p>
                    <p>Dhaka</p>
                </div>
                <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 mt-4 inline-block">
                    More Details →
                </a>
            </div>

            <!-- Position 6 -->
            <div class="job-card bg-gradient-to-r from-gray-400 to-white p-6 rounded border border-gray-300 hover:shadow-lg transition cursor-pointer group">
                <h3 class="text-xl font-bold mb-4 group-hover:text-gray-800 transition text-gray-900">Executive/Sr. Executive, Sales – BFSI</h3>
                <div class="space-y-2 text-gray-700">
                    <p>Full Time</p>
                    <p>Dhaka</p>
                </div>
                <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 mt-4 inline-block">
                    More Details →
                </a>
            </div>

            <!-- Position 7 -->
            <div class="job-card bg-gradient-to-r from-gray-400 to-white p-6 rounded border border-gray-300 hover:shadow-lg transition cursor-pointer group">
                <h3 class="text-xl font-bold mb-4 group-hover:text-gray-800 transition text-gray-900">Machine Learning Engineer</h3>
                <div class="space-y-2 text-gray-700">
                    <p>Full Time</p>
                    <p>Dhaka</p>
                </div>
                <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 mt-4 inline-block">
                    More Details →
                </a>
            </div>

            <!-- Position 8 -->
            <div class="job-card bg-gradient-to-r from-gray-400 to-white p-6 rounded border border-gray-300 hover:shadow-lg transition cursor-pointer group">
                <h3 class="text-xl font-bold mb-4 group-hover:text-gray-800 transition text-gray-900">Cybersecurity Analyst</h3>
                <div class="space-y-2 text-gray-700">
                    <p>Full Time</p>
                    <p>Dhaka</p>
                </div>
                <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 mt-4 inline-block">
                    More Details →
                </a>
            </div>

            <!-- Position 9 -->
            <div class="job-card bg-gradient-to-r from-gray-400 to-white p-6 rounded border border-gray-300 hover:shadow-lg transition cursor-pointer group">
                <h3 class="text-xl font-bold mb-4 group-hover:text-gray-800 transition text-gray-900">Assistant Manager/Deputy Manager/Manager, Software Sales, Enterprise Solution—Business Development</h3>
                <div class="space-y-2 text-gray-700">
                    <p>Full Time</p>
                    <p>Dhaka</p>
                </div>
                <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 mt-4 inline-block">
                    More Details →
                </a>
            </div>
        </div>

        </div>
    </div>
</section>

<!-- WHY WORK WITH US -->
<section class="py-20 px-4 bg-white">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold mb-12 text-center">Why Work at GenNet?</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-8 bg-gray-50 rounded-lg text-center hover:shadow-lg transition">
                <i class="ri-lightbulb-flash-line text-5xl text-blue-600 mb-4 block"></i>
                <h3 class="text-2xl font-bold mb-3">Innovation & Growth</h3>
                <p class="text-gray-600">Work with cutting-edge technologies and grow your skills in a dynamic environment focused on innovation.</p>
            </div>

            <div class="p-8 bg-gray-50 rounded-lg text-center hover:shadow-lg transition">
                <i class="ri-team-line text-5xl text-green-600 mb-4 block"></i>
                <h3 class="text-2xl font-bold mb-3">Collaborative Culture</h3>
                <p class="text-gray-600">Join a team of talented professionals committed to excellence and mutual support in achieving our goals.</p>
            </div>

            <div class="p-8 bg-gray-50 rounded-lg text-center hover:shadow-lg transition">
                <i class="ri-trophy-line text-5xl text-yellow-600 mb-4 block"></i>
                <h3 class="text-2xl font-bold mb-3">Competitive Benefits</h3>
                <p class="text-gray-600">Enjoy competitive salaries, health insurance, bonuses, and professional development opportunities.</p>
            </div>
        </div>
    </div>
</section>

<!-- SEARCH SCRIPT -->
<script>
document.getElementById("jobSearch").addEventListener("keyup", function () {
    const searchText = this.value.toLowerCase();
    const jobCards = document.querySelectorAll(".job-card");

    jobCards.forEach(card => {
        const title = card.querySelector("h3").textContent.toLowerCase();

        if (title.includes(searchText)) {
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }
    });
});
</script>

@endsection

@extends('layouts.website-layout')

@section('title', 'Career - Join GenNet')

@section('content')
<!-- HERO SECTION -->
<section class="relative h-[60vh] bg-cover bg-center flex items-center justify-center"
    style="background-image: url('https://images.unsplash.com/photo-1531497865144-0464ddf3f27f');">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <div class="relative flex items-center justify-center h-full text-center text-white px-6">
        <div>
            <h1 class="text-4xl md:text-5xl font-bold">Join Our Team</h1>
            <p class="mt-4 text-lg md:text-xl">Build Your Career with GenNet - Where Innovation Meets Excellence</p>
        </div>
    </div>
</section>

<!-- ABOUT CAREERS -->
<section class="py-20 px-4 bg-gray-50">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl font-bold mb-6">Why Work at GenNet?</h2>
        <p class="text-lg text-gray-600 mb-12">
            We're building a team of talented, passionate professionals who are committed to delivering cutting-edge IT solutions.
            We offer competitive salaries, professional development, and a collaborative work environment.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-6 bg-white rounded-lg shadow">
                <i class="ri-briefcase-line text-4xl text-blue-600 mb-4 block"></i>
                <h3 class="text-xl font-bold mb-2">Career Growth</h3>
                <p class="text-gray-600">Continuous learning and professional development opportunities</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow">
                <i class="ri-medal-line text-4xl text-yellow-600 mb-4 block"></i>
                <h3 class="text-xl font-bold mb-2">Competitive Benefits</h3>
                <p class="text-gray-600">Attractive salary packages, health insurance, and bonuses</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow">
                <i class="ri-team-line text-4xl text-green-600 mb-4 block"></i>
                <h3 class="text-xl font-bold mb-2">Team Environment</h3>
                <p class="text-gray-600">Work with experienced professionals in a collaborative culture</p>
            </div>
        </div>
    </div>
</section>

<!-- OPEN POSITIONS -->
<section class="py-20 px-4">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold mb-12 text-center">Open Positions</h2>

        <div class="space-y-6">
            <!-- Position 1 -->
            <div class="p-8 bg-white shadow-lg rounded-lg hover:shadow-xl transition border-l-4 border-blue-600">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Senior Software Engineer</h3>
                        <p class="text-gray-600">Experience: 3+ Years</p>
                    </div>
                    <span class="px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold">Full-time</span>
                </div>
                <p class="text-gray-700 mb-4">We're looking for a talented Senior Software Engineer to join our team and lead the development of innovative solutions. You'll work with modern technologies and contribute to transformative projects.</p>
                <a href="#" class="inline-block bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Apply Now</a>
            </div>

            <!-- Position 2 -->
            <div class="p-8 bg-white shadow-lg rounded-lg hover:shadow-xl transition border-l-4 border-purple-600">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Cloud Architect</h3>
                        <p class="text-gray-600">Experience: 5+ Years</p>
                    </div>
                    <span class="px-4 py-2 bg-purple-100 text-purple-800 rounded-full text-sm font-semibold">Full-time</span>
                </div>
                <p class="text-gray-700 mb-4">Design and implement scalable cloud solutions for enterprise clients. Lead architecture decisions and mentor junior team members in cloud technologies.</p>
                <a href="#" class="inline-block bg-purple-600 text-white px-6 py-2 rounded hover:bg-purple-700">Apply Now</a>
            </div>

            <!-- Position 3 -->
            <div class="p-8 bg-white shadow-lg rounded-lg hover:shadow-xl transition border-l-4 border-red-600">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Cybersecurity Analyst</h3>
                        <p class="text-gray-600">Experience: 2+ Years</p>
                    </div>
                    <span class="px-4 py-2 bg-red-100 text-red-800 rounded-full text-sm font-semibold">Full-time</span>
                </div>
                <p class="text-gray-700 mb-4">Help protect our clients' data and systems by identifying and mitigating security threats. Work with cutting-edge security tools and frameworks.</p>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700">Apply Now</a>
            </div>

            <!-- Position 4 -->
            <div class="p-8 bg-white shadow-lg rounded-lg hover:shadow-xl transition border-l-4 border-green-600">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Machine Learning Engineer</h3>
                        <p class="text-gray-600">Experience: 2+ Years</p>
                    </div>
                    <span class="px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm font-semibold">Full-time</span>
                </div>
                <p class="text-gray-700 mb-4">Develop and deploy machine learning models to solve real-world business problems. Collaborate with data scientists and software engineers to create intelligent solutions.</p>
                <a href="#" class="inline-block bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">Apply Now</a>
            </div>

            <!-- Position 5 -->
            <div class="p-8 bg-white shadow-lg rounded-lg hover:shadow-xl transition border-l-4 border-indigo-600">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-2xl font-bold mb-2">IT Support Specialist</h3>
                        <p class="text-gray-600">Experience: 1+ Years</p>
                    </div>
                    <span class="px-4 py-2 bg-indigo-100 text-indigo-800 rounded-full text-sm font-semibold">Full-time</span>
                </div>
                <p class="text-gray-700 mb-4">Provide technical support to clients and internal teams. Troubleshoot issues, resolve tickets, and ensure customer satisfaction through excellent service delivery.</p>
                <a href="#" class="inline-block bg-indigo-600 text-white px-6 py-2 rounded hover:bg-indigo-700">Apply Now</a>
            </div>

            <!-- Position 6 -->
            <div class="p-8 bg-white shadow-lg rounded-lg hover:shadow-xl transition border-l-4 border-orange-600">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Digital Marketing Manager</h3>
                        <p class="text-gray-600">Experience: 3+ Years</p>
                    </div>
                    <span class="px-4 py-2 bg-orange-100 text-orange-800 rounded-full text-sm font-semibold">Full-time</span>
                </div>
                <p class="text-gray-700 mb-4">Lead our digital marketing initiatives and drive brand awareness. Develop marketing strategies, manage campaigns, and analyze performance metrics.</p>
                <a href="#" class="inline-block bg-orange-600 text-white px-6 py-2 rounded hover:bg-orange-700">Apply Now</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="py-20 px-4 bg-blue-600 text-white">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl font-bold mb-6">Don't See Your Position?</h2>
        <p class="text-xl mb-8">We're always looking for talented individuals. Send us your resume and let us know how you can contribute to GenNet.</p>
        <a href="#" class="inline-block bg-white text-blue-600 hover:bg-gray-100 px-10 py-4 rounded-lg text-lg font-semibold">
            Send Your Resume
        </a>
    </div>
</section>
@endsection

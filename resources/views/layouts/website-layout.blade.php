<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GenNet Website')</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css">

    <style>
        body {
            font-family: "Poppins", sans-serif;
        }

        /* Smooth dropdown animation */
        #servicesMenu {
            transition: opacity 0.2s ease, visibility 0.2s ease;
        }

        #servicesMenu.hidden {
            opacity: 0;
            visibility: hidden;
        }

        #servicesMenu:not(.hidden) {
            opacity: 1;
            visibility: visible;
        }
    </style>
</head>

<body class="bg-white text-gray-900">

    <!-- HEADER -->
    <header class="w-full fixed top-0 z-50 backdrop-blur-md bg-white/80 shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-2 flex justify-between items-center">

            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center space-x-2">
                <img src="{{ asset('images/logo/logo.png') }}" class="h-12 w-30" alt="GenNet Logo">

            </a>

           <!-- Desktop Menu -->
<nav class="hidden md:flex space-x-8 text-[17px] font-medium items-center">

    <a href="{{ route('home') }}" class="hover:text-blue-600 transition duration-200">Home</a>

    <a href="{{ route('about') }}" class="hover:text-blue-600 transition duration-200">About Us</a>

    <!-- SERVICES DROPDOWN -->
    <div class="relative" id="servicesContainer">
        <button id="servicesBtn" class="hover:text-blue-600 flex items-center gap-1 transition px-3 py-2 rounded-lg hover:bg-gray-100">
            Services
            <svg id="arrowIcon" class="w-4 h-4 transition-transform duration-300" fill="none"
                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        <!-- Dropdown -->
        <div id="servicesMenu"
            class="hidden absolute left-0 mt-2 w-72 bg-white shadow-2xl rounded-xl py-2 z-50 border border-gray-200"
            style="max-height: 600px; overflow-y: auto;">

            <a href="{{ route('services.cloud') }}" class="block px-4 py-3 hover:bg-blue-50 hover:text-blue-600 transition text-gray-700 text-sm">
                <i class="ri-cloud-line mr-2 text-lg"></i><span>Cloud & VM Services</span>
            </a>
            <a href="{{ route('services.email') }}" class="block px-4 py-3 hover:bg-green-50 hover:text-green-600 transition text-gray-700 text-sm">
                <i class="ri-mail-line mr-2 text-lg"></i><span>Email & Hosting Solutions</span>
            </a>
            <a href="{{ route('services.ai') }}" class="block px-4 py-3 hover:bg-purple-50 hover:text-purple-600 transition text-gray-700 text-sm">
                <i class="ri-brain-line mr-2 text-lg"></i><span>AI Software Solutions</span>
            </a>
            <a href="{{ route('services.security') }}" class="block px-4 py-3 hover:bg-red-50 hover:text-red-600 transition text-gray-700 text-sm">
                <i class="ri-shield-lock-line mr-2 text-lg"></i><span>AI-Powered Security</span>
            </a>
            <a href="{{ route('services.surveillance') }}" class="block px-4 py-3 hover:bg-yellow-50 hover:text-yellow-600 transition text-gray-700 text-sm">
                <i class="ri-camera-line mr-2 text-lg"></i><span>24/7 Surveillance</span>
            </a>
            <a href="{{ route('services.network') }}" class="block px-4 py-3 hover:bg-indigo-50 hover:text-indigo-600 transition text-gray-700 text-sm">
                <i class="ri-router-line mr-2 text-lg"></i><span>Managed Network Services</span>
            </a>
            <a href="{{ route('services.sms') }}" class="block px-4 py-3 hover:bg-pink-50 hover:text-pink-600 transition text-gray-700 text-sm">
                <i class="ri-chat-1-line mr-2 text-lg"></i><span>SMS Services</span>
            </a>
            <a href="{{ route('services.microsoft') }}" class="block px-4 py-3 hover:bg-cyan-50 hover:text-cyan-600 transition text-gray-700 text-sm">
                <i class="ri-windows-fill mr-2 text-lg"></i><span>Microsoft Services</span>
            </a>
            <a href="{{ route('services.call-center') }}" class="block px-4 py-3 hover:bg-orange-50 hover:text-orange-600 transition text-gray-700 text-sm">
                <i class="ri-phone-line mr-2 text-lg"></i><span>Customized Call Center</span>
            </a>

        </div>
    </div>

    <a href="{{ route('news') }}" class="hover:text-blue-600 transition duration-200">News & Events</a>

    <a href="{{ route('career') }}" class="hover:text-blue-600 transition duration-200">Career</a>
</nav>



            <!-- Mobile Menu Button -->
            <button id="menuBtn" class="block md:hidden text-3xl text-white">
                <i data-feather="menu"></i>
            </button>

        </div>

        <!-- Mobile Menu -->
            <div id="mobileMenu" class="hidden bg-white shadow-md border-t">
                <nav class="px-6 py-4 space-y-4 text-lg">
                    <a href="{{ route('home') }}" class="block hover:text-blue-600">Home</a>
                    <a href="{{ route('about') }}" class="block hover:text-blue-600">About Us</a>
                    <a href="{{ route('services') }}" class="block hover:text-blue-600">Services</a>
                    <a href="{{ route('news') }}" class="block hover:text-blue-600">News & Events</a>
                    <a href="{{ route('career') }}" class="block hover:text-blue-600">Career</a>
                </nav>
            </div>

    </header>

    <script>
        feather.replace();

        const menuBtn = document.getElementById("menuBtn");
        const mobileMenu = document.getElementById("mobileMenu");

        menuBtn.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });
    </script>

    <!-- MAIN CONTENT -->
    <main class="pt-[4rem]">
        @yield('content')
    </main>

    <script>
    feather.replace();

    const menuBtn = document.getElementById("menuBtn");
    const mobileMenu = document.getElementById("mobileMenu");

    menuBtn.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
    });
</script>

<!-- ✅ Enhanced Services Dropdown Script - Responsive & Clickable -->
<script>
    const servicesBtn = document.getElementById("servicesBtn");
    const servicesMenu = document.getElementById("servicesMenu");
    const arrowIcon = document.getElementById("arrowIcon");
    const servicesContainer = document.getElementById("servicesContainer");

    // Show dropdown on mouseenter
    servicesBtn.addEventListener("mouseenter", () => {
        servicesMenu.classList.remove("hidden");
        arrowIcon.classList.add("rotate-180");
    });

    // Keep dropdown open when hovering over menu
    servicesMenu.addEventListener("mouseenter", () => {
        servicesMenu.classList.remove("hidden");
    });

    // Hide dropdown when leaving container
    servicesContainer.addEventListener("mouseleave", () => {
        servicesMenu.classList.add("hidden");
        arrowIcon.classList.remove("rotate-180");
    });

    // Toggle dropdown on click (mobile & accessibility)
    servicesBtn.addEventListener("click", (e) => {
        e.preventDefault();
        e.stopPropagation();
        servicesMenu.classList.toggle("hidden");
        arrowIcon.classList.toggle("rotate-180");
    });

    // Close dropdown when clicking on a link
    servicesMenu.querySelectorAll("a").forEach(link => {
        link.addEventListener("click", () => {
            servicesMenu.classList.add("hidden");
            arrowIcon.classList.remove("rotate-180");
        });
    });

    // Close dropdown when clicking outside
    document.addEventListener("click", (e) => {
        if (!servicesContainer.contains(e.target)) {
            servicesMenu.classList.add("hidden");
            arrowIcon.classList.remove("rotate-180");
        }
    });

    // Handle touch devices properly
    if (window.matchMedia("(max-width: 768px)").matches) {
        servicesBtn.addEventListener("touchend", (e) => {
            e.preventDefault();
            e.stopPropagation();
            servicesMenu.classList.toggle("hidden");
            arrowIcon.classList.toggle("rotate-180");
        });
    }
</script>


    <!-- FOOTER -->
    <footer class="bg-gray-900 text-gray-300 py-12 mt-16">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-12">

            <!-- Column 1 -->
            <div>
                <h2 class="text-2xl font-bold text-white mb-4">GenNet</h2>
                <p class="text-gray-400 leading-relaxed">
                    A trusted platform for IT consultancy, business solutions, and enterprise development.
                </p>
            </div>

            <!-- Column 2 -->
            <div>
                <h3 class="text-xl font-semibold text-white mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('about') }}" class="hover:text-white">About Us</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-white">Services</a></li>
                    <li><a href="{{ route('news') }}" class="hover:text-white">News & Events</a></li>
                    <li><a href="{{ route('career') }}" class="hover:text-white">Career</a></li>
                </ul>
            </div>

            <!-- Column 3 -->
            <div>
                <h3 class="text-xl font-semibold text-white mb-4">Follow Us</h3>

                <div class="flex space-x-5 text-2xl">
                    <a href="#" class="hover:text-white"><i data-feather="facebook"></i></a>
                    <a href="#" class="hover:text-white"><i data-feather="linkedin"></i></a>
                    <a href="#" class="hover:text-white"><i data-feather="youtube"></i></a>
                </div>
            </div>
        </div>

        <hr class="border-gray-700 mt-10">

        <p class="text-center text-gray-500 mt-6">
            © 2025 GenNet. All Rights Reserved.
        </p>
    </footer>

</body>
</html>

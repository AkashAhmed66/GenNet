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

    <style>
        body {
            font-family: "Poppins", sans-serif;
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
    <div class="relative group">
        <button id="servicesBtn" class="hover:text-blue-600 flex items-center gap-1 transition">
            Services
            <svg id="arrowIcon" class="w-4 h-4 transition-transform duration-300" fill="none"
                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        <!-- Dropdown -->
        <div id="servicesMenu"
            class="hidden absolute left-0 mt-4 w-80 bg-white shadow-xl rounded-2xl py-4 z-50 border border-gray-100">

            <a href="#" class="block px-6 py-2 text-gray-700 hover:bg-gray-100">Cloud & VM Services</a>
            <a href="#" class="block px-6 py-2 text-gray-700 hover:bg-gray-100">Email & Hosting Solutions</a>
            <a href="#" class="block px-6 py-2 text-gray-700 hover:bg-gray-100">AI Software Solutions</a>
            <a href="#" class="block px-6 py-2 text-gray-700 hover:bg-gray-100">AI-Powered Security</a>
            <a href="#" class="block px-6 py-2 text-gray-700 hover:bg-gray-100">24/7 Surveillance</a>
            <a href="#" class="block px-6 py-2 text-gray-700 hover:bg-gray-100">Managed Network Services</a>
            <a href="#" class="block px-6 py-2 text-gray-700 hover:bg-gray-100">SMS Services</a>
            <a href="#" class="block px-6 py-2 text-gray-700 hover:bg-gray-100">Microsoft Services</a>
            <a href="#" class="block px-6 py-2 text-gray-700 hover:bg-gray-100">Customized Call Center Services</a>
        </div>
    </div>

    <a href="{{ route('news') }}" class="hover:text-blue-600 transition duration-200">News & Events</a>

    <a href="{{ route('career') }}" class="hover:text-blue-600 transition duration-200">Career</a>
</nav>


            <!-- Mobile Menu Button -->
            <button id="menuBtn" class="block md:hidden text-3xl">
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

<!-- ✅ Services Dropdown Script (Place Here) -->
<script>
    const servicesBtn = document.getElementById("servicesBtn");
    const servicesMenu = document.getElementById("servicesMenu");
    const arrowIcon = document.getElementById("arrowIcon");

    servicesBtn && servicesBtn.addEventListener("click", () => {
        servicesMenu.classList.toggle("hidden");
        arrowIcon.classList.toggle("rotate-180");
    });

    // Close dropdown when clicking outside
    document.addEventListener("click", (e) => {
        if (!servicesBtn.contains(e.target) && !servicesMenu.contains(e.target)) {
            servicesMenu.classList.add("hidden");
            arrowIcon.classList.remove("rotate-180");
        }
    });
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

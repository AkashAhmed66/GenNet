<div class="bg-gray-50 min-h-screen pb-20">

    <!-- HERO -->
    <section class="bg-white py-20 shadow">
        <div class="max-w-6xl mx-auto px-4 text-center">

            <!-- Icon -->
            <div class="mb-6">
                <i class="{{ $icon }} text-6xl text-blue-600"></i>
            </div>

            <h1 class="text-4xl font-bold mb-4">{{ $title }}</h1>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                {{ $subtitle }}
            </p>
        </div>
    </section>

    <!-- DESCRIPTION -->
    <section class="max-w-5xl mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold mb-4">Overview</h2>
        <p class="text-gray-700 leading-relaxed">
            {{ $overview }}
        </p>
    </section>

    <!-- FEATURES -->
    <section class="max-w-6xl mx-auto px-4 py-10">
        <h2 class="text-3xl font-bold mb-8">Key Features</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($features as $feature)
                <div class="bg-white p-6 shadow rounded-lg">
                    <i class="ri-check-line text-3xl text-blue-600 mb-3"></i>
                    <h4 class="text-xl font-semibold mb-2">{{ $feature['title'] }}</h4>
                    <p class="text-gray-600">{{ $feature['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <!-- USE CASES -->
    <section class="max-w-6xl mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold mb-8">Use Cases</h2>

        <ul class="space-y-3 text-gray-700 text-lg">
            @foreach($usecases as $case)
                <li>• {{ $case }}</li>
            @endforeach
        </ul>
    </section>

    <!-- CTA -->
    <section class="bg-blue-600 py-16 text-white text-center">
        <h2 class="text-3xl font-bold mb-4">Ready to Get Started?</h2>
        <p class="mb-6">Let us help you implement the best solution for your business.</p>

        <a href="/contact" class="px-10 py-4 bg-white text-blue-600 rounded-lg text-lg hover:bg-gray-100">
            Contact Us
        </a>
    </section>

</div>

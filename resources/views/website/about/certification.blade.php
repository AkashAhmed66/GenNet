@extends('layouts.website-layout')

@section('title', 'Our Certifications - GenNet')

@section('content')
<section class="py-20 text-center bg-gray-50">
    <h1 class="text-5xl font-bold mb-6">Our Certifications</h1>
    <p class="text-lg text-gray-600 max-w-3xl mx-auto">
        Industry-recognized standards proving our commitment to excellence.
    </p>
</section>

<section class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10 py-12 px-4">

    <div class="p-8 bg-white shadow rounded-lg text-center">
        <img src="https://upload.wikimedia.org/wikipedia/commons/f/fb/ISO_9001-2015_Logo.svg"
             class="h-24 mx-auto mb-4">
        <h3 class="font-bold text-xl">ISO 9001 Certification</h3>
        <p class="text-gray-600">Certified quality management standards.</p>
    </div>

    <div class="p-8 bg-white shadow rounded-lg text-center">
        <img src="https://upload.wikimedia.org/wikipedia/commons/9/94/ISO_27001.svg"
             class="h-24 mx-auto mb-4">
        <h3 class="font-bold text-xl">ISO 27001</h3>
        <p class="text-gray-600">Information security management certification.</p>
    </div>

    <div class="p-8 bg-white shadow rounded-lg text-center">
        <img src="https://upload.wikimedia.org/wikipedia/commons/3/32/CE_Mark.svg"
             class="h-20 mx-auto mb-4">
        <h3 class="font-bold text-xl">CE Compliance</h3>
        <p class="text-gray-600">Product safety and compliance certification.</p>
    </div>

</section>
@endsection

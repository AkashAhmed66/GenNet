@extends('layouts.website-layout')

@section('content')

@include('components.service-layout', [
    'icon' => 'ri-cctv-line',
    'title' => '24/7 Surveillance Systems',
    'subtitle' => 'Smart monitoring systems with real-time alerts and remote access.',

    'overview' =>
        'Our surveillance solutions combine advanced CCTV systems with AI-enabled monitoring.
         From real-time alerts to remote access, we provide full security coverage for homes,
         offices, commercial spaces and industries.',

    'features' => [
        ['title' => 'CCTV Installation', 'desc' => 'Professional setup for any environment.'],
        ['title' => 'Remote Monitoring', 'desc' => 'Watch live feeds anytime, anywhere.'],
        ['title' => 'AI Video Analytics', 'desc' => 'Object detection, intrusion alerts and more.'],
    ],

    'usecases' => [
        'Smart building monitoring',
        'Industrial and warehouse security',
        'Retail store theft detection',
        'Office and home surveillance'
    ]
])

@endsection

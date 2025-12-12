@extends('layouts.website-layout')

@section('content')

@include('components.service-layout', [
    'icon' => 'ri-cloud-line',
    'title' => 'Cloud & VM Services',
    'subtitle' => 'Secure, scalable and optimized cloud infrastructure for modern businesses.',
    'overview' =>
        'Our Cloud & VM services enable organizations to deploy high-performance virtual machines,
        cloud servers and data storage with maximum flexibility and minimal cost. With enterprise-level
        security and 99.99% uptime, your applications run smoothly without interruptions.',

    'features' => [
        ['title' => 'Scalable VM Hosting', 'desc' => 'Deploy and scale virtual machines based on your needs.'],
        ['title' => 'High Availability', 'desc' => '99.99% guaranteed uptime for mission-critical applications.'],
        ['title' => 'Cloud Storage', 'desc' => 'Secure and distributed data storage solutions.'],
    ],

    'usecases' => [
        'Hosting business applications',
        'Enterprise software deployment',
        'Secure cloud backup & recovery',
        'Large-scale data handling'
    ]
])

@endsection

@extends('layouts.website-layout')

@section('content')

@include('components.service-layout', [
    'icon' => 'ri-mail-settings-line',
    'title' => 'Email & Hosting Solutions',
    'subtitle' => 'Professional-grade hosting, domain and email management for enterprises.',
    'overview' =>
        'We provide robust hosting and email solutions including Google Workspace and Microsoft 365 integration.
        Whether you need secure email, domain management or enterprise-grade hosting, we deliver reliable systems
        tailored to your business.',

    'features' => [
        ['title' => 'Business Email Setup', 'desc' => 'Professional email solutions for organizations.'],
        ['title' => 'Google Workspace & Office 365', 'desc' => 'Seamless setup and migration.'],
        ['title' => 'Secure Hosting', 'desc' => 'Fast, safe and scalable hosting services.'],
    ],

    'usecases' => [
        'Corporate email communication',
        'Domain registration & business hosting',
        'Secure business collaboration'
    ]
])

@endsection

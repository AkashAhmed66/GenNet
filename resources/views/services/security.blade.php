@extends('layouts.website-layout')

@section('content')

@include('components.service-layout', [
    'icon' => 'ri-shield-keyhole-line',
    'title' => 'AI-Powered Security',
    'subtitle' => 'Next-generation cyber and physical security powered by AI intelligence.',

    'overview' =>
        'Our AI-powered security solutions protect your business from digital and physical threats.
         We use machine learning, anomaly detection and intelligent monitoring systems to detect risks
         in real time and help organizations stay ahead of evolving threats.',

    'features' => [
        ['title' => 'Threat Monitoring', 'desc' => 'AI identifies suspicious activity instantly.'],
        ['title' => 'Cybersecurity Tools', 'desc' => 'Protection against malware, attacks and breaches.'],
        ['title' => 'Security Analytics', 'desc' => 'Detailed insights into security events and risks.'],
    ],

    'usecases' => [
        'Internal & external threat detection',
        'Data breach prevention',
        'AI-based cybersecurity enhancements',
        'Enterprise-level risk management'
    ]
])

@endsection

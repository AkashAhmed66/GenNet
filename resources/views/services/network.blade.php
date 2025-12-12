@extends('layouts.website-layout')

@section('content')

@include('components.service-layout', [
    'icon' => 'ri-router-line',
    'title' => 'Managed Network Services',
    'subtitle' => 'Reliable, secure and enterprise-grade network management & telecom solutions.',

    'overview' =>
        'We manage and optimize enterprise networks with industry-standard tools and
         telecom integrations. From VPN and APN configuration to monitoring and maintenance,
         our network team ensures continuous connectivity and security.',

    'features' => [
        ['title' => 'VPN Solutions', 'desc' => 'Secure remote access for your teams.'],
        ['title' => 'Network Management', 'desc' => 'Full monitoring, optimization and reporting.'],
        ['title' => 'Telecom Integration', 'desc' => 'CP, APN, VAS and corporate telecom solutions.'],
    ],

    'usecases' => [
        'Corporate network infrastructure',
        'Secure remote workforce',
        'Branch connectivity solutions',
        'ISP & telecom integrations'
    ]
])

@endsection

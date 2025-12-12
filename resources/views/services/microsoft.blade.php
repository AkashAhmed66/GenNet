@extends('layouts.website-layout')

@section('content')

@include('components.service-layout', [
    'icon' => 'ri-windows-line',
    'title' => 'Microsoft Services',
    'subtitle' => 'Microsoft 365, Azure Cloud and enterprise-grade productivity solutions.',

    'overview' =>
        'We provide end-to-end Microsoft services including Azure cloud deployment,
         Microsoft 365 setup, device management, security policies and business productivity tools.',

    'features' => [
        ['title' => 'Microsoft 365 Deployment', 'desc' => 'Email, Teams, SharePoint and business suites.'],
        ['title' => 'Azure Cloud Services', 'desc' => 'Powerful cloud infrastructure and security.'],
        ['title' => 'Endpoint Management', 'desc' => 'Secure device & user access control.'],
    ],

    'usecases' => [
        'Corporate email solutions',
        'Cloud hosting on Azure',
        'Enterprise security policies',
        'Team collaboration & productivity tools'
    ]
])

@endsection

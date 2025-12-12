@extends('layouts.website-layout')

@section('content')

@include('components.service-layout', [
    'icon' => 'ri-customer-service-2-line',
    'title' => 'Customized Call Center Services',
    'subtitle' => 'Tailored inbound, outbound, IVR and customer support solutions.',

    'overview' =>
        'Our call center solutions are flexible and customizable to match your
         business needs. We provide inbound support systems, outbound dialing,
         IVR menus, reporting dashboards and full customer service automation.',

    'features' => [
        ['title' => 'Inbound & Outbound Support', 'desc' => 'Handle calls professionally and efficiently.'],
        ['title' => 'IVR Systems', 'desc' => 'Custom voice menus and automation flows.'],
        ['title' => 'Call Monitoring & Reporting', 'desc' => 'Track performance and analytics.'],
    ],

    'usecases' => [
        'Customer care operations',
        'Telemarketing campaigns',
        'Automated IVR payment systems',
        'Support center outsourcing'
    ]
])

@endsection

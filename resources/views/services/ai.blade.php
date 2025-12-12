@extends('layouts.website-layout')

@section('content')

@include('components.service-layout', [
    'icon' => 'ri-robot-line',
    'title' => 'AI Software Solutions',
    'subtitle' => 'Unlock automation, insights and intelligence with custom AI systems.',
    'overview' =>
        'We develop advanced AI-powered tools using machine learning, NLP and predictive analytics to
         automate workflows, improve customer experience and optimize decision-making.',

    'features' => [
        ['title' => 'Automation Tools', 'desc' => 'Automate repetitive business processes.'],
        ['title' => 'ML & Predictive Analytics', 'desc' => 'Forecast trends using intelligent models.'],
        ['title' => 'AI Applications', 'desc' => 'Custom AI software built for your business.'],
    ],

    'usecases' => [
        'Customer support automation',
        'Business forecasting',
        'Intelligent workflow optimization'
    ]
])

@endsection

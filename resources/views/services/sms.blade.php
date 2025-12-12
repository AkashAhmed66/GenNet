@extends('layouts.website-layout')

@section('content')

@include('components.service-layout', [
    'icon' => 'ri-chat-1-line',
    'title' => 'SMS Services',
    'subtitle' => 'Enterprise bulk messaging, OTP delivery and automated SMS solutions.',

    'overview' =>
        'Our SMS platform enables businesses to send large-scale messages, notifications
         and OTPs with high delivery success. We offer robust APIs and reliable messaging routes.',

    'features' => [
        ['title' => 'Bulk SMS', 'desc' => 'Send campaigns to thousands instantly.'],
        ['title' => 'OTP Delivery', 'desc' => 'Fast & secure one-time password delivery.'],
        ['title' => 'API Integration', 'desc' => 'Connect SMS with your applications.'],
    ],

    'usecases' => [
        'Customer notifications & alerts',
        'Banking OTP systems',
        'Marketing campaigns',
        'E-commerce order updates'
    ]
])

@endsection

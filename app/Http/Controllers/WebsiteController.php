<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function Home()
    {
        return view('website.welcome');
    }

    public function AboutUS()
    {
        return view('website.about');
    }

    public function Services()
    {
        return view('website.services');
    }

    public function NewsAndEvents()
    {
        return view('website.news');
    }

    public function Career()
    {
        return view('website.career');
    }

    public function ContactUS()
    {
        return view('website.contact');
    }

};

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function company() {
        return view('about.company');
    }

    public function milestone() {
        return view('about.milestone');
    }

    public function certification() {
        return view('about.certification');
    }
}

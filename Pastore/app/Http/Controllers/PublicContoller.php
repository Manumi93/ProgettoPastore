<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicContoller extends Controller
{
    public function home () {
        return view('welcome');
    }

    public function about () {
        return view('about');
    }

    public function service () {
        return view('service');
    }

    public function preventivo () {
        return view('preventivo');
    }

    public function contact () {
        return view('contact');
    }

}

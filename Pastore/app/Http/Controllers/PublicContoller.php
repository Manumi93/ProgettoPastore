<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicContoller extends Controller
{
    public function home () {
        return view('welcome');
    }
}

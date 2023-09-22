<?php

namespace App\Http\Controllers;

use App\Mail\Contattami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
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

    public function contattami (Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $messaggio = $request->input('messaggio');

        $finalMail = new Contattami($name, $email, $subject, $messaggio);



        Mail::to($email)->send($finalMail);

        return redirect(route('contact'));

    }

}

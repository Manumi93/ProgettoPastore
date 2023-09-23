<?php

namespace App\Http\Controllers;

use App\Mail\Contattami;
use App\Mail\SendEmailGmail;
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

    public function sendEmail (Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $messaggio = $request->input('messaggio');

        $finalMail = [
                'name' => $name,
                'email' => $email,
                'subject' => $subject,
                'messaggio' => $messaggio
        ];

        Mail::send('mail.email', $finalMail, function($message) use ($finalMail){

            $message->to('contatti.pastore@gmail.com')
                    ->from($finalMail['email'], $finalMail['name'])
                    ->subject($finalMail['subject']);
        });

        // $finalMail = new SendEmailGmail($name, $email, $subject, $messaggio);

        // Mail::to('contatti.pastore@gmail.com')->send($finalMail);
        
        return redirect(route('contact'));

    }

}

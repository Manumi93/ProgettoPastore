<?php


use App\Mail\SendEmailGmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// route for homepage
Route::get('/', [PublicController::class, 'home'])->name('homepage');  

// route for about us
Route::get('/about', [PublicController::class, 'about'])->name('about');  

// route for our service
Route::get('/service', [PublicController::class, 'service'])->name('service'); 


// route for contact
Route::get('/contact', [PublicController::class, 'contact'])->name('contact'); 

// route for email
Route::post('/sendEmail', [PublicController::class, 'sendEmail'])->name('sendEmail');


// Route::get('/send-email', function() {
//     try {
        
//         Mail::to('contatti.pastore@gmail.com')->send(new SendEmailGmail());
//         return view('mail.success');
    
//     }catch (\Exception $e) {
//         return view('mail.error');
//     }

// });




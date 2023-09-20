<?php

use App\Http\Controllers\PublicContoller;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [PublicContoller::class, 'home'])->name('homepage');  

// route for about us
Route::get('/about', [PublicContoller::class, 'about'])->name('about');  

// route for our service
Route::get('/service', [PublicContoller::class, 'service'])->name('service'); 

// route for preventivo
Route::get('/preventivo', [PublicContoller::class, 'preventivo'])->name('preventivo'); 

// route for contact
Route::get('/contact', [PublicContoller::class, 'contact'])->name('contact'); 




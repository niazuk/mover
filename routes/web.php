<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\FormDataValidation;
use App\Mail\SendMailable;
use App\Mail\SendMailableServer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::post('send_email', function (Request $request) {
     if ((new FormDataValidation)->quoteform($request)) {
        Mail::send(new SendMailable($request));
        Mail::send(new SendMailableServer($request));
        return view('pages.thanks');
    }
})->name('send_email');



Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/rates', function () {
    return view('pages.rates');
})->name('rates');

Route::get('/faqs', function () {
    return view('pages.faqs');
})->name('faqs');

Route::get('/blogs', function () {
    return view('pages.blogs');
})->name('blogs');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/register', function () {
    return view('pages.contact');
})->name('register');

Route::get('/sitemap.xml', 'PagesController@sitemap');
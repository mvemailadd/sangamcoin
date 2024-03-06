<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('productdetails/{productid}/{ext}', function ($productid, $ext) {
    return view('productdetails', compact('productid', 'ext'));
});

Route::get('newlisting', function () {
    return view('newlisting');
});

Route::get('ancientcoins', function () {
    return view('ancientcoins');
});

Route::post('/contactus', 'App\Http\Controllers\EmailController@sendContactUsEmail')->name('contact.send');
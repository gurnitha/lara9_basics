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

// ROUTE: http://127.0.0.1:8000
Route::get('/', function () {
    return view('welcome');
});

// ROUTE: http://127.0.0.1:8000/about
Route::get('/about', function() {
    // echo "Echoing About page";
    return view('about');
});

// ROUTE: http://127.0.0.1:8000/contact
Route::get('/contact', function() {
    // echo "Echoing Contact page";
    return view('contact');
});


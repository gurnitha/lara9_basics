<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\DemoController;


// Grouping the route
Route::controller(DemoController::class)->group(function() {
    Route::get('/', 'Home');
    Route::get('/about', 'About');
    Route::get('/contact', 'Contact');
});


// // Kombinasi Controller dan Route
// Route::get('/', [DemoController::class, 'Home']);
// Route::get('/about', [DemoController::class, 'About']);
// Route::get('/contact', [DemoController::class, 'Contact']);


// // ROUTE: http://127.0.0.1:8000
// Route::get('/', function () {
//     return view('welcome');
// });

// // ROUTE: http://127.0.0.1:8000/about
// Route::get('/about', function() {
//     // echo "Echoing About page";
//     return view('about');
// });

// // ROUTE: http://127.0.0.1:8000/contact
// Route::get('/contact', function() {
//     // echo "Echoing Contact page";
//     return view('contact');
// });


// // ROUTE: http://127.0.0.1:8000/contact
// Route::get('/blade', function() {
//     // echo "Echoing Contact page";
//     return view('using_blade_syntax');
// });


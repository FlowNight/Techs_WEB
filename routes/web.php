<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('login');

Route::get('/welcome.blade.php', function () {
    return view('welcome');
});

Route::get('/gallery.blade.php', function () {
    return view('gallery');
});

Route::get('/contact.blade.php', function () {
    return view('contact');
});

Route::get('/actuality.blade.php', function () {
    return view('actuality');
});

Route::get('/about.blade.php', function () {
    return view('about');
});

Route::get('/calendars.blade.php', function () {
    return view('calendars');
});

Auth::routes();



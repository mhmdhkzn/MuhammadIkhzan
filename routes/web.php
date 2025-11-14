<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('halaman_home');
})->name('home');

Route::get('/about', function () {
    return view('halaman_about');
})->name('about');

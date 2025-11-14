<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('halaman home');
});

Route::get('/', function () {
    return view('halaman about');
});

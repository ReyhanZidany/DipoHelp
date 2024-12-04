<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Route untuk halaman login
Route::get('/loginuser', function () {
    return view('loginuser');
});

// routes/web.php
Route::get('/form', function () {
    return view('form');
})->name('form');

Route::get('/track', function () {
    return view('track');
});

Route::get('/loginadmin', function () {
    return view('loginadmin');
});
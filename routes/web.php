<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\TicketController;

// Rute untuk login user
Route::get('/loginuser', function () {
    return view('loginuser');
})->name('login');

Route::post('/loginuser', function () {
    return view('loginuser');
})->name('login');

Route::get('/loginuser', function () {
    return view('loginuser');
})->name('logout');

Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/'); // Redirect setelah login sukses
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
})->name('login.process');

// Rute untuk logout
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/loginuser');
})->name('logout');

// Rute untuk dashboard yang dilindungi
Route::get('/', function () {
    return view('home'); // Halaman dashboard
})->name('home');

// Rute untuk tiket
Route::post('/tickets/store', [TicketController::class, 'store'])->name('tickets.store');

// Rute untuk form
Route::get('/form', function () {
    return view('form');
})->name('form');

// Rute untuk tracking tiket
Route::get('/track', function () {
    return view('track');
})->name('track');

// Rute untuk admin
Route::get('/loginadmin', function () {
    return view('loginadmin');
})->name('loginadmin');

Route::get('/homeadmin', function () {
    return view('homeadmin');
})->name('homeadmin');


Route::get('/report', function () {
    return view('report');
})->name('report');

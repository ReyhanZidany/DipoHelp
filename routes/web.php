<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\TicketController;
use App\Models\Ticket;

// Rute untuk login user
Route::get('/loginuser', function () {
    return view('loginuser');
})->name('loginuser');

Route::post('/loginuser', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/'); 
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
})->name('loginuser.process');

Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->middleware('auth')->name('logout');

Route::get('/', function () {
    return view('home');
})->name('home');

// Rute untuk form
Route::get('/form', function () {
    return view('form');
})->name('form');

// Rute untuk tracking tiket
Route::get('/track', function () {
    return view('track');
})->name('track');

Route::get('/form', [TicketController::class, 'create'])->middleware('auth')->name('tickets.create');
Route::post('/tickets/store', [TicketController::class, 'store'])->name('tickets.store');

Route::get('/loginadmin', function () {
    return view('loginadmin');
})->name('loginadmin');

Route::post('/loginadmin', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/homeadmin'); 
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
})->name('loginadmin.process');

Route::get('/homeadmin', [TicketController::class, 'homeadmin'])->middleware('auth')->name('homeadmin');

Route::get('/reports', function () {
    $user = Auth::user();
    $reports = Ticket::paginate(10);
    return view('report', compact('user', 'reports'));
})->middleware('auth')->name('report');

// Rute untuk menampilkan detail tiket
Route::get('/tickets/{id}', [TicketController::class, 'show'])->middleware('auth')->name('detail');

// Rute untuk mengupdate status tiket
Route::post('/tickets/{id}/update', [TicketController::class, 'update'])->middleware('auth')->name('tickets.update');

// Rute untuk melacak status tiket
Route::post('/tickets/track', [TicketController::class, 'track'])->middleware('auth')->name('tickets.track');


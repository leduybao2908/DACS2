<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('users.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/user', function () {
    return view('users.user-profile');
})->name('user')->middleware('auth');

Route::get('/my-listings', function () {
    return view('users.my-listings');
})->name('my-listings')->middleware('auth');

Route::get('/favorited-listings', function () {
    return view('users.favorited-listings');
})->name('favorited-listings')->middleware('auth');

Route::get('/add-property', function () {
    return view('users.add-property');
})->name('add-property')->middleware('auth');


Route::get('/payment-method', function () {
    return view('users.payment-method');
})->name('payment-method')->middleware('auth');

Route::get('/invoice', function () {
    return view('users.invoice');
})->name('invoice')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';

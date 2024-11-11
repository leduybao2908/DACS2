<?php
use App\Http\Controllers\PropertiesController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('index');
})->name('home');;

Route::get('/dashboard', function () {
    return view('users.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/user', function () {
    return view('users.user-profile');
})->name('user')->middleware('auth');


Route::post('/properties/upload-media', [PropertiesController::class, 'uploadMedia'])->name('properties.uploadMedia');

Route::get('/favorited-listings', function () {
    return view('users.favorited-listings');
})->name('favorited-listings')->middleware('auth');

Route::get('/add-property', function () {
    return view('users.add-property');
})->name('add-property')->middleware('auth');


Route::get('/payment-method', function () {
    return view('users.payment-method');
})->name('payment-method')->middleware('auth');

Route::get('/single-property', function () {
    return view('uneditfile.single-property-1');
})->name('single-property');

Route::get('/properties-list', [PropertiesController::class, 'display'])->name('properties.list');



Route::get('/invoice', function () {
    return view('users.invoice');
})->name('invoice')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('my-listings', [PropertiesController::class, 'index'])->name('my-listings');
    Route::post('/users/store', [PropertiesController::class, 'store'])->name('users.store');
    Route::delete('/properties/{id}', [PropertiesController::class, 'destroy'])->name('property.destroy')->middleware('auth');
    Route::get('/property/{id}/edit', [PropertiesController::class, 'edit'])->name('property.edit');
    Route::post('/property/{id}/update', [PropertiesController::class, 'update'])->name('property.update'); 

});


Route::get('/all-images', [PropertiesController::class, 'showAllImages'])->name('all-images');


Route::get('/property/{id}/view', [PropertiesController::class, 'DisplaySpecifyProperty'])->name('property.view');

require __DIR__.'/auth.php';

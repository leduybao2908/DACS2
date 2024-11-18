<?php

use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoomController;
use App\Mail\FirstMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PropertySearchController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InquiryController;


Route::get('/RoomCity/{city}',  [PropertySearchController::class, 'RoomCity'])->name('RoomCity');
Route::get('/search', [PropertySearchController::class, 'search'])->name('property.search');
Route::get('/contact-us', [ContactController::class, 'showContactForm'])->name('contact.us');
Route::post('/contact-us', [ContactController::class, 'sendContactEmail'])->name('contact.us.submit');
Route::post('/send-contact', [ContactController::class, 'sendContactEmail'])->name('send.contact.email');
Route::get('/', [PropertySearchController::class, 'homePage'])->name('home');
Route::get('/properties-list', function () {
    return view('properties_list'); // Trả về view inner
});
Route::post('/submit-request', [InquiryController::class, 'store']);

Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('user.dashboard.dashboard');
    })->name('dashboard');
    
    // User Profile
    Route::get('/user-profile', function () {
        return view('user.profile');
    })->name('user-profile');

    Route::get('/my-listings', [RoomController::class, 'index'])->name('my-listings');
    Route::put('/my-listings/{room}', [RoomController::class, 'update'])->name('my-listings.update');
    Route::delete('/room/{room}', [RoomController::class, 'destroy'])->name('room.destroy');

    // Add Property
    Route::get('/add-property', function () {
        return view('user.add-property');
    })->name('add-property');

    Route::get('/user/notifications', [InquiryController::class, 'index'])->name('user.notifications');


    // Payments
    Route::get('/payment-method', function () {
        return view('user.payment-method');
    })->name('payment-method');

    // Invoices
    Route::get('/invoice', function () {
        return view('user.invoices');
    })->name('invoice');

    // Change Password
    Route::get('/change-password', function () {
        return view('user.change-password');
    })->name('change-password');
});

Route::get('/all-rooms', [RoomController::class, 'displayAllRooms'])->name('all-rooms');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::match(['patch', 'put'], '/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');

});


Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
});


Route::get('/rooms/{room}', [RoomController::class, 'show'])->name('rooms.show');
Route::post('/rooms/{room}/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('/reviews/{roomId}', [ReviewController::class, 'show'])->name('reviews.show');
Route::get('/featured-properties', [PropertySearchController::class, 'getFeaturedProperties'])->name('featured-properties');


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::get('/shop-with-sidebar', function () { return view('uneditfile.shop-with-sidebar'); }) ->name('shop-with-sidebar');
Route::get('/contact-us', function () { return view('uneditfile.contact-us'); })->name('contact');
Route::get('/about', function () { return view('uneditfile.about'); })->name('about');
Route::get('/404', function () { return view('uneditfile.404'); })->name('404');
Route::get('/faq', function () { return view('uneditfile.faq'); })->name('faq');
Route::get('/shop-order', function () { return view('uneditfile.shop-order'); })->name('shop-order');
Route::get('/user-profile', function () { return view('user.profile'); })->name('user-profile');
Route::get('/dashboard', function () { return view('uneditfile.dashboard'); })->name('dashboard');
Route::get('/add-property', function () { return view('user.add-property'); })->name('add-property');
Route::get('/payment-method', function () { return view('uneditfile.payment-method'); })->name('payment-method');
Route::get('/sent', function () { return view('emails.contact'); })->name('payment-method');

Route::get('/send-email',function(){
    Mail::to('test@test.com')->send(new FirstMail("Chinh"));
});

require __DIR__.'/auth.php';

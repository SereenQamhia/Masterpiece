<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfessionalController;
use App\Http\Controllers\JoinUsController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\DashController;
use Illuminate\Support\Facades\Route;



// Dashboard

Route::get('login_admin', [App\Http\Controllers\LoginAdmin::class, 'show'])->name('login_admin');
Route::post('check', [App\Http\Controllers\LoginAdmin::class, 'store'])->name('check_admin');

Route::middleware(['is_admin'])->group(function () {
Route::get('/Dash',[DashController::class, 'index']) -> name('Dashboard.index');
Route::resource('adminProfile',AdminProfileController::class)->only(['index', 'update']);
Route::resource('Services', ServiceController::class);
Route::resource('Providers', ProviderController::class);
Route::resource('Users', UserController::class);
Route::resource('Admins', AdminController::class);
Route::resource('Courses', CourseController::class);
Route::resource('Professionals', ProfessionalController::class);
Route::resource('JoinUs', JoinUsController::class);
Route::resource('Reviews', ReviewController::class);
Route::get('admin_logout', [App\Http\Controllers\LoginAdmin::class, 'logout_admin'])->name('admin_logout');

});

Route::get('/dashboard', function () {
    return view('pages.index');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show']) -> name('profile');
    Route::get('/profile_edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/profile/{id}',  [BookingController::class, 'destroy'])->name('cancel.booking');

});


Route::controller(GoogleController::class)->group(function(){
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});

//nav routes

Route::get('/', [HomeController::class, 'showhome'])->name('home');
Route::get('/about', function () {return view('pages.about') ;}) -> name('about');
Route::get('/contact', function () {return view('pages.contact') ;}) -> name('contact');
Route::get('/FAQ', function () {return view('pages.FAQs') ;}) -> name('FAQ');
Route::get('/service/{name}',  [HomeController::class, 'showprovider']) -> name('Service');
Route::get('/choose-pro/{id}',  [HomeController::class, 'showoptions']) -> name('choosepro');
Route::get('/professional/{id}',  [HomeController::class, 'showpro']) -> name('pro');
Route::post('/professional',  [ReviewController::class, 'store'])->middleware('auth')->name('review');
Route::post('/checkout',  [BookingController::class, 'store'])->middleware('auth')->name('Bookings');
Route::get('/join',  [JoinUsController::class, 'show'])->name('join');
Route::post('/join',  [JoinUsController::class, 'store'])->name('join.store');
Route::post('/accept-join-request/{id}',  [JoinUsController::class, 'acceptJoinRequest'])->name('accept.joinRequest');
Route::post('/professionalUpdate',  [ProfessionalController::class, 'professionalUpdate'])->name('ProfessionalUpdate');
Route::get('/Course/{id}',  [CourseController::class, 'show'])->name('course');
Route::post('/enroll-submit', [EnrollController::class, 'submit'])->name('enroll.submit');


Route::controller(StripePaymentController::class)->group(function(){
    Route::post('Checkout', 'stripe');
    Route::post('Checkout', 'stripePost')->name('stripe.post');
});

Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');




require __DIR__.'/auth.php';

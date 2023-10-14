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
use Illuminate\Support\Facades\Route;




// Route::get('admin/login', [AdminLoginController::class,'showLoginForm'])->name('admin.login');
// Route::post('admin/login', [AdminLoginController::class,'login'])->name('admin.login.submit');

Route::get('login_admin', [App\Http\Controllers\LoginAdmin::class, 'show'])->name('login_admin');

Route::post('check', [App\Http\Controllers\LoginAdmin::class, 'store'])->name('check_admin');

Route::middleware(['is_admin'])->group(function () {
    Route::get('/Dash', function () {
        return view('Dashboard.index') ;
    }) -> name('Dashboard.index');
// Dashboard
Route::resource('Services', ServiceController::class);
Route::resource('Providers', ProviderController::class);
Route::resource('Users', UserController::class);
Route::resource('Admins', AdminController::class);
Route::resource('Courses', CourseController::class);
Route::resource('Professionals', ProfessionalController::class);
Route::resource('JoinUs', JoinUsController::class);
Route::resource('Reviews', ReviewController::class);
Route::get('admin_logout', [App\Http\Controllers\LoginAdmin::class, 'logout_admin'])->name('admin_logout');

// Route::resource('Reviews', ReviewController::class)->middleware('auth');
});

Route::get('/dashboard', function () {
    return view('pages.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/', function () {
//     return view('pages.index');
// })->name('Home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show']) -> name('profile');
    Route::get('/profile_edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/profile/{id}',  [BookingController::class, 'destroy'])->name('cancel.booking');

});


// Route::get('/', [HomeController::class, 'shownav'])->name('nav');

//nav routes

Route::get('/', [HomeController::class, 'showhome'])->name('home');
Route::get('/about', function () {return view('pages.about') ;}) -> name('about');
Route::get('/contact', function () {return view('pages.contact') ;}) -> name('contact');
Route::get('/service/{name}',  [HomeController::class, 'showprovider']) -> name('Service');
Route::get('/choose-pro/{id}',  [HomeController::class, 'showoptions']) -> name('choosepro');
Route::get('/professional/{id}',  [HomeController::class, 'showpro']) -> name('pro');
Route::post('/professional',  [ReviewController::class, 'store'])->middleware('auth')->name('review');
Route::post('/checkout',  [BookingController::class, 'store'])->name('Bookings');


// Route::get('/carpenter', function () {return view('pages.carpenter') ;}) -> name('Carpenter');
// Route::get('/electrical', function () {return view('pages.electrical') ;}) -> name('Electrical');
// Route::get('/painting', function () {return view('pages.painting') ;}) -> name('Painting');
// Route::get('/plumbing', function () {return view('pages.plumbing') ;}) -> name('Plumbing');

// Route::post('Checkout', [StripePaymentController::class, 'payment'])->middleware('auth', 'verified')->name('stripe_single'); // Use 'store' method for POST

Route::controller(StripePaymentController::class)->group(function(){
    Route::post('Checkout', 'stripe');
    Route::post('Checkout', 'stripePost')->name('stripe.post');
});




require __DIR__.'/auth.php';

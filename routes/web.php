<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfessionalController;
use App\Http\Controllers\JoinUsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;




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


Route::get('/dashboard', function () {
    return view('pages.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



//nav routes

Route::get('/', [HomeController::class, 'showhome'])->name('home');
Route::get('/about', function () {return view('pages.about') ;}) -> name('about');
Route::get('/{name}',  [HomeController::class, 'showprovider']) -> name('Service');
Route::get('/carpenter', function () {return view('pages.carpenter') ;}) -> name('Carpenter');
Route::get('/electrical', function () {return view('pages.electrical') ;}) -> name('Electrical');
Route::get('/painting', function () {return view('pages.painting') ;}) -> name('Painting');
Route::get('/plumbing', function () {return view('pages.plumbing') ;}) -> name('Plumbing');
Route::post('/choose-pro',  [HomeController::class, 'showpro']) -> name('choosepro');



require __DIR__.'/auth.php';

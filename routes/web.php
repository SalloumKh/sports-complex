<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\TariffController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\FacilityController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

// News routes
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');

// Trainers routes
Route::get('/trainers', [TrainerController::class, 'index'])->name('trainers.index');
Route::get('/trainers/{trainer}', [TrainerController::class, 'show'])->name('trainers.show');

// Schedule route
Route::get('/schedule', [PageController::class, 'schedule'])->name('schedule');

// Tariffs/Pricing routes
Route::get('/tariffs', [TariffController::class, 'index'])->name('tariffs.index');
Route::get('/tariffs/{tariff}', [TariffController::class, 'show'])->name('tariffs.show');

// Testimonials routes
Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');
Route::post('/testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');
Route::get('/testimonials/create', [TestimonialController::class, 'create'])->name('testimonials.create');

// Consultation routes
Route::get('/consultations/create', [ConsultationController::class, 'create'])->name('consultations.create');
Route::post('/consultations', [ConsultationController::class, 'store'])->name('consultations.store');

// Classes and facilities routes
Route::get('/classes', [ClassController::class, 'index'])->name('classes.index');
Route::get('/facilities', [FacilityController::class, 'index'])->name('facilities.index');

// Authentication routes
Auth::routes();

// User dashboard
Route::get('/home', [HomeController::class, 'index'])->name('dashboard');

// Protected routes
Route::middleware(['auth'])->group(function () {
    // Subscription purchase
    Route::get('/subscribe/{tariff}', [TariffController::class, 'subscribe'])->name('tariffs.subscribe');
    Route::post('/subscribe/{tariff}/process', [TariffController::class, 'process'])->name('tariffs.process');
    
    // User profile
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
    Route::put('/profile', [HomeController::class, 'updateProfile'])->name('profile.update');
    Route::get('/change-password', [HomeController::class, 'changePassword'])->name('password.change');
    Route::put('/change-password', [HomeController::class, 'updatePassword'])->name('password.update');
});

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', [HomeController::class, 'admin'])->name('admin.dashboard');
    Route::resource('news', NewsController::class)->except(['index', 'show']);
    Route::resource('trainers', TrainerController::class)->except(['index', 'show']);
    Route::resource('tariffs', TariffController::class)->except(['index', 'show']);
    Route::get('/testimonials', [TestimonialController::class, 'adminIndex'])->name('admin.testimonials.index');
    Route::put('/testimonials/{testimonial}/approve', [TestimonialController::class, 'approve'])->name('admin.testimonials.approve');
    Route::get('/consultations', [ConsultationController::class, 'adminIndex'])->name('admin.consultations.index');
    Route::put('/consultations/{consultation}/status', [ConsultationController::class, 'updateStatus'])->name('admin.consultations.status');
    Route::resource('classes', ClassController::class)->except(['show']);
    Route::resource('facilities', FacilityController::class)->except(['show']);
});

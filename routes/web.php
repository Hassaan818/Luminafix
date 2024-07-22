<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\OurServicesController;
use App\Http\Controllers\Frontend\OurTeamController;
use App\Http\Controllers\Frontend\SubscriptionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//frontend Routes

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', AboutUsController::class)->name('about.us');
Route::get('services', [OurServicesController::class, 'index'])->name('services');
Route::get('services/details/{slug}', [OurServicesController::class, 'serviceDetail'])->name('service.details');
Route::get('/team', [OurTeamController::class, 'index'])->name('team');
Route::get('team/details/{slug}', [OurTeamController::class, 'teamDetail'])->name('team.details');
Route::get('/contact', [ContactUsController::class, 'index'])->name('contact.us');
Route::post('/contact/store', [ContactUsController::class, 'store'])->name('contact.store');

Route::post('/subscription/store', [SubscriptionController::class, 'store'])->name('subscription.store');

//Admin Routes
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin\\', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');
    Route::resource('/abouts', AboutController::class, ['except' => ['index', 'create', 'show', 'destroy']]);
    Route::resource('/services', ServicesController::class)->parameters([
        'services' => 'slug',
    ]);
    Route::resource('/teams', TeamController::class)->parameters([
        'teams' => 'slug',
    ]);
    Route::resource('/testimonials', TestimonialController::class)->parameters([
        'testimonials' => 'slug',
    ]);
    Route::resource('/projects', ProjectController::class);
    Route::resource('/settings', SettingsController::class, ['except' => ['index', 'create', 'show', 'destroy']]);
    Route::resource('/skills', SkillController::class); 
    Route::resource('/contacts', ContactController::class, ['except' => ['create','store', 'show','edit','update']]);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

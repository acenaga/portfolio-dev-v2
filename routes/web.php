<?php

use App\Http\Controllers\EducationController;
use App\Http\Controllers\ProfessionalSkillController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TechnicalSkillController;
use App\Http\Controllers\ClientReviewController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('portfolio', function () {
    return view('portfolio.home-portfolio');
});



Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/work-experience', function () {
        return view('dashboard.work-experience');
    })->name('work-experience');
    Route::get('/featured-projects', function () {
        return view('dashboard.featured-projects');
    })->name('featured-projects');
    Route::get('/portfolio-items', function () {
        return view('dashboard.portfolio-items');
    })->name('portfolio-items');
    Route::get('/posts-items', function () {
        return view('dashboard.posts-items');
    })->name('posts-items');

    Route::resource('education', EducationController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('professional-skill', ProfessionalSkillController::class);
    Route::resource('technical-skill', TechnicalSkillController::class);
    Route::resource('client-review', ClientReviewController::class);
});

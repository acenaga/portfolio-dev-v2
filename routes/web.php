<?php

use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ProfessionalSkillController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TechnicalSkillController;
use App\Http\Controllers\ClientReviewController;
use App\Http\Controllers\PortfolioCategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WorkExperienceController;
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
    Route::get('/featured-projects', function () {
        return view('dashboard.featured-projects');
    })->name('featured-projects');
    Route::get('/portfolio-items', function () {
        return view('dashboard.portfolio-items');
    })->name('portfolio-items');

    Route::resource('education', EducationController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('professional-skill', ProfessionalSkillController::class);
    Route::resource('technical-skill', TechnicalSkillController::class);
    Route::resource('client-review', ClientReviewController::class);
    Route::resource('post-items', PostController::class);
    Route::resource('work-experiences', WorkExperienceController::class);
    Route::get('portfolio-categories', PortfolioCategoryController::class)->name('portfolio-category');

    Route::controller(CKEditorController::class)->group(
        function () {
            Route::post('ckeditor/upload', 'upload')->name('ckeditor.image-upload');
        }
    );
});

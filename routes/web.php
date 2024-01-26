<?php

declare(strict_types=1);

use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\ClientReviewController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\PortfolioCategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfessionalSkillController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TechnicalSkillController;
use App\Http\Controllers\WorkExperienceController;
use App\Models\Section;
use App\Models\User;
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
    $user = User::find(1);

    if ($user) {
        $user = $user->with(
            'professional_skills',
            'technical_skills',
            'services',
            'featuredProjects',
            'education',
            'experiences',
            'portfolios',
            'posts',
            'reviews',
            'social_medias',
            'sections'
        )
            ->get();
        $user = $user[0];
        $sections = $user->sections;

        return view('portfolio.home-portfolio', compact('user', 'sections'));
    }

    return view('working');
});

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', function () {
        $sections = Section::all();

        return view('dashboard', compact('sections'));
    })->name('dashboard');
    Route::get('/featured-projects', function () {
        return view('dashboard.featured-projects');
    })->name('featured-projects');
    Route::get('/portfolio-items', function () {
        return view('dashboard.portfolio-items');
    })->name('portfolio-items');
    Route::get('/rrss', function () {
        return view('dashboard.rrss');
    })->name('rrss');

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

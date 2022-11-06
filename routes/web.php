<?php

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
    Route::get('/education', function () {
        return view('education');
    })->name('education');
    Route::get('/work-experience', function () {
        return view('work-experience');
    })->name('work-experience');
    Route::get('/services', function () {
        return view('services');
    })->name('services');
    Route::get('/featured-projects', function () {
        return view('featured-projects');
    })->name('featured-projects');
    Route::get('/technical-professional-skills', function () {
        return view('technical-professional-skills');
    })->name('technical-professional-skills');
    Route::get('/portfolio-items', function () {
        return view('portfolio-items');
    })->name('portfolio-items');
    Route::get('/posts-items', function () {
        return view('posts-items');
    })->name('posts-items');
    Route::get('/clients-reviews', function () {
        return view('clients-reviews');
    })->name('clients-reviews');
});

<?php

use App\Http\Controllers\Api\VacancyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequirementController;
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

Route::get('/', [MarketController::class, 'index'])->name('market');
Route::get('/search', [MarketController::class, 'search'])->name('search');
Route::get('/browse-product', [MarketController::class, 'browse'])->name('browse');
Route::get('/jobs', [VacancyController::class, 'index'])->name('job')->middleware('auth');
Route::get('/post-products-requirement', [RequirementController::class, 'product'])->name('post.product.requirement')->middleware('auth');
Route::get('/post-designs-requirement', [RequirementController::class, 'design'])->name('post.design.requirement')->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth', 'is_admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//resource routes for catergories
Route::resource('categories', 'App\Http\Controllers\CategoryController')->middleware('auth', 'is_admin');
//resource routes for subcategories
Route::resource('subcategories', 'App\Http\Controllers\SubcategoryController')->middleware('auth', 'is_admin');
//resource routes for vacancies

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\ProfileController;
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

require __DIR__.'/auth.php';

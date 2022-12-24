<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PersonalizeController;
use App\Http\Controllers\RequirementController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BbforceController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\UserController;

//Auth Bbforce & Seller Reg
Route::get('/welcome', [PersonalizeController::class, 'welcome'])->name('welcome');
Route::get('/bbforce-register', [RegisteredUserController::class, 'createBbforce'])->middleware('guest')->name('bbforce.register');
Route::get('/seller-register', [RegisteredUserController::class, 'createSeller'])->middleware('guest')->name('seller.register');

Route::get('/personalize-search', [PersonalizeController::class, 'create'])->name('create.personalize')->middleware('auth', 'verified');
Route::post('/personalize', [PersonalizeController::class, 'store'])->name('store.personalize')->middleware('auth');
Route::get('/', [MarketController::class, 'index'])->name('market');
Route::get('/search', [MarketController::class, 'search'])->name('search');
Route::get('/browse-product', [MarketController::class, 'browse'])->name('browse');

Route::get('/post-products-requirement', [RequirementController::class, 'product'])->name('post.product.requirement')->middleware('auth', 'verified');
Route::get('/post-designs-requirement', [RequirementController::class, 'design'])->name('post.design.requirement')->middleware('auth', 'verified');
Route::get('/find-products-requirement', [RequirementController::class, 'findProduct'])->name('find.product.requirement');
Route::get('/find-products-requirement/{id}', [RequirementController::class, 'showProduct'])->name('show.product.requirement');
Route::get('/find-designs-requirement', [RequirementController::class, 'findDesign'])->name('find.design.requirement');
Route::get('/find-designs-requirement/{id}', [RequirementController::class, 'showDesign'])->name('show.design.requirement');

//Jobs
Route::get('/jobs', [VacancyController::class, 'index'])->name('job')->middleware('auth', 'verified');
Route::get('/job-new', [VacancyController::class, 'create'])->name('job.create')->middleware('auth', 'verified');
Route::get('/job/{id}', [VacancyController::class, 'show'])->name('job.show')->middleware('auth', 'verified');

//User Profile
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth', 'verified');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth', 'verified');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy')->middleware('auth', 'verified');

//Seller Dashboard
Route::get('/service-provider-dashboard', [DashboardController::class, 'seller'])->name('seller.dashboard')->middleware('auth', 'is_seller', 'verified');
Route::get('/service-provider-products', [DashboardController::class, 'product'])->name('product.dashboard')->middleware('auth', 'is_seller', 'verified');
//Buyer Dashboard
Route::get('/buyer-dashboard', [DashboardController::class, 'buyer'])->name('buyer.dashboard')->middleware('auth', 'verified');
//Bbforce Dashboard
Route::get('/bbforce-dashboard', [DashboardController::class, 'bbforce'])->name('bbforce.dashboard')->middleware('auth', 'is_bbforce', 'verified');
//reward store
Route::get('/reward-store', [DashboardController::class, 'reward'])->name('reward.store')->middleware('auth', 'verified');

//Admin Dashboard
Route::middleware('auth', 'is_admin', 'verified')->group(function () {
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('categories', 'App\Http\Controllers\CategoryController');
Route::resource('subcategories', 'App\Http\Controllers\SubcategoryController');
Route::resource('products', 'App\Http\Controllers\ProductController');
Route::resource('escrows', 'App\Http\Controllers\EscrowController');
//unpublish products
Route::post('/products/unpublish/{id}', [ProductController::class, 'unpublish'])->name('products.unpublish');
//publish products
Route::post('/products/publish/{id}', [ProductController::class, 'publish'])->name('products.publish');
Route::resource('providers', 'App\Http\Controllers\ProviderController');
//users that are bbforce
Route::get('/bbforce-users', [BbforceController::class, 'index'])->name('bbforces');
//ban users
Route::post('/users/ban/{id}', [UserController::class, 'banUser'])->name('users.ban');
//unban users
Route::post('/users/unban/{id}', [UserController::class, 'unbanUser'])->name('users.unban');
//delete users
Route::delete('/users/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');
//users that are sellers
Route::get('/seller-users', [SellerController::class, 'index'])->name('sellers');
//users that are buyers
Route::get('/buyer-users', [BuyerController::class, 'index'])->name('buyers');
});

require __DIR__.'/auth.php';

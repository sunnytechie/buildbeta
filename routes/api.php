<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

//Auhentication
Route::post('login', [Controllers\Api\Auth\LoginController::class, 'login']);
Route::post('/register', [Controllers\Api\Auth\RegisterController::class, 'register']);
//Email verification
Route::post('/email/verification-notification', [Controllers\Api\Auth\SendVerificationTokenToEmailController::class, 'sendVerificationTokenToEmail']);
Route::post('/email/verify', [Controllers\Api\Auth\VerifyEmailController::class, 'verify'])->name('verification.verify');
//Route::post('/email/resend', [Controllers\Api\Auth\ResendEmailVerificationController::class, 'resend'])->name('verification.resend');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

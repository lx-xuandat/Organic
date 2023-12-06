<?php

use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\OrderController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/csrf-token', function () {
    return response()->json(csrf_token());
});

Route::get('/product/{slug}', [OrderController::class, 'shopDetail'])->name('shop_detail');
Route::post('/add-to-cart', [OrderController::class, 'addToCart'])->name('addToCart')->middleware('auth:web');

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('login', [App\Http\Controllers\Customer\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\Customer\Auth\LoginController::class, 'login'])->name('post_login');
Route::post('logout', [App\Http\Controllers\Customer\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('password/confirm', [App\Http\Controllers\Customer\Auth\ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');
Route::post('password/confirm', [App\Http\Controllers\Customer\Auth\ConfirmPasswordController::class, 'confirm'])->name('password.post_confirm');
Route::post('password/email', [App\Http\Controllers\Customer\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset', [App\Http\Controllers\Customer\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/reset', [App\Http\Controllers\Customer\Auth\ResetPasswordController::class, 'reset'])->name('password.update');
Route::get('password/reset/{token}', [App\Http\Controllers\Customer\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::get('register', [App\Http\Controllers\Customer\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [App\Http\Controllers\Customer\Auth\RegisterController::class, 'register'])->name('post_register');

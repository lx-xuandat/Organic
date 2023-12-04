<?php

use App\Http\Controllers\Customer\OrderController;
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

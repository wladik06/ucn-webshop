<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::post("/login", [UserController::class, 'login']);

Route::get("/", [ProductController::class, 'index']);

Route::get("detail/{id}", [ProductController::class, 'detail']);

Route::post("add_to_cart", [ProductController::class, 'addToCart']);

Route::get("cart", [ProductController::class, 'cart']);

Route::get("remove_from_cart/{id}", [ProductController::class, 'removeFromCart']);

Route::get("proceed_to_payment", [ProductController::class, 'proceedToPayment']);

Route::view("/register", 'register');

Route::post("/register", [UserController::class, 'register']);

Route::post("pay_now", [ProductController::class, 'payNow']);

Route::get("order_history", [ProductController::class, 'orderHistory']);

Route::get("search", [ProductController::class, 'search']);






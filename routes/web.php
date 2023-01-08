<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

//Products
Route::get('/', [ProductController::class, 'index']);
Route::get('/create-products', [ProductController::class, 'create']);
Route::get('/edit-products', [ProductController::class, 'edit']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/product/{product}', [ProductController::class, 'show']);

//Users
Route::get('/edit-users', [UserController::class, 'index']);
Route::get('/create-users', [UserController::class, 'create']);

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/about', function () {
    return view('about');
});

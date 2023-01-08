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
Route::get('/', [ProductController::class, 'main']); // show all products (main page)
Route::get('/products', [ProductController::class, 'index']); // show all products
Route::get('/products/create', [ProductController::class, 'create']); //show create products form
Route::get('/products/edit', [ProductController::class, 'edit']); //show edit products form
Route::post('/products', [ProductController::class, 'store']); // store new product
Route::get('/product/{product}', [ProductController::class, 'show']); // show single product

//Users
Route::get('/users', [UserController::class, 'index']); // show all users
Route::get('/users/edit', [UserController::class, 'edit']); //show edit users form
Route::get('/users/create', [UserController::class, 'create']); //show create users form

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/about', function () {
    return view('about');
});

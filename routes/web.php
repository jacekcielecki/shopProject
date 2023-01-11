<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Redis;
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
Route::get('/products/{product}', [ProductController::class, 'show']); // show single product
Route::get('/products/{product}/edit', [ProductController::class, 'editsingle']); // show edit product form
Route::put('/products/{product}', [ProductController::class, 'update']); //update product
Route::delete('/products/{product}', [ProductController::class, 'destroy']); //delete product


//Users
Route::get('/users', [UserController::class, 'index']); // show all users
Route::get('/users/edit', [UserController::class, 'edit']); //show edit users form
Route::get('/users/create', [UserController::class, 'create']); //show create users form
Route::post('/users', [UserController::class, 'store']); // store new user
Route::get('/users/{user}', [UserController::class, 'show']); // show single user
Route::post('/logout', [UserController::class, 'logout']); //logout

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/about', function () {
    return view('about');
});

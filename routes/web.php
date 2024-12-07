<?php

use App\Http\Controllers\HalamanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HalamanController::class, 'home'] )->name('home');
Route::get('/shop', [HalamanController::class, 'products.shop'] )->name('shop');
Route::get('/contact', [HalamanController::class, 'contact'] )->name('contact');

//  ================= AUTH ============
// Route untuk halaman login
Route::get('/login', [UserController::class, 'formLogin'])->name('login');
Route::post('/login', [UserController::class, 'login']);

// Route untuk halaman register
Route::get('/register', [UserController::class, 'formRegister'])->name('register');
Route::post('/register', [UserController::class, 'register']);

// Route untuk logout
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// ================== CART ================
Route::post('/cart/{productId}', [CartController::class, 'addToCart'])->name('cart.add');

Route::put('/cart/{cartId}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/{cartId}', [CartController::class, 'delete'])->name('cart.delete');

Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');

Route::get('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');



// ================== SHOP ================
Route::get('/shop', [ProductController::class, 'index'])->name('products.index');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::get('/products/add', function () {
    return view('products.add-product');
})->name('products.add');

// admin
Route::get('/products', [ProductController::class, 'adminIndex'])->name('products.admin.index');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');


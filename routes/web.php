<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CommentController;

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

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/showType/{id}', [HomeController::class, 'showType'])->name('showType');

Route::get('/product/{product}', [ProductController::class, 'show'])->name('showProduct');
Route::get('/products', [ProductController::class, 'listProducts'])->name('listProducts');

Route::get('/dashboard', [UserController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/create', [UserController::class, 'create'])->name('create');
Route::post('/store', [UserController::class, 'store'])->name('store');
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [UserController::class, 'update'])->name('update');
Route::get('/delete/{id}', [UserController::class, 'destroy'])->name('delete');

Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/cart/store/{id}', [CartController::class, 'store'])->name('storeCart');
Route::get('/cart/destroy/{id}', [CartController::class, 'destroy'])->name('destroyCart');
Route::get('/cart/empty', [CartController::class, 'empty'])->name('emptyCart');

Route::get('/payment', [PaymentController::class, 'index'])->name('payment');
Route::post('/payment', [PaymentController::class, 'afterPayment'])->name('afterPayment');

Route::post('/create-comment/{id}', [CommentController::class, 'create'])->name('createComment');
//Route::post('/edit-comment/{comment}', [CommentController::class, 'edit'])->name('editComment');
//Route::post('/delete-comment/{comment}', [CommentController::class, 'delete'])->name('deleteComment');


require __DIR__.'/auth.php';

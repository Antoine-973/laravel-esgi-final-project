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
Route::get('/create', [ProductController::class, 'create'])->middleware(['auth'])->name('create');
Route::post('/store', [ProductController::class, 'store'])->middleware(['auth'])->name('store');
Route::get('/edit/{id}', [ProductController::class, 'edit'])->middleware(['auth'])->name('edit');
Route::post('/update/{id}', [ProductController::class, 'update'])->middleware(['auth'])->name('update');
Route::get('/delete/{id}', [ProductController::class, 'destroy'])->middleware(['auth'])->name('delete');

Route::get('/cart', [CartController::class, 'index'])->middleware(['auth'])->name('cart');
Route::get('/cart/store/{id}', [CartController::class, 'store'])->middleware(['auth'])->name('storeCart');
Route::get('/cart/destroy/{id}', [CartController::class, 'destroy'])->middleware(['auth'])->name('destroyCart');
Route::get('/cart/empty', [CartController::class, 'empty'])->middleware(['auth'])->name('emptyCart');

Route::get('/payment', [PaymentController::class, 'index'])->middleware(['auth'])->name('payment');
Route::post('/payment', [PaymentController::class, 'afterPayment'])->middleware(['auth'])->name('afterPayment');

Route::post('/create-comment/{id}', [CommentController::class, 'create'])->middleware(['auth'])->name('createComment');
//Route::post('/edit-comment/{comment}', [CommentController::class, 'edit'])->middleware(['auth'])->name('editComment');
//Route::post('/delete-comment/{comment}', [CommentController::class, 'delete'])->middleware(['auth'])->name('deleteComment');


require __DIR__.'/auth.php';

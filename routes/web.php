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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/listProducts', [ProductController::class, 'index'])->name('listProducts');
Route::get('/showProduct/{id}', [ProductController::class, 'show'])->name('showProducts');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/create', [UserController::class, 'create'])->name('create');
Route::post('/store', [UserController::class, 'store'])->name('store');
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
Route::get('/update/{id}', [UserController::class, 'update'])->name('update');
Route::get('/delete/{id}', [UserController::class, 'destroy'])->name('delete');

require __DIR__.'/auth.php';

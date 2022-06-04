<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/cart', function () {
//     return view('cart');
// });

Route::resource('product', ProductController::class);

Route::get('cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::post('cart/apply', [App\Http\Controllers\CartController::class, 'apply'])->name('cart.apply');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

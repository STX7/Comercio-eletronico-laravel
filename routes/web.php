<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EcommerceController;
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
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('addresses', AddressController::class);
Route::resource('favorites', FavoriteController::class);
Route::resource('users', UserController::class);
Route::resource('ecommerce', EcommerceController::class);

Route::get('welcome', [EcommerceController::class, 'index'])->name('index');
Route::get('/', [EcommerceController::class, 'index'])->name('loja');
Route::get('loja', [EcommerceController::class, 'list'])->name('products');
Route::get('contato', [EcommerceController::class, 'mensage'])->name('mensage');
Route::get('quem_somos', [EcommerceController::class, 'why'])->name('why');
Route::get('404', [EcommerceController::class, 'error404'])->name('error404');
Route::get('500', [EcommerceController::class, 'error500'])->name('error500');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('cart',CartController::class);
    Route::get('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
});

require __DIR__.'/auth.php';

Route::get('/admin', function () {
    return view('admin.dashboard');
});



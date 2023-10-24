<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
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
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/contato', function () {
    return view('ecommerce.contact');
});

Route::get('/loja', function () {
    return view('ecommerce.shop');
});
Route::get('/quem_somos', function () {
    return view('ecommerce.why');
});
Route::get('/produto', function () {
    return view('ecommerce.product');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/404', function () {
    return view('error.404');
});
Route::get('/500', function () {
    return view('error.500');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/cart', [ProductController::class, 'produto_busca']);
    Route::get('cart', [CartController::class, 'index'])->name('cart.list');
    Route::get('troco', [CartController::class, 'cartTroco'])->name('cart.troco');
    Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
    Route::post('/cart/store', [CartController::class, 'addToCart'])->name('cart.store');
    Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
    Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
    Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
    Route::post('sale', [CartController::class, 'create'])->name('sale.register');
});

require __DIR__.'/auth.php';

Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::get('/admin/produtos', function () {
    return view('admin.products.list');
});

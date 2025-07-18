<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index']);
Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/cart', [ProductController::class, 'viewCart'])->name('cart.view');
Route::get('/add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('cart.add');
Route::get('/remove-from-cart/{id}', [ProductController::class, 'removeFromCart'])->name('cart.remove');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

use App\Http\Controllers\CartController;

Route::post('/add-to-cart/{id}', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'view'])->name('cart.view');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{id}', [CartController::class, 'store'])->name('cart.add');
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');


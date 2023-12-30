<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GgController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductDetailController;


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

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/auth/google/redirect', [GgController::class, 'index'])->name('login.google');
Route::get('/auth/google/callback', [GgController::class, 'create'])->name('login_create.google');

Route::get('/profile', [UserController::class, 'index']);

Route::get('/product', [ProductController::class, 'productList'])->name('products.list');
Route::get('/cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('/cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('/update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('/remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::get('/cart/total-quantity', [CartController::class, 'getTotalQuantity'])->name('cart.total-quantity');

Route::middleware('auth')->group(function () {
    Route::get('/checkout', [CheckoutController::class, 'checkoutList'])->name('checkout.list');
    Route::post('/checkout-add', [CheckoutController::class, 'checkout'])->name('checkout');
    Route::post('/checkout', [CheckoutController::class, 'storeCheckout'])->name('checkout.store');
    Route::get('/checkout/success/', [CheckoutController::class, 'checkoutSuccess'])->name('checkout.success');
});


Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index']);
Route::get('/product/{id}', [ProductDetailController::class, 'show'])->name('product.detail');
Route::get('/product', [ProductDetailController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);
Route::post('/comment/{id}', [ProductDetailController::class, 'post_comment'])->name('product.comment');
Route::get('/product/{id}', [ProductDetailController::class, 'comment']);
Route::get('/comment/delete/{id}', [ProductDetailController::class, 'destroy']);

Route::get('/product', [App\Http\Controllers\ProductController::class, 'index']);//view dtb ra trang product
Route::get('/product', [App\Http\Controllers\ProductController::class, 'product'])->name('products.filter');
Route::get('/search', [App\Http\Controllers\ProductController::class, 'search'])->name('search');
Route::get('/products/search', [ProductController::class, 'search2'])->name('products.search');

Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index']);
Route::get('/about', [App\Http\Controllers\IntroController::class, 'index']);

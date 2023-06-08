<?php

use App\Http\Controllers\Client\AccountController;
use App\Http\Controllers\Client\CategoryController;
use App\Http\Controllers\Client\ProductController;
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

Route::get('/', function () {
    return view('client.home.index');
})->name('home');

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

Route::get('/login', function () {
    return view('client.auth.login');
})->name('login');

Route::get('/registro', function () {
    return view('client.auth.register');
})->name('register');

Route::get('/recuperar-contraseña', function () {
    return view('client.auth.forgot-password');
})->name('forgot-password');

/*
|--------------------------------------------------------------------------
| Contact
|--------------------------------------------------------------------------
*/

Route::get('/contacto', function () {
    return view('client.contact.index');
})->name('contact');

/*
|--------------------------------------------------------------------------
| Information Pages
|--------------------------------------------------------------------------
*/

Route::get('/terminos-y-condiciones', function () {
    return view('client.information.terms-and-conditions');
})->name('terms-and-conditions');

Route::get('/politicas-de-privacidad', function () {
    return view('client.information.privacy-policies');
})->name('privacy-policies');

Route::get('/ayuda', function () {
    return view('client.information.help');
})->name('help');

/*
|--------------------------------------------------------------------------
| About Us
|--------------------------------------------------------------------------
*/

Route::get('/nosotros', function () {
    return view('client.about.index');
})->name('about');

/*
|--------------------------------------------------------------------------
| Shopping Cart
|--------------------------------------------------------------------------
*/

Route::get('/carrito', function () {
    return view('client.shopping-cart.index');
})->name('shopping-cart');

/*
|--------------------------------------------------------------------------
| Account
|--------------------------------------------------------------------------
*/
Route::get('/perfil', [AccountController::class, 'index'])->name('account');

/*
|--------------------------------------------------------------------------
| Categories
|--------------------------------------------------------------------------
*/
Route::get('/categoria/{category}', [CategoryController::class, 'show'])->name('category.show');

/*
|--------------------------------------------------------------------------
| Products
|--------------------------------------------------------------------------
*/
Route::get('/producto/{product}', [ProductController::class, 'show'])->name('product.show');



/*
|--------------------------------------------------------------------------
| 404 Page Error
|--------------------------------------------------------------------------
*/
/*Route::fallback(function () {
    return view('client.errors.404');
});*/






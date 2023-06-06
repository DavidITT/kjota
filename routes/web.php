<?php

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
| About Us
|--------------------------------------------------------------------------
*/

Route::get('/nosotros', function () {
    return view('client.about.index');
})->name('about');


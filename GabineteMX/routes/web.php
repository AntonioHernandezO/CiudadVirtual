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
    return view('Index');
})->name('index');

Route::get('carrito', function () {
    return view('Carrito');
})->name('carrito');

Route::get('ingresar', function () {
    return view('Login');
})->name('login');

Route::get('registrar', function () {
    return view('RegistroUser');
})->name('registro');

Route::get('producto/{number}', function ($number) {
    return view('Producto',['producto'=>$number]);
})->name('producto')->where('number', '[0-9]+');
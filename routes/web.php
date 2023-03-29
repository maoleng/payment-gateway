<?php

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

Route::get('/', function () {

    return view('index', [
        'products' => getProducts(),
    ]);
})->name('index');

Route::get('/detail/{id}', function ($id) {
    $products = getProducts();

    return view('detail', [
        'product' => $products->where('id', $id)->first(),
        'products' => $products->shuffle()->take(5)
    ]);
})->name('detail');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

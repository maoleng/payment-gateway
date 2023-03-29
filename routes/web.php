<?php

use App\Http\Controllers\VNPayController;
use Illuminate\Http\Request;
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
    $cart = session()->get('cart') ?? [];
    $products = getProducts();
    $result = [];
    foreach ($cart as $product_id => $amount) {
        $product = $products->where('id', $product_id)->first();
        $sum_price = $amount * $product->price;
        $result[$product_id]['amount'] = $amount;
        $result[$product_id]['sum_price'] = $sum_price;
        $result[$product_id]['information'] = $product;
    }
    $cart_summarize = getCartSummarize();

    return view('cart', [
        'products' => $result,
        'price_products' => $cart_summarize['price_products'],
        'tax' => $cart_summarize['tax'],
        'total' => $cart_summarize['total'],
    ]);
})->name('cart');

Route::get('/cart_summarize', function () {
    return getCartSummarize();
})->name('cart_summarize');

Route::post('/add_to_cart', function (Request $request) {
    $data = $request->all();
    $product_id = $data['product_id'];
    $type = $data['type'] ?? 'increase';

    $count_product = session()->get("cart.$product_id");
    if ($type === 'increase') {
        if ($count_product === null) {
            session()->put("cart.$product_id", 1);
        } elseif ($count_product === 10) {
            session()->put("cart.$product_id", 10);
        } else {
            session()->increment("cart.$product_id");
        }
    } else {
        $count_product === 1 ?
            session()->put("cart.$product_id", 1) :
            session()->decrement("cart.$product_id");
    }
})->name('add_to_cart');

Route::delete('/remove_cart', function (Request $request) {
    session()->remove("cart.{$request->get('product_id')}");
})->name('remove_cart');

Route::get('/test', function () {

    return session()->all();
});

Route::post('/pay', function (Request $request) {
    session()->flush();
    $data = $request->all();
    session()->put('payment', $data);

    return (new VNPayController())->createPaymentUrl([
        'amount' => $data['amount'],
        'bank_code' => $data['bank_code'],
    ]);

})->name('pay');

Route::get('/invoice', function (Request $request) {
    $payment = session()->get('payment');
    return empty($payment) ?
        redirect()->back() :
        view('invoice', [
            'payment' => $payment,
            'data' => $request->all(),
        ]);
});

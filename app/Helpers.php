<?php

use Illuminate\Support\Facades\App;

if (!function_exists('c')) {
    function c(string $key)
    {
        return App::make($key);
    }
}

if (!function_exists('getProducts')) {
    function getProducts($id = null)
    {
        $products = collect(json_decode(file_get_contents('products.json')));

        return $id ? $products->where('id', $id)->first() : $products;
    }
}

if (!function_exists('starRating')) {
    function starRating($count): string
    {
        $html = str_repeat('<li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>', $count);
        $html .= str_repeat('<li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>', 5 - $count);

        return $html;
    }
}

if (!function_exists('prettyPrice')) {
    function prettyPrice($price): string
    {
        return number_format($price, 0, '').' VND';
    }
}

if (!function_exists('getCartSummarize')) {
    function getCartSummarize(): array
    {
        $cart = session()->get('cart') ?? [];
        $products = getProducts();
        $price_products = 0;
        foreach ($cart as $product_id => $amount) {
            $product = $products->where('id', $product_id)->first();
            $price_products += $amount * $product->price;
        }
        $tax = $price_products / 10;

        return [
            'price_products' => $price_products,
            'tax' => $tax,
            'total' => $price_products + $tax,
        ];
    }
}



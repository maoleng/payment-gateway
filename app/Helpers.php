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
        return number_format($price, 0, '').' đồng';
    }
}



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
        $products = [
            ['name' => 'Laptop Dell', 'price' => 15000000],
            ['name' => 'Chuột Logitech', 'price' => 500000],
            ['name' => 'iPhone 15', 'price' => 25000000],
            ['name' => 'Bàn phím cơ', 'price' => 2000000],
        ];

        return view('products', compact('products'));
    }
}
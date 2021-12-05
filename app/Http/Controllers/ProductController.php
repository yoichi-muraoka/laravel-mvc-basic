<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        1 => ['name' => 'こたつ', 'price' => 15000, 'madeAt' => '2020-01-01'],
        2 => ['name' => 'ストーブ', 'price' => 12000, 'madeAt' => '2020-02-01'],
        3 => ['name' => 'エアコン', 'price' => 87000, 'madeAt' => '2020-03-01'],
        4 => ['name' => '湯たんぽ', 'price' => 3000, 'madeAt' => '2020-04-01'],
        5 => ['name' => '加湿器', 'price' => 12000, 'madeAt' => '2020-05-01']
    ];

    public function index()
    {
        return view('product.index', ['products' => $this->products]);
    }

    public function show($id)
    {
        return view('product.show', ['product' => $this->products[$id]]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $data = "mammoon";
        return view('products.index', [
            'name' => $data
        ]);
    }

    public function show($name){
        $data = [
            'iPhone' => 'iphone',
            'hawuai' => 'hawuai'
        ];
        $products = $data[$name];

        return view('products.index', [
            'products' => $products ?? 'product is not exit'
        ]);
    }
}

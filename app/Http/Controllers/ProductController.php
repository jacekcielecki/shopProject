<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //Show all products
    public function index(){
        return view('index', [
            'products' => Product::all()
        ]);
    }

    //Show single product
    public function show(Product $product){
        return view('product', [
            'product' => $product
        ]);
    }
}

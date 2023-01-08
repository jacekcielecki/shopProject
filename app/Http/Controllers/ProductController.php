<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //Show all products (main page)
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

    //Show create product form
    public function create(){
        return view('create-products');
    }

    //Show edit product form
    public function edit(){
        return view('edit-products');
    }

    //Store products data
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'discountPrice' => 'required',
            'stars' => 'required'
        ]);

        Product::create($formFields);
        return redirect('/');
    }
}

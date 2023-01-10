<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //Show all products (main page)
    public function main(){
        return view('index', [
            'products' => Product::all()
        ]);
    }

    //Show all products
    public function index(){
        return view('products/index', [
            'products' => Product::all()
        ]);
    }

    //Show single product
    public function show(Product $product){
        return view('products/show', [
            'product' => $product
        ]);
    }

    //edit single product
    public function editsingle(Product $product){
        return view('products/edit-single', [
            'product' => $product
        ]);
    }

    //Show create product form
    public function create(){
        return view('products/create');
    }

    //Show edit product form
    public function edit(){
        return view('products/edit', [
            'products' => Product::all()
        ]);
    }

    //Store products data
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => 'required|max:20',
            'description' => 'required|max:1000',
            'price' => 'required|numeric|min:1|max:10000',
            'discountPrice' => 'required|numeric|min:1|max:10000',
            'stars' => 'required|numeric|min:1|max:5',
        ]);

        if($request->hasFile('productImage')) {
            $formFields['productImage'] = $request->file('productImage')->store('productImages', 'public');
        }

        Product::create($formFields);

        return redirect('/');
    }

        //Update products data
        public function update(Request $request, Product $product){
            $formFields = $request->validate([
                'name' => 'required|max:20',
                'description' => 'required|max:1000',
                'price' => 'required|numeric|min:1|max:10000',
                'discountPrice' => 'required|numeric|min:1|max:10000',
                'stars' => 'required|numeric|min:1|max:5',
            ]);
    
            if($request->hasFile('productImage')) {
                $formFields['productImage'] = $request->file('productImage')->store('productImages', 'public');
            }
    
            $product->update($formFields);

            return redirect('/products/edit')->with('');
        }
}

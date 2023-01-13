<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //Add product to cart (session)
    public function push(Request $request)
    {
        session()->push($request->key, $request->value);
        return redirect()->back();
    }

    //Clear cart (session)
    public function flush(Request $request)
    {
        session()->flush();
        return redirect()->back();
    }

    //Show cart page
    public function index(){
        //dd(session()->get('productId'));
        $data = session()->get('productId');
        $products = Product::all();
        return view('/cart', ['session_data' => $data, 'products' => $products]);
    }
}

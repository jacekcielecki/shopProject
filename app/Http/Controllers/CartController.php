<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $products = Product::whereIn('id', $data)->get();
        $orderedProducts = "";
        foreach($data as $item){
            $product = (collect($products)->firstWhere('id', $item))->name;
            if($product != null){
                $orderedProducts .= $product;
                $orderedProducts .= ", ";
            }
        }
        
        return view('/cart', [
            'session_data' => $data, 
            'products' => $products,
            'userId'=> Auth::user()->id,
            'orderedProducts' => $orderedProducts
        ]);
    }
}

// $orderedProducts = [];
// foreach($data as $item){
//     $product = (collect($products)->firstWhere('id', $item));
//     if($product != null){
//         array_push($orderedProducts, $product->name);
//     }
// }
// $orderedProductsString = implode(", ", $orderedProducts);

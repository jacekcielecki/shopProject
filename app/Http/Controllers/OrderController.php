<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //Show all orders
    public function index(){
        return view('orders/index', [
            'orders' => Order::all(),
        ]);
    }

    //Store orders data
    public function store(Request $request){
        $formFields = $request->validate([
            'user_id' => 'required',
            'status' => 'required',
            'products' => 'required',
        ]);

        Order::create($formFields);
        return redirect('/');
    }
}

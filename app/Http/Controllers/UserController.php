<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Show edit user from
    public function index(){
        return view('/edit-users', [
            'users' => User::all()
        ]);
    }

    //Show create user from
    public function create(){
        return view('create-users');
    }
}

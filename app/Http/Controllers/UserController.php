<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Show all users
    public function index(){
        return view('/users/index', [
            'users' => User::all()
        ]);
    }

    //Show create user from
    public function create(){
        return view('users/create');
    }

    //Show edit user from
    public function edit(){
        return view('/users/edit', [
            'users' => User::all()
        ]);
    }
}

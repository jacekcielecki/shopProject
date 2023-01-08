<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Show all users
    public function index(){
        return view('/edit-users', [
            'users' => User::all()
        ]);
    }

    //Show create form
    public function create(){
        return view('create-users');
    }
}

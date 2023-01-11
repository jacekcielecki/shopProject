<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Rule;

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

    //Show single user
    public function show(User $user){
        return view('users/show', [
            'user' => $user
        ]);
    }

    //Store user data
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required', 'max:100'],
            'email' => ['required', 'max:100', 'email', 'unique:users'],
            'password' => ['required', 'max:100', 'min:6'],
        ]);

        $formFields['password'] = bcrypt($formFields['password']); //hash password

        $user = User::create($formFields); //create user

        auth()->login($user);

        return redirect('/');
    }

    //logout
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/');
    }
}

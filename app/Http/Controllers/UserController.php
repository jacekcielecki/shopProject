<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Show all users
    public function index(){
        $this->authorize('isAdminOrManager');
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
        $this->authorize('isAdmin');
        return view('/users/edit', [
            'users' => User::all()
        ]);
    }

    //Show single user
    public function show(User $user){
        $this->authorize('isAdmin');
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

    //show login form 
    public function login(){
        return view('/users/login');
    }

    //user login
    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors(['error' => 'Invalid email or password'])->onlyInput();
    }

    //edit single user
    public function editsingle(User $user){
        $this->authorize('isAdmin');
        return view('users/edit-single', [
            'user' => $user
        ]);
    }

    //Update user data
    public function update(Request $request, User $user){
        $this->authorize('isAdmin');
        $formFields = $request->validate([
            'name' => ['required', 'max:100'],
            'email' => ['required', 'max:100', 'email'],
            'password' => ['required', 'max:100', 'min:6'],
        ]);

        $formFields['password'] = bcrypt($formFields['password']); //hash password

        $user->update($formFields);

        return redirect('/users/edit');
    }

        //Delete user
        public function destroy(User $user) {
            $this->authorize('isAdmin');
            $user->delete();
            return redirect('/users/edit');
        }
}

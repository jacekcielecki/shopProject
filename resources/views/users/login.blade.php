@extends('layout')
@section('content')
<h1>Login with you accout</h1>
    <form method="POST" action="/users/authenticate">
        @csrf
        <label>Email: </label><input type="text" name="email" value="{{old('email')}}"/><br>
        <label>Password: </label><input type="password" name="password" value="{{old('password')}}"/><br>
        @error('error')
            <div style="color: red">{{$message}}</div>
        @enderror
        <button>Sign in</button>
    </form>
    <span>Don't have an account? 
        <a href="/users/create">register</a>
    </span>

@endsection

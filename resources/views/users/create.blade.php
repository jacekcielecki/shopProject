@extends('layout')
@section('content')
<h1>Create new account</h1>
    <form method="POST" action="/users">
        @csrf
        <label>Name: </label><input type="text" name="name" value="{{old('name')}}"/><br>
        @error('name')
            <div style="color: red">{{$message}}</div>
        @enderror
        <label>Email: </label><input type="text" name="email" value="{{old('email')}}"/><br>
        @error('email')
            <div style="color: red">{{$message}}</div>
         @enderror
        <label>Password: </label><input type="password" name="password" value="{{old('password')}}"/><br>
        @error('password')
            <div style="color: red">{{$message}}</div>
        @enderror
        <button>Create</button>
    </form>

@endsection

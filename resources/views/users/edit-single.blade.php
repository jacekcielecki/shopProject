@extends('layout')
@section('content')
    <h1>Edit Product</h1>
    <form method="POST" action="/users/{{$user->id}}">
        @csrf 
        {{-- Cross site protection --}}
        @method('put')
        <label>Name: </label><input type="text" name="name" value="{{$user->name}}"/><br>
            @error('name')
                <div style="color: red">{{$message}}</div>
            @enderror
        <label>Email: </label><input type="text" name="email" value="{{$user->email}}"/><br>
            @error('email')
                <div style="color: red">{{$message}}</div>
            @enderror
        <label>Password: </label><input type="password" name="password" value="{{$user->password}}"/><br>
            @error('password')
                <div style="color: red">{{$message}}</div>
            @enderror
        <button>OK</button>
    </form>
@endsection

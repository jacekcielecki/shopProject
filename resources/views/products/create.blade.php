@extends('layout')
@section('content')
    <h1>Create Products</h1>
    <form method="POST" action="/products">
        @csrf
        <label>Name: </label><input type="text" name="name" value="{{old('name')}}"/><br>
        @error('name')
            <div style="color: red">{{$message}}</div>
        @enderror
        <label>Description: </label><input type="text" name="description" value="{{old('description')}}"/><br>
        @error('description')
            <div style="color: red">{{$message}}</div>
        @enderror
        <label>Price: </label><input type="number" name="price" value="{{old('price')}}"/><br>
        @error('price')
            <div style="color: red">{{$message}}</div>
        @enderror
        <label>Discount Price: </label><input type="number" name="discountPrice" value="{{old('discountPrice')}}"/><br>
        @error('discountPrice')
            <div style="color: red">{{$message}}</div>
        @enderror
        <label>Stars: </label>
        <select name="stars" value="{{old('stars')}}">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="4">5</option>
        </select>
        @error('stars')
            <div style="color: red">{{$message}}</div>
        @enderror
        <button>OK</button>
    </form>

@endsection

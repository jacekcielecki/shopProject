@extends('layout')
@section('content')
    <h1>Edit Product</h1>
    <form method="POST" action="/products/{{$product->id}}" enctype="multipart/form-data">
        @csrf 
        {{-- Cross site protection --}}
        @method('put')
        <label>Name: </label><input type="text" name="name" value="{{$product->name}}"/><br>
        @error('name')
            <div style="color: red">{{$message}}</div>
        @enderror
        <label>Description: </label><input type="text" name="description" value="{{$product->description}}"/><br>
        @error('description')
            <div style="color: red">{{$message}}</div>
        @enderror
        <label>Price: </label><input type="number" name="price" value="{{$product->price}}"/><br>
        @error('price')
            <div style="color: red">{{$message}}</div>
        @enderror
        <label>Discount Price: </label><input type="number" name="discountPrice" value="{{$product->discountPrice}}"/><br>
        @error('discountPrice')
            <div style="color: red">{{$message}}</div>
        @enderror
        <label>Stars: </label>
        <select name="stars" value="{{$product->stars}}">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="4">5</option>
        </select><br>
        @error('stars')
            <div style="color: red">{{$message}}</div>
        @enderror
        <label>Product image: </label><input type="file" name="productImage" value="{{$product->productImage}}"/><br>
        @error('productImage')
            <div style="color: red">{{$message}}</div>
        @enderror
        <img src="{{$product->productImage ? asset('storage/' . $product->productImage) : asset('images/placeholder.jpg')}}" alt="..." Width="450px" Height="300px"/>
        <button>OK</button>
    </form>

@endsection

@extends('layout')
@section('content')
    <h1>Edit Products</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Discount price</th>
                <th scope="col">Stars</th>
            </tr>
        </thead>
        @foreach ($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->discountPrice}}</td>
                <td>{{$product->stars}}</td>
            </tr>
        @endforeach
    </table>

@endsection

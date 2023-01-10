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
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                <th scope="col">View</th>
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
                <td>
                    <a href="/products/{{ $product->id }}/edit">
                        <img src="{{asset('images/edit-icon.png')}}" height="20px" width="20px">
                    </a>
                </td>
                <td>
                    <form method="POST" action="/products/{{$product->id}}">
                        @csrf
                        @method('DELETE')
                        <button style="background: 0%">
                            <img src="{{asset('images/delete-icon.png')}}" height="20px" width="20px">
                        </button>
                    </form>
                </td>
                <td>
                    <a href="/products/{{ $product->id }}">
                        <img src="{{asset('images/view-icon.png')}}" height="20px" width="20px">
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

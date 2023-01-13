@extends('layout')
@section('content')
    <h1>Orders</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">User id</th>
                <th scope="col">Status</th>
                <th scope="col">Products</th>
            </tr>
        </thead>
        @foreach ($orders as $order)
            <tr>
                <th scope="row">{{ $order->id }}</th>
                <td>{{$order->user_id}}</td>
                <td>{{$order->status}}</td>
                <td>{{$order->products}}</td>
            </tr>
        @endforeach
    </table>
@endsection

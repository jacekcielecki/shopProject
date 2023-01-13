@extends('layout')
@section('content')
<h1>Cart</h1>
@if(!empty($session_data ))
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Product Id</th>
                <th>Product Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($session_data as $item)
            <tr>
                <td>{{ $item }}</td>
                <td> {{ (collect($products)->firstWhere('id', $item))->name; }}
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex" style="padding-left: 10px">
        <form action="/orders" method="POST">
            @csrf
            <input type="hidden" name="user_id" value={{ $userId }}>
            <input type="hidden" name="status" value="In progress">
            <input type="hidden" name="products" value= {{$orderedProducts}}>
            <button type="submit" class="btn btn-outline-secondary btn-sm">Order</button>
        </form> &nbsp;
        <form action="/session/flush" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-secondary btn-sm">Clear Cart</button>
        </form>
    </div>
@else
    Cart is empty add some items first
@endif

@endsection
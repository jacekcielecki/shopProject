@extends('layout')
@section('content')
    <p>Id: {{$product['id']}}</p>
    <h2>Nazwa produktu: {{$product['name']}};</h2> 
    <p>Opis: {{$product['description']}}</p>
    <p>Cena: {{$product['price']}}</p>
    <p>Cena promocyjna: {{$product['discountPrice']}}</p>
    <p>Gwiazdki: {{$product['stars']}}</p>
@endsection

@extends('layout')
@section('content')
    <p>Id: {{$user['id']}}</p>
    <p>Name: {{$user['name']}};</h2> 
    <p>Email: {{$user['email']}}</p>
@endsection

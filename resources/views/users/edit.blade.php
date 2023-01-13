@extends('layout')
@section('content')
    <h1>Edit Users</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                <th scope="col">View</th>
            </tr>
        </thead>
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role}}</td>
            <td>
                <a href="/users/{{ $user->id }}/edit">
                    <img src="{{asset('images/edit-icon.png')}}" height="20px" width="20px">
                </a>
            </td>
            <td>
                <form method="POST" action="/users/{{$user->id}}">
                    @csrf
                    @method('DELETE')
                    <button style="background: 0%; border: 0px solid;">
                        <img src="{{asset('images/delete-icon.png')}}" height="20px" width="20px">
                    </button>
                </form>
            </td>
            <td>
                <a href="/users/{{ $user->id }}">
                    <img src="{{asset('images/view-icon.png')}}" height="20px" width="20px">
                </a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection

@extends('layout')
@section('content')
<div class="product_container">
    <h1>Edit Product</h1>
    <form class="form_container" method="POST" action="/users/{{$user->id}}">
        @csrf 
        {{-- Cross site protection --}}
        @method('put')
        <label class="title_txt">Name: </label><input class="form__input" type="text" name="name" value="{{$user->name}}"/><br>
            @error('name')
                <div class="title_txt" style="color: red">{{$message}}</div>
            @enderror
        <label class="title_txt">Email: </label><input class="form__input" type="text" name="email" value="{{$user->email}}"/><br>
            @error('email')
                <div class="title_txt" style="color: red">{{$message}}</div>
            @enderror
        <label class="title_txt">Password: </label><input class="form__input" type="password" name="password" value="{{$user->password}}"/><br>
            @error('password')
                <div class="title_txt" style="color: red">{{$message}}</div>
            @enderror
        <button class="btn_1">OK</button>
    </form>
</div>
@endsection

<style>
.product_container{
    /* padding: 1rem; */
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 2rem;
}
.title_txt{
    margin-bottom: 4px;
    margin-left: 3%;
    font-size: 1rem;
}
.form_container{
    width: 100%;
    max-width: 500px;
    display: flex;
    flex-direction: column;
}
.form__input {
    font-family: 'Roboto', sans-serif;
    font-size: 1.2rem;
    margin: 0 auto;
    padding: 0.5rem 0.5rem;
    border-radius: 0.2rem;
    background-color: rgb(255, 255, 255);
    width: 90%;
    display: block;
    border: 2px solid black;
}
.form__input_2{
    font-family: 'Roboto', sans-serif;
    font-size: 1.2rem;
    margin: 0 auto;
    padding: 0.5rem 0.5rem;
    border-radius: 0.2rem;
    width: 94%;
    display: block;
    border: 2px solid black;
}
.form__input_3{
    font-family: 'Roboto', sans-serif;
    font-size: 1.2rem;
    margin: 0 auto;
    padding: 0.5rem 0.5rem;
    border-radius: 0.2rem;
    width: 94%;
    display: block;

} 
.btn_1{
    width: 90%;
    margin: 0 auto;
    padding: 0.4rem;
    border-radius: 0.2rem;
    border: 2px solid #212529;
    background-color: #212529;
    cursor: pointer;
    color: #fff;
}
.btn_1:hover{
    background-color: #212529;
} */

</style>

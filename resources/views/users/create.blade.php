@extends('layout')
@section('content')
<div class="product_container">
    <h1>Create new account</h1>
    <form class="form_container" method="POST" action="/users">
        @csrf
        <label class="title_txt">Name: </label><input class="form__input" type="text" name="name" value="{{old('name')}}"/><br>
        @error('name')
            <div class="title_txt" style="color: red">{{$message}}</div>
        @enderror
        <label class="title_txt">Email: </label><input class="form__input" type="text" name="email" value="{{old('email')}}"/><br>
        @error('email')
            <div class="title_txt" style="color: red">{{$message}}</div>
         @enderror
        <label class="title_txt">Password: </label><input class="form__input" type="password" name="password" value="{{old('password')}}"/><br>
        @error('password')
            <div class="title_txt" style="color: red">{{$message}}</div>
        @enderror
        <button class="btn">Create</button>
    </form>
</div>

@endsection


<style>
.product_container{
    padding: 1rem;
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
.btn{
    width: 94%;
    margin: 0 auto;
    padding: 0.4rem;
    border-radius: 0.2rem;
    border: 2px solid rgb(65, 157, 199);
    background-color: rgb(65, 157, 199);
    cursor: pointer;
    color: #fff;
}
.btn:hover{
    background-color: rgb(41, 144, 192);
}

</style>


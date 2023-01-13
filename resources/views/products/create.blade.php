@extends('layout')
@section('content')
<div class="product_container">
    <h1>Create Products</h1>
    <form class="form_container" method="POST" action="/products" enctype="multipart/form-data">
        @csrf
        <label class="title_txt">Name: </label><input class="form__input" type="text" name="name" value="{{old('name')}}"/><br>
        @error('name')
            <div class="title_txt" style="color: red">{{$message}}</div>
        @enderror
        <label class="title_txt">Description: </label><input class="form__input" type="text" name="description" value="{{old('description')}}"/><br>
        @error('description')
            <div class="title_txt" style="color: red">{{$message}}</div>
        @enderror
        <label class="title_txt">Price: </label><input class="form__input" type="number" name="price" value="{{old('price')}}"/><br>
        @error('price')
            <div class="title_txt" style="color: red">{{$message}}</div>
        @enderror
        <label class="title_txt">Discount Price: </label><input class="form__input" type="number" name="discountPrice" value="{{old('discountPrice')}}"/><br>
        @error('discountPrice')
            <div class="title_txt" style="color: red">{{$message}}</div>
        @enderror
        <label class="title_txt">Stars: </label>
        <select class="form__input_2" name="stars" value="{{old('stars')}}">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="4">5</option>
        </select><br>
        @error('stars')
            <div class="title_txt" style="color: red">{{$message}}</div>
        @enderror
        <label class="title_txt">Product image: </label><input class="form__input_3" type="file" name="productImage" value="{{old('productImage')}}"/><br>
        @error('productImage')
            <div class="title_txt" style="color: red">{{$message}}</div>
        @enderror
        <button class="btn_1">OK</button>
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
    width: 90%;
    display: block;
    border: 2px solid black;
}
.form__input_3{
    font-family: 'Roboto', sans-serif;
    font-size: 1.2rem;
    margin: 0 auto;
    padding: 0.5rem 0.5rem;
    border-radius: 0.2rem;
    width: 90%;
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
.btn:hover{
    background-color: #212529;
}

</style>


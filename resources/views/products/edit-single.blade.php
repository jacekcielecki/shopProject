@extends('layout')
@section('content')
<div class="product_container">
    <h1>Edit Product</h1>
    <form method="POST" action="/products/{{$product->id}}" enctype="multipart/form-data">
        @csrf 
        {{-- Cross site protection --}}
        @method('put')
        <label class="title_txt">Name: </label><input class="form__input" type="text" name="name" value="{{$product->name}}"/><br>
        @error('name')
            <div class="title_txt" style="color: red">{{$message}}</div>
        @enderror
        <label class="title_txt">Description: </label><input class="form__input" type="text" name="description" value="{{$product->description}}"/><br>
        @error('description')
            <div class="title_txt" style="color: red">{{$message}}</div>
        @enderror
        <label class="title_txt">Price: </label><input class="form__input" type="number" name="price" value="{{$product->price}}"/><br>
        @error('price')
            <div class="title_txt" style="color: red">{{$message}}</div>
        @enderror
        <label class="title_txt">Discount Price: </label><input class="form__input" type="number" name="discountPrice" value="{{$product->discountPrice}}"/><br>
        @error('discountPrice')
            <div class="title_txt" style="color: red">{{$message}}</div>
        @enderror
        <label class="title_txt">Stars: </label>
        <select class="form__input_2" name="stars" value="{{$product->stars}}">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="4">5</option>
        </select><br>
        @error('stars')
            <div class="title_txt" style="color: red">{{$message}}</div>
        @enderror
        <label class="title_txt">Product image: </label><input class="form__input_3" type="file" name="productImage" value="{{$product->productImage}}"/><br>
        @error('productImage')
            <div class="title_txt" style="color: red">{{$message}}</div>
        @enderror
        <img class="title_txt" src="{{$product->productImage ? asset('storage/' . $product->productImage) : asset('images/placeholder.jpg')}}" alt="..." Width="450px" Height="300px"/>
        <button class="btn_1 title_txt">OK</button>
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
    width: 92%;
    /* margin: 0 auto; */
    padding: 0.4rem;
    border-radius: 0.2rem;
    border: 2px solid #212529;
    background-color: #212529;
    cursor: pointer;
    color: #fff;
    margin-bottom: 2rem;
}
.btn:hover{
    background-color: #212529;
}

</style>

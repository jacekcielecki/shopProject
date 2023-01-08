@extends('layout')
@section('content')
@include('partials._header')

<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach ($products as $product)
                @include('partials._card')
            @endforeach
        </div>
    </div>
</section>

@endsection
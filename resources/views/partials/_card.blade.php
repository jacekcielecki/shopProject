<div class="col mb-5">
    <div class="card h-100">
        @if(($product->discountPrice) < ($product->price))
            <!-- Sale badge-->
            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
        @endif
        <!-- Product image-->
        <img class="card-img-top" src="{{asset('images/placeholder.jpg')}}" alt="..." />
        <!-- Product details-->
        <div class="card-body p-4">
            <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">{{$product->name}}</h5>
                <!-- Product reviews-->
                <div class="d-flex justify-content-center small text-warning mb-2">
                    @for ($i = 1; $i <= $product->stars; $i++)
                        <div class="bi-star-fill"></div>
                    @endfor
                </div>
                <!-- Product price-->
                @if(($product->discountPrice) < ($product->price))
                    <span class="text-muted text-decoration-line-through">${{$product->price}}.00</span>
                    ${{$product->discountPrice}}.00
                @else
                    ${{$product->price}}.00
                @endif
            </div>
        </div>
        <!-- Product actions-->
        <div class="text-center card-footer p-4 pt-0 border-top-0 bg-transparent">
            {{-- <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Dodaj do koszyka</a></div> --}}

            <a href="/product/{{ $product->id }}"><button type="button" class="btn btn-outline-primary btn-sm">Zobacz</button></a>
            <a href="/cart"><button type="button" class="btn btn-outline-secondary btn-sm">Do koszyka</button></a>
        </div>
    </div>
</div>

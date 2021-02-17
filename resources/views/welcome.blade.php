@extends('layouts.header')

@section('content')
    {{--    {{ route['cart'] }}--}}
    <form id="cart-form" action="#" method="post">
    </form>
    <div class="product-list">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($products as $product)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ $product->photo }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->title }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                        </div>
                        <div class="card-footer">
                            <input type="hidden" name="product_id" value="{{ $product->product_id }}" form="cart-form">
                            <input type="submit" value="Add to cart" class="btn btn-primary" form="cart-form">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

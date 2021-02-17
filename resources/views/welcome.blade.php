@extends('layouts.header')

@section('content')
    <div class="product-list">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('img/products/asus1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('img/products/dell.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional
                            content.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('img/products/asus2.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This card has even longer content than the first to show that equal
                            height
                            action.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layout')
@section('content')

<div class="title">
    <h1>ALL PRODUCTS</h1>    
</div>


<!--
<section class="products" id="products">
    <div class="row">
    @foreach($products as $product)
    <div class="col-sm-3">
        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        <img src="{{ asset('images/') }}/{{$product->image}}" alt="">
            <div class="content">
                <h4> {{$product->name}} </h4>
                <div class="price">RM {{$product->price}}</p></div>
            </div>
            <a href="#" class="button">add to cart</a>
        </div>
    </div>
    @endforeach
    </div>
</section>
-->

<section class="products" id="products">
    <div class="row">
    @foreach($products as $product)
        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-heart" id="heart"></a>
                <a href="#" class="fas fa-share" id="share"></a>
                <a href="#" class="fas fa-eye" id="view"></a>
            </div>
            <img src="{{ asset('images/') }}/{{$product->image}}" alt="">
        <div class="content">
            <h3> {{$product->name}} </h3>
            <div class="price">RM {{$product->price}}</p></div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="button">add to cart</a>
        </div>
    </div>
    @endforeach 
</div>
</section>


    <!--
    <div class="row">
        @foreach($products as $product)
        <div class="col-sm-3">
            <div class="card-body">
                <img src="{{ asset('images/') }}/{{$product->image}}"width="100%" class="img-fluid" alt="">
                <h4> {{$product->name}} </h4>
                <p>
                <button class="btn btn-danger btn-xs">Add to Cart</button>
            </div>
        </div>
        @endforeach
    </div>
</div>
-->

@endsection
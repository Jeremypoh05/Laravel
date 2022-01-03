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
    <div class="row"> <!--Make sure we put the foreach after row and end b4 row-->
    @foreach($products as $product) 
    <form action="{{ route('add.to.cart') }}" method="POST">
        @CSRF
        <input type="hidden" name="productID" value="{{$product->id}}">
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
            <div class="quantity">Quantity <input type="number" min="1" max="10" name="quantity"> Available: {{$product->quantity}}</div><br><br>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <button class="button" type="submit">Add To Cart</button>
        </div>
        </form>
    </div>
    @endforeach <!--end b4 row-->
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

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic1.png" alt="">
            <h3>Emily</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, quos eum. Laborum aut a consequatur ducimus, molestias possimus quisquam rerum temporibus ipsum voluptate accusamus, unde ab asperiores? Exercitationem, unde rem.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/pic2.png" alt="">
            <h3>Timothy</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, quos eum. Laborum aut a consequatur ducimus, molestias possimus quisquam rerum temporibus ipsum voluptate accusamus, unde ab asperiores? Exercitationem, unde rem.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/pic3.png" alt="">
            <h3>John Cenna</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, quos eum. Laborum aut a consequatur ducimus, molestias possimus quisquam rerum temporibus ipsum voluptate accusamus, unde ab asperiores? Exercitationem, unde rem.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- newsletter section starts  -->

<section class="newsletter">

    <div class="content">
        <h3>Monthly Newsletter</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum ullam veniam at itaque culpa hic corporis saepe dicta doloremque nihil.</p>
        <form action="">
            <input type="email" placeholder="Enter your email" class="box">
            <input type="submit" value="send" class="button">
        </form>
    </div>

</section>

<!-- newsletter section ends -->


@endsection
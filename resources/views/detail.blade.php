@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product->gallery}}" alt="product-image">
        </div>
        <div class="col-sm-6">
            <a href="{{url('/')}}">Go Back</a>
            <h2>Name: {{$product->name}}</h2>
            <h3>Price: {{$product->price}}</h3>
            <h4>Category: {{$product->category}}</h4>
            <h5>Description: {{$product->description}}</h5>
            <br><br>
            <form action="{{url('add_to_cart')}}" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <button class="btn btn-success">Add to Cart</button>
            </form>
            <br><br>
            <button class="btn btn-primary">Buy Now</button>
            <br><br>
        </div>
    </div>
</div>
@endsection

@extends('master')
@section('content')

<div class="custom-product">
    <div class="row">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h2>Cart List</h2>
                <a href="{{url('ordernow')}}" class="btn btn-success mb-3">Order Now</a>
                <div class="">
                    @foreach ($cartProduct as $item)
                        <div class="row searched-item cart-list-devider">
                            <div class="col-sm-3">
                                <a href="{{url('detail/'.$item->id)}}">
                                    <img src="{{$item->gallery}}" class="trending-image" alt="product">
                                </a>
                            </div>
                            <div class="col-sm-3">
                                <div class="">
                                    <h5>{{$item->name}}</h5>
                                    <h6>{{$item->description}}</h6>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <a href="{{url('removecart/'.$item->cart_id)}}" class="btn btn-warning">Remove From Cart</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a href="{{url('ordernow')}}" class="btn btn-success">Order Now</a>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('master')
@section('content')

<div class="custom-product">
    <div class="row">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h2>Orders List</h2>
                <div class="">
                    @foreach ($orders as $item)
                        <div class="row searched-item cart-list-devider">
                            <div class="col-sm-3">
                                <a href="{{url('detail/'.$item->id)}}">
                                    <img src="{{$item->gallery}}" class="trending-image" alt="product">
                                </a>
                            </div>
                            <div class="col-sm-3">
                                <div class="">
                                    <h5>{{$item->name}}</h5>
                                    <h6>Delivery status: {{$item->status}}</h6>
                                    <h6>Payment status: {{$item->payment_status}}</h6>
                                    <h6>Payment method: {{$item->payment_method}}</h6>
                                    <h6>Delivery address: {{$item->address}}</h6>
                                    <h6>Price: {{$item->price}}</h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

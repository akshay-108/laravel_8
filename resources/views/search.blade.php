@extends('master')
@section('content')

<div class="custom-product">
    <div class="row">
        <div class="col-sm-4">
            <a href="#">Filter</a>
        </div>
        <div class="col-sm-4">
            <div class="trending-wrapper">
                <h4>Result For Products</h4>
                <div class="">
                    @foreach ($products as $item)
                        <div class="searched-item">
                            <a href="{{url('detail/'.$item->id)}}">
                                <img src="{{$item->gallery}}" class="trending-image" alt="product">
                                <div class="">
                                    <h5>{{$item->name}}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

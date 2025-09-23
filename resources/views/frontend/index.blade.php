@extends('layouts.app')

@section('title', "$setting->meta_title")
@section('meta_description', "$setting->meta_description")
@section('meta_keyword', "$setting->meta_keyword")

@section('content')
    <div class="bg-danger py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        @foreach ($categories as $category)
                        <div class="item">
                            <a href="{{url('tutorial/'.$category->slug)}}" class="text-decoration-none">
                                <div class="card">
                                    <img src="{{asset('uploads/category/'.$category->image)}}" alt="category_image">
                                    <div class="card-body text-center">
                                        <h5 class="text-dark">{{$category->name}}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-1 bg-gray">
        <div class="container">
            <div class="text-center p-3">
                <h3>Advertise here</h3>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Test Blog Website</h4>
                    <div class="underline"></div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse amet alias explicabo iste consequuntur dignissimos asperiores, id ducimus doloribus aspernatur quaerat nobis libero sint rem omnis voluptas delectus pariatur voluptatibus.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt nemo quis mollitia ab recusandae dolores, harum tenetur atque quia perspiciatis tempore culpa ducimus doloribus sunt, voluptates excepturi ipsam. Aliquid, animi.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>All Categories List</h4>
                    <div class="underline"></div>
                </div>
                @foreach($categories as $category)
                    <div class="col-md-3">
                        <div class="card card-body mb-3">
                            <a href="{{url('tutorial/'.$category->slug)}}" class="text-decoration-none">
                                <h4 class="text-dark mb-8">{{$category->name}}</h4>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Latest Posts</h4>
                    <div class="underline"></div>
                </div>
                <div class="col-md-8">
                    @foreach($latestPosts as $latestPost)
                        <div class="card card-body bg-gray mb-3">
                            <a href="{{url('tutorial/'.$latestPost->category->slug.'/'.$latestPost->slug)}}" class="text-decoration-none">
                                <h4 class="text-dark mb-8">{{$latestPost->name}}</h4>
                            </a>
                            <h6>Posted on: {{$latestPost->created_at->format('d-m-Y')}}</h6>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-4">
                    <div class="border text-center p-3">
                        <h3>Advertise here</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

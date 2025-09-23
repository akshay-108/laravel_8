@extends('layouts.master')

@section('title', 'Blog Website')
    
@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h1 class="mt-4">Edit Category</h1>
        </div>
        <div class="card-body">

            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{$error}}</div>
                    @endforeach
                </div>
            @endif

            <form action="{{url('admin/edit-category/'.$category->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="categoryName">Category Name</label>
                    <input type="text" name="name" id="categoryName" class="form-control" value="{{$category->name}}">
                </div>
                <div class="mb-3">
                    <label for="slug">Category Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control" value="{{$category->slug}}">
                </div>
                <div class="mb-3">
                    <label for="categorydesc">Category Description</label>
                    <textarea name="description" rows="5" id="categorydesc" class="form-control">{{$category->description}}</textarea>
                </div>
                <div class="mb-3 row">
                    <div class="col-md-6">
                        <label for="categoryImage">Add new Category Image</label>
                        <input type="file" name="image" id="categoryImage" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="categoryImage">Category Old Image</label>
                        <br>
                        <img src="{{asset('uploads/category/'.$category->image)}}" width="50px" height="50px" alt="#"><br>
                    </div>
                </div>
                <h6>SEO Tags</h6>
                <div class="mb-3">
                    <label>Meta Title</label>
                    <input type="text" name="meta_title" class="form-control" value="{{$category->meta_title}}">
                </div>
                <div class="mb-3">
                    <label>Meta Description</label>
                    <textarea name="meta_desc" rows="3" class="form-control">{{$category->meta_description}}</textarea>
                </div>
                <div class="mb-3">
                    <label>Meta Keywords</label>
                    <textarea name="meta_keywords" rows="3" class="form-control">{{$category->meta_keyword}}</textarea>
                </div>
                <h6>Sttus Mode</h6>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label>Navbar Status</label>
                        <input type="checkbox" name="navbar_status" {{$category->navbar_status ? 'checked' : '' }}>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>Status</label>
                        <input type="checkbox" name="status" {{$category->status ? 'checked' : '' }}>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" name="submit" class="btn btn-primary">Save Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
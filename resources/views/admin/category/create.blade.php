@extends('layouts.master')

@section('title', 'Blog Website')
    
@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h1 class="mt-4">Add Category</h1>
        </div>
        <div class="card-body">

            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{$error}}</div>
                    @endforeach
                </div>
            @endif

            <form action="{{url('admin/add-category')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="categoryName">Category Name</label>
                    <input type="text" name="name" id="categoryName" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="slug">Category Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="categorydesc">Category Description</label>
                    <textarea name="description" rows="5" id="categorydesc" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="categoryImage">Category Image</label>
                    <input type="file" name="image" id="categoryImage" class="form-control">
                </div>
                <h6>SEO Tags</h6>
                <div class="mb-3">
                    <label>Meta Title</label>
                    <input type="text" name="meta_title" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Meta Description</label>
                    <textarea name="meta_desc" rows="3" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label>Meta Keywords</label>
                    <textarea name="meta_keywords" rows="3" class="form-control"></textarea>
                </div>
                <h6>Sttus Mode</h6>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label>Navbar Status</label>
                        <input type="checkbox" name="navbar_status">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>Status</label>
                        <input type="checkbox" name="status">
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
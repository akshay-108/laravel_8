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
            <form action="{{url('admin/edit-post/'.$post->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">Category</label>
                    <select name="category_id" id="" class="form-select">
                        <option selected>Choose the category</option>
                        @foreach ($category as $item)
                            <option value="{{$item->id}}" {{$post->category_id == $item->id ? 'selected' : ''}}>{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Post Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$post->name}}">
                </div>
                <div class="mb-3">
                    <label for="">Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control" value="{{$post->slug}}">
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea name="description" id="mySummernote" class="form-control" rows="4">{{$post->description}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="">Youtube Iframe Link</label>
                    <input type="text" name="yt_iframe" id="yt_iframe" class="form-control" value="{{$post->yt_iframe}}">
                </div>
                <h4>SEO Tags</h4>
                <div class="mb-3">
                    <label>Meta Title</label>
                    <input type="text" name="meta_title" class="form-control" value="{{$post->meta_title}}">
                </div>
                <div class="mb-3">
                    <label>Meta Description</label>
                    <textarea name="meta_description" rows="3" class="form-control">{{$post->meta_description}}</textarea>
                </div>
                <div class="mb-3">
                    <label>Meta Keywords</label>
                    <textarea name="meta_keyword" rows="3" class="form-control">{{$post->meta_keyword}}</textarea>
                </div>
                <h6>Sttus</h6>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label>Status</label>
                        <input type="checkbox" name="status" value="{{$post->status == '1' ? 'checked' : ''}}">
                    </div>
                    <div class="col-md-6">
                        <button type="submit" name="submit" class="btn btn-primary">Update Post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('layouts.master')

@section('title', 'Add Post')
    
@section('content')
    <div class="container-fluid px-4 mt-3">
        <div class="card">

            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{$error}}</div>
                    @endforeach
                </div>
            @endif

            <div class="card-header">
                <h4>View Posts
                    <a href="{{url('admin/add-post')}}" class="btn btn-primary float-end">Add Post</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{url('admin/add-post')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">Category</label>
                        <select name="category_id" id="" class="form-select">
                            <option selected>Choose the category</option>
                            @foreach ($category as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Post Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Slug</label>
                        <input type="text" name="slug" id="slug" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea name="description" id="mySummernote" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Youtube Iframe Link</label>
                        <input type="text" name="yt_iframe" id="yt_iframe" class="form-control">
                    </div>
                    <h4>SEO Tags</h4>
                    <div class="mb-3">
                        <label>Meta Title</label>
                        <input type="text" name="meta_title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Meta Description</label>
                        <textarea name="meta_description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Meta Keywords</label>
                        <textarea name="meta_keyword" rows="3" class="form-control"></textarea>
                    </div>
                    <h6>Sttus</h6>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label>Status</label>
                            <input type="checkbox" name="status">
                        </div>
                        <div class="col-md-6">
                            <button type="submit" name="submit" class="btn btn-primary">Save Post</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
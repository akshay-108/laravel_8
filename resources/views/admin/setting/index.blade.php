@extends('layouts.master')

@section('title', 'Blog Website')
    

@section('content')
<div class="container-fluid px-4">
    <div class="row">
        <div class="col-md-12 mt-4">
            @if(session('message'))
                <h4 class="alert alert-warning">{{session('message')}}</h4>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Website Setting</h4>
                </div>
                <div class="card-body">
                    <form action="{{url('admin/settings')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="website_name">Website Name</label>
                            <input type="text" name="website_name" required value="{{$setting->website_name}}" id="webiste_name" class="webiste_name form-control">
                        </div>
                        <div class="mb-3">
                            <label for="website_logo">Website Logo</label>
                            <input type="file" name="website_logo" id="website_logo" class="website_logo form-control">
                            @if($setting)
                                <img src="{{asset('uploads/settings/'.$setting->logo)}}" width="70px" height="70px" alt="Website Logo">
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="website_fevicon">Website Fevicon</label>
                            <input type="file" name="website_fevicon" id="website_fevicon" class="website_fevicon form-control">
                            @if($setting)
                                <img src="{{asset('uploads/settings/'.$setting->fevicon)}}" width="70px" height="70px" alt="Website Logo">
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="description">Description</label>
                            <textarea type="text" name="description" id="description" class="description form-control" rows="3">@if($setting) {{$setting->description}} @endif</textarea>
                        </div>

                        <h4>SEO Meta Tags</h4>
                        <div class="mb-3">
                            <label for="meta_title">Meta Title</label>
                            <input type="text" name="meta_title" id="meta_title" @if($setting) value="{{$setting->meta_title}}" @endif class="meta_title form-control">
                        </div>
                        <div class="mb-3">
                            <label for="meta_keyword">Meta Keyword</label>
                            <textarea type="text" name="meta_keyword" id="meta_keyword" class="meta_keyword form-control" rows="3">@if($setting) {{$setting->meta_keyword}} @endif</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="meta_description">Meta Description</label>
                            <textarea type="text" name="meta_description" id="meta_description" class="meta_description form-control" rows="3">@if($setting) {{$setting->meta_description}} @endif</textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
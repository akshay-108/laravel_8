@extends('layouts.master')

@section('title', 'View Posts')
    
@section('content')
    <div class="container-fluid px-4 mt-3">
        <div class="card">
            <div class="card-header">
                <h4>View Posts
                    <a href="{{url('admin/add-post')}}" class="btn btn-primary float-end">Add Post</a>
                </h4>
            </div>
            <div class="card-body">
                @if(session('status'))
                    <div class="alert alert-success">{{session('status')}}</div>
                @endif

                <div class="table-responsive">
                    <table id="myDataTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category Name</th>
                                <th>Post Name</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->category->name}}</td> {{-- category is function which is defined in Post Model to get category table data --}}
                                <td>{{$post->name}}</td>
                                <td>{{$post->status == '1' ? 'Hidden' : 'Visisble'}}</td>
                                <td>
                                    <a href="{{url('admin/edit-post/'.$post->id)}}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <a href="{{url('admin/delete-post/'.$post->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
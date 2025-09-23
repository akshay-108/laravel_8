@extends('layouts.master')

@section('title', 'Blog Website')
    
@section('content')

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="{{url('admin/delete-category')}}" method="post">
            @csrf
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="deleteModalLabel">Delete category with its posts</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <input type="hidden" name="category_delete_id" id="category_id">
              <h5>Are you sure you want to delete this category with all its posts ?</h5>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger">Yes Delete</button>
            </div>
        </form>
    </div>
  </div>
</div>

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>
                View Category
                <a href="{{url('admin/view-category')}}" class="btn btn-primary btn-sm float-end">Add</a>
            </h4>
        </div>
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
            @endif
            <div class="table-responsive">
                <table id="myDataTable" class="table table-bordered">
                    <thead>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        @foreach ($category as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>
                                    <img src="{{asset('uploads/category/'.$item->image)}}" width="50px" height="50px" alt="#">
                                </td>
                                <td>{{$item->status == '1' ? 'Hidden' : 'Shown'}}</td>
                                <td>
                                    <a href="{{url('admin/edit-category/'.$item->id)}}" class="btn btn-primary">Edit</a>
                                </td>
                                 <td>
                                    <!-- <a href="{{url('admin/delete-category/'.$item->id)}}" class="btn btn-danger">Delete</a> -->
                                     <button type="button" class="btn btn-danger deleteCategoryBtn" value="{{$item->id}}">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Category</li>
    </ol>
</div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            // $('.deleteCategoryBtn').click(function(e){
            $(document).on('click', '.deleteCategoryBtn', function(e){
                e.preventDefault();

                var category_id = $(this).val();
                $('#category_id').val(category_id);
                $('#deleteModal').modal('show');
            });
        });
    </script>
@endsection
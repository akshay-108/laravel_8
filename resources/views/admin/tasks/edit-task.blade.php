@extends('admin.layouts.master')

@section('title', 'Edit task')

@section('content')
<div id="wrapper">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content" class="mt-3">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Edit Task</h1>
                </div>
                @if(session('message'))
                <h4 class="alert alert-warning">{{session('message')}}</h4>
                @endif
                
                <form action="{{url('admin/tasks/edit-task/'.$task->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="task-title" class="form-label">Task Title</label>
                        <input type="text" name="task_title" class="form-control" id="task-title" value="{{$task->taks_title}}">
                    </div>
                    <div class="mb-3">
                        <label for="task-description" class="form-label">Task Description</label>
                        <textarea class="form-control" name="task_description" id="task-description" rows="3">{{$task->task_description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Developer</label>
                        <select class="form-select" name="assignee_developer" aria-label="Default select example">
                            <option selected>Assign Developer</option>
                            @foreach($developers as $developer)
                            <option value="{{$developer->id}}" {{$task->assignee_id == $developer->id ? 'selected' : ''}}>{{$developer->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="assigner" class="form-label">Manager</label>
                        <input type="text" name="assigner" class="form-control" id="task-title" value="{{$task->manager->name}}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="">Task Status</label>
                        <select class="form-select" name="task_status" aria-label="Default select example">
                            <option selected>Update Status</option>
                            <option value="pending">Pending</option>
                            <option value="in_progress">In Process</option>
                            <option value="completed">Completed</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" name="submit">Update Task</button>
                    </div>
                </form>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
@endsection
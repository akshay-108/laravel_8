@extends('admin.layouts.master')

@section('title', 'View task')

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
                    <h1 class="h3 mb-0 text-gray-800">View Task</h1>
                </div>
                @if(session('message'))
                <h4 class="alert alert-warning">{{session('message')}}</h4>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Task Title</th>
                            <th scope="col">Task Description</th>
                            <th scope="col">Assigner</th>
                            <th scope="col">Assignee</th>
                            <th scope="col">Status</th>
                            <th scope="col">Created Date</th>
                            <th scope="col">Edit</th>
                            @if($user->role == 'manager')
                            <th scope="col">Delete</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->taks_title}}</td>
                            <td>{{$task->task_description}}</td>
                            <td>{{$task->manager->name}}</td>
                            <td>{{$task->developer->name}}</td>
                            <td>{{$task->taks_status}}</td>
                            <td>{{$task->created_at}}</td>
                            <td>
                                <a href="{{url('admin/tasks/edit-task/'.$task->id)}}" class="btn btn-primary">Edit</a>
                            </td>
                            @if($user->role == 'manager')
                            <td>
                                <a href="{{url('admin/tasks/delete-task/'.$task->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
@endsection
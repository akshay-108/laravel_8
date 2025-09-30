@extends('layout.master')

@section('content')
    <div class="mt-3 card">
        <h3 class="card-title text-center mt-3">User Registration</h2>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @elseif(session('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
            @endif
            <form action="{{url('registration')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <label for="role">Select Role</label>
                <select class="form-select" name="role" aria-label="select role">
                    <option value="">Select Role</option>
                    <option value="manager">Manager</option>
                    <option value="developer">Developer</option>
                </select>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection

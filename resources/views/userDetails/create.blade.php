<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container wrapper">
        <h1 class="text-center text-dark">User Details Form</h1>
        @if(session('status'))
            <h4 class="text-center text-warning">{{session('status')}}</h4>
        @endif
        @if (count($errors) > 0)
            <div class = "alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="form-wrapper" action="{{url('add-userdetails')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="first-name">First Name</label>
                <input type="text" class="form-control" name="first_name" id="first-name"/>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="last-name">Last Name</label>
                <input type="text" class="form-control" name="last_name" id="last-name"/>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="user-email">Email Address</label>
                <input type="email" class="form-control" name="user_email" id="user-email"/>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="user-mobile">Mobile</label>
                <input type="text" class="form-control" name="user_mobile" id="user-mobile"/>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="user-password">Password</label>
                <input type="password" class="form-control" name="user_password" id="user-password"/>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
            <div class="mb-3">
                <button type="button" class="btn btn-warning btn-lg">View All Users</button>
            </div>
        </form>
    </div>
</body>
</html>
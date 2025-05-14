<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1 class="text-center text-dark">Edit User Details</h1>
        @if(session('status'))
            <h4 class="alert alert-success">{{session('status')}}</h4>
        @endif
        <form action="{{url('update-userdetails/'.$userDetails->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="first-name">First Name</label>
                <input type="text" class="form-control" name="first_name" value="{{$userDetails->first_name}}" id="first-name"/>
            </div>
            <div class="mb-3">
                <label for="last-name">Last Name</label>
                <input type="text" class="form-control" name="last_name" value="{{$userDetails->last_name}}" id="last-name"/>
            </div>
            <div class="mb-3">
                <label for="user-email">Email Address</label>
                <input type="email" class="form-control" name="user_email" value="{{$userDetails->email}}" id="user-email"/>
            </div>
            <div class="mb-3">
                <label for="user-mobile">Mobile</label>
                <input type="text" class="form-control" name="user_mobile" value="{{$userDetails->mobile}}" id="user-mobile"/>
            </div>
            <div class="form-group mb-3">
                <button type="submit" class="btn btn-primary">Update Employee</button>
            </div>
        </form>
    </div>
</body>
</html>
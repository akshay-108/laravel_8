<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
    <link rel="stylesheet" href="{{url('css/app.css')}}">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="header-title">Edit Customer</h1>
        </div>
        @if(session('status'))
            <h4 class="error">{{session('status')}}</h4>
        @endif
        <div class="wrapper">
            <form action="{{url('update-customer/'.$customer->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="input-form">
                    <label for="name">Your Full Name</label><br>
                    <input type="text" name="name" id="name" class="input-name" value="{{$customer->name}}" />
                </div>
                <div class="input-form">
                    <label for="email">Your Email</label><br>
                    <input type="email" name="email" id="email" class="input-email" value="{{$customer->email}}" />
                </div>
                <div class="input-form">
                    <label for="mobile">Your Mobile</label><br>
                    <input type="text" name="mobile" id="mobile" class="input-mobile" value="{{$customer->number}}" />
                </div>
                <div class="input-form">
                    <label for="age">Your Age</label><br>
                    <input type="text" name="age" id="age" class="input-age" value="{{$customer->age}}" />
                </div>
                <div class="form-button">
                    <button type="submit" class="form-submit">Edit Customer</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
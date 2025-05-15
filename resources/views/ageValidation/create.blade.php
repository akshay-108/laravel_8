<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="herder">
            <h1 class="header-title">Add Customer</h1>
        </div>
        @if(session('status'))
            <h4 class="error">{{session('status')}}</h4>
        @endif
        <div class="wrapper">
            <form action="{{url('add-customer')}}" method="post">
                @csrf
                <div class="input-form">
                    <label for="name">Your Full Name</label><br>
                    <input type="text" name="name" id="name" class="input-name" value="{{ old('name') }}" /></br>
                    @error('name')
                        <small style="color: red;">{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-form">
                    <label for="email">Your Email</label><br>
                    <input type="email" name="email" id="email" class="input-email" value="{{ old('email') }}" /></br>
                    @error('email')
                        <small style="color: red;">{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-form">
                    <label for="mobile">Your Mobile</label><br>
                    <input type="text" name="mobile" id="mobile" class="input-mobile" value="{{ old('mobile') }}" /></br>
                    @error('mobile')
                        <small style="color: red;">{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-form">
                    <label for="age">Your Age</label><br>
                    <input type="text" name="age" id="age" class="input-age" value="{{ old('age') }}" /></br>
                    @error('age')
                        <small style="color: red;">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-button">
                    <button type="submit" class="form-submit">Save Customer</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
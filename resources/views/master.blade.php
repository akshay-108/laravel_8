<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Com Project</title>
    <!-- boostrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- boostrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
    {{ view('header') }}
    @yield('content')
    {{ view('footer') }}
</body>
    <style>
        .custom-login {
            height: 500px;
            padding-top: 100px;
        }
        img.slider-img {
            height: 400px;
        }
        .custom-product {
            height:800px;
        }
        .slider-text {
            background-color: #24465454;
        }
        .trending-image{
            height: 100px;
        }
        .trending-item {
            float: left;
            width:20%;
        }
        .trending-wrapper{
            margin: 20px;
        }
        .detail-img {
            height: 200px;
        }
        .search-box{
            width: 500px;
        }
        .cart-list-devider {
            border-bottom: 1px solid #cccccc;
            margin-bottom: 20px;
            padding-bottom: 20px;
        }
    </style>
</html>
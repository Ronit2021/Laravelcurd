<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-commerce | Ronit</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/app.css">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
        @yield('content')
    {{View::make('footer')}}
</body>
<style>
    .login-template{
        height: 500px;
        padding-top: 100px;
         
    }
    .custom-product {
        height: 600px;
    }
    .carousel.slide .carousel-caption{
        background-color: #35443585;
    } 
    .carousel.slide .carousel-control-next span, .carousel.slide .carousel-control-prev span {
        background-color: #000 !important;
        width: 3rem;
        height: 3rem;
    }
    .trending-item{
        float: left;
        width: 25%;
    }
    .trending-item img{
        width: 150px;
        height: 150px;
    }
    .detail-image{
        height: 400px;   
    }
    .cart-list-divider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }

</style>
</html>
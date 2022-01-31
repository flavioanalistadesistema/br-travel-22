<!DOCTYPE html>
<html lang="en">

<head>
    <title>Travel Agency</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <!--<a class="navbar-brand" href="index.html"><span>Traveland</span></a>-->
        <a class="navbar-brand" href="/">
            <img class="img-logo"
                 src="{{asset('images/logo_travelAgency.png')}}">
            </img>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
{{--                <li class="nav-item active"><a href="" class="nav-link">Home</a></li>--}}
{{--                <li class="nav-item"><a href="" class="nav-link">About</a></li>--}}
{{--                <li class="nav-item"><a href="" class="nav-link">Destiny</a></li>--}}
                <!--<li class="nav-item"><a href="hotel-resto.html" class="nav-link">Hotels &amp; Restaurant</a></li>
                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>-->
{{--                <li class="nav-item"><a href="" class="nav-link">Contact</a></li>--}}
{{--                <li class="nav-item cta"><a href="/book" class="nav-link">Book now</a></li>--}}

            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

@yield('body')

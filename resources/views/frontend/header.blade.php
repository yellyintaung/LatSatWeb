<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latsat</title>
    
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    {{-- <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('css')
</head>
<body>
    <header> 
        <div class="py-1 btn-add text-center">
            <div class="container py-1" style="font-size: 13px;">
                <div class="d-inline-block pt-1">
                  <a href="mailto:latsatfood@gmail.com" class="text-white" style="text-decoration:none;"><i class="fas fa-envelope"></i><span> &nbsp;latsatfood@gmail.com |</span></a> 
                  <a href="tel:09 693335053" class="text-white" style="text-decoration:none;">  <i class="fas fa-phone-volume"></i><span> &nbsp;09 693335053 |</span></a>
                  <a href="tel:09 796569259" class="text-white" style="text-decoration:none;">  <i class="fas fa-phone-volume"></i><span> &nbsp;09 796569259</span></a>
                </div>
            </div>
        </div>
    </header>
    <div class="sticky-top">
        <nav class="navbar navbar-expand-sm shadow bg-light">
            <div class="container">
                <a class="mobilelogo" href="/" style="display: none;">
                    <img src="{{ asset('images/logo.png') }}" width="50px" alt="logo" class="logo">
                </a>
                <button class="navbar-toggler navbar-light bg-light" type="button" data-toggle="collapse"
                data-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Links -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarText">
                <ul class="navbar-nav">
                    <li class="nav-item latsat-nav-pd">
                        <a class="nav-link latsat-nav" href="/">Home</a>
                    </li>
                    <li class="nav-item latsat-nav-pd dropdown">
                        <a class="nav-link latsat-nav dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Availiable Products
                        </a>
                        <!-- Dropdown -->
                        <div class="dropdown-menu latsat-dropdown">
                            @foreach ($menu_categories as $categories)
                            <a class="dropdown-item" href="/product/{{ $categories->id }}"> {{ $categories->category_name }} </a>
                            @endforeach
                        </div>
                    </li>
                    
                    
                    <!-- Brand -->
                    <a class="navbar-brand d-none d-sm-block" style="padding-bottom:0 ;" href="#">
                        <img src="{{ asset('images/logo.png') }}" width="80px" alt="logo" class="logo" />
                    </a>
                    
                    <li class="nav-item latsat-nav-pd">
                        <a class="nav-link latsat-nav" href="#">Contact</a>
                    </li>

                    <li class="nav-item latsat-nav-pd">
                        <a class="nav-link latsat-nav" href="#">
                            <img src="{{ asset('images/supermarket.png') }}" alt="shooping-cart"
                            width="24px" /><span class="count lbcount">
                                <span id="show-count"></span></span></a>
                            </li>
                            <li class="nav-item latsat-nav-pd">
                                <a class="nav-link latsat-nav" href="#">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        
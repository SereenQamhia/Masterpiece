<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HomeFix</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
<!-- Favicon -->
<link href="{{ asset('img/favicon.ico') }}" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

<!-- Icon Font Stylesheets -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheets -->
<link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
<link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>


<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 style="font-family: Georgia, 'Times New Roman', Times, serif;" class="m-0 text-primary"><img
                    style="height: 180px; width:280px;" src="{{ asset('img/homefix-logo.png') }}" alt="HomeFix Logo"></h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto p-4 p-lg-0">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link {{ request()->is('about*') ? 'active' : '' }}">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ preg_match('/^(carpenter|painting|electrical|plumbing)/', request()->path()) ? 'active' : '' }}" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="{{ route('Service','carpenter') }}" class="dropdown-item {{ request()->is('carpenter*') ? 'active' : '' }}">Carpenter</a>
                        <a href="{{ route('Service','Electrical') }}" class="dropdown-item {{ request()->is('electrical*') ? 'active' : '' }}">Electrical</a>
                        <a href="{{ route('Service','Painting') }}" class="dropdown-item {{ request()->is('painting*') ? 'active' : '' }}">Painting</a>
                        <a href="{{ route('Service','Plumbing') }}" class="dropdown-item {{ request()->is('plumbing*') ? 'active' : '' }}">Plumbing</a>
                    </div>
                </li>
                {{-- <li class="nav-item">
                    <a href="" class="nav-link">Courses</a>
                </li> --}}
                <li class="nav-item">
                    <a href="{{ route('join') }}" class="nav-link {{ request()->is('join*') ? 'active' : '' }}">Join us</a>
                </li>
            
                    @if (Auth::check())
                  
                 
                        <a href="{{ route('profile') }}" class="nav-link" >Profile</a>
                     
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="nav-link" style="border: none; background-color:white" >Log Out</button>
                        </form>
                 
                    @else
                    <a href="{{ route('login') }}" class="nav-link {{ request()->is('login*') ? 'active' : '' }}">Login</a>
                    <a href="{{ route('register') }}" class="nav-link {{ request()->is('register*') ? 'active' : '' }}">Register</a>
                    @endif
             
            </ul>
        </div>
    </nav>
    


{{--            
            @if (Auth::check())
            <div class="dropdown-menu fade-up m-0">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">menu</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="{{ route('profile.edit') }}" class="dropdown-item {{ request()->is('profile.edit*') ? 'active' : '' }}">Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item">Log Out</button>
                    </form>
                </div>
            </div>
        @else
            <a href="{{ route('login') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block {{ request()->is('login*') ? 'active' : '' }}">Login <i class="fa fa-arrow-right ms-3"></i></a>
        @endif --}}
        
     
    <!-- Navbar End -->
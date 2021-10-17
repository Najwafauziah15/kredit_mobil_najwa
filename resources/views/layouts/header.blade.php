<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $title ?? 'Kredit Mobil' }}</title>

<!-- Google Font: Source Sans Pro -->
{{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> --}}
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('assets') }}/plugins/fontawesome-free/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('assets') }}/dist/css/adminlte.min.css">
{{-- css bootstrap --}}
<link rel="stylesheet" href="css/bootstrap.min.css">
{{-- DataTable --}}
<link rel="stylesheet" href="{{ asset('assets') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('assets') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

@yield ('head')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
        <a href="/home" class="nav-link {{ request()->is ("/home") ? 'active' : ''}}">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/about" class="nav-link {{ request()->is("/about") ? 'active' : ''}}">About</a>
        </li>
        @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    menu
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li class="dropdown-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">logout</button>
                        </form>
                    </li>
                </ul>
            </li>
        @else
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/login" class="nav-link {{ request()->is("/login") ? 'active' : ''}}">Login</a>
            </li>
        @endauth
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
        </a>
        </li>
    </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <p class="brand-link">
    <img src="{{ asset('assets') }}/img/najwa.jpg" class="img-circle elevation-2" height="30px">
    <span class="brand-text font-weight-light">Nana</span>
    </p>
<!-- Sidebar -->
<div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="/home" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Dashboard
            </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
                Menu
                <i class="fas fa-angle-left right"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="/mobil" class="nav-link">
                <i class="nav-icon fas fa-car"></i>
                <p>Data Mobil</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/pembeli" class="nav-link">
                <i class="nav-icon fas fa-search"></i>
                <p>Data Pembeli</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/pembayaran" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>Pembayaran</p>
                </a>
            </li>
            </ul>
        </li>
        </li>
    </nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

<script src="js/bootstrap.bundle.min.js" ></script>

@yield('content')

@include('layouts.footer')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="{!! asset('assets/home/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/home/lightbox.css') !!}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo.png') }}">
    
    <!-- Link Swiper CSS -->
    <!-- <link rel="stylesheet" href="{!! asset('assets/home/swiper-bundle.min.css') !!}"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .banner1 {background-image: url('{{ asset('assets/img/banner1.png') }}'); border-radius: 50px !important;}
        .banner2 {background: url('{{ asset('assets/img/banner2.jpeg') }}'); border-radius: 50px !important;}
        .banner3 {background: url('{{ asset('assets/img/banner3.jpeg') }}'); border-radius: 50px !important;}
    </style>
</head>
<body>

<header>
    <a href="/" class="logo"><img src="{{ asset('assets/img/logo.png') }}"></a>
    <ul class="navbar">
        <li><a href="#">Masuk</a></li>
        <li><a href="#"> Daftar</a></li>
        <hr>
        <li><a href="/home"><img src="{{ asset('assets/img/kaaba.png') }}" width="22px"> Paket Umroh</a></li>
        <li><a href="#"><i class='bx bxl-blogger'></i> Blog</a></li>
        <li><a href="#"><i class='bx bx-grid'></i> jadwal Sholat</a></li>
        <li><a href="#"><i class='bx bx-grid'></i> Al-Quran</a></li>
    </ul>
    
    <ul class="navbar_slide">
        <li><a href="/home"><img src="{{ asset('assets/img/kaaba.png') }}" width="22px"> Paket Umroh</a></li>
        <li><a href="#"><i class='bx bxl-blogger'></i> Blog</a></li>
        <li><a href="#"><i class='bx bx-grid'></i> Lainnya</a></li>
    </ul>
    
    <div class="main">
        <div class="menu-container">
            <button type="submit"> Daftar</button>
            <a href="/auth_user/login"><button type="submit" class="button1"> Masuk</button></a>
        </div>
        <div class="bx bx-menu" id="menu-icon"></div>
    </div>
    
</header>
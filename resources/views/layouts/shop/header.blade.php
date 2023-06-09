<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./assets/img/icons/favicon.ico"/>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}?<?php echo time();?>">

    <link rel="stylesheet" href="{{ asset('assets/css/loader.css') }}?<?php echo time();?>">
    <link rel="stylesheet" href="{{ asset('assets/css/rename.css') }}?<?php echo time();?>">


    <meta name="csrf-token" content="{{ csrf_token() }}" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

    <title>Site</title>
</head>
<body>
<!-- Pre-loader -->
<!-- <div class="page-loader">
    <div class="loader">Loading...</div>
  </div> -->
    <div class="wrap__body">
        <section class="header pdhw-10 br-hd-10">
            <div class="main-content">


                <div class="logo">
                    <a href="/">
                        <img src="/assets/img/Rectangle 11.png" alt="#">
                    </a>
                </div>


                <div class="menu">
                    <ul>
                        <li @if($_SERVER["REQUEST_URI"] == '/') class="active" @endif ><a href="/">Главная</a></li>
                        <li @if($_SERVER["REQUEST_URI"] == '/shop') class="active" @endif><a href="/shop">Магазин</a></li>
                        <li @if($_SERVER["REQUEST_URI"] == '/gallery') class="active" @endif><a href="/gallery">Галерея</a></li>
                        <!-- <li @if($_SERVER["REQUEST_URI"] == '/contact') class="active" @endif><a href="/contact">Контакт</a></li> -->
                        <li @if($_SERVER["REQUEST_URI"] == '/about') class="active" @endif><a href="/about">О нас</a></li>

                        <?php $user = auth()->user(); ?>

                        @if($user)

                            <li @if($_SERVER["REQUEST_URI"] == '/myitems') class="active" @endif><a href="/myitems">История заказов</a></li>

                        @endif
                    </ul>
                    <div class="dis">   
                        <a href="/cart">
                            <i class="fa fa-cart-arrow-down"></i>
                        </a>

                        <a href="/profile">
                            <i class="fa fa-user"></i>

                            @if($user)

                            {{ $user->name }}

                            @endif

                        </a>
                    </div>
                </div>
                <div class="mobile">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
            </div>
        </section>
        

     
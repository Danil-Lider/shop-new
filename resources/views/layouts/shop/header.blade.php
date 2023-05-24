<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./assets/img/icons/favicon.ico"/>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/loader.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/rename.css') }}">


    <meta name="csrf-token" content="{{ csrf_token() }}" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <div class="logo" onclick="window.location.href='./index.html';">
                    <img src="./assets/img/Rectangle 11.png" alt="#">
                </div>
                <div class="menu">
                    <ul>
                        <li class="active"><a href="./index.html">Главная</a></li>
                        <li><a href="./shop.html">Магазин</a></li>
                        <li><a href="./gallery.html">Галерея</a></li>
                        <li><a href="./contact.html">Контакт</a></li>
                        <li><a href="./about.html">О нас</a></li>
                    </ul>
                    <div class="dis">
                        <a href="./cart.html">
                            <i class="fa fa-cart-arrow-down"></i>
                        </a>
                        <a href="./user/login.html">
                            <i class="fa fa-user"></i>
                        </a>
                    </div>
                </div>
                <div class="mobile">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
            </div>
        </section>

        <section class="hero br-hd-25">
            <div class="wrap__hero">
                <div id="carousel">
                    <div id="drag-container">
                        <div id="spin-container" style="width: 140px; height: 205px; animation: 60s linear 0s infinite normal none running spinRevert;">
                            <a href="#" style="transform: rotateY(0deg) translateZ(240px); transition: transform 1s ease 1.5s;"><img src="./assets/img/Приталенное платье на запáх из вискозы.jpg" alt="#"></a>
                            <a href="#" style="transform: rotateY(60deg) translateZ(240px); transition: transform 1s ease 1.25s;"><img src="./assets/img/Короткое платье в бельевом стиле из вискозы..jpg" alt="#"></a>
                            <a href="#" style="transform: rotateY(120deg) translateZ(240px); transition: transform 1s ease 1s;"><img src="./assets/img/Классическая юбка-карандаш из эластичного хлопкового материала..jpg" alt="#"></a>
                            <a href="#" style="transform: rotateY(180deg) translateZ(240px); transition: transform 1s ease 0.75s;"><img src="./assets/img/Рубашка oversize в стиле карго.jpg" alt="#"></a>
                            <a href="#" style="transform: rotateY(240deg) translateZ(240px); transition: transform 1s ease 0.5s;"><img src="./assets/img/Однобортный блейзер прямого кроя с прямоугольными лацканами из смесового льна.jpg" alt="#"></a>
                            <a href="#" style="transform: rotateY(300deg) translateZ(240px); transition: transform 1s ease 0.25s;"><img src="./assets/img/Укороченные джинсы клеш с высокой посадкой.jpg" alt="#"></a>
                    
                            <p style="font-family:'Post No Bills Colombo Medium Regular';font-size:42px">Creativ Goast</p>
                        </div>
                        <div id="ground" style="width: 720px; height: 720px;">
                            
                        </div>
                    </div>
                </div>
                <div class="hero__content">
                    <div class="hero__content-link pd-10">
                        <a href="#" class="btn">Регистрация</a>
                        <a href="#" class="btn-reverse">Запись на мерку</a>
                    </div>
                </div>
            </div>
        </section>
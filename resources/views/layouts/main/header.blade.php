<!DOCTYPE html>
<html lang="ru">

<head>

   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="keywords" content="">

   <title>INCAR TG</title>

   <link rel="icon" href="img/favicon.png">
   <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}?<?php echo time();?>">

   <script src="{{ asset('assets/libs/gsap/gsap.min.js') }}?<?php echo time();?>" defer></script>
   <script src="{{ asset('assets/libs/gsap/ScrollTrigger.min.js') }}?<?php echo time();?>" defer></script>
   <script src="{{ asset('assets/libs/gsap/ScrollSmoother.min.js') }}?<?php echo time();?>" defer></script>
   <script src="{{ asset('assets/js/app.min.js') }}?<?php echo time();?>" defer></script>
   <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>

<body class="body body-gray">

   <div class="wrapper">
      <div class="content">

         <div class="mobile-menu">
            <ul class="mobile-menu__nav">
               <li class="mobile-menu__item">
                  <a class="mobile-menu__link" href="specifications.html">
                     Характеристики
                  </a>
               </li>
               <li class="mobile-menu__item">
                  <a class="mobile-menu__link" href="modal.html">
                     Модельный ряд
                  </a>
               </li>
               <!-- <li class="mobile-menu__item">
                  <a class="mobile-menu__link" href="">
                     Заказать
                  </a>
               </li> -->
            </ul>
         </div>

         <header class="header">
            <div class="container">

               <div class="row">
                  <div class="col">

                     <div class="header__wr">
                        <div class="header__inner">
                           <a href="/" class="logo">
                              <img class="logo__img" src="img/black-logo.svg" alt="">
                           </a>

                           <nav class="nav d-none d-lg-flex">
                              <ul class="nav__ul">
                                 <li class="nav__item">
                                    <a class="nav__link" href="specifications.html">Характеристики</a>
                                 </li>
                                 <li class="nav__item">
                                    <a class="nav__link" href="modal.html">Модельный ряд</a>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                        <!-- 
                        <a class="btn d-none d-lg-block" href="">
                           Заказать
                        </a> -->

                        <div class="btn-burger d-lg-none btn-burger-color-black">
                           <div class="btn-burger__bar-1"></div>
                           <div class="btn-burger__bar-2"></div>
                           <div class="btn-burger__bar-3"></div>
                        </div>

                     </div>
                  </div>

               </div>
         </header>

         <main class="main">
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
   <script src="{{ asset('assets/js/app.js') }}?<?php echo time();?>" defer></script>
   <meta name="csrf-token" content="{{ csrf_token() }}" />


<!-- Google tag (gtag.js) --> 
<script async src="https://www.googletagmanager.com/gtag/js?id=G-E3GEHJBM4F"></script&gt; <script>   window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-E3GEHJBM4F'); </script>


   <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(94122762, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/94122762" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</head>

<body class="body @if(!route('modal')) body-gray @endif">

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


<style>

.form-check, .form-group {
   margin-top: 24px;
}
.main-section-3__btn {
margin-top: 2rem;
margin-bottom: 2rem;
}
/* убираем нижний ползунок прокрутки */
body {
overflow-x: hidden;
}

/* фон нашего модального окна */
.modalBackground {
   display: none;
   background: rgba(0, 0, 0, 0.8);
   position: fixed;
   width: 100%;
   height: 100%;
   cursor: pointer;
   /* указываем z-индекс для корректного наслаивания */
   z-index: 10;
   top: 0;
   left: 0;
}

/* кнопочка закрытия модального окна */
.modalClose {
   font-family: var(--font-regular);
   position: absolute;
   right: 5px;
   top: 5px;
   width: 30px;
   height: 30px;
   cursor: pointer;
}

/* сама картинка кнопочки закрытия */
.modalClose img {
   margin: 3px;
   width: 24px;
   height: 24px;
}

/* делаем позиционирование внутренних элементов относительно модального окна */
.modalWindow {
   position: relative;
}

.form-group-title {
   color: #000;
   font-size: 13px;
   font-family: Inter;
}

.form-group-input {
   border: none;
   color: #000;
   font-size: 40px;
   font-family: Inter;
   background:none;
}

.form-group-main-input {
   border-radius: 77px;
   background: #FFF;
   border-radius: 77px;
   background: #FFF;
   height: 87px;
   width: 100%;
   padding-left: 4rem;
   border: none;
}
.form-btn {
   border-radius: 55px;
   background: #5360D0;
   border:none !important;
   margin: 0 auto;
   display: block;
   margin-top: 52px;
}

.modalClose {
   margin-top: 26px;
   margin-right: 35px;
}


table tbody tr .table-btn {
   opacity: 1;
}

/* позиционирование самого модального окна */
.modalActive {
   position: absolute;
   /*width: avto;*/
   width: auto;
   /*height: 495px;*/
   height: min-content;
   top: calc(50% - 400px);
   left: calc(50% - 188px);

   /* border-radius: 10px; */
   background-color: rgb(255, 255, 255);
   cursor: default;
   padding: 80px 50px;
   width: 530px;
   /* width: auto; */
   /*height: 580px;*/
   /*height: */
   background: #E4E4E4;
   /* left: 50%;
   transform: translate(-50%, -50%);
   top: 50%; */
   /* transform: translateY(-50%); */
   font-family: 'Inter', sans-serif;
}

.modalActive  * {
   font-family: 'Inter', sans-serif;
}

.modalWindow {
   max-width: 516px;
}

table tbody tr td:nth-child(4n){
   padding-right: 1rem;
}

.form-check-input {
   opacity: 1;
   position: relative;
   height: 13px;
   width: 0;
}
.form-check-input:after {
   content: "";
   position: absolute;
   top: 0;
   left: 0;
   width: 20px;
   height: 20px;
   background: white;
}
.form-check-input:checked:after {
   background: url(https://w7.pngwing.com/pngs/897/401/png-transparent-check-illustration-computer-icons-check-mark-checkbox-green-tick-miscellaneous-angle-white.png);
   background-position: center;
   background-size: cover;
}

.form-check-label {
   margin-left: 2rem;
}

@media screen and (max-width: 762px) {
   .modalActive {
      width: 100%;
      padding:40px 20px;
   }
   .form-group-input {
      font-size: 34px;
   }
   .form-btn {
      font-size: 25px;
   }
   table tbody tr .table-btn {
      color: white !important;
   }
}

.form-check label {
   font-size: 15px;
   font-family: Inter;

}

body {
   width:100%;
   min-width: 30rem;
}
</style>
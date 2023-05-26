<?php
use App\Models\Item;

$model = new Item();

$items = $model->inRandomOrder()->limit(7)->get();

$time = 0;

//  

// dd($model->inRandomOrder()->limit(5)->get()); // Выведет все записи из БД

?>


<section class="hero br-hd-25">
    <div class="wrap__hero">
        <div id="carousel">
            <div id="drag-container">
                <div id="spin-container" style="width: 140px; height: 205px; animation: 60s linear 0s infinite normal none running spinRevert;">



                @foreach($items as $item)

                

                    <a 
                    style='transform: rotateY({{ $time }}deg) translateZ(240px); transition: transform 1s ease 1.75s;'
                    href="/shop/{{$item->id}}" style="">
                        <img src="{{ $item->image }}" alt="#">
                    </a>
                
                    <?php $time += 50; ?>
                
                @endforeach

                    <p style="font-family:'Post No Bills Colombo Medium Regular';font-size:42px">Creativ Goast</p>
                </div>
                <div id="ground" style="width: 720px; height: 720px;">
                    
                </div>
            </div>
        </div>
        <div class="hero__content">
            <div class="hero__content-link pd-10">
                <a href="/register" class="btn">Регистрация</a>
                <a href="/shop" class="btn-reverse">Запись на мерку</a>
            </div>
        </div>
    </div>
</section>
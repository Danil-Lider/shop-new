@include('layouts.shop.header')



<!-- <title>Корзина</title> -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class='container'>
    <h1>    Корзина товаров</h1>
</div>

<div class='container'>


@if($new_items)


  

    @foreach($new_items as $key => $item)

    <?php

    $date = new DateTimeImmutable($item['created_at']);
    $d = $date->format('Y-m-d H:i:s');
    ?>

    <h2>Дата: {{ $d }}</h2>

    <table class=" @if($key % 2 == 1)  table-dark @endif mt-5 table table-sm">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Фотография</th>
            <th scope="col">Наименование</th>
            <th scope="col">Цена</th>
            <th scope="col">Размер</th>
            </tr>
        </thead>
        <tbody>
        

            @foreach($item['sub_items'] as $k => $sub)



            <tr>
                <th scope="row">{{ $k }}</th>
                <td><img height=200 width=150  src="{{  $sub['image'] }}" alt=""></td>
                <td>{{ $sub['name'] }}</td>
                <td>{{ $sub['price'] }}</td>
            </tr>

            @endforeach
 
        </tbody>
    </table>

    @endforeach


@else



Нету истории бронирования

<a href="/shop">перейти в магазин </a>


@endif

</div>
<!-- CONTAINER -->

</section>



@include('layouts.shop.footer')

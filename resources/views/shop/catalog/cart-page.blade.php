@include('layouts.shop.header')

<!-- <title>Корзина</title> -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class='container'>
    <h1>    Корзина товаров</h1>
</div>

<div class='mt-5 container'>


@if($items->count())

<table class="table table-sm">
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

        @foreach($items as $key => $item)

        <tr>
        <th scope="row">{{ $key }}</th>
        <td><img height=200 width=150  src="{{ $item->image }}" alt=""></td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->price }}</td>

        @if($data['cart'][$item->id]['size'] == 1)

            <td>Стандартый</td>
        
        @else 

            <td>{{ $data['cart'][$item->id]['size'] }} </td>

        @endif

        <td class='delite_from_cart' data-id='{{ $item->id }}' style='font-size:1.5rem;'>Х</td>

        </tr>

        @endforeach
 
  </tbody>
</table>

@else



Нету товаров

<a href="/shop">перейти в магазин </a>


@endif

</div>
<!-- CONTAINER -->



<div style="display:flex" class='contianer'>

  <div class=' mx-auto btn btn-success center'>Оформить заявку</div>

</div>

</section>



@include('layouts.shop.footer')

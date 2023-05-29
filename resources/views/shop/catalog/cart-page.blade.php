@include('layouts.shop.header')

<!-- <title>Корзина</title> -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class='container'>
    <h1>    Корзина товаров</h1>
</div>







<div class='mt-1 container'>

<div style='display:none' class='message'>
  <div id='my_message' class="alert alert-success" role="alert"> </div>
  <a href="/shop">перейти в магазин </a>
</div>
</div>



<div class='mt-1 container'>


<form id='cart' method='POST' action="/add_in_cart_store" name='cart'>






@if($items->count())


<div class='table-wrap'>

<table  class="table table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Фотография</th>
      <th scope="col">Наименование</th>
      <th scope="col">Цена</th>
      <th scope="col">количество</th>
      <th scope="col">Размер</th>
      <th scope="col">итого</th>
      <th scope="col">удалить</th>
    </tr>
  </thead>
  <tbody>

      <input type="hidden" name='items[]' value='{{ $items }} '>

        @foreach($items as $key => $item)

        <tr>
        <th scope="row">{{ $key }}</th>
        <td><img height=200 width=150  src="{{ $item->image }}" alt=""></td>
        <td> <a href="{{ route('shop_detail', ['id' => $item->id]); }}">{{ $item->name }}</a> </td>
        <td>{{ $item->price }} р</td>
        <td>


        <div class="product__count__container in_cart_page">
            <button class="item__minus">
                <svg width="12" height="2" viewBox="0 0 12 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="1" y1="1" x2="11" y2="1" stroke="white" stroke-width="2" stroke-linecap="round"></line>
                </svg>                                   
            </button>
            <input data-id='{{ $item->id }}' id="{{ $item->id }}" class="item_count" value="{{  $data['cart'][$item->id]['count'] ? $data['cart'][$item->id]['count'] : 1 }}" type="number">
            <button class="item__plus">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 1L6 11M1 6H11" stroke="white" stroke-width="2" stroke-linecap="round"></path>
                </svg> 
            </button>
        </div>
          


        </td>
       

        @if($data['cart'][$item->id]['size'] == 1)

            <td>Стандартый</td>
        
        @else 

            <td>{{ $data['cart'][$item->id]['size'] }} </td>

        @endif

        <td>{{ $data['cart'][$item->id]['count'] * $item->price}} р</td>

        <td class='delite_from_cart' data-id='{{ $item->id }}' style='font-size:1.5rem;'>Х</td>

        </tr>

        @endforeach
 
  </tbody>
</table>
</div>


<div class='mt-1 mb-2 container'>
  <div class='btn btn-success'>  Итого: {{ $end_price}} руб</div>
  <div  onclick="location.reload(); return false;" class='btn btn-primary'>Перерасчет</div>
</div>



<div class="screen">
  <div class="screen-body">
    <div class="screen-body-item">
      <div class="app-form">
        <div class="app-form-group">
          <input name='name' class="app-form-control" placeholder="ФИО" value="" required>
        </div>
        <div class="app-form-group">
          <input name='email' class="app-form-control" placeholder="email" required>
        </div>
        <div class="app-form-group">
          <input name='phone' class="app-form-control" placeholder="Телефон" required>
        </div>
        <div class="app-form-group message">
          <input name='message' class="app-form-control" placeholder="Сообщение">
        </div>
        <div class="app-form-group buttons">
          <button class="app-form-button">Отмена</button>
          <button type="submit" class=' mx-auto btn btn-success center'>Оформить заявку</button>
        </div>
      </div>
    </div>
  </div>
</div>



</form>




@else



Нету товаров

<a href="/shop">перейти в магазин </a>


@endif

</div>
<!-- CONTAINER -->



</section>



@include('layouts.shop.footer')

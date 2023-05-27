@include('layouts.shop.header')

<!-- <title>Корзина</title> -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class='container'>
    <h1>    Корзина товаров</h1>
</div>















<div class='mt-1 container'>


<form id='cart' action="/add_in_cart_store" name='cart'>


@if (session('success'))
  <div class="alert alert-success" role="alert"> {{ session('success') }}</div>
@endif

@if($items->count())


<div class='table-wrap'>

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

      <input type="hidden" name='items[]' value='{{ $items }} '>

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

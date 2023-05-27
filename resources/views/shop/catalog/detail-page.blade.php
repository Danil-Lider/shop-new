@include('layouts.shop.header')

<section class="discProduct pd-40">
            <section class="Condetails section-p1">
                <div class="single-pro-image">

                    <img src="{{ $data->image }}" width="100%" class="MainImg" alt="#">

                 


                </div>
                <div class="single-pro-details product__inner_list ">
                    <!-- <h6>Home / Мебель выбранная</h6> -->
                    <h4>{{ $data->name }} </h4>
                    <h2>{{ $data->price }} руб</h2>
                    <select name='size'>
                        <option value='default'>Выбрать Размер</option>
                        <option value='XS'>XS</option>
                        <option value='S'>S</option>
                        <option value='M'>M</option>
                        <option value='L'>L</option>
                        <option value='XL'>XL</option>
                    </select>
                    <!-- <input type="number" value="1"> -->
                    <button class="normal addToCartDetail">Добавить в корзину</button>






                    <div class="product__count product__count-catalog__list" style="display:none">
		                <button class="item__minus">
		                    <svg width="12" height="2" viewBox="0 0 12 2" fill="none" xmlns="http://www.w3.org/2000/svg">
		                        <line x1="1" y1="1" x2="11" y2="1" stroke="white" stroke-width="2" stroke-linecap="round"></line>
		                    </svg>                                   
		                </button>
		                <input data-id='{{ $data->id }}' id="{{ $data->id }}" class=" item_id item__number" value="1" type="number">
		                <button class="item__plus add_to_basket">
		                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
		                        <path d="M6 1L6 11M1 6H11" stroke="white" stroke-width="2" stroke-linecap="round"></path>
		                    </svg> 
		                </button>

                        <a style='display:block;margin-left:1rem;' href="/cart">в корзину</a>

		            </div>







                    <h4>Описание</h4>
                    <span>{{ $data->text }}</span>
                </div>
            </section>
            <section class="mg-40 newBg product">
                <h2> Рекомендуемые продукты  </h2>
           </section>
        </section>
        
        @include('layouts.shop.items', ['data' => $items, 'cart' => $cart])

@include('layouts.shop.footer')

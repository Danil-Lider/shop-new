<div style='display:none;' class="alert alert-success">Товар успешно добавлен в корзину</div>


<section class="product pd-40">
    <div class="container">


@foreach($data as $item)

        <div class="pro-container">
            <img class='item-images' src="{{ $item->image }}" alt="#">
            <div class="des">
            <span>{{ $item->price }} руб</span>
            <a class='db item-name' href='/shop/{{ $item->id}}'>{{ $item->name }}</a>
            <div class="star">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
            </div>
            <h4></h4>
        </div>


        <button data-id='{{ $item->id }}' @if($item->in_cart) style='display:none'  @endif class="addToCart">Добавить в корзину</button>

        <div @if(!$item->in_cart) style='display:none'  @endif class="product__count__container">
            <button class="item__minus">
                <svg width="12" height="2" viewBox="0 0 12 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="1" y1="1" x2="11" y2="1" stroke="white" stroke-width="2" stroke-linecap="round"></line>
                </svg>                                   
            </button>
            <input data-id='{{ $item->id }}' id="{{ $item->id }}" class="item_count" value="{{ $item->count ? $item->count : 1 }}" type="number">
            <button class="item__plus">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 1L6 11M1 6H11" stroke="white" stroke-width="2" stroke-linecap="round"></path>
                </svg> 
            </button>
            <a class='in_cart_text' href="/cart">в корзину</a>
        </div>

    </div>


@endforeach



</div>
</section>



<style>

.icon-cart {
    display: flex;
    justify-content:center;
    align-items:center;
}
.icon-img {
    width: 30px;height: 30px;
}
.cart-btn-style {
    text-decoration: none;
    display: flex;
    justify-content: center;
    align-items: center;
}

.product .pro-container .cart {
    color: white !important;
    border: 1px solid var(--borCards) !important;
    background: #088178 !important;
    border-radius: 15px !important;
    display: flex !important;
    justify-content: space-around !important;
    padding: 5px 10px !important;
    text-decoration: none !important;
    width: 200px !important;
    height: initial !important;
    position: relative;
    bottom:0;
    right: 0;
}
.item-name {
    font-family: HelveticaNeueCyr;
    font-style: normal;
    font-weight: bold;
    font-size: 20px;
    /* line-height: 25px; */
    letter-spacing: 0.2px;
    color: #494451;
    text-decoration: none;
}
</style>
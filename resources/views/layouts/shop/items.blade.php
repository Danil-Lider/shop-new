<div style='display:none;' class="alert alert-success">Товар успешно добавлен в корзину</div>

<section class="product pd-40">
    <div class="container">

    @foreach($data as $item)
        <div class="pro-container">
            <img src="{{ $item->image }}" alt="#">
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

                <a data-id='{{ $item->id }}' 

                @if(array_key_exists($item->id, $cart)) 
                    style='display:none'
                 @endif
                    class='addToCart cart-btn-style' href="#"> 
                    <ion-icon name="cart-outline" class="cart md hydrated icon-cart" role="img" aria-label="cart outline">
                        <img class='icon-img' src="/assets/img/cart.png" alt="">
                        В КОРЗИНУ
                    </ion-icon>

                   
                </a>

                <a data-id='{{ $item->id }}' 

                @if(!array_key_exists($item->id, $cart)) 
                    style='display:none'
                 @endif
                
                class='RemoveFromCart cart-btn-style' href="/cart"> 
                    <ion-icon name="cart-outline" class="cart md hydrated icon-cart" role="img" aria-label="cart outline">
                        <img class='icon-img' src="/assets/img/cart.png" alt="">
                        ОФОРМИТЬ
                    </ion-icon>

                </a>

                <!-- <input class='cart-number' type="number" value="1"> -->

        </div>
    @endforeach


</div>


<!-- <div class="wrapBtn">
    <a href="cart.php" class="btn">Learn More</a>
</div> -->
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
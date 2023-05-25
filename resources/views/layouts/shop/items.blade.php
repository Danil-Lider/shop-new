
<section class="product pd-40">
    <div class="container">

    @foreach($data as $item)
        <div class="pro-container">
            <img src="{{ $item->image }}" alt="#">
            <div class="des">
            <span>{{ $item->price }} руб</span>
            <a class='db' href='/shop/{{ $item->id}}'>{{ $item->name }}</a>
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
                    class='addToCart' href="./discProduct.html"> 
                    добавить в корзину
                    <ion-icon name="cart-outline" class="cart md hydrated" role="img" aria-label="cart outline"></ion-icon>
                </a>

                <a data-id='{{ $item->id }}' 

                @if(!array_key_exists($item->id, $cart)) 
                    style='display:none'
                 @endif
                
                class='RemoveFromCart' href="./discProduct.html"> 
                    Оформить
                    <ion-icon name="cart-outline" class="cart md hydrated" role="img" aria-label="cart outline"></ion-icon>
                </a>


                <!-- <input class='cart-number' type="number" value="1"> -->
            

        </div>
    @endforeach


</div>


<!-- <div class="wrapBtn">
    <a href="cart.php" class="btn">Learn More</a>
</div> -->
</section>
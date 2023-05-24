
<section class="product pd-40">
    <div class="container">

    @foreach($data as $item)
        <div class="pro-container">
            <img src="{{ $item->image }}" alt="#">
            <div class="des">
            <span>{{ $item->price }} руб</span>
            <h5>{{ $item->name }}</h5>
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
                     удалить из корзины
                    <ion-icon name="cart-outline" class="cart md hydrated" role="img" aria-label="cart outline"></ion-icon>
                </a>

            

        </div>
    @endforeach


</div>


<div class="wrapBtn">
    <a href="cart.php" class="btn">Learn More</a>
</div>
</section>
$(document).ready(function(){


    // mobile

    $(document).on('click', '.mobile', function(e){
        
        e.preventDefault();

        $('.menu').toggle();

        $('.logo').toggle();
    
    });








    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // ВСПОМОГАТЕЛЬНЫЕ ФУНКЦИИ

    // Добавление в корзину
    function add_to_cart(ID, count, size = 'default') {

        $.ajax({
            type: "POST",
            url: "/cart?act=addToBasket",
            data: {
                item_id: ID,
                count: count,
                size: size,
            },
            success: function (msg) {
            console.log(msg)
            },
        });
    }

    function delite_item_from_basket_count(ID, count, size) {
        $.ajax({
          type: "POST",
          url: "/cart?act=RemoveCountFromBasket",
          data: {
            item_id: ID,
            count : count,
            size: size
          },
          success: function (msg) {
            
            console.log(msg)

          },
        });
    }


    function delite_item_from_basket(item_id) {

        $.ajax({
            url: '/cart?act=RemoveFromBasket', // куда отправляем
            type: "post", // метод передачи
            dataType: "json", // тип передачи данных
            data: { // что отправляем
                "item_id":   item_id
            },
            // после получения ответа сервера
            success: function(data){
                console.log(data)
            }
        }).fail(function(jqXHR, textStatus) {
            console.log('На сервере ошибка:', textStatus)
        });

    }



    // ВСПОМОГАТЕЛЬНЫЕ ФУНКЦИИИ КОНЕЦ










    // СТРАНИЦА КОРЗИНЫ

    $(document).on('click', '.delite_from_cart', function(e){
        
        e.preventDefault();
        
        let id = $(this).data('id');

        $(this).parent().hide();

        delite_item_from_basket(id);

    })

    // СТРАНИЦА КОРЗИНЫ КОНЕЦ 








    // ДЕТАЛЬНАЯ СТРАНИЦА ТОВАРА 

    $('.addToCartDetail').click(function(e) {

        e.preventDefault(); 

        $(this).hide();

        $('.product__count').show()

        let id = $('.item_id').data('id');

        let size = $('select').val();

        add_to_cart(id , 1, size);


    })



    // УВЕЛЕЧЕНИЕ КОЛ-во ТОВАРА

    $(document).on('click', '.item__plus', function(e){

        e.preventDefault();

        let input = $(this).siblings('.item__number');

        let id = input.attr('id');

        let first_val = Number(input.val())

        input.val(first_val + 1)

        let count = Number(first_val + 1);

        let size = $('select').val();

        add_to_cart(id, count, size);

    })



    // УМЕНЬШЕНИЕ КОЛИЧЕСТВА ТОВАРА

    $(document).on('click', '.item__minus', function(e){

        e.preventDefault();

        let input = $(this).siblings('.item__number');
        let first_val = Number(input.val())

        if(input.val() > 1 || input.val() == 1) {
            
            input.val(first_val - 1)

        }

        let id = input.attr('id');
        let count = Number(input.val())
        let size = $('select').val();

        if(input.val() < 1) {

            $('.addToCartDetail').show()

            $(this).parent().siblings('.in_cart').hide();
            $(this).parent().hide();
            $(this).parent().siblings('.product-item-button-container').show();
            $(this).parent().siblings('.product-item-button-container').children().show();

            delite_item_from_basket(id);
         
        }else{

            delite_item_from_basket_count(id, count, size);

        }



    })


    $(document).on('click', '.remove__cart', function(e){
        e.preventDefault();
        let id = $(this).data('id');

        $(this).parent().hide();

        delite_item_from_basket(id);

    })






























    $('.addToCart').click(function(e) {

        e.preventDefault();
        
        var $this = $(this);
        var item_id = $(this).data('id');

        $($this).siblings('.RemoveFromCart').show()
        $($this).hide()
        
        $.ajax({
            url: '/cart?act=addToBasket', // куда отправляем
            type: "post", // метод передачи
            dataType: "json", // тип передачи данных
            data: { // что отправляем
                "item_id":   item_id
            },
            // после получения ответа сервера
            success: function(data){
                console.log(data)
            }
        }).fail(function(jqXHR, textStatus) {
          console.log('На сервере ошибка:', textStatus)
        });

    });

    // Удаление из корзины

    // $('.RemoveFromCart').click(function(e) {

    //     e.preventDefault();
        
    //     var $this = $(this);
    //     var item_id = $(this).data('id');

    //     $($this).siblings('.addToCart').show()
    //     $($this).hide()
      
        
    //     $.ajax({
    //         url: '/cart?act=RemoveFromBasket', // куда отправляем
    //         type: "post", // метод передачи
    //         dataType: "json", // тип передачи данных
    //         data: { // что отправляем
    //             "item_id":   item_id
    //         },
    //         // после получения ответа сервера
    //         success: function(data){
    //             console.log(data)
    //         }
    //     }).fail(function(jqXHR, textStatus) {
    //       console.log('На сервере ошибка:', textStatus)
    //     });

    // });



    var input = $('.validate-input .input100');
    $('.validate-form').on('submit',function(){
        var check = true;
        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }
        return check;
    });
    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });
    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }
    function showValidate(input) {
        var thisAlert = $(input).parent();
        $(thisAlert).addClass('alert-validate');
    }
    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
})



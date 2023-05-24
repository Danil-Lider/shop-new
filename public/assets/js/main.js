$(document).ready(function(){


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    console.log(123)

    // Добавление в корзину

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

    $('.RemoveFromCart').click(function(e) {

        e.preventDefault();
        
        var $this = $(this);
        var item_id = $(this).data('id');

        $($this).siblings('.addToCart').show()
        $($this).hide()
      
        
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

    });



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



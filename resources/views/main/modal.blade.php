@include('layouts.main.header')

<section>
<div class="container">
<div class="modalBackground">
<div class="modalActive">
    <div class="modalClose">
        X
    </div>
    <div class="modalWindow">
        <form  id="idForm" type='POST' action="https://keksgrad.ru/tg/request" class="form-submit">
            <div class="form-items">

                <div style="display: none" class="form-detail">

                    <div class="form-group">
                    <b>Марка и модель авто: </b>
                    <!-- <div> ACURA CDX 2016-2021</div> -->
                    <input class="avto" type="" name="avto" value="">
                    </div>

                    <div class="form-group">
                    <b>Модель подъемника: </b>
                    <!-- <div class="model"> </div> -->
                    <input class="model" type="text" name="model" value="">
                    </div>

                </div>

                <div class="form-group">
                <!-- <label for="exampleInputEmail1">Email address</label> -->
                <input required name="name" class=" form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ваш ФИО">
                </div>
                <div class="form-group">
                <!-- <label for="exampleInputPassword1">Password</label> -->
                <input required name="phone" class=" form-control" id="exampleInputPassword1" placeholder="Ваш телефон">
                </div>
                <div class="form-check">
                <input required  type="checkbox" class=" form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Согласен на обработку данных</label>
                </div>
                <div class="main-section-3__btn">
                    <button type="submit" class=" btn btn-primary">Отправить</button>
                </div>
            </div>

        </form>





    </div>
</div>
</div>


<!-- {{menu('admin')}} -->

<div class='table-btn'>Открыть моадльное окно</div>


        <div class="row">
            <div class="col">
                <h2 class="main-title">Подбор модели</>
                    <h3 class="main-sub-title">Набор подъемника подходит на любой год модели авто.
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="search">
                    <input type="text" class="search__input" placeholder="Введите марку автомобиля">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table>
                    <thead>
                    <th></th>
                    <th colspan="3">Марка и модель авто</th>
                    <th colspan="2">Модель подъемника</th>
                    </thead>
                    <tbody>


                 

                    @foreach($data as $key => $value)
                  
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $value->name }}</td>
                            <td><img src="{{ $value->image }}" alt=""></td>
                            <td>
                                @if(strlen($value->link_youtube) > 2)
                                
                                    <a target="_blank"
                                    href="{{ $value->link_youtube }}"><img
                                    src="img/youtube.svg" alt=""></a>

                                @endif
                            </td>
                            <td>{{ $value->model}}</td>
                            <td><a class="table-btn" href="">Заказать</a></td>
                        </tr>

                    @endforeach


                    
                   

                    </tbody>
                </table>
            </div>
        </div>

        </div>
    </section>

</main>


<style>
    table tbody tr .table-btn {
        opacity: 1;
    }
</style>

@include('layouts.main.footer')



<script
src="https://code.jquery.com/jquery-3.7.0.min.js"
integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
crossorigin="anonymous"></script>

<script type="text/javascript">

console.log(
$('.search__input'))


$("#idForm").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var actionUrl = form.attr('action');

    //  form.serialize()

    $.ajax({
        type: "POST",
        url: actionUrl,
        // dataType: 'json',
        data: form.serialize(), // serializes the form's elements.
        success: function(data)
        {

            if(data == 'ok'){
            $('.form-items').text('Спасибо за заявку !')
            // console.log(data); // show response from the php script.
            }  

            
        }
    });

    return false


});



// устанавливаем триггер для модального окна (название можно изменить)
const modalTrigger = $('.table-btn')

// получаем ширину отображенного содержимого и толщину ползунка прокрутки
const windowInnerWidth = document.documentElement.clientWidth;
const scrollbarWidth = parseInt(window.innerWidth) - parseInt(windowInnerWidth);

// привязываем необходимые элементы
const bodyElementHTML = document.getElementsByTagName("body")[0];
const modalBackground = document.getElementsByClassName("modalBackground")[0];
const modalClose = document.getElementsByClassName("modalClose")[0];
const modalActive = document.getElementsByClassName("modalActive")[0];

// функция для корректировки положения body при появлении ползунка прокрутки
function bodyMargin() {
bodyElementHTML.style.marginRight = "-" + scrollbarWidth + "px";
}

// при длинной странице - корректируем сразу
bodyMargin();


// событие нажатия на триггер открытия модального окна
modalTrigger.on( "click", function(e) {

    // if( $(this).parent().parent()) 
    // console.log($(this).parent().parent()[0].tagName)

    if($(this).parent().parent()[0].tagName == 'TR'){
        var form_avto =  $(this).parent().parent().find("td:eq(1)").text();
        var form_model = $(this).parent().parent().find("td:eq(4)").text();

        if(form_avto != null && typeof form_avto !== "undefined"){

            $('.form-detail').show()

            $('.avto').val(form_avto)
            $('.model').val(form_model)
        }
    }else{
        $('.form-detail').hide()
    }


    e.preventDefault();

    // делаем модальное окно видимым
    modalBackground.style.display = "block";

    // если размер экрана больше 1366 пикселей (т.е. на мониторе может появиться ползунок)
    if (windowInnerWidth >= 1366) {
        bodyMargin();
    }

    // позиционируем наше окно по середине, где 175 - половина ширины модального окна
    modalActive.style.left = "calc(50% - " + (175 - scrollbarWidth / 2) + "px)";
    });

    // нажатие на крестик закрытия модального окна
    modalClose.addEventListener("click", function () {
    modalBackground.style.display = "none";
    if (windowInnerWidth >= 1366) {
        bodyMargin();
    }
    });

    // закрытие модального окна на зону вне окна, т.е. на фон
    modalBackground.addEventListener("click", function (event) {
    if (event.target === modalBackground) {
        modalBackground.style.display = "none";
        if (windowInnerWidth >= 1366) {
            bodyMargin();
        }
    }
});

</script>







<script>

    document.addEventListener('DOMContentLoaded', () => {

        // Фильтр на странице модель

        const inputSearch = document.querySelector('.search__input');
        const itemCarStrings = document.querySelectorAll('tr td:nth-child(2)');

        console.log(itemCarStrings)

        if (inputSearch) {
            inputSearch.oninput = function (event) {

                if(this.value.length > 2){


                    $.ajax({
                        type: "get",
                        url: '/save_search_word',
                        dataType: 'json',
                        data: {
                            'word' : this.value,
                        },
                        success: function(data)
                        { 
                            console.log(data)
                        }
                    });

                }


                for (let itemCarString of itemCarStrings) {
                    let carName = itemCarString.textContent;
                    let carNameRegister = carName.toLowerCase();

                    if (carNameRegister.startsWith(this.value.toLowerCase())) {
                        itemCarString.closest('tr').style.display = 'table-row';
                    } else {
                        itemCarString.closest('tr').style.display = 'none';
                    }
                }
            }
        }

     
    })


</script>



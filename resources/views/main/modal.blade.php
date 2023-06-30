@include('layouts.main.header')

<section>
<div class="container">


<div class="modalBackground">
<div class="modalActive">
    <div class="modalClose">
        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 2L23.5 23.5" stroke="black" stroke-width="3"/>
            <path d="M23.5 2L2 23.5" stroke="black" stroke-width="3"/>
        </svg>
    </div>
    <div class="modalWindow">
        <form  id="idForm" type='POST' action="https://keksgrad.ru/tg/request" class="form-submit">
            <div class="form-items">

                <div style="display: none" class="form-detail">

                    <div class="form-group">
                    <div class='form-group-title'>Марка и модель авто: </div>
                    <!-- <div> ACURA CDX 2016-2021</div> -->
                    <input readonly class="avto form-group-input" type="" name="avto" value="">
                    </div>

                    <div class="form-group">
                    <div class='form-group-title'>Модель подъемника: </div>
                    <!-- <div class="model"> </div> -->
                    <input readonly class="model form-group-input" type="text" name="model" value="">
                    </div>

                </div>

                <div class="form-group">
                <!-- <label for="exampleInputEmail1">Email address</label> -->
                <input required name="name" class="name form-group-main-input form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ваш ФИО">
                </div>
                <div class="form-group">
                <!-- <label for="exampleInputPassword1">Password</label> -->
                <input required name="phone" class="phone form-group-main-input form-control" id="exampleInputPassword1" placeholder="Ваш телефон">
                </div>
                <div class="form-check">
                <input required  type="checkbox" class=" form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Согласен на обработку данных</label>
                </div>
                <div class="main-section-3__btn">
                    <button type="submit" class="form-btn btn btn-primary">Отправить</button>
                </div>
            </div>

        </form>





    </div>
</div>
</div>


<!-- {{menu('admin')}} -->

<!-- <div class='table-btn'>Открыть моадльное окно</div> -->


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
                            <td> 
                                <?php
                                    $chars = ['[',']']; // символы для удаления
                                    $img = str_replace($chars, '',  $value->image); // PHP код
                                    $img = json_decode($img);
                                ?>

                                @if($img)

                                    <img src=" {{ asset('storage') . '/' . $img->download_link }}" alt="">


                                @endif
                            </td>
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



@include('layouts.main.footer')

<style>
    .modalActive {
        transform: translate(-50%, -50%) !important;
        left: 50% !important;
        top: 50% !important;
    }
</style>



<script
src="https://code.jquery.com/jquery-3.7.0.min.js"
integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
crossorigin="anonymous"></script>

<script type="text/javascript">

console.log(
$('.search__input'))


function sendJSON() {
    // с помощью jQuery обращаемся к элементам на странице по их именам
    let name = document.querySelector('.name');
    let model = document.querySelector('.model');
    let phone = document.querySelector('.phone');
    const currentUrl = window.location.href;
    // а вот сюда мы поместим ответ от сервера
    let result = document.querySelector('.result');
    // создаём новый экземпляр запроса XHR
    let xhr = new XMLHttpRequest();
    // адрес, куда мы отправим нашу JSON-строку
    let url = "https://keksgrad.ru/tg/request";
    // открываем соединение
    xhr.open("POST", url, true);
    // устанавливаем заголовок — выбираем тип контента, который отправится на сервер, в нашем случае мы явно пишем, что это JSON
    xhr.setRequestHeader("Content-Type", "application/json");
    // когда придёт ответ на наше обращение к серверу, мы его обработаем здесь
    xhr.onreadystatechange = function () {
    // если запрос принят и сервер ответил, что всё в порядке
    if (xhr.readyState === 4 && xhr.status === 200) {
        // выводим то, что ответил нам сервер — так мы убедимся, что данные он получил правильно
        // result.innerHTML = this.responseText;

        $('.form-items').text('Спасибо за заявку !')
    }
    };
    // преобразуем наши данные JSON в строку
    var data = JSON.stringify({ "name": name.value, "model": model.value, "phone": phone.value, "currentUrl": currentUrl });
    // когда всё готово, отправляем JSON на сервер
    xhr.send(data);

    return xhr;
}


$("#idForm").submit(function(e) {

    console.log(sendJSON().statusText);

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var actionUrl = form.attr('action');

    //  form.serialize()

    $.ajax({
        type: "POST",
        url: 'https://keksgrad.ru/tg/request',
        dataType: 'application/json',
        data:  JSON.stringify({ "name": name.value, "model": model.value, "phone": phone.value }), // serializes the form's elements.
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
    // bodyElementHTML.style.marginRight = "-" + scrollbarWidth + "px";
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
        // modalActive.style.left = "calc(50% - " + (227 - scrollbarWidth / 2) + "px)";
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

        var lastCall = 0;

        function AjaxPostWord() {

            var now = Date.now();

            if(now - lastCall > 1000){
                
                var inputSearchElement =  $('.search__input')

                // const timerId = setTimeout(() => {

                    $.ajax({
                        type: "get",
                        url: '/save_search_word',
                        dataType: 'json',
                        data: { 
                            'word' : inputSearchElement.val(),
                        },
                        success: function(data)
                        { 
                            console.log(data)
                        }
                    });

                // }, 3000);

                lastCall = now;
            }
        }


        if (inputSearch) {

          

                inputSearch.oninput = function (event) {

                
                    if(this.value.length > 2){

                        // clearTimeout(timerId);
                        AjaxPostWord()
                        
                        // clearTimeout(timerId);
                            
                        // const timerId = setTimeout(() => {
                            


                        // }, 3000);

                        
                        
                        // }, 1000);
                        // останавливаем таймер
                        
                                                

                    


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

                    // clearTimeout(timerId);

                }

                // clearTimeout(timerId);

           
        }

     
    })


</script>


@include('layouts.main.footer')


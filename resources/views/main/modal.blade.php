@include('layouts.main.header')

<section>
        <div class="container">








<div class="modalBackground">
<div class="modalActive">
    <div class="modalClose">
        X
        <!-- <img src="modalCross.svg" /> -->
        
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


<div class='table-btn'>Открыть моадльное окно</div>




<style type="text/css">


.search__input {
border: 1px solid;
}

.form-check, .form-group {
margin-top: 2rem;
}
.main-section-3__btn {
margin-top: 2rem;
margin-bottom: 2rem;
}
/* убираем нижний ползунок прокрутки */
body {
overflow-x: hidden;
}

/* фон нашего модального окна */
.modalBackground {
display: none;
background: rgba(0, 0, 0, 0.8);
position: fixed;
width: 100%;
height: 100%;
cursor: pointer;
/* указываем z-индекс для корректного наслаивания */
z-index: 1;
top: 0;
left: 0;
}

/* позиционирование самого модального окна */
.modalActive {
position: absolute;
/*width: avto;*/
width: auto;
/*height: 495px;*/
height: min-content;
top: calc(50% - 250px);
left: calc(50% - 175px);

border-radius: 10px;
background-color: rgb(255, 255, 255);
cursor: default;
padding: 40px 20px;
width: 530px;
width: auto;
/*height: 580px;*/
/*height: */
}

/* кнопочка закрытия модального окна */
.modalClose {
font-family: var(--font-regular);
position: absolute;
right: 5px;
top: 5px;
width: 30px;
height: 30px;
cursor: pointer;
}

/* сама картинка кнопочки закрытия */
.modalClose img {
margin: 3px;
width: 24px;
height: 24px;
}

/* делаем позиционирование внутренних элементов относительно модального окна */
.modalWindow {
position: relative;
}
</style>

















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

                    <tr>
                        <td>1</td>
                        <td>Универсальный</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-KS kick sensor</td>
                        <td><a class="table-btn" href="">Заказать</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>ACURA CDX 2016-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-AR-01</td>
                        <td><a class="table-btn" href="">Заказать</a></td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>AUDI A3 (Sedan) 2016-2019</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-AU-01</td>
                        <td><a class="table-btn" href="">Заказать</a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>AUDI A3L 2021-2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-AU-02</td>
                        <td><a class="table-btn" href="">Заказать</a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>AUDI A4L 2017-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-AU-03</td>
                        <td><a class="table-btn" href="">Заказать</a></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>AUDI A6L 2012-2018</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-AU-08</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>AUDI A6L 2019-2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-AU-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>AUDI A7L 2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-AU-05</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>AUDI Q3 2015-2016</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-AU-06</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>AUDI Q2L 2019-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-AU-07</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>11</td>
                        <td>BAOJUN Hongguang S3 2018-2019</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-BN-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>BAOJUN 530 2018-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-BN-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>BAOJUN RS-3 2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-BN-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>BAOJUN RM-5 2019</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-BN-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>BAOJUN RC-6 2019</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-BN-05</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>BAOJUN Victory 2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-BN-06</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>BAOJUN Jiachen 2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-BN-07</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>BAOJUN Asta 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-BN-08</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>19</td>
                        <td>BYD Song 2019-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-BD-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>BYD Song MAX 2017-2019</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-BD-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>BYD Song MAX 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-BD-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>BYD Song Pro 2019-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-BD-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>23</td>
                        <td>BYD Song Plus 2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-BD-05</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>24</td>
                        <td>BYD Yuan Plus 2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-BD-06</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>25</td>
                        <td>BYD Han 2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-BD-07</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>26</td>
                        <td>BWM X1 2016-2018</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-BW-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>27</td>
                        <td>BWM X2 2018-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-BW-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>28</td>
                        <td>BWM X3 2011-2018</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-BW-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>29</td>
                        <td>BWM 3 series 2012-2018</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-BW-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>30</td>
                        <td>BWM 3 series 2020-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-BW-05</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>31</td>
                        <td>BWM 5 series 2011-2017</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-BW-06</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>32</td>
                        <td>BWM 218i imported wagon 2016-2018</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-BW-07</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>33</td>
                        <td>BWM 5 series 2018</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-BW-08</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>34</td>
                        <td>BMW Brilliance 2 series wagon 2016-2018</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-BW-09</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>35</td>
                        <td>CADILLAC XT4 2018-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CD-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>36</td>
                        <td>CADILLAC XT5 2016-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CD-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>37</td>
                        <td>CADILLAC CT4 2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CD-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>38</td>
                        <td>CADILLAC CT5 2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CD-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>39</td>
                        <td>CADILLAC CT6 2016-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CD-05</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>40</td>
                        <td>CADILLAC ATS-L 2016-2017</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CD-06</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>41</td>
                        <td>CADILLAC XTS 2018</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CD-07</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>42</td>
                        <td>Citroen DS6 2015-2019</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-FR-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>43</td>
                        <td>Citroen DS7 2018-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-FR-05</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>44</td>
                        <td>Citroen C5X 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-FR-06</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>45</td>
                        <td>Citroen AirCross C5 2017-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-FR-07</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>46</td>
                        <td>Changan CS55 2017-2019</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CHA-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>47</td>
                        <td>Changan CS35</td>
                        <td><img src="img/auto/auto-10.jpg" alt=""></td>
                        <td></td>
                        <td>TG-CHA-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>48</td>
                        <td>Changan CS55 PLUS 2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CHA-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>49</td>
                        <td>Changan CS35 </td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CHA-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>50</td>
                        <td>Changan CS75 2015-2017</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CHA-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>51</td>
                        <td>Changan CS75 2018-2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CHA-05</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>52</td>
                        <td>Changan CS75 PLUS 2020-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CHA-06</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>53</td>
                        <td>Changan CS85coupe 2019-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CHA-07</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>54</td>
                        <td>Changan CS95 2017-2019</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CHA-08</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>55</td>
                        <td>Changan Auchan X5 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CHA-09</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>56</td>
                        <td>Changan Auchan X7/X7plus 2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CHA-10</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>57</td>
                        <td>Changan UNI-T（Gravity） 2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CHA-11</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>58</td>
                        <td>Jeep Cherokee 2016-2017</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CH-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>59</td>
                        <td>Jeep Cherokee 2019-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CH-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>60</td>
                        <td>Jeep Cherokee Compass 2017-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CH-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>61</td>
                        <td>Chevrolet Malibu XL 2016-2019</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CV-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>62</td>
                        <td>Chevroletb Blazer 2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CV-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>63</td>
                        <td>Chevrolet MENLO 2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CV-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>64</td>
                        <td>Chevrolet Equinox 2017-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CV-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>65</td>
                        <td>Chery Tiggo 4</td>
                        <td><img src="img/auto/auto-6.jpg" alt=""></td>
                        <td></td>
                        <td>TG-CHE-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>66</td>
                        <td>Chery Tiggo 7 2017-2019</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CHE-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>67</td>
                        <td>Chery Tiggo 8 2018-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CHE-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>68</td>
                        <td>Chery Tiggo 7 2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CHE-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>69</td>
                        <td>Chery Tiggo 5X 2017-2019</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CHE-05</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>70</td>
                        <td>Chery Tiggo 4 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-CHE-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>71</td>
                        <td>FAW Junpai CX65 2018</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-FA-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>72</td>
                        <td>FAW BESTURN T55 2021-2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-FA-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>73</td>
                        <td>FAW BESTURN T77 2019-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-FA-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>74</td>
                        <td>FAW BESTURN T99 2019-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-FA-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>75</td>
                        <td>FAW B70 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-FA-05</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>76</td>
                        <td>FAW B70 2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-FA-06</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>77</td>
                        <td>FAW Hongqi H5 2019-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-FA-07</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>78</td>
                        <td>FAW Hongqi H9 2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-FA-08</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>79</td>
                        <td>FAW Hongqi HQ9 2023</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-FA-09</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>80</td>
                        <td>Ford Hongqi HQ9 2023</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-FO-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>81</td>
                        <td>Ford EDGE/EDGE plus 2015-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-FO-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>82</td>
                        <td>Ford Everest 2016-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-FO-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>83</td>
                        <td>Ford TERRITORY/TERRITORY S 2019-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-FO-05</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>84</td>
                        <td>Ford ESCAPE 2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-FO-06</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>85</td>
                        <td>Ford MONDEO 2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-FO-07</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>86</td>
                        <td>Ford Equator Sport 2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-FO-08</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>87</td>
                        <td>Ford EVOS 2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-FO-09</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>88</td>
                        <td>Geely Atlas Pro</td>
                        <td><img src="img/auto/auto-12.jpg" alt=""></td>
                        <td></td>
                        <td>TG-GL-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>89</td>
                        <td>GEELY Boyue X70 2016-2018</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-JL-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>90</td>
                        <td>GEELY Atlas PRO 2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-GL-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>91</td>
                        <td>GEELY Haoyue 2020-2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-JL-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>92</td>
                        <td>GEELY Coolray/X50 2019-2020</td>
                        <td><img src="img/auto/auto-4.jpg" alt=""></td>
                        <td><a target="_blank"
                                href="https://www.youtube.com/watch?v=SMVMHOhw5U4&amp;t=61s&amp;ab_channel=INCAR-%D0%B0%D0%B2%D1%82%D0%BE%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5%D0%BC%D1%83%D0%BB%D1%8C%D1%82%D0%B8%D0%BC%D0%B5%D0%B4%D0%B8%D0%B9%D0%BD%D1%8B%D0%B5%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D1%8B"><img
                                src="img/youtube.svg" alt=""></a></td>
                        <td>TG-JL-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>93</td>
                        <td>GEELY PREFACE 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-JL-05</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>94</td>
                        <td>GEELY PREFACE 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-JL-05</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>95</td>
                        <td>GEELY Boyue X 2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-JL-06</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>96</td>
                        <td>Hanteng X7 2018-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HG-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>


                    <tr>
                        <td>97</td>
                        <td>HAVAL Dargo</td>
                        <td><img src="img/auto/auto-17.jpg" alt=""></td>
                        <td></td>
                        <td>TG-HL-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>98</td>
                        <td>HAVAL F7X</td>
                        <td><img src="img/auto/auto-1.jpg" alt=""></td>
                        <td><a target="_blank"
                                href="https://www.youtube.com/watch?v=R7e8saJ-Pp4&ab_channel=INCAR-%D0%B0%D0%B2%D1%82%D0%BE%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5%D0%BC%D1%83%D0%BB%D1%8C%D1%82%D0%B8%D0%BC%D0%B5%D0%B4%D0%B8%D0%B9%D0%BD%D1%8B%D0%B5%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D1%8B"><img
                                src="img/youtube.svg" alt=""></a></td>
                        <td>TG-HL-01</td>
                        <!--  <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>99</td>
                        <td>HAVAL F7</td>
                        <td><img src="img/auto/auto-2.jpg" alt=""></td>
                        <td><a target="_blank"
                                href="https://www.youtube.com/watch?v=RD6WsGMrulk&t=33s&ab_channel=INCAR-%D0%B0%D0%B2%D1%82%D0%BE%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5%D0%BC%D1%83%D0%BB%D1%8C%D1%82%D0%B8%D0%BC%D0%B5%D0%B4%D0%B8%D0%B9%D0%BD%D1%8B%D0%B5%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D1%8B"><img
                                src="img/youtube.svg" alt=""></a></td>
                        <td>TG-HL-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>100</td>
                        <td>HAVAL JOLION</td>
                        <td><img src="img/auto/auto-3.jpg" alt=""></td>
                        <td><a target="_blank"
                                href="https://www.youtube.com/watch?v=vWMGqFd21dU&ab_channel=INCAR-%D0%B0%D0%B2%D1%82%D0%BE%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5%D0%BC%D1%83%D0%BB%D1%8C%D1%82%D0%B8%D0%BC%D0%B5%D0%B4%D0%B8%D0%B9%D0%BD%D1%8B%D0%B5%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D1%8B"><img
                                src="img/youtube.svg" alt=""></a></td>
                        <td>TG-HL-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>101</td>
                        <td>Haval H2(Black logo/Red logo) 2018</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HL-05</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>102</td>
                        <td>Haval H2S(Red logo) 2017-2018</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HL-06</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>103</td>
                        <td>Haval H4(Blue logo) 2018-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HL-07</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>104</td>
                        <td>Haval F5 2018-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HL-08</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>105</td>
                        <td>Haval H6(Red and Blue logo) 2017-2018</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HL-09</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>106</td>
                        <td>Haval H6(Black logo) 2019-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HL-10</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>107</td>
                        <td>Third generation Haval H6 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HL-11</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>108</td>
                        <td>Haval H6S 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HL-12</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>109</td>
                        <td>Haval H6 Coupe 2017-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HL-13</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>110</td>
                        <td>Haval F7 2019-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HL-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>111</td>
                        <td>Haval F7X 2019-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HL-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>112</td>
                        <td>Haval H7(Blue logo) 2016-2017</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HL-14</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>113</td>
                        <td>Haval VV7 2017-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HL-15</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>114</td>
                        <td>Haval Dargo 2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HL-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>115</td>
                        <td>Haval JOLION 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HL-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>116</td>
                        <td>Ora goodcat 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HL-16</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>117</td>
                        <td>TANK 300 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HL-17</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>118</td>
                        <td>HYUNDAI Tucson IV</td>
                        <td><img src="img/auto/auto-13.jpg" alt=""></td>
                        <td></td>
                        <td>TG-HY-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>119</td>
                        <td>HYUNDAI Creta</td>
                        <td><img src="img/auto/auto-14.jpg" alt=""></td>
                        <td></td>
                        <td>TG-HY-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>120</td>
                        <td>HYUNDAI Tucson 2015-2017</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HY-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>121</td>
                        <td>HYUNDAI Tucson 2019-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HY-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>122</td>
                        <td>HYUNDAI SANTAFE 2017</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HY-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>123</td>
                        <td>HYUNDAI SANTAFE 2019-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HY-05</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>124</td>
                        <td>HYUNDAI IX25 2017</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HY-06</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>125</td>
                        <td>HYUNDAI IX25 2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HY-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>126</td>
                        <td>HYUNDAI IX35 2013-2017</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HY-07</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>127</td>
                        <td>HYUNDAI IX35 2018-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HY-08</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>128</td>
                        <td>HYUNDAI IX35 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HY-09</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>129</td>
                        <td>HYUNDAI IX45 2013-2016</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HY-10</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>130</td>
                        <td>HYUNDAI Elantra 2021-2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HY-11</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>131</td>
                        <td>HYUNDAI SONATA 2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HY-12</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>132</td>
                        <td>HYUNDAI Custo 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HY-13</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>133</td>
                        <td>HONDA ELYSION 2016-2019</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HO-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>134</td>
                        <td>HONDA ODYSSEY hybrid version 2015-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HO-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>135</td>
                        <td>HONDA ODYSSEY/ ELYSION 2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HO-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>136</td>
                        <td>HONDA AVANCIER/URV 2017-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HO-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>137</td>
                        <td>HONDA CRV 2018-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HO-05</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>138</td>
                        <td>HONDA HRV/XRV 2015-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HO-06</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>139</td>
                        <td>HONDA BREEZE 2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HO-07</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>140</td>
                        <td>HONDA ACCORD 2018-2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HO-08</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>141</td>
                        <td>HONDA CIVIC 2016-2019</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-HO-09</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>142</td>
                        <td>Infiniti QX50</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-IF-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>143</td>
                        <td>Infiniti QX60</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-IF-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>144</td>
                        <td>JAC GS4</td>
                        <td><img src="img/auto/auto-8.jpg" alt=""></td>
                        <td></td>
                        <td>TG-JAC-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>145</td>
                        <td>JAC J7</td>
                        <td><img src="img/auto/auto-7.jpg" alt=""></td>
                        <td></td>
                        <td>TG-JAC-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>146</td>
                        <td>JAC J7</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-JAC-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>147</td>
                        <td>JAC GS4</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-JAC-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>148</td>
                        <td>JAC X4 (Москвич)</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-JAC-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>149</td>
                        <td>JAC Sihao X8 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-JAC-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>150</td>
                        <td>JAC Sihao QX 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-JAC-05</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>151</td>
                        <td>JAGUAR XF 2016</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-JG-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>152</td>
                        <td>JAGUAR XFL 2017-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-JG-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>153</td>
                        <td>JAGUAR E-PACE 2018</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-JG-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>154</td>
                        <td>JAGUAR XE/XEL 2018-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-JG-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>155</td>
                        <td>Kia Carnival</td>
                        <td><img src="img/auto/auto-5.jpg" alt=""></td>
                        <td></td>
                        <td>TG-KIA-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>156</td>
                        <td>KIA sorento 2015-2018</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-KIA-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>157</td>
                        <td>KIA K5 2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-KIA-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>158</td>
                        <td>KIA sportage 2015-2019</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-KIA-05</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>159</td>
                        <td>KIA sportage ACE 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-KIA-06</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>160</td>
                        <td>KIA KX3 (Seltos) 2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-KIA-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>161</td>
                        <td>KIA Carnival</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-KIA-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>162</td>
                        <td>KIA KX5 2016-2019</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-KIA-07</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>163</td>
                        <td>Landrover Discovery 2016-2019</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-LR-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>164</td>
                        <td>Landrover Discovery Sport 2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-LR-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>165</td>
                        <td>Landrover Discovery Sport 2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-LR-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>166</td>
                        <td>Landrover Velar 2018-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-LR-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>167</td>
                        <td>Landrover Evoque 2015-2018</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-LR-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>168</td>
                        <td>Mazda CX-5 2013-2015</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-MZ-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>169</td>
                        <td>Mazda CX-5 2017-2019</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-MZ-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>170</td>
                        <td>Mazda CX-30 2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-MZ-05</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>171</td>
                        <td>Mazda CX-5 2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-MZ-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>172</td>
                        <td>Lifan Marvell 2016-2017</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-LF-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>173</td>
                        <td>Mitsubishi Pajero (Montero) Sport</td>
                        <td><img src="img/auto/auto-15.jpg" alt=""></td>
                        <td></td>
                        <td>TG-MS-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>174</td>
                        <td>Mitsubishi ASX 2013-2018</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-MS-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>175</td>
                        <td>Mitsubishi Pajero 2016-2019</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-MS-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>176</td>
                        <td>Mitsubishi Pajero Sport 2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-MS-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>177</td>
                        <td>Mitsubishi XPANDER</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-MS-05</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>178</td>
                        <td>Mitsubishi Outlander 2018-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-MS-06</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>179</td>
                        <td>Mitsubishi Outlander 2023</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-MS-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>180</td>
                        <td>Mercedes-Benz GLB 2020-2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-MB-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>181</td>
                        <td>Mercedes-Benz GLC 2016-2019</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-MB-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>182</td>
                        <td>Mercedes-Benz A series 2019-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-MB-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>183</td>
                        <td>Mercedes-Benz E series 2011-2015</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-MB-05</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>184</td>
                        <td>Mercedes-Benz E series 2016-2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-MB-06</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>185</td>
                        <td>Mercedes-Benz E350el 2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-MB-07</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>186</td>
                        <td>Mercedes-Benz C series 2015-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-MB-08</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>187</td>
                        <td>Mercedes-Benz C series 2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-MB-09</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>188</td>
                        <td>Mercedes-Benz B series 2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-MB-10</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>189</td>
                        <td>Mercedes-Benz CLS 2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-MB-11</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>190</td>
                        <td>Mercedes-Benz CLA (sedan) 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-MB-12</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>191</td>
                        <td>Nissan X-TRAIL 2014-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-NS-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>192</td>
                        <td>Nissan X-TRAIL 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-NS-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>193</td>
                        <td>Nissan Murano 2015-2019</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-NS-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>194</td>
                        <td>Nissan Qashqai 2016-2018</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-NS-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>195</td>
                        <td>Nissan Patrol 2012-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-NS-05</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>196</td>
                        <td>Nissan Terra 2018-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-NS-06</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>197</td>
                        <td>Omoda C5</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-OM-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>198</td>
                        <td>OMODA C5</td>
                        <td><img src="img/auto/auto-9.jpg" alt=""></td>
                        <td></td>
                        <td>TG-OM-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>199</td>
                        <td>LEXUS RX200 2016-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-LX-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>200</td>
                        <td>LEXUS RX300 2016-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-LX-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>201</td>
                        <td>LEXUS NX 2015-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-LX-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>202</td>
                        <td>LEXUS NX260 2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-LX-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>203</td>
                        <td>LEXUS UX 2019-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-LX-05</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>204</td>
                        <td>LEXUS ES 2018-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-LX-06</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>205</td>
                        <td>Renault Koleos 2017-2019</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-FR-08</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>206</td>
                        <td>SKODA KODIAQ 2017-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-SK-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>207</td>
                        <td>SKODA Karoq 2018-2019</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-SK-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>208</td>
                        <td>SUBARU FORESTER 2019-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-SU-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>209</td>
                        <td>SUBARU FORESTER 2021-2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-SU-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>210</td>
                        <td>PORSHE Cayenne 2012</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-PO-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>211</td>
                        <td>PEUGEOT 2008 2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-FR-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>212</td>
                        <td>PEUGEOT 4008 2017-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-FR-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>213</td>
                        <td>PEUGEOT 5008 2017-2019</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-FR-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>214</td>
                        <td>TOYOTA Highlander 2015-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-TY-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>215</td>
                        <td>TOYOTA Highlander/CROWN KLUGER 2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-TY-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>216</td>
                        <td>TOYOTA RAV4 Review 2015-2019</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-TY-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>217</td>
                        <td>TOYOTA RAV4 Review/Wildlander 2020+</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-TY-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>218</td>
                        <td>TOYOTA Innova 2016-2019</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-TY-05</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>219</td>
                        <td>TOYOTA RAV4</td>
                        <td><img src="img/auto/auto-16.jpg" alt=""></td>
                        <td></td>
                        <td>TG-TY-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>220</td>
                        <td>TOYOTA Camry 2018-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-TY-06</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>221</td>
                        <td>TOYOTA Avalon 2019-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-TY-07</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>222</td>
                        <td>TOYOTA ALLION 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-TY-08</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>223</td>
                        <td>TOYOTA IZOA/CHR 2018-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-TY-09</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>224</td>
                        <td>TOYOTA Sienna 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-TY-10</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>225</td>
                        <td>TOYOTA HARRIER 2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-TY-110</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>226</td>
                        <td>TOYOTA FRONTLANDER 2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-TY-12</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>227</td>
                        <td>TRUMPCHI GS3 2017-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-TR-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>228</td>
                        <td>TRUMPCHI GE3 2018-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-TR-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>229</td>
                        <td>TRUMPCHI GS4 2015-2019</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-TR-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>230</td>
                        <td>TRUMPCHI GS4 2020-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-TR-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>231</td>
                        <td>TRUMPCHI GS4 Coupe 2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-TR-05</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>232</td>
                        <td>TRUMPCHI GS4 Plus 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-TR-06</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>233</td>
                        <td>TRUMPCHI GS5 2019-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-TR-07</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>234</td>
                        <td>TRUMPCHI GS8/GS7 2017-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-TR-08</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>235</td>
                        <td>TRUMPCHI GM6/M6/M6Pro 2019-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-TR-09</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>236</td>
                        <td>TRUMPCHI GM8/M8 2018-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-TR-10</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>237</td>
                        <td>TRUMPCHI Aion Y 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-TR-11</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>238</td>
                        <td>TRUMPCHI EMPOW 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-TR-12</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>239</td>
                        <td>TRUMPCHI Aion Y plus 2023</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-TR-13</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>240</td>
                        <td>VOLVO XC40 2020-2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-VL-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>241</td>
                        <td>VOLVO XC60 2018-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-VL-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>242</td>
                        <td>VOLVO S60 2020-2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-VL-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>243</td>
                        <td>VOLVO S90 2018-2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-VL-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>244</td>
                        <td>Volkswagen EUR Touareg 2011-2017</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-VW-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>245</td>
                        <td>Volkswagen EUR Sharan 2012-2019</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-VW-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>246</td>
                        <td>Volkswagen Tiguan L 2017-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-VW-03</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>247</td>
                        <td>Volkswagen TOURAN L 2016-2018</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-VW-04</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>248</td>
                        <td>Volkswagen THARU/THARU plus 2019-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-VW-05</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>249</td>
                        <td>Volkswagen Tiguan 2010-2017</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-VW-06</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>250</td>
                        <td>Volkswagen Tiguan X 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-VW-07</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>251</td>
                        <td>Volkswagen TAYRON 2018-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-VW-08</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>252</td>
                        <td>Volkswagen T-ROC 2018-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-VW-09</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>253</td>
                        <td>Volkswagen Viloran 2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-VW-10</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>254</td>
                        <td>Volkswagen ID4X 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-VW-11</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>255</td>
                        <td>Volkswagen ID.4 CROZZ 2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-VW-12</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>256</td>
                        <td>Volkswagen Lamando L 2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-VW-13</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>257</td>
                        <td>Volkswagen JETTA VS5/VS7 2019-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-VW-14</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>258</td>
                        <td>Volkswagen GOLF 7 2017-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-VW-15</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>259</td>
                        <td>Volkswagen GOLF 8 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-VW-16</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>260</td>
                        <td>Volkswagen PASSAT 2016-2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-VW-17</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>261</td>
                        <td>Volkswagen PASSAT 2019-2022</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-VW-18</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>262</td>
                        <td>Volkswagen Sagitar 2016-2018</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-VW-19</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>263</td>
                        <td>Volkswagen Sagitar 2019-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-VW-20</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>264</td>
                        <td>Volkswagen MAGOTAN B8 2017-2020</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-VW-21</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>265</td>
                        <td>Volkswagen CC 2012-2018</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-VW-22</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    <tr>
                        <td>266</td>
                        <td>XPENG P5 2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-XP-01</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>
                    <tr>
                        <td>267</td>
                        <td>XPENG P7 2020-2021</td>
                        <td><img src="" alt=""></td>
                        <td></td>
                        <td>TG-XP-02</td>
                        <!-- <td><a class="table-btn" href="">Заказать</a></td> -->
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>

        </div>
    </section>

</main>

<footer class="footer">
    <div class="container">
        <div class="row">
        <div class="col">
            <div class="footer__wrap">
                <picture class="footer__pic">
                    <img class="footer__img" src="img/footer-img.png" alt="">
                </picture>
                <div class="footer__inner">
                    <div class="footer__text">
                    Кик-сенсор универсальный и&nbsp;подходит на&nbsp;любую модель
                    </div>
                    <!-- <a class="footer__btn btn" href="">
                            Заказать
                        </a> -->
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="footer__bgc-img-wr d-none d-lg-block">
        <img class="footer__bgc-img" src="img/footer-img-2.png" alt="">
    </div>





    @include('layouts.main.footer')




<script
src="https://code.jquery.com/jquery-3.7.0.min.js"
integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
crossorigin="anonymous"></script>

<script type="text/javascript">


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

        const btnMobileMenu = document.querySelector('.btn-burger');
        const mobileMenu = document.querySelector('.mobile-menu');
        const logo = document.querySelector('.logo .logo__img');
        const bodyFix = document.querySelector('body');


        btnMobileMenu.onclick = function () {
        this.classList.toggle('btn-burger-active');
        mobileMenu.classList.toggle('mobile-menu-active');
        bodyFix.classList.toggle('body-fix');

        let logoAttr = logo.getAttribute('src');

        if (logoAttr === 'img/white-logo.png') {
            logo.setAttribute('src', 'img/black-logo.svg');
        } else {
            logo.setAttribute('src', 'img/white-logo.png');
        }
        }

        // Фильтр на странице модель

        const inputSearch = document.querySelector('.search__input');
        const itemCarStrings = document.querySelectorAll('tr td:nth-child(2)');

        console.log(itemCarStrings)

        if (inputSearch) {
        inputSearch.oninput = function () {
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

        let yearFooter = document.querySelector('.date');
        var date = new Date();

        yearFooter.textContent = date.getFullYear();

    })


</script>



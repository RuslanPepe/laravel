@extends('template')
@section('title', 'order-template')

@section('style')
  <style>
    .nav-order{
      margin: 0 0 0 60px;
    }
    .nav-order-text{
      font-size: 14px;
      font-weight: 600;
    }
    p{
      margin: 0;
      display: inline-block;
    }
    .nav-order-text{
      display: inline-block;
    }
    .textName-order{
      font-size: 48px;
      font-weight: 700;
      width: 870px;
      margin: 0 0 0 70px;
    }
    .nav-order-arrow{
      width: 12px;
    }
    .room-location-address-text{
      display: inline-block;
      font-weight: 600;
      font-size: 16px;
      margin: 0 3px 0 70px;
    }
    .room-location-address-text-map{
      display: inline-block;
      font-weight: 500;
      font-size: 16px;
      color: rgba(0, 138, 176, 0.81);
    }
    .room-location-metro-text-time{
      font-size: 14px;
      font-weight: 600;
    }
    .room-location-metro-text{
      font-size: 14px;
      font-weight: 500;
      margin-left: 2px;
    }
    .room-location-metro{
      margin: 3px 0 0 70px;
    }
    .room-location-metro-group{
      margin: 0 10px 0 0;
      display: inline-block;
    }
    .room-photo{
      margin: 19px 0 0 70px;
    }
    .room-price-menu{
      background: white;
      width: 487px;
      height: 130px;
      box-shadow: 0 0 9px .3px rgba(0, 0, 0, 0.03);
      border-radius: 15px;
      position: absolute;
      left: 1362px;
      top: 256px;
    }
    .room-price-menu-text{
      font-weight: 600;
      font-size: 34px;
      margin: 33px 0 0 33px;
    }
    .room-price-menu-text-m2{
      font-size: 24px;
      font-weight: 600;
      margin: 0 0 0 11px;
    }
    .room-price-menu-contact{
      top: 91px;
      width: 487px;
      height: 42px;
      background: rgba(0, 0, 0, .8);
      border-radius: 0 0 15px 15px;
      position: absolute;
      display: flex;
      justify-content: space-evenly;
      align-items: center;
    }
    .room-price-menu-contact-center{
      display: flex;
      justify-content: space-evenly;
    }
    .room-price-menu-contact-text{
      font-size: 18px;
      font-weight: 600;
      color: white;
    }
    .room-developer{
      position: absolute;
      box-shadow: 0 0 10px .3px rgba(0, 0, 0, 0.03);
      width: 487px;
      height: 260px;
      top: 419px;
      left: 1362px;
    }
    .room-developer-img_dev{
      width: 90px;
      margin: 0 0 0 15px;
      background-color: white;
    }
    .room-developer-text_dev{
      margin: 5px 0 0 70px;
      font-size: 18px;
      font-weight: 600;
    }
    .room-developer-text-name_dev{
      position: absolute;
      font-weight: bold;
      font-size: 24px;
      margin: 25px 0 0 10px;
    }
    .group-room-dev-2{
      font-size: 18px;
      text-align: center;
      margin: 55px 0 0 0;
    }
    .group-room-develope-2{
      margin: 0 20px;
    }
    .group-room-dev-1{
      margin: 10px 0 0 0;
    }
    .room-credit_ipoteka{
      position: absolute;
      left: 1467px;
      top: 720px;
    }
    .room-characters{
      margin: 80px 0 30px 250px;
      width: 890px;
    }
    .room-img-group{
      margin: 15px 0 0 500px;
    }
    .room-img-1{
      height: 60px;
    }
    .room-img-2{
      height: 60px;
    }
    .room-img-3{
      height: 60px;
    }
    .room-characters-group-text{
      font-size: 16px;
      margin: 6px 0 0 70px;
    }
    .room-characters-img{
      position: absolute;
      display: inline-block;
    }
    .room-characters-num-group{
      font-weight: 600;
    }
    .room-characters-group{
      display: inline-block;
    }
    .room-characters-group-all{
      display: inline-block;
      justify-items: center;
    }
    .room-characters-group-row-pos{
      margin: 0 0 35px 0;
      display: grid;
    }
    .room-characters-group-center-1{
      justify-items: center;
      /*margin: 0 80px 0 80px ;*/
    }
    .room-characters-group-center-2{
      justify-items: start;
      margin: 0 0 0 20px;
    }
    .content-order{
      padding: 0 30px 60px 0;
    }
    .room-zhk-description{
      margin: 0 0 0 135px;
      width: 1100px;
    }
    .room-zhk-description-text{
      font-size: 18px;
      font-weight: 400;
    }
    .room-about-apartment-main-text{
      font-size: 32px;
      font-weight: 600;
      margin: 50px 0 0 140px;
    }
    .room-about-apartment-group{
      width: 380px;
      margin: 0 0 0 143px;
    }
    .room-about-apartment-group-select{
      justify-content: space-between;
      display: flex;
      margin: 30px 0;
    }
    .room-about-apartment-type-1{
      font-size: 20px;
      color: rgba(0, 0, 0, .8);
      align-content: center;
    }
    .room-about-apartment-type-2{
      font-size: 20px;
      color: rgba(0, 0, 0, .8);
      text-align: right;
    }
    .room-about-apartment-group-hr{
      opacity: 100%;
      width: 380px;
      display: flex;
      justify-content: center;
    }
    .room-about-apartment-group-hr_hr{
      opacity: 100%;
      width: 365px;
      margin: 0;
    }
    .room-about-apartment{
      display: inline-grid;
    }
    .room-apartament-finishing{
      margin: 50px 0 0 140px;
    }
    .room-apartament-finishing-text-mn{
      font-size: 32px;
      font-weight: 600;
      display: block;
    }
    .room-apartament-finishing-text{
      color: rgba(0, 0, 0, .68);
      margin: 10px 0 0 0;
      font-size: 20px;
      font-weight: 600;
      display: block;
    }
    .room-apartament-finishing-img{
      margin: 20px 0 0 3px;
      border-radius: 7px;
    }
    .room-location-map{
      margin: 50px 0 0 140px;
    }
    .room-location-map-img{
      width: 710px;
      border-radius: 15px;
    }
    .room-location-map-text-mn{
      display: block;
      font-size: 32px;
      font-weight: 600;
      margin: 0 0 30px 0;
    }
    .room-developer-description{
      margin: 50px 0 0 140px;
      padding: 30px 0 20px 65px;
      width: 1094px;
      box-shadow: 0 0 16px .7px rgba(0, 0, 0, .02);
    }
    .room-developer-description-text_avtor{
      font-size: 16px;
      font-weight: 600;
      display: block;
    }
    .room-developer-description-text_mn{
      margin: 30px 0 0 0;
      font-size: 36px;
      font-weight: 600;
      display: block;
    }
    .room-developer-description-verify-good_img{
      margin: 0 0 0 3px;
    }
    .room-developer-description-text_verify-good{
      font-weight: 600;
      margin: 0 0 45px 0;
    }
    .room-developer-description-characters-text_mn{
      font-size: 36px;
      font-weight: 600;
      margin: 0 10px 0 0;
    }
    .room-developer-description-characters-text_sp{
      font-size: 20px;
      font-weight: 500;
      align-content: start;
    }
    .room-developer-description-character-text{
      display: flex;
    }
    .room-developer-description-character{
      margin: 0 0 0 0;
    }
    .room-developer-description-character-type-2{
      margin: 30px 0 0 0;
    }
    .room-developer-description-characters-text_mn-percent{
      font-size: 30px;
    }
    .room-developer-characters-description{
      margin: 30px 0 0 5px;
      font-weight: 500;
      font-size: 18px;
    }
    .room-developer-about{
      margin: 20px 0 0 25px;
    }
    .room-developer-about-text{
      color: #016FA6;
    }
  </style>
@endsection

@section('content')
  <div class="container-fluid content-order">
    <div class="nav-order">
      <p class="nav-order-text">Недвижимость в Москве</p>
      <img src="{{asset('image/right.png')}}" class="nav-order-arrow">
      <p class="nav-order-text">Продажа</p>
      <img src="{{asset('image/right.png')}}" class="nav-order-arrow">
      <p class="nav-order-text">Продажа 3-комнатных квартир в Москве</p>
      <img src="{{asset('image/right.png')}}" class="nav-order-arrow">
      <p class="nav-order-text">ЖК "LUCE"</p>
    </div>
    <div class="textName-order">
      <p>Продается 3-комн. квартира, 91 м² в ЖК "LUCE"</p>
    </div>
    <div class="room-location-address">
      <div class="room-location-address-text">Москва, Крестовоздвиженский переулок, 4</div>
      <p class="room-location-address-text-map">На карте</p>
    </div>
    <div class="room-location-metro">
      <div class="room-location-metro-group">
        <img src="{{asset('image/metro-logo.png')}}" style="filter: hue-rotate(190deg) saturate(300%)" class="room-location-metro-img">
        <p class="room-location-metro-text">Арбатская</p>
        <p class="room-location-metro-text-time">7 мин.</p>
      </div>
      <div class="room-location-metro-group">
        <img src="{{asset('image/metro-logo.png')}}" style="filter: hue-rotate(190deg) saturate(300%)" class="room-location-metro-img">
        <p class="room-location-metro-text">Смоленская</p>
        <p class="room-location-metro-text-time">5 мин.</p>
      </div>
      <div class="room-location-metro-group">
        <img src="{{asset('image/metro-logo.png')}}" style="filter: hue-rotate(190deg) saturate(300%)" class="room-location-metro-img">
        <p class="room-location-metro-text">Алекс. сад</p>
        <p class="room-location-metro-text-time">10 мин.</p>
      </div>
    </div>
    <div class="room-photo">
      <img src="{{asset('image/room-photo-main.jpg')}}" alt="" class="room-photo-img">
    </div>
    <div class="room-price-menu">
      <p class="room-price-menu-text">142 500 000 ₽</p>
      <p class="room-price-menu-text-m2"> 1 560 000 ₽ м²</p>
      <div class="room-price-menu-contact-center">
        <div class="room-price-menu-contact">
          <p class="room-price-menu-contact-text">Контакты застройщика</p>
        </div>
      </div>
    </div>
    <div class="room-developer">
      <div class="group-room-dev-1">
        <p class="room-developer-text_dev">Застройщик</p>
        <img src="{{asset('image/logo-MRgroup.png')}}" alt="" class="room-developer-img_dev">
        <p class="room-developer-text-name_dev">MR Group</p>
      </div>
      <div class="group-room-dev-2">
        <p class="group-room-develope-2 group-room-develope-text-1">Год <br> основания <br> 2003</p>
        <p class="group-room-develope-2 group-room-develope-text-2">Сдано <br> 128 домов в <br> 29 ЖК</p>
        <p class="group-room-develope-2 group-room-develope-text-3">Строится <br> 78 домов в <br> 21 ЖК</p>
      </div>
    </div>
    <div class="room-credit_ipoteka">
      <img src="{{asset('image/logo-credit.png')}}" alt="" class="room-credit-logo_ipoteka">
    </div>
    <div class="room-img-group">
      <img src="{{asset('image/room-photo-main.jpg')}}" alt="" class="room-img-1">
      <img src="{{asset('image/room-photo-2.jpg')}}" alt="" class="room-img-2">
      <img src="{{asset('image/room-photo-3.jpg')}}" alt="" class="room-img-3">
    </div>
    <div class="room-characters">
      <div class="room-characters-group">
        <div class="row">
          <div class="col-sm-4 room-characters-group-row-pos">
            <div class="room-characters-group-all">
              <img src="{{asset('image/room-logo-m2-all.png')}}" alt="" class="room-characters-img">
              <p class="room-characters-group-text">Общая площадь: <br><span class="room-characters-num-group">91 м²</span></p>
            </div>
          </div>
          <div class="col-sm-4 room-characters-group-row-pos">
            <div class="room-characters-group-all">
              <img src="{{asset('image/kitchen 1.png')}}" alt="" class="room-characters-img">
              <p class="room-characters-group-text">Площадь кухни: <br><span class="room-characters-num-group">26,8 м²</span></p>
            </div>
          </div>
          <div class="col-sm-4 room-characters-group-row-pos">
            <div class="room-characters-group-all">
              <img src="{{asset('image/plan 1.png')}}" alt="" class="room-characters-img">
              <p class="room-characters-group-text">Жилая площадь: <br><span class="room-characters-num-group">45 м²</span></p>
            </div>
          </div>
          <div class="col-sm-4 room-characters-group-row-pos">
            <div class="room-characters-group-all">
              <img src="{{asset('image/plan 1.png')}}" alt="" class="room-characters-img">
              <p class="room-characters-group-text">Комнат: <br><span class="room-characters-num-group">3-комн.</span></p>
            </div>
          </div>
          <div class="col-sm-4 room-characters-group-row-pos">
            <div class="room-characters-group-all">
              <img src="{{asset('image/renovation 1.png')}}" alt="" class="room-characters-img">
              <p class="room-characters-group-text">Отделка: <br><span class="room-characters-num-group">Предчистовая</span></p>
            </div>
          </div>
          <div class="col-sm-4 room-characters-group-row-pos">
            <div class="room-characters-group-all">
              <img src="{{asset('image/floor 1.png')}}" alt="" class="room-characters-img">
              <p class="room-characters-group-text">Этаж: <br><span class="room-characters-num-group">2/7</span></p>
            </div>
          </div>
          <div class="col-sm-2"></div>
          <div class="col-sm-3 room-characters-group-row-pos room-characters-group-center-1 ">
            <div class="room-characters-group-all">
              <img src="{{asset('image/commissioning 1.png')}}" alt="" class="room-characters-img">
              <p class="room-characters-group-text">Год сдачи: <br><span class="room-characters-num-group">2024</span></p>
            </div>
          </div>
          <div class="col-sm-1"></div>
          <div class="col-sm-3 room-characters-group-row-pos room-characters-group-center-2">
            <div class="room-characters-group-all">
              <img src="{{asset('image/commissioning 1.png')}}" alt="" class="room-characters-img">
              <p class="room-characters-group-text">Дом: <br><span class="room-characters-num-group">Не сдан</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="room-zhk-description">
      <p class="room-zhk-description-text">
        Старт продаж в фамильном доме LUCE. 2-комнатная квартира площадью 91 кв.м, расположенная на 2 этаже 7-этажного дома.<br>
        LUCE — клубный дом в самом сердце исторической Москвы, в охранной зоне Кремля.<br>
        Уникальный фамильный дом предлагает 43 квартиры, площадью от 79 до 384 м², спроектированные для тех, кто ценит приватность, пространство и изысканность.<br>
      </p>
    </div>
    <div class="room-about-apartment">
      <p class="room-about-apartment-main-text">О Доме</p>
      <div class="room-about-apartment-group">
        <div class="room-about-apartment-group-select">
          <p class="room-about-apartment-type-1">Тип жилья</p>
          <p class="room-about-apartment-type-2">Новостройка</p>
        </div>
        <div class="room-about-apartment-group-hr">
          <hr class="room-about-apartment-group-hr_hr">
        </div>
        <div class="room-about-apartment-group-select">
          <p class="room-about-apartment-type-1">Общая площадь</p>
          <p class="room-about-apartment-type-2">91 м²</p>
        </div>
        <div class="room-about-apartment-group-hr">
          <hr class="room-about-apartment-group-hr_hr">
        </div>
        <div class="room-about-apartment-group-select">
          <p class="room-about-apartment-type-1">Жилая площадь</p>
          <p class="room-about-apartment-type-2">45 м²</p>
        </div>
        <div class="room-about-apartment-group-hr">
          <hr class="room-about-apartment-group-hr_hr">
        </div>
        <div class="room-about-apartment-group-select">
          <p class="room-about-apartment-type-1">Площадь кухни</p>
          <p class="room-about-apartment-type-2">26,8 м²</p>
        </div>
        <div class="room-about-apartment-group-hr">
          <hr class="room-about-apartment-group-hr_hr">
        </div>
        <div class="room-about-apartment-group-select">
          <p class="room-about-apartment-type-1">Высота потолков</p>
          <p class="room-about-apartment-type-2">3,9 м</p>
        </div>
        <div class="room-about-apartment-group-hr">
          <hr class="room-about-apartment-group-hr_hr">
        </div>
        <div class="room-about-apartment-group-select">
          <p class="room-about-apartment-type-1">Санузел</p>
          <p class="room-about-apartment-type-2">2 совмещенных <br> 1 раздельный</p>
        </div>
        <div class="room-about-apartment-group-hr">
          <hr class="room-about-apartment-group-hr_hr">
        </div>
        <div class="room-about-apartment-group-select">
          <p class="room-about-apartment-type-1">Балкон/лоджия</p>
          <p class="room-about-apartment-type-2">2 балкона</p>
        </div>
        <div class="room-about-apartment-group-hr">
          <hr class="room-about-apartment-group-hr_hr">
        </div>
        <div class="room-about-apartment-group-select">
          <p class="room-about-apartment-type-1">Вид из окон</p>
          <p class="room-about-apartment-type-2">На улицу</p>
        </div>
        <div class="room-about-apartment-group-hr">
          <hr class="room-about-apartment-group-hr_hr">
        </div>
        <div class="room-about-apartment-group-select">
          <p class="room-about-apartment-type-1">Отделка</p>
          <p class="room-about-apartment-type-2">предчистовая</p>
        </div>
      </div>
    </div>
    <div class="room-about-apartment">
      <p class="room-about-apartment-main-text">О квартире</p>
      <div class="room-about-apartment-group">
        <div class="room-about-apartment-group-select">
          <p class="room-about-apartment-type-1">Количество <br> лифтов</p>
          <p class="room-about-apartment-type-2">8 Пассажирских <br> 8 Грузовых</p>
        </div>
        <div class="room-about-apartment-group-hr">
          <hr class="room-about-apartment-group-hr_hr">
        </div>
        <div class="room-about-apartment-group-select">
          <p class="room-about-apartment-type-1">Тип дома</p>
          <p class="room-about-apartment-type-2">Монолитный</p>
        </div>
        <div class="room-about-apartment-group-hr">
          <hr class="room-about-apartment-group-hr_hr">
        </div>
        <div class="room-about-apartment-group-select">
          <p class="room-about-apartment-type-1">Парковка</p>
          <p class="room-about-apartment-type-2">Подземная</p>
        </div>
      </div>
    </div>
    <div class="room-apartament-finishing">
      <p class="room-apartament-finishing-text-mn">Отделка квартиры</p>
      <p class="room-apartament-finishing-text">Квартира продается в предчистовой отделке</p>
      <img src="{{asset('image/room-apartament-finishing-img.png')}}" alt="" class="room-apartament-finishing-img">
    </div>
    <div class="room-location-map">
      <p class="room-location-map-text-mn">Расположение</p>
      <img src="{{asset('image/room-location-map.png')}}" alt="" class="room-location-map-img">
    </div>
    <div class="room-developer-description">
      <p class="room-developer-description-text_avtor">Автор объявления</p>
      <p class="room-developer-description-text_mn">Застройщик «MR Group»</p>
      <img src="{{asset('image/room-verify-good.png')}}" alt="" class="room-developer-description-verify-good_img">
      <p class="room-developer-description-text_verify-good">Надежный застройщик</p>
      <div class="row">
        <div class="room-developer-description-character col-sm-3">
          <div class="room-developer-description-character-text">
            <p class="room-developer-description-characters-text_mn">2003</p>
            <p class="room-developer-description-characters-text_sp">Год <br> основания</p>
          </div>
        </div>
        <div class="room-developer-description-character col-sm-3">
          <div class="room-developer-description-character-text">
            <p class="room-developer-description-characters-text_mn">128</p>
            <p class="room-developer-description-characters-text_sp">Домов сдано <br> в 29 ЖК</p>
          </div>
        </div>
        <div class="room-developer-description-character col-sm-3">
          <div class="room-developer-description-character-text">
            <p class="room-developer-description-characters-text_mn">78</p>
            <p class="room-developer-description-characters-text_sp">Домов строится <br> в 21 ЖК</p>
          </div>
        </div>
      </div>
      <div class="room-developer-description-character-type-2">
        <div class="room-developer-description-character-text">
          <p class="room-developer-description-characters-text_mn">46<span class="room-developer-description-characters-text_mn-percent">% </span></p>
          <p class="room-developer-description-characters-text_sp">Домов сдано <br> вовремя</p>
        </div>
      </div>
      <div class="room-developer-characters-description">
        <p class="room-developer-characters-description-text">
          MR Group успешно работает на российском рынке с 2003 года и является <br>
          одной из крупнейших компаний по объему продаж и строительству жилой <br>
          и коммерческой недвижимости в России. Входит в число лидеров рынка по <br>
          уровню цифровизации и инноваций в своих проектах... <br></p>
      </div>
      <div class="room-developer-about">
        <p class="room-developer-about-text">Подробнее о застройщике</p>
      </div>
    </div>
  </div>
@endsection

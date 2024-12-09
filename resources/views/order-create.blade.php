@extends('template')
@section('title', 'order-create')

@section('style')
  <style>
    .content-order-create{
      margin: 10px 0 0 192px;
      user-select: none;
    }
    .new-order{
      font-weight: bold;
      font-size: 40px;
    }
    .type-1-text-mn{
      font-size: 20px;
      font-weight: 600;
    }
    .type-btn{
      background-color: rgba(0, 169, 254, 0.15);
      font-size: 20px;
      border: solid rgba(0, 102, 175, 0.12) 1px;
      border-radius: 5px;
      color: rgba(0, 0, 0, 0.92);
      padding: 8px 19px;
      margin: 0 21px 19px 0;
      font-weight: 500;
      cursor: pointer;
    }
    .type-btn-default {
      background-color: white;
      font-size: 20px;
      border: solid rgba(0, 0, 0, 0.25) 1px;
      border-radius: 5px;
      color: rgba(0, 0, 0, 0.78);
      padding: 8px 19px;
      margin: 0 21px 19px 0;
      font-weight: 500;
      cursor: pointer;
    }
    .type-btn-request {
      background-color: rgba(0, 111, 255, 0.84);
      font-size: 20px;
      border: solid rgba(0, 0, 0, 0.25) 1px;
      border-radius: 5px;
      color: rgb(255, 255, 255);
      padding: 10px 23px;
      margin: 0 21px 19px 0;
      font-weight: 600;
      cursor: pointer;
    }
    .type-12[type="radio"]{
      display: none;
    }
    .btn-submit{
      margin: 20px 0 0 860px;
    }
  </style>
@endsection

@section('content')
  <div class="content-order-create">
    <form action="/handler" method="get">
      @csrf
      <p class="new-order" id="new-order">Особенности квартиры</p>
      <div class="type-1">
        <p class="type-1-text-mn">Новое объявление</p>
        <div class="type-btn-mn">
          <label for="type-rental" class="type-btn-default" id="btn-rental-1" onclick="clickStyle('1','2')">
            <input class="type-12" type="radio" name="type_room" value="rental" id="type-rental-1">
            <span class="type-rental-btn-text">Аренда</span>
          </label>
          <label for="type-rental" class="type-btn-default" id="btn-rental-2" onclick="clickStyle('2','1')">
            <input class="type-12" type="radio" name="type_room" value="sale" id="type-rental-2">
            <span class="type-rental-btn-text">Продажа</span>
          </label>
        </div>
        <div class="type-1-1">
          <p class="type-1-text-mn">Жилая недвижимость</p>
          <div class="type-btn-mn">
            <label for="type-rental" class="type-btn-default" id="btn-rental-3" onclick="clickBtn('3');styleChange('3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19')">
              <input class="type-12" type="radio" name="type_room_resident" value="apartament" id="type-rental-3">
              <span class="type-rental-btn-text">Квартира</span>
            </label>
            <label for="type-rental" class="type-btn-default" id="btn-rental-4" onclick="clickBtn('4');styleChange('3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19')">
              <input class="type-12" type="radio" name="type_room_resident" value="apartamentNew" id="type-rental-4">
              <span class="type-rental-btn-text">Квартира в новостройке</span>
            </label>
            <label for="type-rental" class="type-btn-default" id="btn-rental-5" onclick="clickBtn('5');styleChange('3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19')">
              <input class="type-12" type="radio" name="type_room_resident" value="roomOrFraction" id="type-rental-5">
              <span class="type-rental-btn-text">Комната или доля</span>
            </label>
            <label for="type-rental" class="type-btn-default" id="btn-rental-6" onclick="clickBtn('6');styleChange('3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19')">
              <input class="type-12" type="radio" name="type_room_resident" value="house" id="type-rental-6">
              <span class="type-rental-btn-text">Дом/Дача</span>
            </label>
            <label for="type-rental" class="type-btn-default" id="btn-rental-7" onclick="clickBtn('7');styleChange('3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19')">
              <input class="type-12" type="radio" name="type_room_resident" value="cottage" id="type-rental-7">
              <span class="type-rental-btn-text">Коттедж</span>
            </label>
            <br>
            <label for="type-rental" class="type-btn-default" id="btn-rental-8" onclick="clickBtn('8');styleChange('3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19')">
              <input class="type-12" type="radio" name="type_room_resident" value="townHouse" id="type-rental-8">
              <span class="type-rental-btn-text">Таунхаус</span>
            </label>
            <label for="type-rental" class="type-btn-default" id="btn-rental-9" onclick="clickBtn('9');styleChange('3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19')">
              <input class="type-12" type="radio" name="type_room_resident" value="partHouse" id="type-rental-9">
              <span class="type-rental-btn-text">Часть дома</span>
            </label>
            <label for="type-rental" class="type-btn-default" id="btn-rental-10" onclick="clickBtn('10');styleChange('3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19')">
              <input class="type-12" type="radio" name="type_room_resident" value="areaRegion" id="type-rental-10">
              <span class="type-rental-btn-text">Участок</span>
            </label>
            <label for="type-rental" class="type-btn-default" id="btn-rental-11" onclick="clickBtn('11');styleChange('3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19')">
              <input class="type-12" type="radio" name="type_room_resident" value="garage" id="type-rental-11">
              <span class="type-rental-btn-text">Гараж</span>
            </label>
          </div>
        </div>
        <div class="type-1-2">
          <p class="type-1-text-mn">Коммерческая</p>
          <div class="type-btn-mn">
            <label for="type-rental" class="type-btn-default" id="btn-rental-12" onclick="clickBtn('12');styleChange('3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19')">
              <input class="type-12" type="radio" name="type_room_resident" value="office" id="type-rental-12">
              <span class="type-rental-btn-text">Офис</span>
            </label>
            <label for="type-rental" class="type-btn-default" id="btn-rental-13" onclick="clickBtn('13');styleChange('3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19')">
              <input class="type-12" type="radio" name="type_room_resident" value="structureHome" id="type-rental-13">
              <span class="type-rental-btn-text">Здание</span>
            </label>
            <label for="type-rental" class="type-btn-default" id="btn-rental-14" onclick="clickBtn('14');styleChange('3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19')">
              <input class="type-12" type="radio" name="type_room_resident" value="retailSpace" id="type-rental-14">
              <span class="type-rental-btn-text">Торговая площадь</span>
            </label>
            <label for="type-rental" class="type-btn-default" id="btn-rental-15" onclick="clickBtn('15');styleChange('3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19')">
              <input class="type-12" type="radio" name="type_room_resident" value="roomFree" id="type-rental-15">
              <span class="type-rental-btn-text">Помещение свободного назначения</span>
            </label>
            <br>
            <label for="type-rental" class="type-btn-default" id="btn-rental-16" onclick="clickBtn('16');styleChange('3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19')">
              <input class="type-12" type="radio" name="type_room_resident" value="production" id="type-rental-16">
              <span class="type-rental-btn-text">Производства</span>
            </label>
            <label for="type-rental" class="type-btn-default" id="btn-rental-17" onclick="clickBtn('17');styleChange('3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19')">
              <input class="type-12" type="radio" name="type_room_resident" value="wareHouse" id="type-rental-17">
              <span class="type-rental-btn-text">Склад</span>
            </label>
            <label for="type-rental" class="type-btn-default" id="btn-rental-18" onclick="clickBtn('18');styleChange('3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19')">
              <input class="type-12" type="radio" name="type_room_resident" value="business" id="type-rental-18">
              <span class="type-rental-btn-text">Бизнес</span>
            </label>
            <label for="type-rental" class="type-btn-default" id="btn-rental-19" onclick="clickBtn('19');styleChange('3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19')">
              <input class="type-12" type="radio" name="type_room_resident" value="commercialLand" id="type-rental-19">
              <span class="type-rental-btn-text">Коммерческая земля</span>
            </label>
          </div>
        </div>
        <div class="btn-submit">
          <button class="type-btn-request" type="submit">Далее</button>
        </div>
      </div>
    </form>
  </div>
@endsection

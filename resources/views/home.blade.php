@extends('template')
@section('title', 'мейн')

@section('style')
  <style>
    .btn-search-select{
      position: absolute;
      margin-top: 250px;
    }
    .btn-select{
      vertical-align: middle;
      transition: background-color .32s, color .5s;
      font-weight: bold;
      margin: 0;
      border-radius: 0;
      border: none;
      font-size: 20px;
      padding: 12px 25px;
      background: rgba(0, 0, 0, 0.45);
      color: white;
    }
    .search-select{
      position: absolute;
      user-select: none;
    }
    .search-select-back-white-box{
      position: absolute;
      height: 90px;
      width: 1690px;
      background: white;
      margin-top: 304px;
      border-radius: 0 15px 5px 15px;
    }
    .background-select{
      background-image: url({{asset('/image/back-select.png')}});
      background-repeat: no-repeat;
      position: absolute;
      width: 100%;
      height: 720px;
    }
    .btn-font-size{
      font-size: 0;
    }
    .select-locate {
      font-size: 18px;
      margin-left: 20px;
      margin-top: -55px;
      height: 45px;
      position: absolute;
      width: 650px;
      border: none;
      user-select: none;
      outline: none;
    }
    .select-locate::-webkit-input-placeholder{
      font-weight: bold;
    }
    .group{
      display: inline-block;
    }
    .select-type-room-group-text {
      font-size: 18px;
      font-weight: 600;
      margin: 30px 0 0 40px;
    }
    .btn-search{
      background: #009BE9;
      padding: 10px 20px;
      border: none;
      font-weight: 600;
      color: white;
      border-radius: 5px;
    }
    .btn-search-map{
      padding: 10px 20px;
      border: none;
      font-weight: 600;
      border-radius: 5px;
      margin-right: 20px;
    }
    .btn-search-mn{
      font-size: 20px;
      margin-left: 1466px;
      margin-top: 410px;
      display: inline-block;
    }
    .city-map-select{
      background: white;
      border: none;
      font-size: 16px;
      font-weight: 600;
      padding: 8px 15px;
      border-radius: 5px;
      margin: 40px 0 0 25px;
      position: absolute;
    }
    .btn-select:hover{
      color: black;
      background: rgba(255, 255, 255);
    }
    .room-list-text{
      font-size: 48px;
      font-weight: bold;
      margin: 48px 0 0 0;
    }
    .room-order{
      cursor: pointer;
      width: 420px;
      height: 540px;
      border-radius: 15px;
      border: rgb(0 ,0 ,0 , .31) solid 1px;
      margin: 54px 80px;
      padding: 0;
    }
    .room-list-main{
      margin: 0 0 300px 0;
    }
    .room-price{
      font-size: 36px;
      font-weight: 600;
      margin: 15px 0 0 23px;
      display: inline-block;
    }
    .room-characters{
      margin: 0 0 0 23px;
    }
    .room-characters-text{
      display: inline-block;
      font-weight: 500;
      font-size: 18px;
      margin: 0 30px 0 2px;
    }
    .room-metro{
      position: absolute;
      display: inline-block;
      margin: 10px 0 0 47px;
    }
    .room-metro-icon{
      display: inline-block;
    }
    .room-metro-text{
      font-weight: 400;
      font-size: 14px;
      display: inline-block;
      margin: -5px 0 0 0;
    }
    .group-metro{
      margin: -5px 0 0 0;
    }
  </style>
@endsection

@section('content')
  <div class="background-select" style="position: sticky;">
    <div class="container-fluid search-select-menu">
      <div class="map-city">
        <button class="city-map-select" >
          <img src="{{asset('image/map-picker.png')}}" style="width: 15px;margin: -3px 3px 0 0;opacity: 85%;">
          <p style="display: inline-block;margin: 0 0 0 0 ;opacity: 85%;">Москва</p>
        </button>
      </div>
      <div class="row">
        <div class="col-sm-1" style="margin-left: -60px"></div>
        <div class="col-sm-10">
          <div class="btn-font-size">
            <div class="btn-search-select">
              <button type="button" class="btn-select " style="border-radius: 5px 0 0 0">Купить</button>
              <button type="button" class="btn-select ">Снять</button>
              <button type="button" class="btn-select ">Посуточно</button>
              <button type="button" class="btn-select ">Построить</button>
              <button type="button" class="btn-select ">Ипотека</button>
              <button type="button" class="btn-select ">Подобрать риелтора</button>
              <button type="button" class="btn-select " style="border-radius: 0 15px 0 0">Новостройки</button>
            </div>
          </div>
          <div class="search-select">
            <div class="search-select-back-white-box">
              <div class="select-type-room">
                <div class="group" >
                  <p class="select-type-room-group-text">Квартиру в новостройке</p>
                  <img src="{{asset('image/bottom.png')}}" alt="" style="position: absolute;height: 24px;width: 24px;margin-left: 330px; opacity: 48%;margin-top: -25px;">
                  <img src="{{asset('image/line.png')}}" alt="" style="margin-top: -57px; margin-left:385px;opacity: 20%;width: 2px;height: 90px">
                </div>
                <div class="group" >
                  <p class="select-type-room-group-text">1,2 комн.</p>
                  <img src="{{asset('image/bottom.png')}}" alt="" style="position: absolute;height: 24px;width: 24px;margin-left: 240px; opacity: 48%;margin-top: -25px">
                  <img src="{{asset('image/line.png')}}" alt="" style="margin-top: -57px; margin-left:295px;opacity: 20%;width: 2px;height: 90px">
                </div>
                <div class="group" >
                  <p class="select-type-room-group-text" style="font-weight: 500;opacity: 80%">Цена</p>
                  <img src="{{asset('image/bottom.png')}}" alt="" style="position: absolute;height: 24px;width: 24px;margin-left: 240px; opacity: 48%;margin-top: -25px">
                  <img src="{{asset('image/line.png')}}" alt="" style="margin-top: -57px; margin-left:295px;opacity: 20%;width: 2px;height: 90px">
                </div>
                <div class="group" >
                  <input class="select-locate" placeholder="Город, адрес, метро, район, ж/д, шоссе или ЖК">
                  {{--                    <p style="font-size: 18px; font-weight: bold;margin-left: 40px; margin-top: -45px;position: absolute;opacity: 60%">Город, адрес, метро, район, ж/д, шоссе или ЖК</p>--}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-search-mn">
        <button class="btn-search-map">Найти на карте</button>
        <button class="btn-search">Найти</button>
      </div>
    </div>
  </div>
  <div class="container-fluid room-list-main">
    <div class="text-center room-list-text">
      <p>В топе!</p>
    </div>
    <div class="row justify-content-center room-list">
      <div class="room-order">
        <img src="{{asset("image/room-overlay.png")}}" style="margin: -1px" alt="not found... 404" class="img-overlay">
        <p class="room-price">37 800 000 ₽</p>
        <div class="room-metro">
          <div class="group-metro group-metro-1">
            <img src="{{asset('image/metro-logo.png')}}" alt="" class="room-metro-icon">
            <p class="room-metro-text">Арбатская</p>
          </div>
          <div class="group-metro group-metro-2">
            <img src="{{asset('image/metro-logo.png')}}" alt="" class="room-metro-icon">
            <p class="room-metro-text">Смоленская</p>
          </div>
          <div class="group-metro group-metro-3">
            <img src="{{asset('image/metro-logo.png')}}" alt="" class="room-metro-icon">
            <p class="room-metro-text">Алекс. сад</p>
          </div>
        </div>
        <div class="room-characters">
          <p class="room-characters-text">2-комн. кв.</p>
          <p class="room-characters-text">72 м²</p>
          <p class="room-characters-text">28/65 этаж</p>
        </div>
      </div>
      <div class="room-order" id="3">
        <img src="{{asset("image/room-overlay.png")}}" style="margin: -1px" alt="not found... 404" class="img-overlay">
        <p class="room-price">37 800 000 ₽</p>
        <div class="room-metro">
          <div class="group-metro group-metro-1">
            <img src="{{asset('image/metro-logo.png')}}" alt="" class="room-metro-icon">
            <p class="room-metro-text">Арбатская</p>
          </div>
          <div class="group-metro group-metro-2">
            <img src="{{asset('image/metro-logo.png')}}" alt="" class="room-metro-icon">
            <p class="room-metro-text">Смоленская</p>
          </div>
          <div class="group-metro group-metro-3">
            <img src="{{asset('image/metro-logo.png')}}" alt="" class="room-metro-icon">
            <p class="room-metro-text">Алекс. сад</p>
          </div>
        </div>
        <div class="room-characters">
          <p class="room-characters-text">2-комн. кв.</p>
          <p class="room-characters-text">72 м²</p>
          <p class="room-characters-text">28/65 этаж</p>
        </div>
      </div>
      <div class="room-order">
        <img src="{{asset("image/room-overlay.png")}}" style="margin: -1px" alt="not found... 404" class="img-overlay">
        <p class="room-price">37 800 000 ₽</p>
        <div class="room-metro">
          <div class="group-metro group-metro-1">
            <img src="{{asset('image/metro-logo.png')}}" alt="" class="room-metro-icon">
            <p class="room-metro-text">Арбатская</p>
          </div>
          <div class="group-metro group-metro-2">
            <img src="{{asset('image/metro-logo.png')}}" alt="" class="room-metro-icon">
            <p class="room-metro-text">Смоленская</p>
          </div>
          <div class="group-metro group-metro-3">
            <img src="{{asset('image/metro-logo.png')}}" alt="" class="room-metro-icon">
            <p class="room-metro-text">Алекс. сад</p>
          </div>
        </div>
        <div class="room-characters">
          <p class="room-characters-text">2-комн. кв.</p>
          <p class="room-characters-text">72 м²</p>
          <p class="room-characters-text">28/65 этаж</p>
        </div>
      </div>
    </div>
  </div>
@endsection

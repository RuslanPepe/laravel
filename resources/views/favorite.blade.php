@extends('template')
@section('title', 'Избранное')

@section('style')
  <style>
    .room-order{
      cursor: pointer;
      width: 420px;
      height: 540px;
      border-radius: 15px;
      border: rgb(0 ,0 ,0 , .31) solid 1px;
      margin: 54px 80px;
      padding: 0;
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
    .room-list{
      width: 100%;
    }
  </style>
@endsection

@section('content')

  <div class="row justify-content-center room-list">
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
    <div class="room-order room-id">
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
@endsection

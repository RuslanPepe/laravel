
<template>
  <div class="container-fluid header">
    <div class="icon">
      <a class="aHref" href="/">
        <img class="imgIcon" src='/image/logo128.png' alt=""></a>
    </div>
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <div class="button-header-cl text-center" style="margin-left: 34px">
          <a class="button-header" href="">Аренда</a>
          <a class="button-header" href="">Продажа</a>
          <a class="button-header" href="">Новостройки</a>
          <a class="button-header" href="">Строительство</a>
          <a class="button-header" href="">Коммерческая</a>
          <a class="button-header" href="">Ипотека</a>
          <a class="button-header" href="">Застройщики</a>
        </div>
      </div>
      <div class="col-sm-2 header-group-add">
        <div class="header-group">
          <a class="header-group-plus-btn" href="/order-create"><button class="header-group-btn">+</button></a>
          <p class="header-group-btn-text"> подать за 0 ₽</p>
          <img id="favorite" src='/image/favorite-order.png' alt="" class="header-group-img">
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'Header',
  };
</script>

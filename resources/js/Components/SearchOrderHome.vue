<template>
  <div class="col-sm-11">
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
            <img src="/image/bottom.png" alt="" style="position:absolute;height:24px;width:24px;margin-left: 50px;opacity:48%;margin-top: 35px;">
            <img src="/image/line.png" alt="" style="margin-left:110px;opacity: 20%;width: 2px;height: 90px">
          </div>
          <modal-type-order/>
          <div class="group" >
            <p class="select-type-room-group-text">1,2 комн.</p>
            <img src="/image/bottom.png" alt="" style="position: absolute;height: 24px;width: 24px;margin-left: 60px; opacity: 48%;margin-top: 35px;">
            <img src="/image/line.png" alt="" style="margin-left:120px;opacity: 20%;width: 2px;height: 90px">
          </div>
          <div class="group" >
            <p class="select-type-room-group-text" style="font-weight: 500;opacity: 80%">Цена</p>
            <img src="/image/bottom.png" alt="" style="position: absolute;height: 24px;width: 24px;margin-left: 60px; opacity: 48%;margin-top: 35px;">
            <img src="/image/line.png" alt="" style="margin-left:115px;opacity: 20%;width: 2px;height: 90px">
          </div>
          <div class="group" >
            <input class="select-locate" placeholder="Город, адрес, метро, район, ж/д, шоссе или ЖК">
          </div>
        </div>
      </div>
    </div>
    <div class="btn-search-mn">
      <button class="btn-search-map">Найти на карте</button>
      <button class="btn-search" type="submit">Найти</button>
    </div>
  </div>
</template>

<script>
import ModalTypeOrder from "@/Components/ModalTypeOrder.vue";

export default {
  name: "SearchOrderHome",
  components: {ModalTypeOrder}
}
</script>

<style scoped>
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
  background: #ffffff;
}
.btn-search-mn{
  font-size: 20px;
  display: inline-block;
  margin: 420px 0 0 1374px;
}
</style>

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
          <div class="group">
            <p class="select-type-room-group-text-1">{{ this.typeOrder[0] }}<span v-if="typeOrder.length > 1">...</span></p>
            <img src="/image/bottom.png" alt="" id="btnTypeOrder" @click="hideTypeOrders()" style="position:absolute;height:24px;width:24px;margin-left: 50px;opacity:48%;margin-top: 35px;">
            <img src="/image/line.png" alt="" style="margin-left:110px;opacity: 20%;width: 2px;height: 90px">
          </div>
          <modal-type-order @funcDataForm="checkedTypeOrder()" v-if="hideTypeOrder"/>
          <div class="group">
            <p class="select-type-room-group-text" style="width: 105px" v-if="countRooms.length < 3"><span v-for="(item, i) in countRooms">{{ this.countRooms[i] }}<span v-if="this.countRooms.length > 1">, </span></span><span v-if="countRooms.length > 2">...</span> комн.</p>
            <p class="select-type-room-group-text" style="width: 105px" v-if="countRooms.length >= 3"><span>{{ this.countRooms[0] }}, {{ this.countRooms[1] }}</span><span v-if="countRooms.length > 2">...</span> комн.</p>
            <img src="/image/bottom.png" alt="" id="btnCountRoom" @click="hideCountRooms()" style="position: absolute;height: 24px;width: 24px;margin-left: 60px; opacity: 48%;margin-top: 35px;">
            <img src="/image/line.png" alt="" style="margin-left:120px;opacity: 20%;width: 2px;height: 90px">
          </div>
          <modal-count-rooms @checkedCountRoom="checkedCountRoom()" v-if="hideCountRoom" />
          <div class="group">
            <p class="select-type-room-group-text" style="font-weight: 500;opacity: 80%" v-if="!this.price[0] && !this.price[1] && !this.statusPrice">Цена</p>
            <p class="select-type-room-group-text" style="font-weight: 500;opacity: 80%" v-if="price[0] || this.price[1] && !this.statusPrice">{{ this.price[0]}} - {{this.price[1] }}</p>
            <p class="select-type-room-group-text" style="font-weight: 500;opacity: 80%" v-if="this.statusPrice">Некорректное значение</p>
            <img src="/image/bottom.png" alt="" id="btnPriceOrder" @click="hidePriceOrders()" style="position: absolute;height: 24px;width: 24px;margin-left: 60px; opacity: 48%;margin-top: 35px;">
            <img src="/image/line.png" alt="" style="margin-left:115px;opacity: 20%;width: 2px;height: 90px">
            <ModalPriceOrder @priceCorrect="priceCorrect" v-if="hidePriceOrder" :view-dash="true" />
          </div>
          <div class="group">
            <input class="select-locate" name="geoPosition" placeholder="Город, адрес, метро, район, ж/д, шоссе или ЖК" v-model="geoPosition">
          </div>
        </div>
        <div class="btn-search-mn">
          <button class="btn-search-map">Найти на карте</button>
          <button class="btn-search" type="submit" @click="this.$emit('searchFilter', {typeRoom: typeOrderRequest, roomCount: countRoomsAll, price: priceRequest, location: geoPosition})">Найти</button>
        </div>
        <form action="/filter" method="get" id="formSearchOrder">
        </form>
      </div>
    </div>

  </div>
</template>

<script>
import ModalTypeOrder from "@/Components/ModalTypeOrder.vue";
import ModalCountRooms from "@/Components/ModalCountRooms.vue";
import ModalPriceOrder from "@/Components/ModalPriceOrder.vue";

export default {
  name: "SearchOrderHome",
  components: {ModalPriceOrder, ModalCountRooms, ModalTypeOrder},
  data(){
    return{
      geoPosition: 'Москва',
      typeOrder: ['All'],
      typeOrderRequest: [],
      countRooms: ['All'],
      countRoomsAll: [],
      price: [null],
      priceRequest: [],
      statusPrice: false,
      hideTypeOrder: false,
      hideCountRoom: false,
      hidePriceOrder: false,
    }
  },
  methods: {
    priceCorrect(min, max){
      this.price = []
      this.statusPrice = false
      this.priceRequest[0] = min
      this.priceRequest[1] = max

      if (min){
        if (min.length <= 3){
          this.price[0] = min
        }
        if (min.length >= 4 && min.length <= 6){
          this.price[0] = Math.floor(min/(1000))+' Тыс.'
        }
        if (min.length >= 7 && min.length <= 9){
          this.price[0] = Math.floor(min/(1000000))+' Млн.'
        }
        if (min.length >= 10 && min.length <= 12){
          this.price[0] = Math.floor(min/(1000000000))+' Млрд.'
        }
        if (min.length >= 13) {
          this.statusPrice = true
        }
      }

      if (max){
        if (max.length <= 3){
          this.price[1] = max
        }
        if (max.length >= 4 && max.length <= 6){
          this.price[1] = Math.floor(max/(1000))+' Тыс.'
        }
        if (max.length >= 7 && max.length <= 9){
          this.price[1] = Math.floor(max/(1000000))+' Млн.'
        }
        if (max.length >= 10 && max.length <= 12){
          this.price[1] = Math.floor(max/(1000000000))+' Млрд.'
        }
        if (max.length >= 13) {
          this.statusPrice = true
        }
      }
    },
    hideTypeOrders(){
      let typeOrderBtn = document.getElementById('btnTypeOrder')
      this.hideTypeOrder = !this.hideTypeOrder
      this.hideTypeOrder === true ? typeOrderBtn.style.transform = 'rotateZ(180deg)' : typeOrderBtn.style.transform = 'rotateZ(0deg)'
    },
    hideCountRooms(){
      let countRoomBtn = document.getElementById('btnCountRoom')
      this.hideCountRoom = !this.hideCountRoom
      this.hideCountRoom === true ? countRoomBtn.style.transform = 'rotateZ(180deg)' : countRoomBtn.style.transform = 'rotateZ(0deg)'
    },
    hidePriceOrders(){
      let priceOrder = document.getElementById('btnPriceOrder')
      this.hidePriceOrder = !this.hidePriceOrder
      this.hidePriceOrder === true ? priceOrder.style.transform = 'rotateZ(180deg)' : priceOrder.style.transform = 'rotateZ(0deg)'
    },
    checkedCountRoom(){
      document.querySelectorAll('input[name="countRoom[]"]:checked').length < 1 ? this.countRooms = ['All'] : this.countRooms = Array.from(document.querySelectorAll('input[name="countRoom[]"]:checked')).map(to => to.id)
      this.countRoomsAll = Array.from(document.querySelectorAll('input[name="countRoom[]"]:checked')).map(to => to.id)
    },
    checkedTypeOrder(){
      if (document.querySelectorAll('input[name="typeOrder[]"]:checked').length < 1){
        this.typeOrder = ['All']
      }
      else {
        this.typeOrder = Array.from(document.querySelectorAll('input[name="typeOrder[]"]:checked')).map(to => to.title)
        this.typeOrderRequest = Array.from(document.querySelectorAll('input[name="typeOrder[]"]:checked')).map(to => to.value)
        if (document.querySelectorAll('input[name="typeOrder[]"]:checked')[0].attributes.group.value === '1' && document.querySelectorAll('input[name="typeOrder[]"]:checked').length >= 2){
          this.typeOrder = ['Квартира в новостройке, вторичке']
        }
      }
    },
  },
}
</script>

<style scoped>
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
  background: #ffffff;
}
.btn-search-mn{
  font-size: 20px;
  display: inline-block;
  margin: 30px 0 0 1373px;
}
</style>

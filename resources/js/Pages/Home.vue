<template>
  <div class="background-select" style="position: sticky;">
    <div class="container-fluid search-select-menu">
      <div class="map-city">
        <button class="city-map-select" >
          <img src="/image/map-picker.png" alt="" style="width: 15px;margin: -5px 7px 0 0;opacity: 85%; display: inline-block;">
          <p style="display: inline-block;margin: 0 0 0 0 ;opacity: 85%;font-size: 18px;font-weight: 700">Москва</p>
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
                  <img src="/image/bottom.png" alt="" style="position:absolute;height:24px;width:24px;margin-left: 50px;opacity:48%;margin-top: 35px;">
                  <img src="/image/line.png" alt="" style="margin-left:110px;opacity: 20%;width: 2px;height: 90px">
                </div>
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
        </div>
      </div>
      <div class="btn-search-mn">
        <button class="btn-search-map">Найти на карте</button>
        <button class="btn-search" type="submit">Найти</button>
      </div>
    </div>
  </div>
  <div class="container-fluid room-list-main">
    <div class="text-center room-list">
      <p class="text-center room-list-text" >В топе!</p>
      <br>
<!--      <p class="text-center" v-if="data[0]" style="margin: 150px 0 0 0; color: rgba(0,0,0,0.47);font-size: 24px;font-weight: 600">К сожелению ничего нету...</p>-->
    </div>
    <div class="row justify-content-center room-list">
      <order-home :room-image="data.image[0]" :area-house="data.areaRoom" :count-floor="data.floor+'/'+data.floorAllHouse" :room-count="data.roomCount" :price-order="data.price" :id="data.orderId" :metro="['Арбатская','Смоленская','Алекс.сад']" v-for="(data, i) in this.data"/>
    </div>
  </div>
</template>

<script>
import Header from "../Components/Header.vue";
import Footer from "../Components/Footer.vue";
import OrderHome from "../Components/OrderHome.vue";

export default {
  name: 'MyComponent',
  components: {OrderHome, Footer, Header},
  data() {
    return{
      data: null,
      image: null,
    }
  },
  mounted() {
    axios.post('/selectDateDB')
      .then(response => {
        this.data = response.data
        for (let i = 0; i < this.data.length; i++) {
          this.data[i].image = JSON.parse(this.data[i].image)
        }
        console.log(this.data)
      })
  }
}
</script>

<style>
.emptyTitle{
  margin: 0 0 0 0;
}
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
  background-image: url('/image/back-select.png');
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
  margin-left: 25px;
  margin-top: -30px;
  height: 45px;
  position: absolute;
  width: 840px;
  border: none;
  font-weight: 700;
  color: rgba(0, 0, 0, 0.8);
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
  background: #ffffff;
}
.btn-search-mn{
  font-size: 20px;
  margin-left: 1472px;
  margin-top: 410px;
  display: inline-block;
}
.city-map-select{
  background: white;
  border: none;
  font-size: 16px;
  font-weight: 600;
  padding: 8px 15px 8px 14px;
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
  display: grid;
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
  margin: 5px 0 10px 23px;
}
.room-characters-text{
  display: inline-block;
  font-weight: 500;
  font-size: 18px;
  margin: 0 35px 0 2px;
}
.room-metro{
  position: absolute;
  display: inline-block;
  margin: 430px 0 0 300px;
}
.room-metro-icon{
  margin: 0 5px 0 0;
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

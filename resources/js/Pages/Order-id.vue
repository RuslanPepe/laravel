<template>
    <div class="container-fluid content-order">
        <div class="textName-order">
            <p>{{ this.data.title+', '+this.data.areaRoom+'м², '+'В ЖК "Пресня сити"' }}</p>
        </div>
        <div class="room-location-address">
            <div class="room-location-address-text">{{this.data.adressOrder}}</div>
          <p class="room-location-address-text-map">На карте</p>
        </div>
        <div class="room-location-metro">
          <MetroLocate :metro="'Арбатская'" :metro_time="4" />
          <MetroLocate :metro="'Смоленская'" :metro_time="3" />
          <MetroLocate :metro="'Алекс.сад'" :metro_time="4" />
        </div>
        <div class="room-photo">
          <div class="roomPhotoGroups">
            <img src="/image/left.png" height="32" class="btnSelectPhotoleft" alt="" v-on:click="selectPhoto('-')">
            <img :src='this.image[idPhoto]' alt="" class="room-photo-img">
            <img src="/image/left.png" height="32" class="btnSelectPhotoright" alt="" v-on:click="selectPhoto('+')">
          </div>
          <div class="room-img-group">
            <img :src="data" v-if="image" alt="" height="80px" class="imgGroupUnd" v-for="(data, i) in this.image">
          </div>
        </div>
        <div class="room-price-menu">
            <p class="room-price-menu-text">{{this.data.price}} ₽ <span class="room-price-menu-text-m2">{{this.priceQuadro}} ₽ м²</span></p>
            <div class="room-price-menu-contact-center">
                <div class="room-price-menu-contact">
                    <p class="room-price-menu-contact-text">Контакты застройщика</p>
                </div>
            </div>
        </div>
        <div class="room-developer" v-if="true">
            <div class="group-room-dev-1">
                <p class="room-developer-text_dev">Застройщик</p>
                <img src='/image/logo-MRgroup.png' alt="" class="room-developer-img_dev">
                <p class="room-developer-text-name_dev">MR GROUP</p>
            </div>
            <div class="group-room-dev-2">
                <p class="group-room-develope-2 group-room-develope-text-1">Год <br> основания <br>2011</p>
                <p class="group-room-develope-2 group-room-develope-text-2">Сдано <br>182 домов в <br>72 ЖК</p>
                <p class="group-room-develope-2 group-room-develope-text-3">Строится <br>57 домов в <br>20 ЖК</p>
            </div>
        </div>
        <div class="room-credit_ipoteka" v-if="false">
            <img src='/image/logo-credit.png' alt="" class="room-credit-logo_ipoteka">
        </div>

        <div class="room-characters">
            <div class="room-characters-group">
                <div class="row" style="justify-content: center">
                    <!--class_m это col-sm-4-->
                    <!--class_f это col-sm-3 room-characters-group-center-1-->
                    <!--class_s это col-sm-3 room-characters-group-center-2-->
                  <CharHouseT2 :img="'/image/areaAll.png'" :title="'Общая площадь: '" :description="this.data.areaRoom" :metre="' м²'" />
                  <CharHouseT2 :img="'/image/areaKitchen.png'" :title="'Площадь кухни: '" :description="this.data.areaKitchenRoom" :metre="' м²'" />
                  <CharHouseT2 :img="'/image/areaLife.png'" :title="'Жилая площадь: '" :description="this.data.areaLifeRoom" :metre="' м²'" />
                  <CharHouseT2 :img="'/image/areaLife.png'" :title="'Комнат: '" :description="this.data.roomCount+'-комн.'" />
                  <CharHouseT2 :img="'/image/finishing.png'" :title="'Ремонт: '" :description="this.data.finishing" />
                  <CharHouseT2 :img="'/image/floorCount.png'" :title="'Этаж: '" :description="this.data.floor" />
                  <CharHouseT2 :img="'/image/houseKey.png'" :title="'Год сдачи: '" v-if="this.data.yearComplete" :description="this.data.yearComplete" />
                  <CharHouseT2 :img="'/image/houseKey.png'" :title="'Дом: '" v-if="this.data.houseComplete" :description="this.data.houseComplete" />
                </div>
            </div>
        </div>
        <div class="room-zhk-description">
            <p class="room-zhk-description-text">{{ this.data.description }}</p>
        </div>
        <div class="room-about-apartment">
            <p class="room-about-apartment-main-text">О квартире</p>
            <CharactersRoom :title="'Общая площадь'" :metre="' м²'" :description="this.data.areaRoom" />
            <CharactersRoom :title="'Жилая площадь'" :metre="' м²'" :description="this.data.areaLifeRoom" />
            <CharactersRoom :title="'Площадь кухни'" :metre="' м²'" :description="this.data.areaKitchenRoom" />
            <CharactersRoom :title="'Высота потолков'" :metre="' м'" :description="'3.2'" />
            <CharactersRoomT2 :title="'Санузел'" :description-t1="'Совмещенных'" :description-t2="'Раздельный'" :char-t1="this.data.bathroomCombinedRoom" :char-t2="this.data.bathroomSeparateRoom" />
            <CharactersRoomT2 :title="'Балкон/лоджия'" :description-t1="'балкон'" :description-t2="'лоджия'" :char-t1="this.data.balconyRoom" :char-t2="this.data.loggiaRoom" />
            <CharactersRoom :title="'Вид из окна'" :description="this.data.viewWindow" />
            <CharactersRoom :title="'Ремонт'" :description="this.data.finishing" />
            <CharactersRoomT3 :title="'Техника'" :description="this.technic" />
            <CharactersRoomT3 :title="'Ванная'" :description="this.bathType" />
        </div>
        <div class="room-about-apartment">
            <p class="room-about-apartment-main-text">О доме</p>
            <characters-home-t2 :title="'Количество лифтов'" :description-t1="'Пассажирских'" :description-t2="'Грузовых'" :char-t1="this.data.elevatorCountPassenger" :char-t2="this.data.elevatorCountFreight" />
            <CharactersRoom :title="'Тип дома'" :description="this.data.typeHouse" />
            <CharactersRoom :title="'Год постройки'" :description="this.data.yearCreate" />
            <CharactersRoomT3 :title="'Удобства'" :description="this.conveniences" />
          <!--            <CharactersRoom :title="'Парковка'" :description="this.data" />-->
        </div>
        <div class="room-apartament-finishing">
            <p class="room-apartament-finishing-text-mn">Отделка квартиры</p>
            <p class="room-apartament-finishing-text">Квартира продается в отделке под ключ</p>
            <img src='/image/room-apartament-finishing-img.png' alt="" class="room-apartament-finishing-img">
        </div>
        <div class="room-location-map" v-if="false">
            <p class="room-location-map-text-mn">Расположение</p>
            <img src='/image/room-location-map.png' alt="" class="room-location-map-img">
        </div>
        <div class="room-developer-description" v-if="true" >
            <p class="room-developer-description-text_avtor">Автор объявления</p>
            <p class="room-developer-description-text_mn">Застройщик «MR GROUP»</p>
            <img src='/image/room-verify-good.png' alt="" class="room-developer-description-verify-good_img">
            <p class="room-developer-description-text_verify-good">Надежный застройщик</p>
            <div class="row">
                <div class="room-developer-description-character col-sm-3">
                    <div class="room-developer-description-character-text">
                        <p class="room-developer-description-characters-text_mn">2011</p>
                        <p class="room-developer-description-characters-text_sp">Год <br> основания</p>
                    </div>
                </div>
                <div class="room-developer-description-character col-sm-3">
                    <div class="room-developer-description-character-text">
                        <p class="room-developer-description-characters-text_mn">182</p>
                        <p class="room-developer-description-characters-text_sp">Домов сдано <br> в 72 ЖК</p>
                    </div>
                </div>
                <div class="room-developer-description-character col-sm-3">
                    <div class="room-developer-description-character-text">
                        <p class="room-developer-description-characters-text_mn">57</p>
                        <p class="room-developer-description-characters-text_sp">Домов строится <br> в 20 ЖК</p>
                    </div>
                </div>
            </div>
            <div class="room-developer-description-character-type-2">
                <div class="room-developer-description-character-text">
                    <p class="room-developer-description-characters-text_mn">100<span class="room-developer-description-characters-text_mn-percent">% </span></p>
                    <p class="room-developer-description-characters-text_sp">Домов сдано <br> вовремя</p>
                </div>
            </div>
            <div class="room-developer-characters-description">
                <p class="room-developer-characters-description-text">{{this.data.descriptionDeveloperLCD}}</p>
            </div>
            <div class="room-developer-about">
                <p class="room-developer-about-text">Подробнее о застройщике</p>
            </div>
        </div>
    </div>
</template>

<script>
import Header from "../Components/Header.vue";
import Footer from "../Components/Footer.vue";
import CharactersRoom from "../Components/CharactersRoom.vue";
import CharactersRoomT2 from "../Components/CharactersRoomT2.vue";
import CharactersHomeT2 from "../Components/CharactersHome2.vue";
import CharHouseT1 from "../Components/CharHouseT1.vue";
import MetroLocate from "../Components/MetroLocate.vue";
import CharHouseT2 from "../Components/CharHouseT2.vue";
import CharactersRoomT3 from "@/Components/CharactersRoomT3.vue";
export default {
  name: 'MyComponent',
  components: {
    CharactersRoomT3,
    CharHouseT2,
    MetroLocate, CharHouseT1, CharactersHomeT2, CharactersRoomT2, CharactersRoom, Footer, Header},
  props: {
    data: null,
  },
  data() {
    return {
      priceQuadro: '',
      idPhoto: 0,
      image: JSON.parse(this.data.image),
      technic: JSON.parse(this.data.technic),
      bathType: JSON.parse(this.data.bathType),
      conveniences: JSON.parse(this.data.conveniences),
    }
  },
  mounted() {
    this.data.areaRoom = parseInt(this.data.areaRoom)
    this.priceQuadro = Math.round(parseInt(this.data.price.replace(' ', ''))/this.data.areaRoom)+' 000'
    console.log()
  },
  methods:{
    selectPhoto(value){
      switch (value){
        case '+':
          if (this.idPhoto >= this.image.length-1){return}
          this.idPhoto++
          break;
        case '-':
          if (this.idPhoto <= 0){return}
          this.idPhoto--
      }
    },
  },
};


</script>

<style>
.room-characters{
    width: 890px;
}
.btnRightPhoto{
  //grid: none;
}
.btnSelectPhotoleft{
  position: absolute;
  align-self: center;
  margin: 0 0 0 -50px;
  cursor: pointer;
}
.btnSelectPhotoright{
  position: absolute;
  align-self: center;
  margin: 0 -50px 0 0;
  transform: rotate(180deg);
  justify-self: end;
  cursor: pointer;
}
.roomPhotoGroups{
  display: grid;
  background: rgba(0, 0, 0, .03);
}
</style>

<template>
    <Header/>
    <div class="container-fluid content-order">

        <div class="textName-order">
            <p>{{ this.data.titleOrder }}</p>
        </div>
        <div class="room-location-address">
            <div class="room-location-address-text">{{this.data.adressOrder}}</div>
            <p class="room-location-address-text-map">На карте</p>
        </div>
        <div class="room-location-metro" >
          <MetroLocate :metro="this.data.metro1" :metro_time="this.data.metro_time1" />
          <MetroLocate :metro="this.data.metro2" :metro_time="this.data.metro_time2" />
          <MetroLocate :metro="this.data.metro3" :metro_time="this.data.metro_time3" />
        </div>
        <div class="room-photo">
            <img src='/image/room-photo-main.jpg' alt="" class="room-photo-img">
        </div>
        <div class="room-price-menu">
            <p class="room-price-menu-text">{{this.data.priceOrder}} ₽</p>
            <p class="room-price-menu-text-m2"> {{this.data.priceOrderQuadro}} ₽ м²</p>
            <div class="room-price-menu-contact-center">
                <div class="room-price-menu-contact">
                    <p class="room-price-menu-contact-text">Контакты застройщика</p>
                </div>
            </div>
        </div>
        <div class="room-developer" v-if="false">
            <div class="group-room-dev-1">
                <p class="room-developer-text_dev">Застройщик</p>
                <img src='/image/logo-MRgroup.png' alt="" class="room-developer-img_dev">
                <p class="room-developer-text-name_dev">{{this.data.developAuthor}}</p>
            </div>
            <div class="group-room-dev-2">
                <p class="group-room-develope-2 group-room-develope-text-1">Год <br> основания <br>{{ this.data.yearCreate }}</p>
                <p class="group-room-develope-2 group-room-develope-text-2">Сдано <br>{{this.data.houseFinishingCount}} домов в <br>{{this.data.houseBuildingCountLCD}} ЖК</p>
                <p class="group-room-develope-2 group-room-develope-text-3">Строится <br>{{this.data.houseBuildingCount}} домов в <br>{{this.data.houseBuildingCountLCD}} ЖК</p>
            </div>
        </div>
        <div class="room-credit_ipoteka" v-if="false">
            <img src='/image/logo-credit.png' alt="" class="room-credit-logo_ipoteka">
        </div>
        <div class="room-img-group">
            <img src='/image/room-photo-main.jpg' alt="" class="room-img-1 room-img">
            <img src='/image/room-photo-2.jpg' alt="" class="room-img-2 room-img">
            <img src='/image/room-photo-3.jpg' alt="" class="room-img-3 room-img">
        </div>
        <div class="room-characters">
            <div class="room-characters-group">
                <div class="row" style="justify-content: center">
                    <!--class_m это col-sm-4-->
                    <!--class_f это col-sm-3 room-characters-group-center-1-->
                    <!--class_s это col-sm-3 room-characters-group-center-2-->
                  <CharHouseT2 :img="'/image/areaAll.png'" :title="'Общая площадь: '" :description="this.data.area_room" :metre="'м²'" />
                  <CharHouseT2 :img="'/image/areaKitchen.png'" :title="'Площадь кухни: '" :description="this.data.area_kitchen_room" :metre="'м²'" />
                  <CharHouseT2 :img="'/image/areaLife.png'" :title="'Жилая площадь: '" :description="this.data.area_life_room" :metre="'м²'" />
                  <CharHouseT2 :img="'/image/areaLife.png'" :title="'Комнат: '" :description="this.data.roomCount+'-комн.'" />
                  <CharHouseT2 :img="'/image/finishing.png'" :title="'Отделка: '" :description="this.data.finishing" />
                  <CharHouseT2 :img="'/image/floorCount.png'" :title="'Этаж: '" :description="this.data.floor" />
                  <CharHouseT2 :img="'/image/houseKey.png'" :title="'Год сдачи: '" :description="this.data.yearComplete" />
                  <CharHouseT2 :img="'/image/houseKey.png'" :title="'Дом: '" :description="this.data.houseComplete" />
                </div>
            </div>
        </div>
        <div class="room-zhk-description">
            <p class="room-zhk-description-text"></p>
        </div>
        <div class="room-about-apartment">
            <p class="room-about-apartment-main-text">О квартире</p>
            <CharactersRoom :title="'Тип дома'" :description="this.data.type_room" />
            <CharactersRoom :title="'общая площадь'" :metre="' м²'" :description="this.data.area_room" />
            <CharactersRoom :title="'Жилая площадь'" :metre="' м²'" :description="this.data.area_life_room" />
            <CharactersRoom :title="'Площадь кухни'" :metre="' м²'" :description="this.data.area_kitchen_room" />
            <CharactersRoom :title="'Высота потолков'" :metre="' м'" :description="this.data.wall_height_room" />
            <CharactersRoomT2 :title="'Санузел'" :description-t1="'Совмещенных'" :description-t2="'Раздельный'" :char-t1="this.data.bathroom_combined_room" :char-t2="this.data.bathroom_separate_room" />
            <CharactersRoomT2 :title="'Балкон/лоджия'" :description-t1="'балкон'" :description-t2="'лоджия'" :char-t1="this.data.balcony_room" :char-t2="this.data.loggia_room" />
            <CharactersRoom :title="'вид из окна'" :description="this.data.view_window" />
            <CharactersRoom :title="'Отделка'" :description="this.data.finishing" />
        </div>
        <div class="room-about-apartment">
            <p class="room-about-apartment-main-text">О доме</p>
            <characters-home-t2 :title="'Количество лифтов'" :description-t1="'Пассажирских'" :description-t2="'Грузовых'" :char-t1="this.data.elevator_count_passenger" :char-t2="this.data.elevator_count_freight" />
            <CharactersRoom :title="'Тип дома'" :description="this.data.type_house" />
            <CharactersRoom :title="'Парковка'" :description="this.data.type_parking" />
        </div>
        <div class="room-apartament-finishing">
            <p class="room-apartament-finishing-text-mn">Отделка квартиры</p>
            <p class="room-apartament-finishing-text">Квартира продается в {{this.data.finishing}} отделка</p>
            <img src='/image/room-apartament-finishing-img.png' alt="" class="room-apartament-finishing-img">
        </div>
        <div class="room-location-map" v-if="false">
            <p class="room-location-map-text-mn">Расположение</p>
            <img src='/image/room-location-map.png' alt="" class="room-location-map-img">
        </div>
        <div class="room-developer-description" v-if="false" >
            <p class="room-developer-description-text_avtor">Автор объявления</p>
            <p class="room-developer-description-text_mn">Застройщик «{{this.data.developAuthor}}»</p>
            <img src='/image/room-verify-good.png' alt="" class="room-developer-description-verify-good_img">
            <p class="room-developer-description-text_verify-good">Надежный застройщик</p>
            <div class="row">
                <div class="room-developer-description-character col-sm-3">
                    <div class="room-developer-description-character-text">
                        <p class="room-developer-description-characters-text_mn">{{this.data.yearCreate}}</p>
                        <p class="room-developer-description-characters-text_sp">Год <br> основания</p>
                    </div>
                </div>
                <div class="room-developer-description-character col-sm-3">
                    <div class="room-developer-description-character-text">
                        <p class="room-developer-description-characters-text_mn">{{ this.data.houseFinishingCount }}</p>
                        <p class="room-developer-description-characters-text_sp">Домов сдано <br> в {{ this.data.houseFinishingCountLCD }} ЖК</p>
                    </div>
                </div>
                <div class="room-developer-description-character col-sm-3">
                    <div class="room-developer-description-character-text">
                        <p class="room-developer-description-characters-text_mn">{{ this.data.houseBuildingCount }}</p>
                        <p class="room-developer-description-characters-text_sp">Домов строится <br> в {{ this.data.houseBuildingCountLCD }} ЖК</p>
                    </div>
                </div>
            </div>
            <div class="room-developer-description-character-type-2">
                <div class="room-developer-description-character-text">
                    <p class="room-developer-description-characters-text_mn">{{this.data.procentHouseBuilding}}<span class="room-developer-description-characters-text_mn-percent">% </span></p>
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
    <Footer/>
</template>

<script>
import Header from "../Components/Header.vue";
import Footer from "../Components/Footer.vue";
import CharactersRoom from "../Components/CharactersRoom.vue";
import CharactersRoomT2 from "../Components/CharactersRoomT2.vue";
import CharactersHomeT2 from "../Components/CharactersHome2.vue";
import CharHouseT1 from "../Components/CharHouseT1.vue";
import {formToJSON} from "axios";
import {data} from "autoprefixer";
import MetroLocate from "../Components/MetroLocate.vue";
import CharHouseT2 from "../Components/CharHouseT2.vue";
export default {
    name: 'MyComponent',
    components: {
      CharHouseT2,
      MetroLocate, CharHouseT1, CharactersHomeT2, CharactersRoomT2, CharactersRoom, Footer, Header},
    data() {
        return{
            data: data,
            type_room: '',
            area_room: '',
            area_life_room: '',
            area_kitchen_room: '',
            wall_height_room: '',
            bathroom_combined_room: '',
            bathroom_separate_room: '',
            balcony_room: '',
            loggia_room: '',
            view_window: '',
            finishing: '',
            elevator_count_passenger: '',
            elevator_count_freight: '',
            type_house: '',
            type_parking: '',
            developAuthor: '',
            yearCreate: '',
            houseFinishingCount: '',
            houseFinishingCountLCD: '',
            houseBuildingCount: '',
            houseBuildingCountLCD: '',
            procentHouseBuilding: '',
            descriptionDeveloperLCD: '',
            titleOrder: '',
            metro1: '',
            metro2: '',
            metro3: '',
            metro_time1: '',
            metro_time2: '',
            metro_time3: '',
            adressOrder: '',
            priceOrder: '',
            priceOrderQuadro: '',
            roomCount: '',
            yearComplete: '',
            houseComplete: '',
        };
    },
    mounted() {
    this.fetchData();
    },
    methods: {
        fetchData() {
            axios.get('/post') // Убедитесь, что путь корректный
                .then(response => {
                    this.data = response.data;
                })
                .catch(error => {
                    console.error('Ошибка при получении данных:', error);
                });
        }
    }
};


</script>

<style>
.room-characters{
    width: 890px;
}
</style>

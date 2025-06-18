<template>
  <Header/>
<div style="display: grid;height: 100%">
  <!--  <form>-->
  <form method="post" id="formOrderCreate">
    <div class="contentOrderCreate">
      <div id="group-0" class="group-0" v-if="group0">
        <p class="textOrder">Новое объявление</p>
        <div class="group-0-1">
          <button-create @data="btnData" :cls="0" :data="['Аренда','Продажа']"
                         :data-value="['Аренда', 'Продажа']" :data-name="['typeOrder']"
                         :type-label="'Тип сделки'"
          />
          <div v-if="dataRequest.typeOrder === 'Продажа'">
            <button-create-t2 @data="btnData"
                              :cls="1"
                              :data-value="['apartament', 'apartamentNew', 'room', 'house', 'cottage', 'townhouse', 'housePart', 'area', 'garage', 'Office', 'Building', 'RetailSpace', 'FreeUsePremises', 'Production', 'Warehouse', 'Business', 'CommercialLand']"
                              :data1="['Квартира', 'Квартира в новостройке', 'Комната или доля', 'Дом/Дача', 'Коттедж', 'Таунхаус', 'Часть дома', 'Участок', 'Гараж']"
                              :data2="['Офис', 'Здание', 'Торговая площадь', 'Помещение свободного назначения', 'Производство', 'Склад', 'Бизнес', 'Коммерческая земля']"
                              :data-value1="['apartament', 'apartamentNew', 'room', 'house', 'cottage', 'townhouse', 'housePart', 'area', 'garage']"
                              :data-value2="['Office', 'Building', 'RetailSpace', 'FreeUsePremises', 'Production', 'Warehouse', 'Business', 'CommercialLand']"
                              :type-label1="'Жилая недвижимость'"
                              :type-label2="'Коммерческая недвижимость'"
                              :data-name="['typeRoom']"/>
          </div>
          <div v-if="dataRequest.typeOrder === 'Аренда'">
            <button-create-t2 @data="btnData"
                              :cls="2"
                              :data-value="['apartament', 'room', 'house', 'cottage', 'townhouse', 'housePart', 'garage', 'Office', 'Coworking', 'Building', 'RetailSpace', 'FreeUsePremises', 'Warehouse', 'Production', 'CommercialLand']"
                              :data1="['Квартира', 'Комната', 'Дом/Дача', 'Коттедж', 'Таунхаус', 'Часть дома', 'Гараж']"
                              :data2="['Офис', 'Коворкинг','Здание', 'Торговая площадь', 'Помещение свободного назначения', 'Склад', 'Производство', 'Коммерческая земля']"
                              :data-value1="['apartament', 'room', 'house', 'cottage', 'townhouse', 'housePart', 'garage']"
                              :data-value2="['Office', 'Coworking', 'Building', 'RetailSpace', 'FreeUsePremises', 'Warehouse', 'Production', 'CommercialLand']"
                              :type-label1="'Жилая недвижимость'"
                              :type-label2="'Коммерческая недвижимость'"
                              :data-name="['typeRoom']"
                              style1="width: 1200px"
                              style2="width: 1200px"/>
          </div>
        </div>
        <div v-if="dataRequest.typeRoom">
          <SearchMap @data="btnData"/>
        </div>
        <button class="btnSubmit" type="button" v-on:click="group1 = true; group0 = false" id="submits">Далее</button>
      </div>
      <div class="group-1" id="group-1" v-if="group1">
        <p class="textOrder">О здании</p>
        <input-create @data="btnData" id="inputNumber1" subtitle="" title="Год постройки" name="yearCreate"/>
        <br>
        <div class="group-1-1">
          <button-create @data="btnData" :cls="5" :data="['Кирпичный', 'Монолитный', 'Панельный', 'Блочный', 'Деревянный', 'Сталинский', 'Монолитно-кирпичный']" :data-value="['Кирпичный', 'Монолитный', 'Панельный', 'Блочный', 'Деревянный', 'Сталинский', 'Монолитно-кирпичный']" :data-name="['typeHouse']" :type-label="'Тип дома'" style="width: 800px;"/>
        </div>
        <button class="btnSubmit" type="button" v-on:click="group2 = true; group1 = false" id="submits">Далее</button>
      </div>
      <div id="group-2" class="group-2" v-if="group2">
        <p class="textOrder">Параметры квартиры</p>
        <div class="group-2-1">
          <button-create @data="btnData" :cls="3"
                         :data="['Студия','1','2','3','4','5','6+']"
                         :data-value="['studio', '1','2','3','4','5','6']"
                         :data-name="['roomCount']"
                         :type-label="'Количество комнат'"/>
        </div>
        <input-create @data="btnData" subtitle="м²" name="areaRoom" title="Общая площадь"/>
        <input-create @data="btnData" subtitle="м²" name="areaLifeRoom" title="Жилая площадь"/>
        <br>
        <input-create @data="btnData" subtitle="м²" name="areaKitchenRoom" title="Площадь кухни"/>
        <br>
        <input-create @data="btnData" subtitle="" name="floor" title="Этаж"/>
        <input-create @data="btnData" subtitle="" name="floorAllHouse" title="Этажей в доме"/>
        <br>
        <div class="group-2-2">
          <button-create
            @data="btnData"
            :cls="4"
            :data="['Квартира','Апартаменты']"
            :data-value="['flat', 'apartaments']"
            :data-name="['typeState']"
            :type-label="'Тип недвижемости'"/>
        </div>
        <input-create @data="btnData" id="inputNumber0" subtitle="" name="numApart" title="Номер квартиры"/>
        <div class="numApart">
          <img class="numApartImg" src="/image/glassOrg.png" alt="" >
          <p class="numApartText">Мы не покажем номер квартиры</p>
        </div>
        <button class="btnSubmit" type="button" v-on:click="group3 = true; group2 = false" id="submits">Далее</button>
      </div>
      <div class="group-3" id="group-3" v-if="group3">
        <p class="textOrder">Фотографии и планировка</p>
        <photo-load @getimage="MediaFileImage"/>
        <VideoLoad @getvideo="MediaFileVideo"/>
        <button class="btnSubmit" type="button" v-on:click="this.saveMetaDate" id="submits">Далее</button>
<!--        <button class="btnSubmit" type="button" v-on:click="group4 = true; group3 = false; " id="submits">Далее</button>-->
      </div>
      <div class="group-4" id="group-4" v-if="group4">
        <p class="textOrder">Особенности квартиры</p>
        <div class="group-4-1selectCharacters">
          <div class="group-4-1-1selectCharacters">
            <div class="group-4-1-1-1selectCharacters">
              <div class="group-4-1-2selectCharacters">
                <img src="/image/balconyRoom.png" class="balconyIcon" alt="">
                <p class="subTitleCharacters">Балконы</p>
              </div>
              <select-characters-btn @data="btnData" :title="'Балкон'" :name="'balconyRoom'"/>
              <select-characters-btn @data="btnData" :title="'Лоджия'" :name="'loggiaRoom'"/>
            </div>
          </div>
          <div class="group-4-1-3selectCharacters">
            <button-create-v3 @data="btnData" :cls="37" :data="['На улицу', 'Во двор']" :data-value="['На улицу', 'Во двор']" :data-name="['viewWindow']" :type-label="'Вид из окна'" :image-path="'/image/iconTree.png'"/>
            <div class="group-4-1-1-1selectCharacters">
              <div class="group-4-1-2selectCharacters">
                <img src="/image/iconBathRoom.png" class="balconyIcon" alt="">
                <p class="subTitleCharacters">Санузел</p>
              </div>
              <select-characters-btn @data="btnData" :title="'Раздельный'" :name="'bathroomCombinedRoom'"/>
              <select-characters-btn @data="btnData" :title="'Совмещенный'" :name="'bathroomSeparateRoom'"/>
            </div>
            <button-create-v3 @data="btnData"
                              :cls="543"
                              :data="['Без ремонта', 'Косметический', 'Евро', 'Дизайнерский']"
                              :data-value="['Без ремонта', 'Косметический', 'Евро', 'Дизайнерский']"
                              :data-name="['finishing']"
                              :type-label="'Ремонт'"
                              :image-path="'/image/iconFinishing.png'"/>
          </div>
          <view-menu :title="'Как выбрать ремонт? '" :inner-text="`
            <span style='font-weight: 600'>Без ремонта</span> — без отделки или со старой отделкой и коммуникациями. <br>
            <span style='font-weight: 600'>Косметический</span> — с недорогой внешней отделкой, без замены коммуникаций. <br>
            <span style='font-weight: 600'>Евро</span> — с современной качественной отделкой и нужными коммуникациями. <br>
            <span style='font-weight: 600'>Дизайнерский</span> — по индивидуальному проекту с нестандартным интерьером и планировкой. <br>
          `"/>
        </div>
        <div class="group-4-2selectCharacters">
          <div class="group-4-2-1selectCharacters">
            <div class="group-4-2-2selectCharacters">
              <img src="/image/iconElevator.png" class="balconyIcon" alt="">
              <p class="subTitleCharacters">Лифты</p>
            </div>
            <select-characters-btn @data="btnData" :title="'Пассажирский'" :name="'elevatorCountPassenger'"/>
            <select-characters-btn @data="btnData" :title="'Грузовой'" :name="'elevatorCountFreight'"/>
          </div>
        </div>
        <div class="group-4-3selectCharacters">
          <btn-create-select-mult @data="btnData"
                                  :cls="547"
                                  :data="['Пандус', 'Мусоропровод']"
                                  :data-value="['Пандус', 'Мусоропровод']"
                                  :data-name="['conveniences']"
                                  :type-label="'Подъезд'"
                                  :image-path="'/image/iconEntrance.png'"/>
        </div>
        <div class="group-4-4selectCharacters">
          <button-create-v3 @data="btnData"
                            :cls="2323"
                            :data="['Наземная', 'Многоуровневая', 'Подземная', 'На крыше']"
                            :data-value="['Наземная', 'Многоуровневая', 'Подземная', 'На крыше']"
                            :data-name="'parking'"
                            :type-label="'Парковка'"
                            :image-path="'/image/iconParking.png'"/>
        </div>
        <button class="btnSubmit" type="button" v-on:click="group5 = true; group4 = false" id="submits">Далее</button>
      </div>
      <div class="group-5" id="group-5" v-if="group5">
        <p class="textOrder">Особенности квартиры</p>
        <div class="group-5-1">
          <div class="group-5-1-1">
            <btn-create-select-mult @data="btnData"
                              :cls="92"
                              :data="['Без мебели', 'На кухне', 'В комнатах']"
                              :data-value="['Без мебели', 'На кухне', 'В комнатах']"
                              :data-name="['furniture']"
                              :type-label="'Мебель'"
                              :image-path="'/image/iconFurniture.png'"/>
          </div>
          <div class="group-5-1-2">
            <btn-create-select-mult @data="btnData"
                              :cls="265"
                              :data="['Ванна', 'Душевая кабина']"
                              :data-value="['Ванна', 'Душевая кабина']"
                              :data-name="['bathType']"
                              :type-label="'Ванная комната'"
                              :image-path="'/image/iconBathRoom.png'"/>
          </div>
          <div class="group-5-1-3">
            <btn-create-select-mult @data="btnData"
                              :cls="56"
                              :data="['Кондиционер', 'Холодильник', 'Телевизор', 'Посудомоечная машина', 'Стиральная машина']"
                              :data-value="['Кондиционер', 'Холодильник', 'Телевизор', 'Посудомоечная машина', 'Стиральная машина']"
                              :data-name="['technic']"
                              :type-label="'Техника'"
                              style="width: 800px;"
                              :image-path="'/image/iconWashingMachine.png'"/>
          </div>
          <div class="group-5-1-4">
            <btn-create-select-mult @data="btnData"
                                    :cls="9232"
                                    :data="['Интернет', 'Телефон']"
                                    :data-value="['Интернет', 'Телефон']"
                                    :data-name="'connectionNetwork'"
                                    :type-label="'Связь'"
                                    :image-path="'/image/iconNetwork.png'"/>
          </div>
        </div>
        <button class="btnSubmit" type="button" v-on:click="group6 = true; group5 = false" id="submits">Далее</button>
      </div>
      <div class="group-6" id="group-6" v-if="group6">
        <p class="textOrder">Описание квартиры</p>
        <div class="group-6-1">
          <div class="group-6-1-1">
            <p class="subtitleDescriptionRoom">Заголовок</p>
            <input class="titlOrderRoom" name="titleOrderRoom" v-model="title" @input="btnData('title', title)" placeholder="Просторная видовая двушка у парка">
          </div>
          <div class="group-6-1-2">
            <p class="subtitleDescriptionRoom">Описание</p>
            <textarea class="descriptionOrderRoom" name="descriptionOrder" v-model="description" @input="btnData('description', description)" id="" cols="136" rows="10"></textarea>
          </div>
        </div>
        <button class="btnSubmit" type="button" v-on:click="group7 = true; group6 = false" id="submits">Далее</button>
      </div>
      <div v-if="dataRequest['typeOrder'] === 'Продажа'">
        <div class="group-7" id="group-7" v-if="group7">
          <p class="textOrder">Цена и контакты</p>
          <div class="group-7-1">
            <div class="group-7-1-1">
              <input-create @data="btnData" subtitle="₽" :placeholder="'Например: 15 000 000'" :style2="'width: 400px;font-size: 20px'" :style1="'width: 340px;text-align: left;'" name="price" title="Цена"/>
            </div>
            <div class="group-7-1-6">
              <input-create @data="btnData" :placeholder="'Например: 000000000000'" :style2="'width: 260px'" :style1="'width: 200px;text-align: left;'" name="inn" title="Укажите ИНН"/>
            </div>
            <div class="group-7-1-7">
              <view-menu :title="'Зачем это указывать? '" :style="'font-weight: 500;'" :inner-text="`
            Если вы продаете как самозанятый, мы отметим ваше объявление специальном значком: <br>
            таким больше доверяют пользователи. Номер ИНН никто не увидит: он нужен только <br>
            для проверки. <br>
          `"/>
            </div>
          </div>
          <div class="group-7-2">
            <div class="group-7-2-1">
              <p class="textOrder">Контакты арендодателя</p>
              <div class="group-7-2-1-1">
                <img class="phoneIcon" src="/image/phoneNumber.png" alt="">
                <p class="phoneNumberinvisible">Защитим ваш личный номер от спама и мошенников: покажем в объявлении другой, <br> а звонки перенаправим вам</p>
              </div>
              <input-create @data="btnData" :placeholder="'+7 (xxx) xxx-xx-xx'" :style2="'width: 260px'" :style1="'width: 200px;text-align: left;'" name="numberPhone" title="Телефон"/>
            </div>
            <div class="group-7-3">
              <button-create-v3 @data="btnData"
                                :cls="3984"
                                :data="['Звонки и сообщения', 'Анкеты от арендаторов']"
                                :data-value="['Звонки и сообщения', 'Анкеты от арендаторов']"
                                :data-name="['communicationMethod']"
                                :type-label="'Способ связи'"/>
              <view-menu :title="'Что такое анкеты? '" :style="'font-weight: 500;'" :inner-text="`
            Потенциальные жильцы заполнят небольшие анкеты-заявки о себе: вы получите их в <br>
            личном кабинете и сами выберете, с кем пообщаться. Удобно, если не хотите отвечать на <br>
            поток звонков. <br>
          `"/>
            </div>
          </div>
          <button class="btnSubmit" type="button" @click="this.SendRequest" id="submit" style="margin-top: 0">Отправить</button>
        </div>
      </div>
<!--      -->
      <div v-if="dataRequest['typeOrder'] ==='Аренда'">
        <div class="group-7" id="group-7" v-if="group7">
          <p class="textOrder">Цена и условия аренды</p>
          <div class="group-7-1">
            <div class="group-7-1-1">
              <input-create @data="btnData" subtitle="₽" :placeholder="'Например: 40 000'" :style2="'width: 260px'" :style1="'width: 200px;text-align: left;'" name="price" title="Аренда в месяц"/>
            </div>
            <div class="group-7-1-2">
              <button-create-v3 @data="btnData"
                                :cls="1324"
                                :data="['Собственник', 'Арендатор']"
                                :data-value="['Собственник', 'Арендатор']"
                                :data-name="['network']"
                                :type-label="'По счётчикам платит'"/>
            </div>
            <div class="group-7-1-3">
              <view-menu :title="'Что входит в эти платежи? '" :style="'font-weight: 500;'" :inner-text="`
            По счётчикам оплачивают свет, воду и иногда газ — сколько израсходовали за месяц. <br>
            Остальные услуги ЖКХ — это отопление, капремонт, вывоз мусора и другие услуги, <br>
            которые чаще всего оплачивает сам собственник. <br>
          `"/>
            </div>
            <div class="group-7-1-3">
              <button-create-v3 @data="btnData"
                                :cls="910"
                                :data="['1', '2', '3','4 и более']"
                                :data-value="['1', '2', '3','4']"
                                :data-name="['prepayment']"
                                :type-label="'Предоплата по месяцам'"/>
            </div>
            <div class="group-7-1-4">
              <input-create @data="btnData" subtitle="₽" :placeholder="'Например: 40 000'" :style2="'width: 260px'" :style1="'width: 200px;text-align: left;'" name="deposit" title="Залог"/>
            </div>
            <div class="group-7-1-5">
              <button-create-v3 @data="btnData"
                                :cls="890"
                                :data="['Несколько месяцев', 'От года']"
                                :data-value="['Несколько месяцев', 'От года']"
                                :data-name="['countMonthRental']"
                                :type-label="'Срок аренды'"/>
              <btn-create-select-mult @data="btnData"
                                      :cls="923"
                                      :data="['Можно с детьми', 'Можно с домашними питомцами']"
                                      :data-value="['Можно с детьми', 'Можно с домашними питомцами']"
                                      :data-name="'conditions'"
                                      :type-label="'Условия проживания'"/>
              <button-create-v3 @data="btnData"
                                :cls="394"
                                :data="[1, 0]"
                                :data-value="['Да', 'Нет']"
                                :data-name="['selfEmployed']"
                                :type-label="'Сдаю как самозанятый'"/>
            </div>
            <div class="group-7-1-6">
              <input-create @data="btnData" :placeholder="'Например: 000000000000'" :style2="'width: 260px'" :style1="'width: 200px;text-align: left;'" name="inn" title="Укажите ИНН"/>
            </div>
            <div class="group-7-1-7">
              <view-menu :title="'Зачем это указывать? '" :style="'font-weight: 500;'" :inner-text="`
            Если вы сдаёте как самозанятый, мы отметим ваше объявление специальном значком: <br>
            таким больше доверяют пользователи. Номер ИНН никто не увидит: он нужен только <br>
            для проверки. <br>
          `"/>
            </div>
          </div>
          <div class="group-7-2">
            <div class="group-7-2-1">
              <p class="textOrder">Контакты арендодателя</p>
              <div class="group-7-2-1-1">
                <img class="phoneIcon" src="/image/phoneNumber.png" alt="">
                <p class="phoneNumberinvisible">Защитим ваш личный номер от спама и мошенников: покажем в объявлении другой, <br> а звонки перенаправим вам</p>
              </div>
              <input-create @data="btnData" :placeholder="'+7 (xxx) xxx-xx-xx'" :style2="'width: 260px'" :style1="'width: 200px;text-align: left;'" name="numberPhone" title="Телефон"/>
            </div>
            <div class="group-7-3">
              <button-create-v3 @data="btnData"
                                :cls="3984"
                                :data="['Звонки и сообщения', 'Анкеты от арендаторов']"
                                :data-value="['Звонки и сообщения', 'Анкеты от арендаторов']"
                                :data-name="['communicationMethod']"
                                :type-label="'Способ связи'"/>
              <view-menu :title="'Что такое анкеты? '" :style="'font-weight: 500;'" :inner-text="`
            Потенциальные жильцы заполнят небольшие анкеты-заявки о себе: вы получите их в <br>
            личном кабинете и сами выберете, с кем пообщаться. Удобно, если не хотите отвечать на <br>
            поток звонков. <br>
          `"/>
            </div>
          </div>
          <button class="btnSubmit" type="button" id="submit" @click="this.SendRequest" style="margin-top: 0">Отправить</button>
        </div>
      </div>
    </div>
  </form>
</div>
</template>

<script>

import axios from "axios";
import {defineComponent} from "vue";
import Header from "../Components/Header.vue";
import Footer from "../Components/Footer.vue";
import ButtonCreate from "../Components/buttonCreate.vue";
import SearchMap from "../Components/SearchMap.vue";
import InputCreate from "@/Components/inputCreate.vue";
import ButtonCreateT2 from "../Components/buttonCreateT2.vue";
import DeleteBtn from "@/Components/deleteBtn.vue";
import imgSelect from "../Components/imgSelect.vue";
import ImgSelect from "@/Components/imgSelect.vue";
import VidSelect from "@/Components/vidSelect.vue";
import SelectCharactersBtn from "../Components/selectCharactersBtn.vue";
import ButtonCreateV3 from "@/Components/btnCreateV3.vue";
import ViewMenu from "@/Components/ViewMenu.vue";
import BtnCreateSelectMult from "@/Components/btnCreateSelectMult.vue";
import ImageView from "@/Components/imageView.vue";
import PhotoLoad from "@/Components/PhotoLoad.vue";
import VideoLoad from "@/Components/VideoLoad.vue";

export default defineComponent({
  computed: {
    data() {
      return data
    },
  },
  components: {
    VideoLoad, PhotoLoad, ImageView, BtnCreateSelectMult, ViewMenu, ButtonCreateV3, SelectCharactersBtn, VidSelect, ImgSelect, imgSelect, DeleteBtn, ButtonCreateT2, InputCreate, SearchMap, Map, ButtonCreate, Footer, Header},
  data(){
    return{
      title: '',
      description: '',
      group0: false,
      group1: false,
      group2: false,
      group3: false,
      group4: false,
      group5: false,
      group6: false,
      group7: true,
      photo: [],
      video: [],
      dataPhotoLoad: [],
      dataRequest: {
        typeOrder: "Продажа",
        typeRoom: "apartament",
        adressOrder: "Москва, Россия, Ходынская улица, 2с1",
        yearCreate: "2024",
        typeHouse: "panel",
        roomCount: "3",
        areaRoom: "131",
        areaLifeRoom: "91",
        areaKitchenRoom: "15",
        floor: "18",
        floorAllHouse: "44",
        typeState: "flat",
        numApart: "232",
        image:
          [
            ["/storage/uploads/eblOomuZhP1ogM4rug4m1llgY2aHUH8FtlkPr4OJ.png"],
            ["/storage/uploads/HN4DqVqiaxKojdpvFXcHOh0YKBk7ozdzyDTFzo1S.png"],
            ["/storage/uploads/oVVNKmBWrrBaxQYajLjJC78jrCyM5yKRm6bwsmd8.jpg"],
          ],
        video:
          [
            ["/storage/uploads/KWbi6daZAPkq8LVaJIyH29XftCsvbrNwyo98PrYf.mp4"],
          ],
        balconyRoom: 1,
        loggiaRoom: 1,
        viewWindow: "На улицу",
        bathroomCombinedRoom: 1,
        bathroomSeparateRoom: 1,
        finishing: "Дизайнерский",
        elevatorCountPassenger: 1,
        elevatorCountFreight: 1,
        conveniences: ['Пандус', 'Мусоропровод'],
        parking: "Многоуровневая",
        furniture: ["Без мебели", "На кухне", "В комнатах"],
        bathType: ['Ванна', 'Душевая кабина'],
        technic: ['Кондиционер', 'Холодильник', 'Телевизор', 'Посудомоечная машина', 'Стиральная машина'],
        connectionNetwork: ["Интернет", "Телефон"],
        price: "15000000",
        communalServices: "Собственник",
        prepayment: "3",
        deposit: "150000",
        countMonthRental: "Несколько месяцев",
        conditions: ["Дети", "Питомцы"],
        selfEmployed: "Да",
        inn: "012345678901",
        numberPhone: "+7978 579 94-34",
        communicationMethod: "Звонки",
        title: "Хата в центре Москвы",
        description: "ЖК 'Пресня сити'"
      },
      countListFlip: 1,
      photoImg: {},
      videoWidth: '',
      photoWidth: '',
      fetch: '',
      requestData: {}
    }
  },
  methods: {
    MediaFileImage(value){
      this.photo = value
      console.log(0)
    },
    MediaFileVideo(value){
      this.video = value
      console.log(0)
    },
    SendRequest(){
      console.log(1)
      axios.post('/createOrder', this.dataRequest)
        .then(response => {
          console.log(response)
        })
    },
    // SEND REQUEST FOR SAVE TO DB
    // fetchData(){
    //   axios.post('/DBcreateOrder', this.dataRequest)
    //     .then(response => {
    //       window.location.href = '/'
    //     })
    // },
    saveMetaDate() {
      const formData = new FormData();
      this.photo.forEach(file => {
        console.log(file)
        formData.append('files[]', file[1]);
      });
      this.video.forEach((file) => {
        formData.append('files[]', file[1]);
      });
      console.log(this.photo)
      console.log(this.video)
      axios.post('/saveFile', formData, {
        headers: {
          'Content-Type': 'multipart/form-data'
        }
      })
        .then( response => {
          console.log(response)
        })
    },
    btnData(name, value){
      this.dataRequest[name] = value
    },
  }
},
)
</script>

<style>
p{margin: 0}
button{padding: 0}
body{
  overflow-x: hidden;
}
.phoneNumberinvisible{
  margin: 0 0 0 10px;
}
.phoneIcon{
  margin: -20px 0 0 60px;
}
.group-2-1{
  margin: 0 0 0 50px;
}
.group-2-2{
  margin: 0 0 0 50px;
}
.group-1-1{
  margin: 0 0 0 50px;
}
.group-0-1{
  margin: 0 0 0 50px;
}
.group-7-2{
  margin: 0 0 0 15px;
}
.group-7-3{
  margin: 0 0 0 50px;
}
.group-7-2-1-1{
  margin: 20px 0 10px 0;
}
.group-7-1-1{
  margin: 0 0 0 15px;
}
.group-7-1-7{
  margin: 0 0 0 65px;
}
.group-7-1-2{
  margin: 0 0 0 65px;
}
.group-7-1-3{
  margin: 0 0 0 65px;
}
.group-7-1-4{
  margin: 0 0 0 15px;
}
.group-7-1-5{
  margin: 0 0 0 65px;
}
.group-7-1-6{
  margin: 0 0 0 15px;
}
.descriptionOrderRoom:focus{
  border: none !important;
}
.descriptionOrderRoom{
  border-radius: 5px;
  font-size: 20px;
  font-weight: 500;
  border: 1px solid rgba(0, 0, 0, 0.18);
}
.subtitleDescriptionRoom{
  display: block;
  margin: 20px 0 10px 0;
  font-size: 18px;
  font-weight: 600;
}
.titlOrderRoom::placeholder{
  font-size: 18px;
}
.titlOrderRoom{
  padding: 8px 10px;
  border-radius: 5px;
  font-size: 20px;
  font-weight: 500;
  width: 1280px;
  border: 1px solid rgba(0, 0, 0, 0.18);
}
.group-6-1{
  margin: 35px 0 0 65px;
}
.group-5-1{
  margin: 25px 0 0 55px;
}
.group-4-3selectCharacters{
  margin: 15px 0 0 65px;
}
.group-4-4selectCharacters{
  margin: 15px 0 0 65px;
}
.group-4-2selectCharacters{
  margin: 0 0 0 65px;
}
.group-4-1-3selectCharacters{
  margin: 40px 0 0 0;
}
.group-4-1-1-1selectCharacters{
  margin: 0 0 30px 0;
}
.group-4-1-2selectCharacters{
  display: block;
  margin: 0 0 10px 0;
}
.balconyIcon{
  display: inline;
  margin: 0 15px 0 0;
}
.subTitleCharacters{
  font-size: 24px;
  font-weight: 600;
  margin: 15px 0 20px 0;
  display: inline-block;
}
.group-4{
  //display: inline-block;
}
.group-4-1selectCharacters{
  margin: 25px 0 0 60px;
}
.videocol{
  margin: 0 20px;
  display: grid;
  justify-items: center;
  align-items: center;
}
.photoListInvisible{
  display: none;
}
.btnDeleteImg{
  margin: 0 0 0 30px;
  border: solid #b2b2b2;
  border-radius: 5px;
  background: none;
  padding: 5px 15px;
  font-size: 18px;
  font-weight: 600;
  position: absolute;
}
.deleteImg{
  //display: grid;
  background: none;
  border: none;
  position: relative;
  display: none;
  z-index: 1;
  cursor: pointer;
  top: -110px;
}
.deleteImg1{
  //display: grid;
  background: none;
  border: none;
  position: relative;
  display: none;
  z-index: 1;
  cursor: pointer;
  top: -240px;
}
.groupImgCollection{
  display: block;
  height: 120px;
  justify-items: center;
  align-items: center;
}
.photoloadImg{
  cursor: pointer;
}
.photoList{
  display: none;
}
.imgLeftScroll{
  display: inline-block;
}
.imgRightScroll{
  display: inline-block;
}
.btnLeftScrollPhoto{
  border: none;
  background: none;
  //position: absolute;
  display: none;
  z-index: 1;
  padding: 22px 10px 22px 5px;
}
.btnRightScrollPhoto{
  border: none;
  background: none;
  position: absolute;
  display: none;
  z-index: 1;
  padding: 44px 20px;
  left: 1020px;
}
.btnLeftScrollPhoto1{
  border: none;
  background: none;
  //position: absolute;
  display: none;
  z-index: 1;
  padding: 0 10px 22px 5px;
  top: -100px;
}
.btnRightScrollPhoto1{
  border: none;
  background: none;
  position: absolute;
  display: none;
  z-index: 1;
  margin: 160px 20px 0 5px;
  left: 1820px;
}
.backgroundPhoto{
  background: #ffffff;
  width: 1200px;
  height: 130px;
  margin: 0 0 0 1020px;
  position: absolute;
  top: 300px;
  z-index: 1;
}
.backgroundPhoto1{
  background: #ffffff;
  width: 1200px;
  height: 380px;
  margin: 0 0 0 1780px;
  position: absolute;
  top: 580px;
  z-index: 1;
}
.photoGroup{
  width: 750px;
  margin: 10px 0 0 270px;
  //transition: all 1s;
  display: inline-flex;
  overflow: scroll;
  overflow-x: hidden;
  overflow-y: hidden;
  white-space: nowrap;
  scroll-behavior: smooth;
}
.photoGroup1{
  width: 1510px;
  margin: 10px 0 0 270px;
  //transition: all 1s;
  display: inline-flex;
  overflow: scroll;
  overflow-x: hidden;
  overflow-y: hidden;
  white-space: nowrap;
  scroll-behavior: smooth;
}
.camGroupLoadPhoto{
  border: none;
  background: none;
}
.camLoadPhoto{
  cursor: pointer;
  display: inline-block;
  border: none;
  background: white;
  height: 130px;
  padding: 10px 0 0 55px;
  position: absolute;
  z-index: 1;
}
.camLoadPhoto1{
  display: inline-block;
  border: none;
  background: white;
  height: 380px;
  padding: 118px 0 0 55px;
  position: absolute;
  z-index: 1;
}
img {
  -webkit-user-drag: none;
}
.loadPhoto{
  user-select: none;
  -webkit-user-drag: none;
}
.btnLeft{
  border: none;
  background: none;
  display: none;
}
.btnRight{
  background: none;
  border: none;
  margin: 60px 0 0 10px;
  display: inline-block;
}
.backWhiteLoadPhoto{
  background: white;
  user-select: none;
  -webkit-user-drag: none;
}
.rightBackFlip{
  -webkit-user-drag: none;
  user-select: none;
  margin: 48px 0 0 10px;
  opacity: 70%;
}
.backFlip{
  -webkit-user-drag: none;
  height: 155px;
  width: 1200px;
  background: white;
  position: absolute;
  margin: -155px 0 0 800px;
  user-select: none;
}
.photoGroupLocation {
  -webkit-user-drag: none;
  user-select: none;
  height: 155px;
  margin: 0 0 0 0;
}
.photoGroupLocation1 {
  -webkit-user-drag: none;
  user-select: none;
  height: 380px;
  margin: 10px 0 0 0;
}
.imgCollection{
  height: 120px;
  margin: 0 10px 0 15px !important;
}
.camText{
  font-weight: 600;
  opacity: 90%;
}
.cameraIcon{
  opacity: 80%;
  display: inline-block;
  margin: -28px 15px 0 45px;
}
.numApartImg{
  margin: -3px 0 0 0;
}
.numApartText{
  margin: 0 0 0 10px;
}
.numApart{
  margin: 0 0 0 55px;
}
.mapGroup{
  display: flex;
}
.contentOrderCreate{
  display: block;
}
.textOrder{
  font-size: 40px;
  font-weight: 600;
  margin: 0 0 0 45px;
  display: block;
}
.subTitleOrder{
  font-size: 24px;
  font-weight: 600;
  margin: 15px 0 20px 55px;
  display: block;
}
.btnSubmit{
  margin: 50px 0 50px 1650px;
  font-size: 24px;
  font-weight: 600;
  padding: 10px 25px;
  border: solid #ffffff 1px;
  border-radius: 5px;
  background: #499ABF;
  color: white;
}
</style>

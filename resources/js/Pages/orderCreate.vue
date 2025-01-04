<template>
<div style="display: grid;height: 100%">
  <!--  <form>-->
  <form action="/test" method="get">
    <div class="contentOrderCreate">
      <div id="group-0" class="group-0">
        <p class="textOrder">Новое объявление</p>
        <button-create @data="btnData" :cls="0" :data="['Аренда','Продажа']"
                       :data-value="['rental', 'sale']" :data-name="['typeOrder']"
                       :type-label="'Тип сделки'"
        />
        <div v-if="dataRequest.typeOrder === 'sale'">
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
        <div v-if="dataRequest.typeOrder === 'rental'">
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
        <div v-if="dataRequest.typeRoom">
          <SearchMap @data="dataMap"/>
        </div>
        <button class="btnSubmit" type="button" v-on:click="changePage(0, 1)" id="submits">Далее</button>
      </div>
      <div class="group-1" id="group-1">
        <p class="textOrder">О здании</p>
        <input-create id="inputNumber1" subtitle="" title="Год постройки" name="yearCreate"/>
        <button-create @data="btnData" :cls="5" :data="['Кирпичный', 'Монолитный', 'Панельный', 'Блочный', 'Деревянный', 'Сталинский', 'Монолитно-кирпичный']" :data-value="['brick', 'monolithic', 'panel', 'block', 'wooden', 'stalinist', 'monolithicBrick']" :data-name="['typeHouse']" :type-label="'Тип дома'" style="width: 800px;"/>
        <button class="btnSubmit" type="button" v-on:click="changePage(1, 2)" id="submits">Далее</button>
      </div>
      <div id="group-2" class="group-2">
        <p class="textOrder">Параметры квартиры</p>
        <button-create @data="btnData" :cls="3"
                       :data="['Студия','1','2','3','4','5','6+']"
                       :data-value="['studio', '1','2','3','4','5','6']"
                       :data-name="['roomCount']"
                       :type-label="'Количество комнат'"/>
        <input-create subtitle="м²" name="areaRoom" title="Общая площадь"/>
        <input-create subtitle="м²" name="areaLifeRoom" title="Жилая площадь"/>
        <br>
        <input-create subtitle="м²" name="areaKitchenRoom" title="Площадь кухни"/>
        <br>
        <input-create subtitle="" name="floor" title="Этажей"/>
        <input-create subtitle="" name="floorAllHouse" title="Этажей в доме"/>
        <button-create
          @data="btnData"
          :cls="4"
          :data="['Квартира','Апартаменты']"
          :data-value="['flat', 'apartaments']"
          :data-name="['typeState']"
          :type-label="'Тип недвижемости'"/>
        <input-create id="inputNumber0" subtitle="" name="numApart" title="Номер квартиры"/>
        <div class="numApart">
          <img class="numApartImg" src="/image/glassOrg.png" alt="" >
          <p class="numApartText">Мы не покажем номер квартиры</p>
        </div>
        <button class="btnSubmit" type="button" v-on:click="changePage(2, 3)" id="submits">Далее</button>
      </div>
      <div class="group-3" id="group-3">
        <p class="textOrder">Фотографии и планировка</p>
        <p class="subTitleOrder">Фотографии и планировка - от 5 и больше</p>
        <img src="/image/phtotCamera.png" class="cameraIcon" width="42" alt="">
        <p class="camText">На фото не должно быть людей, животных, алкоголя, табака, оружия. <br> Не добавляйте чужие фото, картинки с водяными знаками и рекламу </p>
        <div class="photoGroupLocation">
          <div class="camLoadPhoto">
            <button type="button" class="camGroupLoadPhoto" v-on:click="loadPhoto">
              <label for="photoLoadImage" class="photoloadImg">
                <div class="backWhiteLoadPhoto" style="display: inline-block">
                  <img class="iconLoadPhoto" src="/image/selectPhoto.jpg" alt="" style="display: inline-block;margin: 0 5px 0 0">
                  <input type="file" name="photoList" @change="selectPhoto" id="photoLoadImage" alt="" accept="image/*" class="photoList" required multiple>
                </div>
              </label>
            </button>
            <button type="button" class="btnLeftScrollPhoto" id="btnLeftScrollPhoto" v-on:click="photoList('left')"><img src="/image/left.png" alt="" class="imgLeftScroll" width="32px"></button>
          </div>
          <div class="photoGroup" id="photoCollection">
            <img :src="'/imagesUpload/'+imgs" v-for="(imgs, i) in dataPhotoLoad" class="imgCollection" alt="">
          </div>
          <div class="backgroundPhoto"></div>
          <button type="button" class="btnRightScrollPhoto" id="btnRightScrollPhoto" v-on:click="photoList('right')"><img src="/image/left.png" alt="" class="imgRightScroll" style="transform: rotate(180deg)" width="32px"></button>
        </div>
        <button class="btnSubmit" type="button" v-on:click="changePage(3, 4)" id="submits">Далее</button>
      </div>
    </div>
    <button class="btnSubmit" type="submit" id="submit" style="margin-top: 0">Отправить</button>
  </form>
</div>
</template>

<script>

import axios from "axios";
import {computed, defineComponent} from "vue";
import Header from "../Components/Header.vue";
import Footer from "../Components/Footer.vue";
import ButtonCreate from "../Components/buttonCreate.vue";
import SearchMap from "../Components/SearchMap.vue";
import InputCreate from "@/Components/inputCreate.vue";
import ButtonCreateT2 from "../Components/buttonCreateT2.vue";
export default defineComponent({
  props: {},
  computed: {
    data() {
      return data
    },
  },
  components: {ButtonCreateT2, InputCreate, SearchMap, Map, ButtonCreate, Footer, Header},
  data(){
    return{
      dataPhotoLoad: [],
      dataRequest: {},
      countListFlip: 1,
      photoImg: {},
    }
  },
  mounted() {
  },
  methods: {
    selectPhoto(){
      let photoImgs = document.getElementById('photoLoadImage')
      let photo = document.getElementsByClassName('imgCollection')
      let btnRight = document.getElementById('btnRightScrollPhoto')
      let date = new Date()
      let dateLog = date.getMilliseconds()+date.getDate()*Math.random(7,99)
      let widthPhotoList = 0
      let photoImg
      const reg = /image/;
      const formData = new FormData()

      if (photoImgs.files.length > 0 && reg.test(photoImgs.files[0].type)){
        photoImg = new File([photoImgs.files[0]], dateLog+'.'+photoImgs.files[0].type.replace('image/', ''))
        formData.append('image', photoImg)
        axios.post('/uploadPhoto', formData, {headers: {'Content-Type': 'multipart/form-data'}})
          .then(response => {
            this.dataPhotoLoad.push(response.data.image)
            for (let i = 0; i < photo.length; i++) {
              widthPhotoList += photo[i].width+25
            }
            if (widthPhotoList >700){
              btnRight.style.display = 'inline-block'
            }
          })
      }
    },
    loadPhoto(){

    },
    photoList(orient){
      let groupPhoto = document.getElementById('photoCollection')
      let photo = document.getElementsByClassName('imgCollection')
      let btnLeft = document.getElementById('btnLeftScrollPhoto')
      let btnRight = document.getElementById('btnRightScrollPhoto')
      let widthPhotoList = 0
      let marginLeft = groupPhoto.style.marginLeft.replace( /[a-z]/g,'')
      let countFlip = 0

      groupPhoto.style.marginLeft = '0px'

      for (let i = 0; i < photo.length; i++) {
        widthPhotoList += photo[i].width+25
      }
      countFlip = Math.round(widthPhotoList / photo.length)

      switch (orient){
        case 'left':
          if (widthPhotoList + +marginLeft - 720 < countFlip*2){marginLeft = marginLeft - -countFlip/2}
          else {marginLeft = marginLeft - -countFlip*2}
          break;
        case 'right':
          if (widthPhotoList + +marginLeft - 720 < countFlip*2){marginLeft = marginLeft - countFlip/2}
          else {marginLeft = marginLeft - countFlip*2}
      }

      if (marginLeft >= 0){btnLeft.style.display = 'none'}
      else {btnLeft.style.display = 'inline-block'}
      if (marginLeft <= widthPhotoList-(widthPhotoList*2)+780){btnRight.style.display = 'none'}
      else {btnRight.style.display = 'inline-block'}

      groupPhoto.style.marginLeft = marginLeft+'px'
    },
    changePage(i, k){
      document.getElementById('group-'+i).style.opacity = '0%'
      setTimeout(() => document.getElementById('group-'+i).style.display = 'none', 300)
      setTimeout(() => document.getElementById('group-'+k).style.display = 'block', 300)
    },
    btnData(name, value){
      this.dataRequest[name] = value
      console.log(this.dataRequest)
    },
    dataMap(data, name){
      this.dataRequest[name] = data
      console.log(this.dataRequest)
    }
  }
},
)
</script>

<style>
body{
  overflow-x: hidden;
}
.group-0{display: none;transition: all .3s;}
.group-0.1{display:none;transition: all .3s;}
.group-0.2{display: none;transition: all .3s;}
.group-1{display: none;transition: all .3s;}
.group-2{display: none;transition: all .3s;}
//.group-3{display: none;transition: all .3s;}

.photoloadImg{
  cursor: pointer;
}
.photoList{
  display: none;
}
.photoGroup{
  transition: all 1s;
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
  top: 325px;
  left: 1020px;
}
.backgroundPhoto{
  background: #ffffff;
  width: 1200px;
  height: 120px;
  margin: 0 0 0 1020px;
  position: absolute;
  top: 325px;
  z-index: 1;
}
.photoGroup{
  display: inline-flex;
  position: absolute;
  z-index: -1;
  margin: 10px 0 0 0;
  left: 270px;
}
.camGroupLoadPhoto{
  border: none;
  background: none;
}
.camLoadPhoto{
  cursor: pointer;
}
.camLoadPhoto{
  display: inline-block;
  border: none;
  background: white;
  height: 130px;
  padding: 10px 0 0 55px;
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
.imgCollection{
  height: 120px;
  margin: 0 10px 0 15px;
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
  margin: 250px 0 50px 1650px;
  font-size: 24px;
  font-weight: 600;
  padding: 10px 25px;
  border: solid #ffffff 1px;
  border-radius: 5px;
  background: #499ABF;
  color: white;
}
</style>

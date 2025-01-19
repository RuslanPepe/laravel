<template>
<div style="display: grid;height: 100%">
  <!--  <form>-->
  <form action="/test.js" method="get">
    <div class="contentOrderCreate">
      <div id="group-0" class="group-0" v-if="group0">
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
        <button class="btnSubmit" type="button" v-on:click="group1 = true; group0 = false" id="submits">Далее</button>
      </div>
      <div class="group-1" id="group-1" v-if="group1">
        <p class="textOrder">О здании</p>
        <input-create id="inputNumber1" subtitle="" title="Год постройки" name="yearCreate"/>
        <button-create @data="btnData" :cls="5" :data="['Кирпичный', 'Монолитный', 'Панельный', 'Блочный', 'Деревянный', 'Сталинский', 'Монолитно-кирпичный']" :data-value="['brick', 'monolithic', 'panel', 'block', 'wooden', 'stalinist', 'monolithicBrick']" :data-name="['typeHouse']" :type-label="'Тип дома'" style="width: 800px;"/>
        <button class="btnSubmit" type="button" v-on:click="group2 = true; group1 = false" id="submits">Далее</button>
      </div>
      <div id="group-2" class="group-2" v-if="group2">
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
        <button class="btnSubmit" type="button" v-on:click="group3 = true; group2 = false" id="submits">Далее</button>
      </div>
      <div class="group-3" id="group-3" v-if="group3">
        <p class="textOrder">Фотографии и планировка</p>
        <p class="subTitleOrder">Фотографии и планировка</p>
        <img src="/image/phtotCamera.png" class="cameraIcon" width="42" alt="">
        <p class="camText">На фото не должно быть людей, животных, алкоголя, табака, оружия. <br> Не добавляйте чужие фото, картинки с водяными знаками и рекламу </p>
        <button type="button" class="btnDeleteImg" @click="activateDeleteBtn" v-if="photoImgsAll.size >= 1">Удалить изображения</button>
        <div class="photoGroupLocation">
          <div class="camLoadPhoto">
            <button type="button" class="camGroupLoadPhoto">
              <label for="photoLoadImage" class="photoloadImg">
                <div class="backWhiteLoadPhoto" style="display: inline-block">
                  <img class="iconLoadPhoto" src="/image/selectPhoto.jpg" alt="" style="display: inline-block;margin: 0 5px 0 0">
                  <input type="file" name="photoList" @change="selectPhoto" id="photoLoadImage" alt="" class="photoList" accept="image/*" multiple>
                </div>
              </label>
            </button>
            <button type="button" class="btnLeftScrollPhoto" id="btnLeftScrollPhoto" v-on:click="photoList('left')"><img src="/image/left.png" alt="" class="imgLeftScroll" width="32px"></button>
          </div>
          <div class="photoGroup" id="photoCollection">
            <img-select :all-index="this.photoImgsAll.size" :index="i" :imghash="hash[1]" :onload="this.photoOnload" :func="deleteImg" v-for="(hash, i) in this.photoImgsAll"/>
          </div>
          <div class="backgroundPhoto"></div>
          <button type="button" class="btnRightScrollPhoto" id="btnRightScrollPhoto" v-on:click="photoList('right')"><img src="/image/left.png" alt="" class="imgRightScroll" style="transform: rotate(180deg)" width="32px"></button>
        </div>
<!--        video-->
        <p class="subTitleOrder">Видео</p>
        <img src="/image/phtotCamera.png" class="cameraIcon" width="42" alt="">
        <p class="camText">На видео не должно быть людей, животных, алкоголя, табака, оружия. <br> Не добавляйте чужие фото, картинки с водяными знаками и рекламу </p>
        <button type="button" class="btnDeleteImg" @click="activateDeleteBtnVideo" v-if="VideoAll.size >= 1">Удалить видео</button>
        <div class="photoGroupLocation1">
          <div class="camLoadPhoto1">
            <button type="button" class="camGroupLoadPhoto">
              <label for="videoLoadImages" class="photoloadImg">
                <div class="backWhiteLoadPhoto" style="display: inline-block">
                  <img class="iconLoadPhoto" src="/image/selectVideo.png" alt="" style="display: inline-block;margin: 0 5px 0 0">
                  <input formenctype="multipart/form-data" type="file" name="photoList" @change="selectVideo" id="videoLoadImages" alt="" accept="video/*" class="photoList" multiple>
                </div>
              </label>
            </button>
            <button type="button" class="btnLeftScrollPhoto1" id="btnLeftScrollPhoto1" v-on:click="videoList('left')"><img src="/image/left.png" alt="" class="imgLeftScroll" width="32px"></button>
          </div>
          <div ref="videoAll" class="photoGroup" id="videoCollection">
            <vid-select :func="deleteVideo" :video-onload="videoOnload" :index="i" :allindex="VideoAll.size" :meta-date-video="hashVideo" v-for="(hashVideo, i) in VideoAll"/>
          </div>
          <div class="backgroundPhoto1"></div>
          <button type="button" class="btnRightScrollPhoto1" id="btnRightScrollPhoto1" v-on:click="videoList('right')"><img src="/image/left.png" alt="" class="imgRightScroll" style="transform: rotate(180deg)" width="32px"></button>
        </div>
        <button type="button" v-on:click="savePhoto" style="font-size: 56px;margin: 300px 0 0 0">request</button>
        <button class="btnSubmit" type="button" v-on:click="group4 = true; group3 = false" id="submits">Далее</button>
      </div>
      <div class="group-4" id="group-4" v-if="group4">

        <button class="btnSubmit" type="button" v-on:click="group5 = true; group4 = false" id="submits">Далее</button>
      </div>
      <div class="group-5" id="group-5" v-if="group5">
        <button class="btnSubmit" type="button" v-on:click="group6 = true; group5 = false" id="submits">Далее</button>
      </div>
      <div class="group-6" id="group-6" v-if="group6">
        <button class="btnSubmit" type="button" v-on:click="group6 = true; group7 = false" id="submits">Далее</button>
      </div>
      <div class="group-7" id="group-7" v-if="group7">
        <button class="btnSubmit" type="submit" id="submit" style="margin-top: 0">Отправить</button>
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
export default defineComponent({
  props: {
  },
  computed: {
    data() {
      return data
    },
  },
  components: {
    VidSelect,
    ImgSelect, imgSelect, DeleteBtn, ButtonCreateT2, InputCreate, SearchMap, Map, ButtonCreate, Footer, Header},
  data(){
    return{
      group0: false,
      group1: false,
      group2: false,
      group3: false,
      group4: true,
      group5: false,
      group6: false,
      group7: false,
      photoImgsAll: new Map([]),
      VideoAll: new Map([]),
      dataPhotoLoad: [],
      dataRequest: {},
      countListFlip: 1,
      photoImg: {},
      videoWidth: '',
      photoWidth: '',
    }
  },
  mounted() {
    // let groupPhoto = document.getElementById('photoCollection')
    // groupPhoto.style.marginLeft = '270px'
    // let groupVideo = document.getElementById('videoCollection')
    // groupVideo.style.marginLeft = '270px'
  },
  methods: {
    activateDeleteBtn(){
      let btn = document.getElementsByClassName('deleteImg')
      for (let i = 0; i < btn.length; i++) {
        if (btn[i].style.display === 'block'){
          btn[i].style.display = 'none'
        }
        else {
          btn[i].style.display = 'block'
        }
      }
    },
    activateDeleteBtnVideo(){
      let btn = document.getElementsByClassName('deleteImg1')
      for (let i = 0; i < btn.length; i++) {
        if (btn[i].style.display === 'block'){
          btn[i].style.display = 'none'
        }
        else {
          btn[i].style.display = 'block'
        }
      }
    },
    deleteImg(target){
      let allImg = document.getElementById('photoCollection')

      for (let photoKey of this.photoImgsAll) {
        if(photoKey[1][1] === target){
          this.photoImgsAll.delete(photoKey[0])
          // return
        }
      }
      console.log(allImg.getBoundingClientRect())


      // if (widthPhotoList > 1000){
      //   btnRight.style.display = 'inline-block'
      // }else {
      //   btnRight.style.display = 'none'
      // }
    },
    deleteVideo(target){
      for (let videoKey of this.VideoAll){
        if (videoKey[1][1] === target.previousElementSibling.attributes[1].value){
          this.VideoAll.delete(videoKey[0])
          //  ДОРАБОТАТЬ ПРОВЕРКУ КНОПОК LIST
          return
        }
      }
    },
    photoOnload(){
      let btnRight = document.getElementById('btnRightScrollPhoto')
      let btnLeft = document.getElementById('btnLeftScrollPhoto')
      let photoAll = document.getElementById('photoCollection')
      let widthPhoto = 0

      widthPhoto += photoAll.getBoundingClientRect().width

      console.log(widthPhoto)

      if (widthPhoto > 780){
        btnRight.style.display = 'inline-block'
      }

      this.photoWidth = widthPhoto
    },
    videoOnload(){
      let btnRight = document.getElementById('btnRightScrollPhoto1')
      let btnLeft = document.getElementById('btnLeftScrollPhoto1')
      let videocol = document.getElementsByClassName('videocol')
      let widthVideo = 0
      for (let i = 0; i < this.VideoAll.size; i++) {
        widthVideo += videocol[i].getBoundingClientRect().width+40
      }
      if (widthVideo > 1440){
        btnRight.style.display = 'inline-block'
      }

      this.videoWidth = widthVideo
    },
    savePhoto(){
      let hash = []
      const formData = new FormData()
      this.VideoAll.forEach((value) => {hash.push(value)})
      this.photoImgsAll.forEach((value) => {hash.push(value)})
      for (let i = 0; i < hash.length; i++) {
        formData.append('metadata[]', hash[i][2])
      }

      axios.post('/uploadMetaData', formData, {headers: {'Content-Type': 'multipart/form-data'}})
        .then(response => {
          console.log(response.data)
        })

    },
    selectPhoto(){
      let btn = document.getElementsByClassName('deleteImg')
      const photoImgs = document.getElementById('photoLoadImage')
      let photo = document.getElementsByClassName('imgCollection')
      let btnRight = document.getElementById('btnRightScrollPhoto')
      let date = new Date()
      let widthPhotoList = 0
      let photoImg
      let photoImgAll = new Map()
      const regI = /image/;

      for (let i = 0; i < btn.length; i++) {btn[i].style.display = 'none'} //отключение кнопок делит

        for (let r = 0; r < photoImgs.files.length; r++) {
          let file = new File([photoImgs.files[r]],  crypto.randomUUID()+'.'+photoImgs.files[r].type.replace('image/', ''), {type: photoImgs.files[r].type})
          let urlPhoto = URL.createObjectURL(file)
          this.photoImgsAll.set(this.photoImgsAll.size, [urlPhoto, file.name, file])
        }

      // if (widthPhotoList > 780){
      //   btnRight.style.display = 'inline-block'
      // }

      photoImgs.value = ''
    },
    selectVideo(){
      const videos = document.getElementById('videoLoadImages')
      let btnRight = document.getElementById('btnRightScrollPhoto1')
      let videogroup = document.getElementById('videoCollection')
      let videoCollAll = document.getElementsByClassName('videocol')
      let btn = document.getElementsByClassName('deleteImg1')
      let timeStamp = []
      let videoAll = []
      const regV = /video/
      let video
      let date = new Date()
      let btnDelete = document.getElementById('vid')
      let widthVideo
      //Параметры обьектов получать по id

      for (let i = 0; i < btn.length; i++) {btn[i].style.display = 'none'} //отключение кнопок делит

      for (let r = 0; r < videos.files.length; r++) {
        let file = new File([videos.files[r]], crypto.randomUUID()+'.'+videos.files[r].type.replace('video/', ''), { type: videos.files[r].type})
        let urlVideo = URL.createObjectURL(file)
        this.VideoAll.set(this.VideoAll.size ,[urlVideo, file.name, file])
      }

      videos.value = ''
    },
    photoList(orient){
      let groupPhoto = document.getElementById('photoCollection') //div всех изображений
      let photo = document.getElementsByClassName('imgCollection') //все изображения полученные по классу "для получения widthPhotoList(длины всех изображений)"
      let btnLeft = document.getElementById('btnLeftScrollPhoto') //левая стрелка
      let btnRight = document.getElementById('btnRightScrollPhoto') //правая стрелка
      let widthPhotoList = groupPhoto.getBoundingClientRect().width //длина массива изображений
      let marginLeft = groupPhoto.style.marginLeft.replace( /[a-z]/g,'')-270 //отступ массива изображений
      //длина видимого поля 750px (groupPhoto)
      //1000px
      // groupPhoto.style.marginLeft = '0px'
      console.log(widthPhotoList)
      console.log(marginLeft)

      switch (orient){
        case 'left':
          if (marginLeft >= -270){
            marginLeft = 270
            btnLeft.style.display = 'none'
            console.log(2)
          }
          else {
            console.log(1)
            marginLeft = marginLeft - -540
            btnRight.style.display = 'inline-block'
          }
          break;
        case 'right':
          if (widthPhotoList+marginLeft < 780){
            console.log(widthPhotoList+marginLeft)
            console.log(3)
            marginLeft = -widthPhotoList+1000
            btnRight.style.display = 'none'
          }
          else {
            console.log(4)
            marginLeft - 360
            btnLeft.style.display = 'inline-block'
          }
          break;
      }

      console.log('ML: '+marginLeft)
      groupPhoto.style.marginLeft = marginLeft+'px'
    },
    videoList(orient){
      let groupPhoto = document.getElementById('videoCollection') //div всех изображений
      let photo = document.getElementsByClassName('videocol') //все изображения полученные по классу "для получения widthPhotoList(длины всех изображений)"
      let btnLeft = document.getElementById('btnLeftScrollPhoto1') //левая стрелка
      let btnRight = document.getElementById('btnRightScrollPhoto1') //правая стрелка
      let widthPhotoList = this.videoWidth //длина массива видео
      let marginLeft = groupPhoto.style.marginLeft.replace( /[a-z]/g,'')-270 //отступ массива изображений
      //длина видимого поля 750px (groupPhoto)
      //1000px
      // groupPhoto.style.marginLeft = '0px'

      switch (orient){
        case 'left':
          if (marginLeft >= -270){
            marginLeft = 270
            btnLeft.style.display = 'none'
          }
          else {
            marginLeft = marginLeft - -540
            btnRight.style.display = 'inline-block'
          }
          break;
        case 'right':
          if (widthPhotoList+marginLeft < 1600){
            marginLeft = -widthPhotoList+1600
            btnRight.style.display = 'none'
            btnLeft.style.display = 'inline-block'
          }
          else {
            marginLeft - 360
            btnLeft.style.display = 'inline-block'
          }
          break;
      }


      groupPhoto.style.marginLeft = marginLeft+'px'
    },
    //Переделать changePage
    // changePage(i, k){
    //   document.getElementById('group-'+i).style.opacity = '0%'
    //   setTimeout(() => document.getElementById('group-'+i).style.display = 'none', 300)
    //   setTimeout(() => document.getElementById('group-'+k).style.display = 'block', 300)
    // },
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
//.group-0{display: none;transition: all .3s;}
//.group-0.1{display:none;transition: all .3s;}
//.group-0.2{display: none;transition: all .3s;}
//.group-1{display: none;transition: all .3s;}
//.group-2{display: none;transition: all .3s;}
//.group-3{display: none;transition: all .3s;}
//.group-4{display: none;transition: all .3s;}

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
  position: absolute;
  display: none;
}
.deleteImg1{
  //display: grid;
  background: none;
  border: none;
  position: absolute;
  display: none;
}
.groupImgCollection{
  display: grid;
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
  height: 120px;
  margin: 0 0 0 1020px;
  position: absolute;
  top: 325px;
  z-index: 1;
}
.backgroundPhoto1{
  background: #ffffff;
  width: 1200px;
  height: 380px;
  margin: 0 0 0 1780px;
  position: absolute;
  top: 625px;
  z-index: 1;
}
.photoGroup{
  display: inline-flex;
  margin: 10px 0 0 270px;
  transition: all 1s;
  position: absolute;
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

<template>
<!--  Инпут на прием изображений-->
  <input type="file" id="SelectImg" class="imageSelect" @change="onFileChange" multiple accept="image/*"/>

<!--  Иконка для загрузки-->
  <label class="SelectLable" for="SelectImg"><img src="/image/selectPhoto.jpg" class="SelectLableImg" alt=""></label>

<!--  Блок отображения фото-->
  <div class="scroll-box">
    <button class="btnScroll left" type="button" @click="scrollLeft"><img class="imageScrollLeft" src="/image/right.png" width="32" alt=""></button>
    <div class="scrollСontainer" ref="scrollref">
      <div class="item" v-for="(img, index) in photo" :key="index">
        <img :src="img" class="itemImage" alt="">
      </div>
    </div>
    <button class="btnScroll right" type="button" @click="scrollRight"><img class="imageScrollRight" src="/image/right.png" width="32" alt=""></button>
  </div>
</template>

<script setup>
import { ref } from "vue";

const photo = ref([])
const  scrollRef = ref([])

function onFileChange(event) {
  const files = event.target.files
  photo.value = []

  Array.from(files).forEach(file => {
    if (file.type.startsWith('image/')) {
      const url = URL.createObjectURL(file)
      photo.value.push(url)
    }
  })
  console.log(photo)
}

function scrollLeft(){
  scrollRef.value?.scrollBy({ left: -700, behavior: 'smooth'})
}
function scrollRight(){
  scrollRef.value?.scrollBy({ left: 700, behavior: 'smooth'})
}

</script>

<style scoped>
.btnScroll{
  //position: absolute;
  z-index: 10;
  background: none;
  border: none;
  padding: 5px 10px;
  cursor: pointer;
}
.scrollСontainer{
  display: flex;
  overflow-x: auto;
  gap: 10px;
  scroll-snap-type: x mandatory;
  padding: 10px;
  scroll-behavior: smooth;
  scrollbar-width: none;
}
.scroll-box{
  position: relative;
  display: inline-block;
  width: 1200px;
}
.imageScrollLeft {
  transform: rotate(180deg);
}
.SelectLableImg{
  border-radius: 5px;
}
.SelectLable{
  margin: 50px 0 0 50px;
  cursor: pointer;
  border-radius: 15px;
  display: inline-block;
}
.imageSelect{
  display: none;
}
.item {
  flex: 0 0 auto;
  scroll-snap-align: start;
}

.itemImage {
  width: 150px;
  height: auto;
  object-fit: cover;
  border-radius: 8px;
}
</style>

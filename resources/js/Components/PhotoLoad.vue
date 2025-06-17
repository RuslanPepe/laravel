<template>
  <p class="subTitleOrder">Фотографии и планировка</p>
  <img src="/image/photoCamera.png" class="cameraIcon" width="42" alt="">
  <p class="camText">На фото не должно быть людей, животных, алкоголя, табака, оружия. <br> Не добавляйте чужие фото, картинки с водяными знаками и рекламу </p>
  <button class="deleteImage" type="button" v-if="photo.length > 0" @click="ShowDeleteImage">
    <span v-if="!showDelete">View delete image</span>
    <span v-if="showDelete">Cancel delete</span>
  </button>
  <button class="deleteImage" type="button" v-if="showDelete && photo.length > 0" @click="deleteImage">Delete image</button>
  <br>

<div class="containerFull">
  <!--  Инпут на прием изображений-->
  <input type="file" id="SelectImg" class="imageSelect" @change="onFileChange" multiple accept="image/*"/>

  <!--  Иконка для загрузки-->
  <label class="SelectLable" for="SelectImg"><img src="/image/selectPhoto.jpg" class="SelectLableImg" alt=""></label>

  <!--  Блок отображения фото-->
  <div class="scroll-box">
    <div class="btnControll"><button class="btnScroll left" type="button" v-if="showLeft && windowWidth > 1200" @click="scrollLeft"><img class="imageScrollLeft" src="/image/right.png" width="32" alt=""></button></div>
    <div class="scrollContainer" ref="scrollRef">
      <div class="item" v-for="(img, index) in photo" :key="index">
        <label :for="index+'Image'">
          <delete-metadata v-if="showDelete" :type="'Image'" :item-key="index" />
          <img :src="img" class="itemImage" alt="">
        </label>
      </div>
    </div>
    <div class="btnControll"><button class="btnScroll right" type="button" v-if="showRight && windowWidth > 1200" @click="scrollRight"><img class="imageScrollRight" src="/image/right.png" width="32" alt=""></button></div>
  </div>
</div>
</template>

<script setup>
import { ref, onMounted, onBeforeMount } from "vue";
import DeleteMetadata from "@/Components/deleteMetadata.vue";

const photo = ref([])
const scrollRef = ref(null)
const showLeft = ref(false)
const showRight = ref(false)
const windowWidth = ref(window.innerWidth)
const showDelete = ref(false)

function ShowDeleteImage(){
  let input = document.querySelectorAll('input:checked[name=itemIdImage]')
  showDelete.value = !showDelete.value
  Array.from(input).forEach((el) => {
    el.checked = false // for unselected checked input
  })
}

function deleteImage(){
  let input = Array.from(document.querySelectorAll('input:checked[name=itemIdImage]')).sort((a,b) => b.value - a.value)

  input.forEach((el) => {
    photo.value.splice(el.value, 1) // delete image from photo array
    el.checked = false // for unselected checked input
  })
  showDelete.value = !showDelete.value
}


function updateButtonsVisibility() {
  const el = scrollRef.value
  if (!el) return

  showLeft.value = el.scrollLeft > 10
  showRight.value = el.scrollLeft + el.clientWidth < el.scrollWidth
}

function scrollLeft(){
  scrollRef.value?.scrollBy({ left: -700, behavior: 'smooth'})
}
function scrollRight(){
  scrollRef.value?.scrollBy({ left: 700, behavior: 'smooth'})
}

onMounted(() => {
  window.addEventListener('resize', handleResize)

  if (scrollRef.value) {
    scrollRef.value.addEventListener('scroll', updateButtonsVisibility)
    updateButtonsVisibility()
  }
})

onBeforeMount(() => {
  window.removeEventListener('resize', handleResize)
  scrollRef.value?.removeEventListener('scroll', updateButtonsVisibility)
})

function handleResize() {
  windowWidth.value = window.innerWidth
  updateButtonsVisibility()
}

function onFileChange(event) {
  const files = event.target.files

  Array.from(files).forEach(file => {
    if (file.type.startsWith('image/')) {
      const url = URL.createObjectURL(file)
      photo.value.push(url)
    }
  })
}

</script>

<style scoped>
.deleteImage{
  margin: 0 0 0 15px;
  padding: 5px 10px;
  background: #89ceff;
  border: none;
  border-radius: 5px;
  font-weight: 500;
}
.subTitleOrder{
  font-size: 24px;
  font-weight: 600;
  margin: 15px 0 20px 55px;
  display: block;
}
.cameraIcon{
  opacity: 80%;
  display: inline-block;
  margin: -28px 15px 0 45px;
}
.camText{
  font-weight: 600;
  opacity: 90%;
}
.btnControll{
  width: 50px;
  align-self: center;
}
.imageScrollRight{
  margin: 0 0 0 15px;
}
.containerFull {
  display: flex;
  align-items: flex-start;
  gap: 20px;
  flex-wrap: wrap;
}
img{
  user-select: none;
}
.SelectLable {
  margin: 50px 0 0 50px;
  cursor: pointer;
  border-radius: 5px;
  display: inline-block;
  overflow: hidden;
}
.SelectLableImg {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.btnScroll{
  background: none;
  border: none;
  padding: 0 20px 0 0;
  cursor: pointer;
}
.scrollContainer{
  width: 1200px;
  height: 150px;
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
  display: inline-flex;
  margin: 40px 0 0 0;
}
.imageScrollLeft {
  transform: rotate(180deg);
}
.SelectLableImg{
  //border-radius: 5px;
}
.imageSelect{
  display: none;
}
.item {
  flex: 0 0 auto;
  scroll-snap-align: start;
}
.itemImage {
  height: 120px;
  object-fit: cover;
}
</style>

<template>
  <p class="subTitleOrder">Видео</p>
  <img src="/image/phtotCamera.png" class="cameraIcon" width="42" alt="">
  <p class="camText">На видео не должно быть людей, животных, алкоголя, табака, оружия. <br> Не добавляйте чужие фото, картинки с водяными знаками и рекламу </p>
  <br>

  <div class="containerFull">
    <!--  Инпут на прием изображений-->
    <input type="file" id="SelectVid" class="videoSelect" @change="onFileChange" multiple accept="video/*"/>

    <!--  Иконка для загрузки-->
    <label class="SelectLable" for="SelectVid"><img src="/image/selectVideo.jpg" class="SelectLableImg" alt=""></label>

    <!--  Блок отображения фото-->
    <div class="scroll-box">
      <div class="btnControll"><button class="btnScroll left" type="button" v-if="showLeft && windowWidth > 1200" @click="scrollLeft"><img class="imageScrollLeft" src="/image/right.png" width="32" alt=""></button></div>
      <div class="scrollContainer" ref="scrollRefV">
        <div class="item" v-for="(video, index) in video" :key="index">
          <video :src="video" class="itemVideo" controls></video>
        </div>
      </div>
      <div class="btnControll"><button class="btnScroll right" type="button" v-if="showRight && windowWidth > 1200" @click="scrollRight"><img class="imageScrollRight" src="/image/right.png" width="32" alt=""></button></div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, onBeforeMount } from "vue";

const video = ref([])
const scrollRefV = ref(null)
const showLeft = ref(false)
const showRight = ref(false)
const windowWidth = ref(window.innerWidth)

function updateButtonsVisibility() {
  const el = scrollRefV.value
  if (!el) return

  showLeft.value = el.scrollLeft > 10
  showRight.value = el.scrollLeft + el.clientWidth < el.scrollWidth
}

function scrollLeft(){
  scrollRefV.value?.scrollBy({ left: -700, behavior: 'smooth'})
}
function scrollRight(){
  scrollRef.value?.scrollBy({ left: 700, behavior: 'smooth'})
}

onMounted(() => {
  window.addEventListener('resize', handleResize)

  if (scrollRefV.value) {
    scrollRefV.value.addEventListener('scroll', updateButtonsVisibility)
    updateButtonsVisibility()
  }
})

onBeforeMount(() => {
  window.removeEventListener('resize', handleResize)
  scrollRefV.value?.removeEventListener('scroll', updateButtonsVisibility)
})

function handleResize() {
  windowWidth.value = window.innerWidth
  updateButtonsVisibility()
}

function onFileChange(event) {
  const files = event.target.files

  Array.from(files).forEach(file => {
    if (file.type.startsWith('video/')) {
      const url = URL.createObjectURL(file)
      video.value.push(url)
    }
  })
  console.log(video)
}

</script>

<style scoped>
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
  opacity: 60%;
}
.btnScroll{
  background: none;
  border: none;
  padding: 0 20px 0 0;
  cursor: pointer;
}
.scrollContainer{
  width: 1200px;
  height: 480px;
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
.videoSelect{
  display: none;
}
.item {
  flex: 0 0 auto;
  scroll-snap-align: start;
}
.itemVideo {
  height: 360px;
  object-fit: cover;
}
</style>

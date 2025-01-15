<template>
  <p class="subTitleOrder">{{ title }} <span style="font-size: 13px" v-if="visible === 1">необязательно</span></p>
  <img :src="srcCamIcon" class="cameraIcon" width="42" alt="">
  <p class="camText">На фото не должно быть людей, животных, алкоголя, табака, оружия. <br> Не добавляйте чужие фото, картинки с водяными знаками и рекламу </p>
  <button type="button" class="btnDeleteImg" @click="activateDeleteBtn" v-if="photoImgsAll.size >= 1">{{ deleteTitle }}</button>
  <div class="photoGroupLocation">
    <div class="camLoadPhoto">
      <button type="button" class="camGroupLoadPhoto">
        <label for="photoLoadImage" class="photoloadImg">
          <div class="backWhiteLoadPhoto" style="display: inline-block">
            <img class="iconLoadPhoto" :src="imgSelectPhoto" alt="" style="display: inline-block;margin: 0 5px 0 0;border-radius: 5px">
            <input type="file" name="photoList" @change="selectPhotos" :id="'photoLoadImage'" alt="" class="photoList" multiple>
          </div>
        </label>
      </button>
      <button type="button" class="btnLeftScrollPhoto" id="btnLeftScrollPhoto" v-on:click="photoList('left')"><img src="/image/left.png" alt="" class="imgLeftScroll" width="32px"></button>
    </div>
    <div class="photoGroup" :id="'photoCollection'">
      <img-select :imghash="hash" :func="func" v-for="(hash, i) in photoImgsAll" v-if="type === 0"/>
      <img-select :imghash="hash" :func="func" v-for="(hash, i) in photoVidAll" v-if="type === 1"/>
    </div>
    <div :class="'backgroundPhoto'+type"></div>
    <button type="button" class="btnRightScrollPhoto" :id="'btnRightScrollPhoto'" v-on:click="photoList('right')"><img src="/image/left.png" alt="" class="imgRightScroll" style="transform: rotate(180deg)" width="32px"></button>
  </div>

</template>

<script>
import imgSelect from "@/Components/imgSelect.vue";

export default {
  name: "selectPhotoVideo",
  components: {imgSelect},
  props: {
    func: Function,
    photoList: Function,
    selectPhotos: Function,
    activateDeleteBtn: Function,
    photoImgsAll: new Map([]),
    photoVidAll: new Map([]),
    title: '',
    deleteTitle: '',
    srcCamIcon: '',
    visible: '',
    imgSelectPhoto: '',
    type: '',
  }
}
</script>

<style scoped>

</style>

<template>
  <div class="groupImgCollection">
    <img :src="image.imageURL" :class="'imgCollection'" v-on:load="onloads()">
<!--    <delete-btn :name="imghash[1]" :method-func-click="func" />-->
  </div>
</template>

<script>
import DeleteBtn from "@/Components/deleteBtn.vue";

export default {
  name: "imgSelect",
  components: {DeleteBtn},
  props: {
    image: '',
    func: Function,
    onload: Function,
    index: '',
    allIndex: '',
  },
  methods: {
    onloads(){
      if (this.index === (this.allIndex-1)){
        this.onload()
      }
    }
  }
}
</script>

<style>

</style>

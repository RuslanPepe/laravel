<template>
  <div class="groupImgCollection">
<!--    {{ onload }}-->
    <delete-btn :name="imghash[1]" :method-func-click="func" />
    <img :src="imghash[0]" :class="'imgCollection'" v-on:load="onloads()">
  </div>
</template>

<script>
import DeleteBtn from "@/Components/deleteBtn.vue";

export default {
  name: "imgSelect",
  components: {DeleteBtn},
  props: {
    imghash: {},
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

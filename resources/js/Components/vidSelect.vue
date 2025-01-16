<template>
  <div class="videocol" :id="'videocol'+metaDateVideo[0]">
<!--    <video :fileName="metaDateVideo[1][1]" :src="metaDateVideo[1][0]" height="360" class="videoCollect" :id="'videoSelect'+metaDateVideo[0]" controls/>-->
    <video :title="index" :fileName="metaDateVideo[1][1]" v-on:loadeddata="onload" :src="metaDateVideo[1][0]" height="360" class="videoCollect" :id="'videoSelect'+metaDateVideo[0]" controls/>
    <delete-btn :index-id="'1'" :method-func-click="func"/>
  </div>
</template>

<script>
import DeleteBtn from "@/Components/deleteBtn.vue";

export default {
  name: "vidSelect",
  components: {DeleteBtn},
  props:{
    metaDateVideo: null,
    func: Function,
    videoOnload: Function,
    index:'',
    allindex:'',
  },
  mounted() {},
  methods: {
    onload(){
      if (this.index === (this.allindex-1)){
        this.videoOnload()
      }
    }
  }
}
</script>

<style>

</style>

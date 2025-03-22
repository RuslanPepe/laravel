<template>
    <div class="container-fluid containerAll">
      <button class="btnChange"><img src="/image/btnChange.png" width="48" style="transform: rotate(180deg)" alt=""></button>
      <div class="groupImage" ref="container">
        <img class="imgSingle" src="/image/photo_2025-02-04_04-22-14.jpg" alt="">
        <img class="imgSingle" src="/image/photo_2025-02-04_04-22-14.jpg" alt="">
        <img class="imgSingle" src="/image/photo_2025-02-04_04-22-14.jpg" alt="">
        <img class="imgSingle" src="/image/photo_2025-02-04_04-22-14.jpg" alt="">
        <img class="imgSingle" src="/image/photo_2025-02-04_04-22-14.jpg" alt="">
        <img class="imgSingle" src="/image/photo_2025-02-04_04-22-14.jpg" alt="">
        <img class="imgSingle" src="/image/photo_2025-02-04_04-22-14.jpg" alt="">
        <img class="imgSingle" src="/image/photo_2025-02-04_04-22-14.jpg" alt="">
        <img class="imgSingle" src="/image/photo_2025-02-04_04-22-14.jpg" alt="">
        <img class="imgSingle" src="/image/photo_2025-02-04_04-22-14.jpg" alt="">
        <img class="imgSingle" src="/image/photo_2025-02-04_04-22-14.jpg" alt="">
        <img class="imgSingle" src="/image/photo_2025-02-04_04-22-14.jpg" alt="">
        <img class="imgSingle" src="/image/photo_2025-02-04_04-22-14.jpg" alt="">
        <img class="imgSingle" src="/image/photo_2025-02-04_04-22-14.jpg" alt="">
      </div>
      <button class="btnChange"><img src="/image/btnChange.png" width="48" @click="LeftScroll" alt=""></button>
    </div>
</template>

<script>

export default {
  name: "Test",
  mounted() {

  },
  methods: {
    LeftScroll(){
      this.$refs.container.scrollLeft += 300
    }
  },
}
</script>

<style>
.imgSingle{
  height: 150px;
  margin: 0 30px 0 0;
}
.groupImage{
  height: 180px;
  width: 600px;
  display: inline-block;
  //overflow: scroll;
  overflow-x: hidden;
  overflow-y: hidden;
  white-space: nowrap;
  scroll-behavior: smooth;
}
.btnChange{
  border: none;
  background: none;
}
.containerAll{
  margin: 80px 0 0 50px;
}
</style>

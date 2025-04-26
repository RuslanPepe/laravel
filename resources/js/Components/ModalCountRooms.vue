<template>
  <div class="countRoomsBlock" :style="styleCountRooms">
    <div class="groupCountRooms">
      <btn-count-room @checkedCountRoom="this.$emit('checkedCountRoom')" v-for="i in 6" :value="i"/>
    </div>
  </div>
</template>

<script>
import BtnCountRoom from "@/Components/btnCountRoom.vue";

export default {
  name: "ModalCountRooms",
  components: {BtnCountRoom},
  props: {
    styleCountRooms: '',
  }
}
</script>

<style scoped>
.countRoomsBlock{
  position: absolute;
  height: 140px;
  width: 240px;
  background: white;
  left: 473px;
  margin: 5px 0 0 0;
  padding: 15px 20px;
  box-shadow: 0 0 10px #5e5e5e;
  border-radius: 10px;
  border: 1px solid rgba(94, 94, 94, 0.35);
}
.groupCountRooms{
  height: 100px;
  //width: 168px;
  align-content: center;
  justify-self: center;
}
</style>

<template>
  <div class="groupImgCollection">
    <delete-btn :method-func-click="func" />
    <img :src="vidhash[1]" :alt="vidhash[0]" :class="'imgCollection'">
  </div>
</template>

<script>
import DeleteBtn from "@/Components/deleteBtn.vue";

export default {
  name: "videoSelect",
  components: {DeleteBtn},
  props: {
    vidhash: {},
    func: Function
  }
}
</script>

<style>

</style>

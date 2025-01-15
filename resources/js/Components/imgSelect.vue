<template>
  <div class="groupImgCollection">
    <delete-btn :method-func-click="func" />
    <img :src="imghash[1]" :alt="imghash[0]" :class="'imgCollection'">
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
  },
}
</script>

<style>

</style>

<template>
  <button type="button" class="deleteImg" @click="methodFuncClick(this.$el)">
    <img src="/image/deleteImgV2.png" alt="" class="deleteIcon">
  </button>
</template>

<script>

export default {
  name: "DeleteBtn",
  props: {
    methodFuncClick: Function,
  },

  methods: {


  }
}
</script>

<style>

</style>

<template>
  <button type="button" :class="'deleteImg'+indexId" v-if="indexId" @click="methodFuncClick(this.$el)">
    <img src="/image/deleteImgV2.png" alt="" class="deleteIcon">
  </button>
  <button type="button" :class="'deleteImg'" v-if="!indexId" @click="methodFuncClick(this.name)">
    <img src="/image/deleteImgV2.png" alt="" class="deleteIcon">
  </button>
</template>

<script>

export default {
  name: "DeleteBtn",
  props: {
    methodFuncClick: Function,
    indexId: null,
    name: null,
  },
  methods: {}
}
</script>

<style>

</style>

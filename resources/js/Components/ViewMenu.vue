<template>
  <div class="menuCharacters">
    <div class="textMenuCharacters" v-on:click="selectMenu(this.$el)">{{ title }}<span><img src="/image/arrowMenu.png" style="transform: rotate(180deg)" class="arrowMenu" alt=""></span></div>
    <div class="textmenuBody" id="textMenuBody" :style="style"></div>
  </div>
</template>

<script>
export default {
  name: "ViewMenu",
  props: {
    innerText: '',
    title: '',
    style: '',
  },
  data() {
    return{
      targetCount: 1,
    }
  },
  methods: {
    selectMenu(target){
      let bodyHtml = target.children[1]

      if (!this.targetCount){
        this.targetCount++
        target.children[0].children[0].children[0].style.transform = 'rotate(0deg)'
        bodyHtml.innerHTML = ``
      }
      else {
        this.targetCount--
        target.children[0].children[0].children[0].style.transform = 'rotate(180deg)'
        bodyHtml.innerHTML = this.innerText
      }
    },
  },
}
</script>

<style>
.textMenuCharacters{
  font-weight: 600;
  font-size: 18px;
  margin: 0 0 0 25px;
  user-select: none;
  cursor: pointer;
  display: inline-block;
}
.menuCharacters{
  margin: 10px 0 30px 0;
}
.textmenuBody{
  line-height: 42px;
  font-size: 20px;
  margin: 10px 0 0 15px;
}
</style>

<template>
  <div class="menuCharacters">
    <div class="textMenuCharacters" v-on:click="selectMenu(this.$el)">Как выбрать вид ремонта <span><img src="/image/arrowMenu.png" style="transform: rotate(180deg)" class="arrowMenu" alt=""></span></div>
    <div class="textmenuBody" id="textMenuBody"></div>
  </div>
</template>

<script>
export default {
  name: "ViewMenu",
  props: {
    innerText: '',
  },
  data() {
    return{
      targetCount: 1,
    }
  },
  methods: {
    selectMenu(target){
      let bodyHtml = document.getElementById('textMenuBody')
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

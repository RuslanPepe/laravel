<template>
  <input class="inputCountRoom" @click="checkedCountRoomSS()" type="checkbox" name="countRoom[]" :id="value">
  <label :for="value">
    <div class="CheckboxInputCountRoom" :id="value+'-l'"><span class="textCountRoom">{{ this.value }}</span></div>
  </label>
</template>

<script>
export default {
  name: "btnCountRoom",
  emits: ['checkedCountRoom'],
  props: {
   value: '',
  },
  methods: {
    checkedCountRoomSS(){
      let checkdeInput = document.querySelectorAll('input[name="countRoom[]"]:checked')
      let allEl = document.getElementsByClassName('CheckboxInputCountRoom')
      for (let z = 0; z < allEl.length; z++) {
        allEl[z].style.background = '#ffffff'
        allEl[z].children[0].style.color = '#000000'
        allEl[z].style.border = '1px rgba(0, 0, 0, 0.4) solid'
      }
      for (let i = 0; i < checkdeInput.length; i++) {
        document.getElementById(checkdeInput[i].id+'-l').style.background = '#0075ff'
        document.getElementById(checkdeInput[i].id+'-l').children[0].style.color = '#ffffff'
        document.getElementById(checkdeInput[i].id+'-l').style.border = '1px #ffffff solid'
      }
      this.$emit('checkedCountRoom')
    },
  }
}
</script>

<style scoped>
.inputCountRoom[type=checkbox]{
  display: none;
}
.CheckboxInputCountRoom{
  width: 40px;
  height: 40px;
  border-radius: 5px;
  border: 1px rgba(0, 0, 0, 0.4) solid;
  margin: 8px 12px 7px 12px;
  display: flex;
  justify-content: center;
  cursor: pointer;
}
.textCountRoom{
  align-content: center;
  font-weight: 600;
  font-size: 18px;
  color: black;
}
</style>

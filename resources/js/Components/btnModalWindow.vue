<template>
  <button class="btntypeOrder"  type="button" :group="this.group" ref="dev" :checked="this.checked" @click="selectTypeOrder(this.$el, this.group, this.checked)" :value="this.value"><span class="selectType"><svg v-if="this.checked" class="markerApproved" width="10" height="8" viewBox="0 0 12 10"><path fill-rule="evenodd" d="M3.983 9.193l.97.807.824-.963L12 1.773 10.048 0 4.562 6.403 1.636 3.794 0 5.878z"></path></svg></span><span class="textTypeOrder">{{ this.title }}</span></button>
</template>

<script>
import {ref} from "vue";

export default {
  name: "btnModalWindow",
  props: {
    title: '',
    value: '',
    group: '',
    // checked: false,
  },
  data(){
    return{
      checked: false,
    }
  },
  methods: {
    selectTypeOrder(el, group) {
      let allElements = document.getElementsByClassName('btntypeOrder');
      let countElGroup = 0
      this.checked = false
      for (let i = 0; i < allElements.length; i++) {
        if (allElements[i].attributes.group.value !== group){
          allElements[i].getElementsByClassName('selectType')[0].style.background = '#ffffff'
          allElements[i].attributes.checked.value = false
        }
        if (allElements[i].attributes.checked.value === 'true'){
          countElGroup++
        }
        if (countElGroup === 0){
          allElements[i].attributes.checked.value = false
        }
      }
      if (countElGroup === 1 && this.$el.attributes.checked.value === true){
        return
      }
      this.checked = !this.checked
      this.checked ? el.getElementsByClassName('selectType')[0].style.background = '#247aff' : el.getElementsByClassName('selectType')[0].style.background = '#ffffff'
    },
    changeChecked(bool){
      this.checked = bool
    }
  }
}
</script>

<style>
.markerApproved{
  margin: 5px 0 0 -5px;
  fill: white;
  position: absolute;
}
.selectType{
  width: 18px;
  height: 18px;
  border: 1px solid #858585;
  display: inline-block;
  margin: 0 10px -3px 0;
  background: #ffffff;
}
.textTypeOrder{
  font-weight: 500;
}
.btntypeOrder{
  display: block;
  background: none;
  border: none;
  margin: 8px 10px 8px 10px;
}
</style>

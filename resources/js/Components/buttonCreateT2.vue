<template>
  <p class="textOrderType">{{typeLabel1}}</p>
  <div class="btnGroup" :style="style1">
    <div v-for="(n, i) in data1" class="btnFor">
      <label :class="'btnSelect btnMn'+cls" id="btnSelect">
        <input type="radio" :name="dataName" :value="dataValue1[i]" :id=" dataValue1[i]" v-on:click="changeStyle()" >
        <span class="type-rental-btn-text">{{data1[i]}}</span>
      </label>
    </div>
  </div>
  <p class="textOrderType">{{typeLabel2}}</p>
  <div class="btnGroup" :style="style2">
    <div v-for="(n, i) in data2" class="btnFor">
      <label :class="'btnSelect btnMn'+cls" id="btnSelect">
        <input type="radio" :name="dataName" :value="dataValue2[i]" :id=" dataValue2[i]" v-on:click="changeStyle()" >
        <span class="type-rental-btn-text">{{data2[i]}}</span>
      </label>
    </div>
  </div>
</template>

<script>

export default {
  name: "buttonCreateT2",
  inheritAttrs: false,

  props: {
    data1: '',
    data2: '',
    typeLabel1: '',
    typeLabel2: '',
    dataName: '',
    dataValue: '',
    dataValue1: '',
    dataValue2: '',
    cls: '',
    name: '',
    style1: '',
    style2: '',
  },
  mounted() {},
  methods: {
    changeStyle() {
      for (let i = 0; i < this.dataValue.length; i++) {
        if (document.getElementById(this.dataValue[i]).checked){
          document.getElementsByClassName('btnMn'+this.cls)[i].className = 'btnSelectAct btnMn'+this.cls
          this.$emit('data', this.dataName, this.dataValue[i])
        }
        else {
          document.getElementsByClassName('btnMn'+this.cls)[i].className = 'btnSelect btnMn'+this.cls
        }
      }
    },
  }
}
</script>

<style>
.btnSelect{
  background-color: white;
  font-size: 20px;
  border: solid rgba(0, 0, 0, 0.25) 1px;
  border-radius: 5px;
  color: rgba(0, 0, 0, 0.78);
  padding: 8px 19px;
  margin: 0 21px 19px 0;
  font-weight: 500;
  cursor: pointer;
}
.btnSelectAct{
  background-color: rgba(0, 169, 254, 0.15);
  font-size: 20px;
  border: solid rgba(0, 102, 175, 0.12) 1px;
  border-radius: 5px;
  color: rgba(0, 0, 0, 0.92);
  padding: 8px 19px;
  margin: 0 21px 19px 0;
  font-weight: 500;
  cursor: pointer;
}
input[type="radio"]{
  //display: none;
  opacity: 0;
  position: absolute;
}
.btnGroup{
  display: block;
  margin: 10px 0 0 50px;
  width: 1000px;
}
.btnFor{
  display: inline-block;
}
.textOrderType{
  display: block;
  margin: 20px 0 5px 50px;
  font-size: 20px;
  font-weight: 500;
}
</style>

<template>
  <p class="textOrderType">{{typeLabel}}</p>
  <div class="btnGroup">
    <div v-for="(n, i) in data" class="btnFor">
      <label :class="'btnSelect btnMn'+cls" id="btnSelect">
        <input type="radio" :name="dataName" :value="dataValue[i]" :id="dataValue[i]" v-on:click="changeStyle()">
        <span class="type-rental-btn-text">{{data[i]}}</span>
      </label>
    </div>
  </div>
</template>

<script>
export default {
  name: "buttonCreate",
  props: {
    data: '',
    typeLabel: '',
    dataName: '',
    dataValue: '',
    cls: '',
  },
  methods: {
    changeStyle(){
      for (let i = 0; i < this.data.length; i++) {
        if (document.getElementById(this.dataValue[i]).checked){
          document.getElementsByClassName('btnMn'+this.cls)[i].className = 'btnSelectAct btnMn'+this.cls
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

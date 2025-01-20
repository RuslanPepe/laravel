<template>
  <div class="selectCharactersBtn">
    <p class="selectCharactersBtnTitle">{{ title }}</p>
    <button class="selectCharactersBtnCounting" v-on:click="countingValue('minus')" type="button">-</button>
    <p class="selectCharactersBtnValue" id="value"><input class="inputHid" :name="this.name" :value="this.value" id="">{{ this.value }}</p>
    <button class="selectCharactersBtnCounting" v-on:click="countingValue('pluse')" type="button">+</button>
  </div>
</template>

<script>
export default {
  name: "selectCharactersBtn",
  props: {
    title: '',
    name: '',
  },
  data() {
    return {
      value: '0',
    }
  },
  methods: {
    countingValue(met){

      switch (met){
        case 'pluse':
          this.value++
          break
        case 'minus':
          if (this.value <= 0){
            return
          }
          this.value--
          break
      }

    },
  }
}
</script>

<style>
.selectCharactersBtn{
  border: 2px solid rgba(0, 0, 0, 0.16);
  border-radius: 5px;
  display: inline-block;
  padding: 5px 20px 8px 20px;
  margin: 0 30px 0 0;
}
.selectCharactersBtnTitle{
  font-size: 20px;
  font-weight: 600;
  padding: 0 10px 0 0;
}
.selectCharactersBtnCounting{
  background: none;
  border: none;
  font-size: 28px;
  font-weight: 600;
  padding: 0 5px 0 5px ;
}
.selectCharactersBtnValue{
  font-size: 24px;
}
.inputHid{
  display: none;
}
</style>

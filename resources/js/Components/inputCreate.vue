<template>
  <div class="group">
    <p class="textOrderTypeAdress1">{{title}}</p>
    <div class="groupInputData1" :style="style2">
      <input class="inputData1" v-model="query" :placeholder="placeholder" :style="style1" :name="name" :id="id">
      <p class="subTitle">{{subtitle}}</p>
    </div>
  </div>
</template>

<script>
export default {
  name: "inputCreate",

  props: {
    id: '',
    subtitle: '',
    title: '',
    style1: '',
    style2: '',
    styleInput: '',
    name: '',
    placeholder: '',
  },
  data() {
    return {
      query: '',
    }
  },
  mounted() {
    // this.$emit('data', )

  },
}
</script>

<style>
.subTitle{
  margin: 0 10px;
}
.group{
  margin: 0 0 0 50px;
}
.inputData1{
  width: 100px;
  border: none;
  font-size: 20px;
  font-weight: 600;
  text-align: center;
}
.groupInputData1{
  display: inline-block;
  padding: 10px 5px 10px 15px;
  background: #ffffff;
  border: rgba(0, 0, 0, 0.3) solid 1px;
  border-radius: 5px;
  margin: 10px 0 20px 0;
  width: 160px;
}
.textOrderTypeAdress1{
  display: block;
  margin: 15px 0 0 0;
  font-weight: 500;
}
</style>

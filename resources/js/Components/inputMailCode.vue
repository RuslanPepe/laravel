<template>
  <div class="blockInputProfile7">
    <p class="titleInputProfile7">{{ title }}</p>
    <div class="BlinputProfile7" >
      <input class="inputProfile7" :type="type" v-model="valueInput" :style="inputStyle" :name="name" :placeholder="placeholder">
      <button class="addInput7" @click="dataSave">+</button>
    </div>
  </div>
</template>

<script>
export default {
  name: "inputMailCode",
  props: {
    title: '',
    name: '',
    placeholder: '',
    inputStyle: '',
    value: '',
    disabled: true,
    type: 'text',
  },
  data() {
    return {
      valueInput: this.value,
    }
  },
  methods: {
    dataSave(){
      this.$emit('data', this.valueInput)
    },
  },
}

</script>

<style>
.addInput7{
  position: absolute;
  margin: 0 0 0 -123px;
  height: 56px;
  width: 56px;
  background: white;
  border: 3px solid rgba(0, 0, 0, 0.4);
  font-size: 24px;
  font-weight: 500;
  color: rgba(0, 0, 0, 0.7);
  border-radius: 5px;
}
.blockInputProfile7{
  display: inline-block;
  margin: 0 0 20px 0 ;
}
.titleInputProfile7{
  display: block;
  margin: 0 0 5px 5px;
  font-size: 20px;
  font-weight: 500;
}
.inputProfile7{
  border: 3px solid rgba(0 ,0 ,0 , .4);
  border-radius: 5px 0 0 5px;
  font-size: 20px;
  padding: 10px 15px 10px 10px;
  color: rgba(0, 0, 0, .8);
  font-weight: 500;
  margin: 0 120px 0 0;
}
.BlinputProfile{
  margin: 0 0 0 0;
}
</style>
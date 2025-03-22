<template>
  <div class="blockInputProfile12">
    <p class="titleInputProfile7">{{ title }}</p>
    <div class="BlinputProfile7" >
      <input class="inputProfile12" :type="type" v-model="valueInput" :style="inputStyle" :name="name" :placeholder="placeholder">
      <button class="addInput7" @click="dataSave"><img src="/image/iconMarker.png" class="markerIcon" alt="" height="28" width="24"></button>
    </div>
  </div>
</template>

<script>
export default {
  name: "inputInCodeEmail",
  props: {
    title: '',
    name: '',
    placeholder: '',
    inputStyle: '',
    value: '',
    disabled: true,
    type: 'text',
    marker: false,
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
.markerIcon{
  opacity: 60%;
}
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
.blockInputProfile12{
  display: inline-block;
  margin: 0 600px 30px 0;
}
.titleInputProfile7{
  display: block;
  margin: 0 0 5px 5px;
  font-size: 20px;
  font-weight: 500;
}
.inputProfile12{
  border: 3px solid rgba(0 ,0 ,0 , .4);
  border-radius: 5px 0 0 5px;
  font-size: 20px;
  padding: 10px 15px 10px 10px;
  color: rgba(0, 0, 0, .8);
  font-weight: 500;
  margin: 0 120px 0 0;
}
</style>
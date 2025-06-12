<template>
  <div class="blockInputProfile7" :style="styleBlock">
    <p class="titleInputProfile7">{{ title }} <span class="emailStatus">{{ verifiedTitle }}</span></p>
    <div class="BlinputProfile7" >
      <input class="inputProfile7" :type="type" v-model="valueInput" @input="dataSaveValue()" :style="inputStyle" :name="name" :placeholder="placeholder">
      <button class="addInput7" v-if="!this.marker" @click="dataSave(this.$el)">+</button>
      <button class="addInput7" v-if="this.marker" @click="dataSave(this.$el)"><img :src="marker" class="markerIcon" alt="" height="28" width="24"></button>
    </div>
  </div>
</template>

<script>
export default {
  name: "InputProfileAddEmail",
  props: {
    title: '',
    verified: '',
    name: '',
    placeholder: '',
    inputStyle: '',
    styleBlock: '',
    value: '',
    disabled: true,
    type: 'text',
    marker: false,
  },
  data() {
    return {
      valueInput: this.value,
      verifiedTitle: '',
    }
  },
  mounted() {
    this.verifiedTitle = this.verified === null ? 'Не подтвержден' : 'Подтвержден'
  },
  methods: {
    dataSave(target){
      this.$emit('data', this.valueInput, target.children[1].childNodes[0])
    },
    dataSaveValue(){
      this.$emit('dataSave', this.valueInput)
    },
  },
}

</script>

<style>
.emailStatus{
  font-size: 15px;
  color: #6c6c6c;
}
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

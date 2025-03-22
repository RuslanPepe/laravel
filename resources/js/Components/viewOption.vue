<template>
  <div class="blockInputProfile1" :style="inputStyle">
    <input class="inputProfile2" disabled :type="type" :value="value" :id="idItem" :name="name">
    <button class="addInput3" @click="deleteItem($event.target)" :id="idItem" style="cursor: pointer">-</button>
  </div>
</template>

<script>
export default {
  name: "viewOption",
  props: {
    name: '',
    inputStyle: '',
    idItem: '',
    value: '',
    disabled: true,
    type: 'text',
  },
  data() {
    return {

    }
  },
  methods: {
    deleteItem(id){
      this.$emit('data', parseInt(id.id))
    },
  },
}

</script>

<style>
.addInput3{
  position: absolute;
  margin: 0 0 0 -123px;
  height: 56px;
  width: 56px;
  background: white;
  border: 3px solid rgba(0, 0, 0, 0.4);
  font-size: 24px;
  font-weight: 500;
  color: rgba(0, 0, 0, 0.7);
  border-radius: 0 5px 5px 0;
  cursor: default;
}
.blockInputProfile1{
  display: inline-block;
  margin: 0 0 20px 0 ;
}
.inputProfile2{
  border: 3px solid rgba(0 ,0 ,0 , .4);
  border-radius: 5px 5px 5px 5px;
  font-size: 20px;
  padding: 10px 15px 10px 10px;
  color: rgba(0, 0, 0, .8);
  font-weight: 500;
  margin: 0 120px 0 0;
}
</style>
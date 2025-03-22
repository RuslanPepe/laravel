<template>
  <div class="blockInputProfile" >
    <p class="titleInputProfile">{{ title }}</p>
    <input class="inputProfile" :type="type" v-model="valueInput" :name="name" id="" :placeholder="placeholder" @input="dataSave()">
  </div>
</template>

<script>
export default {
  name: "inputProfile",
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
      this.$emit('data', this.name, this.valueInput)
    }
  },
}

</script>

<style>
.blockInputProfile{
  display: inline-block;
  margin: 0 0 20px 0 ;
}
.titleInputProfile{
  display: block;
  margin: 0 0 5px 5px;
  font-size: 20px;
  font-weight: 500;
}
.inputProfile{
  border: 3px solid rgba(0 ,0 ,0 , .4);
  border-radius: 5px;
  font-size: 20px;
  padding: 10px 15px 10px 10px;
  color: rgba(0, 0, 0, .8);
  font-weight: 500;
  margin: 0 120px 0 0;
}
</style>
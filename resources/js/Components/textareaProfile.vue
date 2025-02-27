<template>
  <div class="blockTextareaProfile">
    <p class="titleTextareaProfile">{{ title }}</p>
    <textarea class="textareaProfile" type="text" v-model="valueInput" :name="this.name" id="" @input="dataSave()" :placeholder="this.placeholder" :style="inputStyle"></textarea>
  </div>
</template>

<script>
export default {
  name: "textareaProfile",
  props: {
    title: '',
    name: '',
    placeholder: '',
    inputStyle: '',
    value: '',
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
.blockTextareaProfile{
  display: inline-block;
  margin: 20px 0 30px 0 ;
}
.titleTextareaProfile{
  display: block;
  margin: 0 0 5px 5px;
  font-size: 20px;
  font-weight: 500;
}
.textareaProfile{
  border: 3px solid rgba(0 ,0 ,0 , .4);
  border-radius: 5px;
  font-size: 20px;
  padding: 10px 15px 10px 10px;
  color: rgba(0, 0, 0, .8);
  font-weight: 500;
  margin: 0 120px 0 0;
  outline: none;
}
</style>
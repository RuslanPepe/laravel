<template>
  <div class="blockTextareaProfile">
    <p class="titleTextareaProfile">{{ title }}</p>
    <textarea class="textareaProfile" type="text" :name="this.name" id="" :placeholder="this.placeholder" :style="inputStyle"></textarea>
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
  }
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
  font-size: 24px;
  padding: 10px 15px 10px 10px;
  color: rgba(0, 0, 0, .8);
  font-weight: 500;
  margin: 0 120px 0 0;
  outline: none;
}
</style>
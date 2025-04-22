<template>
  <label class="btnTypeOrder" :group="this.group" :for="this.id">
    <div class="groupSelectType">
      <input type="checkbox" @change="checkInput(this.$el, this.group)" class="checkboxInputTypeOrder" :title="this.title" :group="this.group" :name="this.name" :id="this.id" :value="this.value" >
    </div>
    <span class="textTypeOrder">{{ this.title }}</span>
  </label>
</template>

<script>

export default {
  name: "btnModalWindow",
  props: {
    name: '',
    title: '',
    value: '',
    id: '',
    group: '',
  },
  methods: {
    checkInput(el, group){
      let elS = document.getElementsByClassName('btnTypeOrder')
      for (let i = 0; i < elS.length; i++) {
        if (elS[i].attributes.group.value !== group){
          elS[i].children[0].children[0].checked = false
        }
      }
      this.$emit('funcDataForm')
    },
  }
}
</script>

<style>
.groupSelectType{
  display: flex;
  cursor: pointer;
}
.checkboxInputTypeOrder{
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg class='markerApproved' width='10' height='8' viewBox='0 0 12 10'%3e%3cpath fill-rule='evenodd' d='M3.983 9.193l.97.807.824-.963L12 1.773 10.048 0 4.562 6.403 1.636 3.794 0 5.878z'%3e%3c/path%3e%3c/svg%3e");
}
.checkboxInputTypeOrder{
  //display: none;
  display: flex;
  margin: 0 5px 0 0 ;
  width: 15px;
  height: 15px;
  align-self: center;
}
.markerApproved{
  margin: 5px 0 0 3px;
  fill: white;
  position: absolute;
}
.selectType{
  width: 18px;
  height: 18px;
  display: inline-block;
  margin: 0 10px 0 0;
  background: #ffffff;
  border: 1px solid #858585;
  align-self: center;
  //display: none;
}
.textTypeOrder {
  font-weight: 500;
  cursor: pointer;
}
.btnTypeOrder{
  display: flex;
  background: #ffffff;
  border: none;
  margin: 8px 10px 8px 10px;
}
</style>

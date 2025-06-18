<template>
  <div class="groupInputCheckboxDelete">
    <input class="inputCheckboxDelete" type="checkbox" :name="'itemId'+type" :value="props.itemKey" :id="props.itemKey+type">
    <span class="customCheckBox" :style="style"></span>
  </div>
</template>

<script setup>
const props = defineProps({
  itemKey: '',
  type: '',
  style: '',
})

</script>

<style>
.groupInputCheckboxDelete {
  position: relative;
  background: black;
  width: 100%;
  height: 100%;
}
.inputCheckboxDelete[type="checkbox"] {
  display: none;
}
.inputCheckboxDelete[type="checkbox"]:checked + .customCheckBox::after {
  content: url("/image/deleteIcon.svg");
  display: block;
  width: 80px;
  height: 80px;
  //background: black;
}
.customCheckBox {
  position: absolute;
  width: 80px;
  height: 80px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, 25%);
  display: flex;
  align-items: center;
  justify-content: center;
  //pointer-events: none;
}
.inputCheckboxDelete {
  display: none;
}
</style>

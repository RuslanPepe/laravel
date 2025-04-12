<template>
<div class="modalTypeOrder">
  <div class="btnGroupOrder">
    <button type="button" class="btnSelectLiving">Жилая</button>
    <button type="button" class="btnComercial">Коммерческая</button>
  </div>
  <div class="btnGroupTypeOrder">
    <hr class="hrSeparate" style="margin: 0 0 18px 0">
    <btn-modal-window @data="selectTypeOrder" :checked="false" group="1" title="Квартира в новостройке" value=""/>
    <btn-modal-window @data="selectTypeOrder" :checked="false" group="1" title="Квартира во вторичке" value=""/>
    <hr class="hrSeparate">
    <btn-modal-window @data="selectTypeOrder" :checked="false" group="2" title="Комната или доля" value=""/>
    <hr class="hrSeparate">
    <btn-modal-window @data="selectTypeOrder" :checked="false" group="3" title="Дом/Дача" value=""/>
    <btn-modal-window @data="selectTypeOrder" :checked="false" group="3" title="Коттедж" value=""/>
    <btn-modal-window @data="selectTypeOrder" :checked="false" group="3" title="Таунхаус" value=""/>
    <btn-modal-window @data="selectTypeOrder" :checked="false" group="3" title="Часть дома" value=""/>
    <hr class="hrSeparate">
    <btn-modal-window @data="selectTypeOrder" :checked="false" group="4" title="Участок" value=""/>
    <btn-modal-window @data="selectTypeOrder" :checked="false" group="4" title="Гараж" value=""/>
  </div>
</div>
</template>

<script>
import BtnModalWindow from "@/Components/btnModalWindow.vue";

export default {
  name: "ModalTypeOrder",
  components: {BtnModalWindow},
  methods: {
    selectTypeOrder(el, group, checked) {
      let allElements = document.getElementsByClassName('btntypeOrder');
      let countElGroup = 0
      for (let i = 0; i < allElements.length; i++) {
        if(allElements[i].attributes.group.value !== group){
          allElements[i].getElementsByClassName('selectType')[0].style.background = '#ffffff'
        }
        if (allElements[i].attributes.checked.value === 'true'){
          countElGroup++
        }
      }
      console.log(countElGroup)
      console.log(countElGroup, checked === true)
      console.log(countElGroup, checked === true)
      if (countElGroup < 1 && checked === true){
        return
      }
      checked ? el.getElementsByClassName('selectType')[0].style.background = '#247aff' : el.getElementsByClassName('selectType')[0].style.background = '#ffffff'
    },
  }
}
</script>

<style>
.hrSeparate{
  margin: 4px 0 4px 0;
  //width: 340px;
  //justify-self: center;
  //display: flex;
}
.btnGroupTypeOrder{
  margin: 18px 0 0 0;
}
.modalTypeOrder{
  position: absolute;
  width: 373px;
  height: 434px;
  background: white;
  border-radius: 10px;
  margin: 5px 0 0 0;
  box-shadow: 0 0 10px #5e5e5e;
  border: 1px solid rgba(94, 94, 94, 0.35);
}
.btnGroupOrder{
  margin: 20px 0 0 15px;
}
.btnSelectLiving{
  background: none;
  border: #ADADAD 1px solid;
  border-radius: 3px 0 0 3px;
  font-size: 16px;
  font-weight: 500;
  padding: 5px 15px;
}
.btnComercial{
  background: none;
  border: #ADADAD 1px solid;
  border-radius: 0 3px 3px 0;
  font-size: 16px;
  font-weight: 500;
  padding: 5px 15px;
  border-left: none;
}
</style>

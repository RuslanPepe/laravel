<template>
<div class="modalTypeOrder" :style="styleModalType">
  <div class="btnGroupOrder">
    <button type="button" class="btnSelectLiving">Жилая</button>
    <button type="button" class="btnComercial">Коммерческая</button>
  </div>
  <div class="btnGroupTypeOrder">
    <hr class="hrSeparate" style="margin: 0 0 18px 0">
    <btn-modal-window @funcDataForm="this.$emit('funcDataForm')" :id="11" group="1" name="typeOrder[]" title="Квартира в новостройке" value="apartamentNew"/>
    <btn-modal-window @funcDataForm="this.$emit('funcDataForm')" :id="22" group="1" name="typeOrder[]" title="Квартира во вторичке" value="apartament"/>
    <hr class="hrSeparate">
    <btn-modal-window @funcDataForm="this.$emit('funcDataForm')" :id="33" group="2" name="typeOrder[]" title="Комната или доля" value="room"/>
    <hr class="hrSeparate">
    <btn-modal-window @funcDataForm="this.$emit('funcDataForm')" :id="44" group="3" name="typeOrder[]" title="Дом/Дача" value="house"/>
    <btn-modal-window @funcDataForm="this.$emit('funcDataForm')" :id="55" group="3" name="typeOrder[]" title="Коттедж" value="cottage"/>
    <btn-modal-window @funcDataForm="this.$emit('funcDataForm')" :id="66" group="3" name="typeOrder[]" title="Таунхаус" value="townhouse"/>
    <btn-modal-window @funcDataForm="this.$emit('funcDataForm')" :id="77" group="3" name="typeOrder[]" title="Часть дома" value="housePart"/>
    <hr class="hrSeparate">
    <btn-modal-window @funcDataForm="this.$emit('funcDataForm')" :id="88" group="4" name="typeOrder[]" title="Участок" value="area"/>
    <btn-modal-window @funcDataForm="this.$emit('funcDataForm')" :id="99" group="4" name="typeOrder[]" title="Гараж" value="garage"/>
  </div>
</div>
</template>

<script>
import BtnModalWindow from "@/Components/btnModalWindow.vue";

export default {
  name: "ModalTypeOrder",
  components: {BtnModalWindow},
  props: {
    styleModalType: ''
  }
}
</script>

<style>
.hrSeparate{
  margin: 4px 0 4px 0;
}
.btnGroupTypeOrder{
  margin: 18px 0 0 0;
}
.modalTypeOrder{
  //display: none;
  position: absolute;
  width: 373px;
  height: 400px;
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

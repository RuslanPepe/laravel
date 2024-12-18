<template>
<div style="display: grid;height: 100%">
  <Header/>
  <!--  <form>-->
  <form action="/test" method="get">
    <div class="contentOrderCreate">
      <p class="textOrder">Новое объявление</p>
      <button-create @data="log" :cls="0" :data="['Аренда','Продажа']" :data-value="['rental', 'sale']" :data-name="['typeOrder']" :type-label="'Тип сделки'"/>
      <button-create @data="log" :cls="1" :data="['Квартира', 'Квартира в новостройке', 'Комната или доля', 'Дом/Дача', 'Коттедж', 'Таунхаус', 'Часть дома', 'Участок', 'Гараж']" :data-value="['apartament', 'apartamentNew', 'room', 'house', 'cottage', 'townhouse', 'housePart', 'area', 'garage']" :data-name="['typeHouse']" :type-label="'Тип жилья'"/>
      <div class="mapGroup">
<!--        <SearchMap/>-->
      </div>
    </div>
    <button class="btnSubmit" type="submit" id="submits">Далее</button>
  </form>
  <Footer/>
</div>
</template>

<script>

import axios from "axios";
import {defineComponent} from "vue";
import Header from "../Components/Header.vue";
import Footer from "../Components/Footer.vue";
import ButtonCreate from "../Components/buttonCreate.vue";
import Map from "../Components/Map.vue";
import SearchMap from "../Components/SearchMap.vue";

export default defineComponent({
  components: {SearchMap, Map, ButtonCreate, Footer, Header},
  data(){
    return{
      dataRequest: {},
    }
  },
  mounted() {},
  methods: {
    log(data, i){
      this.dataRequest[data.dataName] = data.dataValue[i]
      console.log(this.dataRequest)
    },
    async requestDateOrder(){
      let response = await axios.get()
    }
  }
})
</script>

<style>
.mapGroup{
  display: flex;
}
.contentOrderCreate{
  display: block;
}
.textOrder{
  font-size: 40px;
  font-weight: 600;
  margin: 0 0 0 45px;
  display: block;
}
.btnSubmit{
  margin: 50px 0 50px 1650px;
  font-size: 24px;
  font-weight: 600;
  padding: 10px 25px;
  border: solid #ffffff 1px;
  border-radius: 5px;
  background: #499ABF;
  color: white;
}
</style>

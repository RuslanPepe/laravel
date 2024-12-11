<template>
  <div style="display: grid;height: 100%">
  <Header/>
  <form action="/test" method="get">
    <div class="contentOrderCreate">
      <p class="textOrder">Новое объявление</p>
      <button-create :cls="0" :data="['Аренда','Продажа', 'Строительство']" :data-value="['rental', 'sale', 'build']" :data-name="['typeOrder']" :type-label="'Тип сделки'"/>
      <button-create :cls="1" :data="['Квартира', 'Квартира в новостройке', 'Комната или доля', 'Дом/Дача', 'Коттедж', 'Таунхаус', 'Часть дома', 'Участок', 'Гараж']" :data-value="['apartament', 'apartamentNew', 'room', 'house', 'cottage', 'townhouse', 'housePart', 'area', 'garage']" :data-name="['typeHouse']" :type-label="'Тип жилья'"/>
      <div class="mapGroup">
        <SearchMap/>
        <Map/>
      </div>
    </div>
    <button class="btnSubmit" type="submit">Далее</button>
  </form>
  <Footer/>
</div>
</template>

<script>

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
    }
  },
  methods: {
    conslog(data){
      console.log(data)
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

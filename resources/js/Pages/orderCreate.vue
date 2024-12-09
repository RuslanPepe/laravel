<template>
<div style="display: grid;height: 100%">
  <Header/>
  <form action="/test" method="get">
    <div class="contentOrderCreate">
      <p class="textOrder">Новое объявление</p>
      <button-create :data="['Аренда','Продажа', 'Строительство']" :data-value="['rental', 'sale', 'build']" :data-name="['type']" :type-label="'Тип жилья'"/>
      <button-create :data="[]" :data-value="[]" :data-name="['typeHouse']" :type-label="'Тип жилья'"/>
    </div>
  </form>
  <Footer/>
</div>
</template>

<script>

import {defineComponent} from "vue";
import Header from "../Components/Header.vue";
import Footer from "../Components/Footer.vue";
import ButtonCreate from "../Components/buttonCreate.vue";

export default defineComponent({
  components: {ButtonCreate, Footer, Header},
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
.contentOrderCreate{
  display: block;
}
.textOrder{
  font-size: 40px;
  font-weight: 600;
  margin: 0 0 0 45px;
  display: block;
}
</style>

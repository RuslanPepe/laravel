<template>
<div style="display: grid;height: 100%">
  <!--  <form>-->
  <form action="/test" method="get">
    <div class="contentOrderCreate">
      <div id="group-0" class="group-0">
        <p class="textOrder">Новое объявление</p>
        <button-create @data="btnData" :cls="0" :data="['Аренда','Продажа']"
                       :data-value="['rental', 'sale']" :data-name="['typeOrder']"
                       :type-label="'Тип сделки'"
        />
        <div v-if="dataRequest.typeOrder === 'sale'">
          <button-create-t2 @data="btnData"
                            :cls="1"
                            :data-value="['apartament', 'apartamentNew', 'room', 'house', 'cottage', 'townhouse', 'housePart', 'area', 'garage', 'Office', 'Building', 'RetailSpace', 'FreeUsePremises', 'Production', 'Warehouse', 'Business', 'CommercialLand']"
                            :data1="['Квартира', 'Квартира в новостройке', 'Комната или доля', 'Дом/Дача', 'Коттедж', 'Таунхаус', 'Часть дома', 'Участок', 'Гараж']"
                            :data2="['Офис', 'Здание', 'Торговая площадь', 'Помещение свободного назначения', 'Производство', 'Склад', 'Бизнес', 'Коммерческая земля']"
                            :data-value1="['apartament', 'apartamentNew', 'room', 'house', 'cottage', 'townhouse', 'housePart', 'area', 'garage']"
                            :data-value2="['Office', 'Building', 'RetailSpace', 'FreeUsePremises', 'Production', 'Warehouse', 'Business', 'CommercialLand']"
                            :type-label1="'Жилая недвижимость'"
                            :type-label2="'Коммерческая недвижимость'"
                            :data-name="['typeRoom']"/>
        </div>
        <div v-if="dataRequest.typeOrder === 'rental'">
          <button-create-t2 @data="btnData"
                            :cls="2"
                            :data-value="['apartament', 'room', 'house', 'cottage', 'townhouse', 'housePart', 'garage', 'Office', 'Coworking', 'Building', 'RetailSpace', 'FreeUsePremises', 'Warehouse', 'Production', 'CommercialLand']"
                            :data1="['Квартира', 'Комната', 'Дом/Дача', 'Коттедж', 'Таунхаус', 'Часть дома', 'Гараж']"
                            :data2="['Офис', 'Коворкинг','Здание', 'Торговая площадь', 'Помещение свободного назначения', 'Склад', 'Производство', 'Коммерческая земля']"
                            :data-value1="['apartament', 'room', 'house', 'cottage', 'townhouse', 'housePart', 'garage']"
                            :data-value2="['Office', 'Coworking', 'Building', 'RetailSpace', 'FreeUsePremises', 'Warehouse', 'Production', 'CommercialLand']"
                            :type-label1="'Жилая недвижимость'"
                            :type-label2="'Коммерческая недвижимость'"
                            :data-name="['typeRoom']"
                            style1="width: 1200px"
                            style2="width: 1200px"/>
        </div>
        <div v-if="dataRequest.typeRoom">
          <SearchMap @data="dataMap"/>
        </div>
        <button class="btnSubmit" type="button" v-on:click="changePage(0, 1)" id="submits">Далее</button>
      </div>
      <div class="group-1" id="group-1">
        <p class="textOrder">О здании</p>
        <input-create id="inputNumber1" subtitle="" title="Год постройки" name="yearCreate"/>
        <button-create @data="btnData" :cls="5" :data="['Кирпичный', 'Монолитный', 'Панельный', 'Блочный', 'Деревянный', 'Сталинский', 'Монолитно-кирпичный']" :data-value="['brick', 'monolithic', 'panel', 'block', 'wooden', 'stalinist', 'monolithicBrick']" :data-name="['typeHouse']" :type-label="'Тип дома'" style="width: 800px;"/>
        <button class="btnSubmit" type="button" v-on:click="changePage(1, 2)" id="submits">Далее</button>
      </div>
      <div id="group-2" class="group-2">
        <p class="textOrder">Параметры квартиры</p>
        <button-create @data="btnData" :cls="3"
                       :data="['Студия','1','2','3','4','5','6+']"
                       :data-value="['studio', '1','2','3','4','5','6']"
                       :data-name="['roomCount']"
                       :type-label="'Количество комнат'"/>
        <input-create subtitle="м²" name="numApart" title="Общая площадь" style1="width: 180px" style2="width: 250px" />
        <input-create subtitle="м²" name="numApart" title="Жилая площадь"/>
        <br>
        <input-create subtitle="м²" name="numApart" title="Площадь кухни"/>
        <br>
        <input-create subtitle="" name="numApart" title="Этажей"/>
        <input-create subtitle="" name="numApart" title="Этажей в доме"/>
        <button-create
          @data="btnData"
          :cls="4"
          :data="['Квартира','Апартаменты']"
          :data-value="['flat', 'apartaments']"
          :data-name="['typeState']"
          :type-label="'Тип недвижемости'"/>
        <input-create id="inputNumber0" subtitle="" name="numApart" title="Номер квартиры"/>
        <div class="numApart">
          <img class="numApartImg" src="/image/glassOrg.png" alt="" >
          <p class="numApartText">Мы не покажем номер квартиры</p>
        </div>
        <button class="btnSubmit" type="button" v-on:click="changePage(2, 3)" id="submits">Далее</button>
      </div>
    </div>
    <button class="btnSubmit" type="submit" id="submit">Отправить</button>
  </form>
</div>
</template>

<script>

import axios from "axios";
import {defineComponent} from "vue";
import Header from "../Components/Header.vue";
import Footer from "../Components/Footer.vue";
import ButtonCreate from "../Components/buttonCreate.vue";
import SearchMap from "../Components/SearchMap.vue";
import InputCreate from "@/Components/inputCreate.vue";
import ButtonCreateT2 from "../Components/buttonCreateT2.vue";

export default defineComponent({
  components: {ButtonCreateT2, InputCreate, SearchMap, Map, ButtonCreate, Footer, Header},
  data(){
    return{
      dataRequest: {},
    }
  },
  mounted() {},
  methods: {
    changePage(i, k){
      document.getElementById('group-'+i).style.opacity = '0%'
      setTimeout(() => document.getElementById('group-'+i).style.display = 'none', 300)
      setTimeout(() => document.getElementById('group-'+k).style.display = 'block', 300)
    },
    btnData(name, value){
      this.dataRequest[name] = value
      console.log(this.dataRequest)
    },
    async requestDateOrder(){
      let response = await axios.get()
    },
    dataMap(data, name){
      this.dataRequest[name] = data
      console.log(this.dataRequest)
    }
  }
})
</script>

<style>
.group-0{transition: all .3s;}
.group-0.1{display:none;transition: all .3s;}
.group-0.2{display: none;transition: all .3s;}
.group-1{display: none;transition: all .3s;}
.group-2{display: none;transition: all .3s;}
.group-3{display: none;transition: all .3s;}

.numApartImg{
  margin: -3px 0 0 0;
}
.numApartText{
  margin: 0 0 0 10px;
}
.numApart{
  margin: 0 0 0 55px;
}
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

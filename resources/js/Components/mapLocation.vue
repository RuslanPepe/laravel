<template>
  <div class="mapMn">
    <input type="text" v-model="searchQuery" placeholder="Введите адрес" />
    <button @click="searchAddress">Поиск</button>
    <div id="map" style="height: 400px;width: 600px"></div>
  </div>
</template>

<script>

import MapLocation from "../Components/mapLocation.vue";
import {YandexMap} from "vue-yandex-maps";

export default {
  name: "mapLocation",
  data() {
    return {
      map: null,
      searchQuery: '',
    };
  },
  mounted() {
    const script = document.createElement('script');
    script.src = 'https://api-maps.yandex.ru/2.1?apikey=e7692a53-8e97-4a20-ae6f-ec1e70062c30&load=package.full&lang=ru_RU'; // замените на ваш ключ
    script.onload = () => {
      ymaps.ready(this.initMap);
    };
    document.head.appendChild(script);
  },
  methods: {
    initMap() {
      this.map = new ymaps.Map('map', {
        center: [55.76, 37.64], // Координаты Москвы
        zoom: 10,
      });
    },
    searchAddress() {
      const geocoder = new ymaps.GeoCoder(this.searchQuery);
      geocoder.geocode(this.searchQuery).then((res) => {
        const firstGeoObject = res.geoObjects.get(0);
        if (firstGeoObject) {
          this.map.setCenter(firstGeoObject.geometry.coordinates);
          this.map.setZoom(14);
          this.map.geoObjects.add(firstGeoObject);
        } else {
          alert('Адрес не найден');
        }
      });
    },
  },
};
</script>



<style>
#map {
  width: 100%;
  height: 400px;
}
.mapMn{
  margin: 70px 0 0 70px;
}
</style>

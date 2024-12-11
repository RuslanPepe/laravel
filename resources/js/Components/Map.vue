<template>
  <div class="mnMap">
    <div id="map"></div>
  </div>
</template>

<script>
export default {
  name: "Map",

  mounted() {
    document.createElement('script').src = '/suggest'

    initMap();

    async function initMap() {
      // Промис `ymaps3.ready` будет зарезолвлен, когда загрузятся все компоненты основного модуля API
      await ymaps3.ready;
      await ymaps3.import;

      const {YMap, YMapDefaultSchemeLayer, YMapDefaultFeaturesLayer, YMapControls} = ymaps3;

      // Иницилиазируем карту
      const map = new YMap(
        // Передаём ссылку на HTMLElement контейнера
        document.getElementById('map'),

        // Передаём параметры инициализации карты
        {
          location: {
            // Координаты центра карты
            center: [37.588144, 55.733842],

            // Уровень масштабирования
            zoom: 16,
          },
        }
      );

      // Добавляем слой для отображения схематической карты
      map.addChild(new YMapDefaultSchemeLayer());
    }
  },
  methods: {
  }
}
</script>

<style>
  .mnMap{
    width: 100%;
  }
  #map{
    margin: 70px auto 30px;
    width: 840px;
    height: 540px;
  }
  #map > ymaps {
    border-radius: 15px;
    overflow: hidden;
  }
</style>

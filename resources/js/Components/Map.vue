<template>

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
            center: [37.564581, 55.770552],

            // Уровень масштабирования
            zoom: 20,
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

</style>

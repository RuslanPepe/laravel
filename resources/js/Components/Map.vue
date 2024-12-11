<template>
  <div class="mnMap">
    <div id="map"></div>
  </div>
</template>

<script>
export default {
  name: "mapSearchAdress",

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
      map.addChild(new YMapDefaultSchemeLayer(
        {
          customization:
            [
              {
                "tags": "country",
                "elements": "geometry.fill",
                "stylers": [
                  {
                    "color": "#8595ad"
                  },
                  {
                    "opacity": 0.8,
                    "zoom": 0
                  },
                  {
                    "opacity": 0.8,
                    "zoom": 1
                  },
                  {
                    "opacity": 0.8,
                    "zoom": 2
                  },
                  {
                    "opacity": 0.8,
                    "zoom": 3
                  },
                  {
                    "opacity": 0.8,
                    "zoom": 4
                  },
                  {
                    "opacity": 1,
                    "zoom": 5
                  },
                  {
                    "opacity": 1,
                    "zoom": 6
                  },
                  {
                    "opacity": 1,
                    "zoom": 7
                  },
                  {
                    "opacity": 1,
                    "zoom": 8
                  },
                  {
                    "opacity": 1,
                    "zoom": 9
                  },
                  {
                    "opacity": 1,
                    "zoom": 10
                  },
                  {
                    "opacity": 1,
                    "zoom": 11
                  },
                  {
                    "opacity": 1,
                    "zoom": 12
                  },
                  {
                    "opacity": 1,
                    "zoom": 13
                  },
                  {
                    "opacity": 1,
                    "zoom": 14
                  },
                  {
                    "opacity": 1,
                    "zoom": 15
                  },
                  {
                    "opacity": 1,
                    "zoom": 16
                  },
                  {
                    "opacity": 1,
                    "zoom": 17
                  },
                  {
                    "opacity": 1,
                    "zoom": 18
                  },
                  {
                    "opacity": 1,
                    "zoom": 19
                  },
                  {
                    "opacity": 1,
                    "zoom": 20
                  },
                  {
                    "opacity": 1,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": "country",
                "elements": "geometry.outline",
                "stylers": [
                  {
                    "color": "#a2c4f6"
                  },
                  {
                    "opacity": 0.15,
                    "zoom": 0
                  },
                  {
                    "opacity": 0.15,
                    "zoom": 1
                  },
                  {
                    "opacity": 0.15,
                    "zoom": 2
                  },
                  {
                    "opacity": 0.15,
                    "zoom": 3
                  },
                  {
                    "opacity": 0.15,
                    "zoom": 4
                  },
                  {
                    "opacity": 0.15,
                    "zoom": 5
                  },
                  {
                    "opacity": 0.25,
                    "zoom": 6
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 7
                  },
                  {
                    "opacity": 0.47,
                    "zoom": 8
                  },
                  {
                    "opacity": 0.44,
                    "zoom": 9
                  },
                  {
                    "opacity": 0.41,
                    "zoom": 10
                  },
                  {
                    "opacity": 0.38,
                    "zoom": 11
                  },
                  {
                    "opacity": 0.35,
                    "zoom": 12
                  },
                  {
                    "opacity": 0.33,
                    "zoom": 13
                  },
                  {
                    "opacity": 0.3,
                    "zoom": 14
                  },
                  {
                    "opacity": 0.28,
                    "zoom": 15
                  },
                  {
                    "opacity": 0.25,
                    "zoom": 16
                  },
                  {
                    "opacity": 0.25,
                    "zoom": 17
                  },
                  {
                    "opacity": 0.25,
                    "zoom": 18
                  },
                  {
                    "opacity": 0.25,
                    "zoom": 19
                  },
                  {
                    "opacity": 0.25,
                    "zoom": 20
                  },
                  {
                    "opacity": 0.25,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": "region",
                "elements": "geometry.fill",
                "stylers": [
                  {
                    "color": "#a3afc2",
                    "opacity": 0.5,
                    "zoom": 0
                  },
                  {
                    "color": "#a3afc2",
                    "opacity": 0.5,
                    "zoom": 1
                  },
                  {
                    "color": "#a3afc2",
                    "opacity": 0.5,
                    "zoom": 2
                  },
                  {
                    "color": "#a3afc2",
                    "opacity": 0.5,
                    "zoom": 3
                  },
                  {
                    "color": "#a3afc2",
                    "opacity": 0.5,
                    "zoom": 4
                  },
                  {
                    "color": "#a3afc2",
                    "opacity": 0.5,
                    "zoom": 5
                  },
                  {
                    "color": "#a3afc2",
                    "opacity": 1,
                    "zoom": 6
                  },
                  {
                    "color": "#a3afc2",
                    "opacity": 1,
                    "zoom": 7
                  },
                  {
                    "color": "#8595ad",
                    "opacity": 1,
                    "zoom": 8
                  },
                  {
                    "color": "#8595ad",
                    "opacity": 1,
                    "zoom": 9
                  },
                  {
                    "color": "#8595ad",
                    "opacity": 1,
                    "zoom": 10
                  },
                  {
                    "color": "#8595ad",
                    "opacity": 1,
                    "zoom": 11
                  },
                  {
                    "color": "#8595ad",
                    "opacity": 1,
                    "zoom": 12
                  },
                  {
                    "color": "#8595ad",
                    "opacity": 1,
                    "zoom": 13
                  },
                  {
                    "color": "#8595ad",
                    "opacity": 1,
                    "zoom": 14
                  },
                  {
                    "color": "#8595ad",
                    "opacity": 1,
                    "zoom": 15
                  },
                  {
                    "color": "#8595ad",
                    "opacity": 1,
                    "zoom": 16
                  },
                  {
                    "color": "#8595ad",
                    "opacity": 1,
                    "zoom": 17
                  },
                  {
                    "color": "#8595ad",
                    "opacity": 1,
                    "zoom": 18
                  },
                  {
                    "color": "#8595ad",
                    "opacity": 1,
                    "zoom": 19
                  },
                  {
                    "color": "#8595ad",
                    "opacity": 1,
                    "zoom": 20
                  },
                  {
                    "color": "#8595ad",
                    "opacity": 1,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": "region",
                "elements": "geometry.outline",
                "stylers": [
                  {
                    "color": "#a2c4f6"
                  },
                  {
                    "opacity": 0.15,
                    "zoom": 0
                  },
                  {
                    "opacity": 0.15,
                    "zoom": 1
                  },
                  {
                    "opacity": 0.15,
                    "zoom": 2
                  },
                  {
                    "opacity": 0.15,
                    "zoom": 3
                  },
                  {
                    "opacity": 0.15,
                    "zoom": 4
                  },
                  {
                    "opacity": 0.15,
                    "zoom": 5
                  },
                  {
                    "opacity": 0.25,
                    "zoom": 6
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 7
                  },
                  {
                    "opacity": 0.47,
                    "zoom": 8
                  },
                  {
                    "opacity": 0.44,
                    "zoom": 9
                  },
                  {
                    "opacity": 0.41,
                    "zoom": 10
                  },
                  {
                    "opacity": 0.38,
                    "zoom": 11
                  },
                  {
                    "opacity": 0.35,
                    "zoom": 12
                  },
                  {
                    "opacity": 0.33,
                    "zoom": 13
                  },
                  {
                    "opacity": 0.3,
                    "zoom": 14
                  },
                  {
                    "opacity": 0.28,
                    "zoom": 15
                  },
                  {
                    "opacity": 0.25,
                    "zoom": 16
                  },
                  {
                    "opacity": 0.25,
                    "zoom": 17
                  },
                  {
                    "opacity": 0.25,
                    "zoom": 18
                  },
                  {
                    "opacity": 0.25,
                    "zoom": 19
                  },
                  {
                    "opacity": 0.25,
                    "zoom": 20
                  },
                  {
                    "opacity": 0.25,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": {
                  "any": "admin",
                  "none": [
                    "country",
                    "region",
                    "locality",
                    "district",
                    "address"
                  ]
                },
                "elements": "geometry.fill",
                "stylers": [
                  {
                    "color": "#8595ad"
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 0
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 1
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 2
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 3
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 4
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 5
                  },
                  {
                    "opacity": 1,
                    "zoom": 6
                  },
                  {
                    "opacity": 1,
                    "zoom": 7
                  },
                  {
                    "opacity": 1,
                    "zoom": 8
                  },
                  {
                    "opacity": 1,
                    "zoom": 9
                  },
                  {
                    "opacity": 1,
                    "zoom": 10
                  },
                  {
                    "opacity": 1,
                    "zoom": 11
                  },
                  {
                    "opacity": 1,
                    "zoom": 12
                  },
                  {
                    "opacity": 1,
                    "zoom": 13
                  },
                  {
                    "opacity": 1,
                    "zoom": 14
                  },
                  {
                    "opacity": 1,
                    "zoom": 15
                  },
                  {
                    "opacity": 1,
                    "zoom": 16
                  },
                  {
                    "opacity": 1,
                    "zoom": 17
                  },
                  {
                    "opacity": 1,
                    "zoom": 18
                  },
                  {
                    "opacity": 1,
                    "zoom": 19
                  },
                  {
                    "opacity": 1,
                    "zoom": 20
                  },
                  {
                    "opacity": 1,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": {
                  "any": "admin",
                  "none": [
                    "country",
                    "region",
                    "locality",
                    "district",
                    "address"
                  ]
                },
                "elements": "geometry.outline",
                "stylers": [
                  {
                    "color": "#a2c4f6"
                  },
                  {
                    "opacity": 0.15,
                    "zoom": 0
                  },
                  {
                    "opacity": 0.15,
                    "zoom": 1
                  },
                  {
                    "opacity": 0.15,
                    "zoom": 2
                  },
                  {
                    "opacity": 0.15,
                    "zoom": 3
                  },
                  {
                    "opacity": 0.15,
                    "zoom": 4
                  },
                  {
                    "opacity": 0.15,
                    "zoom": 5
                  },
                  {
                    "opacity": 0.25,
                    "zoom": 6
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 7
                  },
                  {
                    "opacity": 0.47,
                    "zoom": 8
                  },
                  {
                    "opacity": 0.44,
                    "zoom": 9
                  },
                  {
                    "opacity": 0.41,
                    "zoom": 10
                  },
                  {
                    "opacity": 0.38,
                    "zoom": 11
                  },
                  {
                    "opacity": 0.35,
                    "zoom": 12
                  },
                  {
                    "opacity": 0.33,
                    "zoom": 13
                  },
                  {
                    "opacity": 0.3,
                    "zoom": 14
                  },
                  {
                    "opacity": 0.28,
                    "zoom": 15
                  },
                  {
                    "opacity": 0.25,
                    "zoom": 16
                  },
                  {
                    "opacity": 0.25,
                    "zoom": 17
                  },
                  {
                    "opacity": 0.25,
                    "zoom": 18
                  },
                  {
                    "opacity": 0.25,
                    "zoom": 19
                  },
                  {
                    "opacity": 0.25,
                    "zoom": 20
                  },
                  {
                    "opacity": 0.25,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": {
                  "any": "landcover",
                  "none": "vegetation"
                },
                "stylers": [
                  {
                    "hue": "#c3d8f9"
                  }
                ]
              },
              {
                "tags": "vegetation",
                "elements": "geometry",
                "stylers": [
                  {
                    "color": "#94b9f4",
                    "opacity": 0.1,
                    "zoom": 0
                  },
                  {
                    "color": "#94b9f4",
                    "opacity": 0.1,
                    "zoom": 1
                  },
                  {
                    "color": "#94b9f4",
                    "opacity": 0.1,
                    "zoom": 2
                  },
                  {
                    "color": "#94b9f4",
                    "opacity": 0.1,
                    "zoom": 3
                  },
                  {
                    "color": "#94b9f4",
                    "opacity": 0.1,
                    "zoom": 4
                  },
                  {
                    "color": "#94b9f4",
                    "opacity": 0.1,
                    "zoom": 5
                  },
                  {
                    "color": "#94b9f4",
                    "opacity": 0.2,
                    "zoom": 6
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 0.3,
                    "zoom": 7
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 0.4,
                    "zoom": 8
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 0.6,
                    "zoom": 9
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 0.8,
                    "zoom": 10
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 1,
                    "zoom": 11
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 1,
                    "zoom": 12
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 1,
                    "zoom": 13
                  },
                  {
                    "color": "#ccdefa",
                    "opacity": 1,
                    "zoom": 14
                  },
                  {
                    "color": "#d5e4fb",
                    "opacity": 1,
                    "zoom": 15
                  },
                  {
                    "color": "#d5e4fb",
                    "opacity": 1,
                    "zoom": 16
                  },
                  {
                    "color": "#d5e4fb",
                    "opacity": 1,
                    "zoom": 17
                  },
                  {
                    "color": "#d5e4fb",
                    "opacity": 1,
                    "zoom": 18
                  },
                  {
                    "color": "#d5e4fb",
                    "opacity": 1,
                    "zoom": 19
                  },
                  {
                    "color": "#d5e4fb",
                    "opacity": 1,
                    "zoom": 20
                  },
                  {
                    "color": "#d5e4fb",
                    "opacity": 1,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": "park",
                "elements": "geometry",
                "stylers": [
                  {
                    "color": "#c3d8f9",
                    "opacity": 0.1,
                    "zoom": 0
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 0.1,
                    "zoom": 1
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 0.1,
                    "zoom": 2
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 0.1,
                    "zoom": 3
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 0.1,
                    "zoom": 4
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 0.1,
                    "zoom": 5
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 0.2,
                    "zoom": 6
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 0.3,
                    "zoom": 7
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 0.4,
                    "zoom": 8
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 0.6,
                    "zoom": 9
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 0.8,
                    "zoom": 10
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 1,
                    "zoom": 11
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 1,
                    "zoom": 12
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 1,
                    "zoom": 13
                  },
                  {
                    "color": "#ccdefa",
                    "opacity": 1,
                    "zoom": 14
                  },
                  {
                    "color": "#d5e4fb",
                    "opacity": 1,
                    "zoom": 15
                  },
                  {
                    "color": "#d5e4fb",
                    "opacity": 0.9,
                    "zoom": 16
                  },
                  {
                    "color": "#d5e4fb",
                    "opacity": 0.8,
                    "zoom": 17
                  },
                  {
                    "color": "#d5e4fb",
                    "opacity": 0.7,
                    "zoom": 18
                  },
                  {
                    "color": "#d5e4fb",
                    "opacity": 0.7,
                    "zoom": 19
                  },
                  {
                    "color": "#d5e4fb",
                    "opacity": 0.7,
                    "zoom": 20
                  },
                  {
                    "color": "#d5e4fb",
                    "opacity": 0.7,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": "national_park",
                "elements": "geometry",
                "stylers": [
                  {
                    "color": "#c3d8f9",
                    "opacity": 0.1,
                    "zoom": 0
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 0.1,
                    "zoom": 1
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 0.1,
                    "zoom": 2
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 0.1,
                    "zoom": 3
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 0.1,
                    "zoom": 4
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 0.1,
                    "zoom": 5
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 0.2,
                    "zoom": 6
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 0.3,
                    "zoom": 7
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 0.4,
                    "zoom": 8
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 0.6,
                    "zoom": 9
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 0.8,
                    "zoom": 10
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 1,
                    "zoom": 11
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 1,
                    "zoom": 12
                  },
                  {
                    "color": "#c3d8f9",
                    "opacity": 1,
                    "zoom": 13
                  },
                  {
                    "color": "#ccdefa",
                    "opacity": 1,
                    "zoom": 14
                  },
                  {
                    "color": "#d5e4fb",
                    "opacity": 1,
                    "zoom": 15
                  },
                  {
                    "color": "#d5e4fb",
                    "opacity": 0.7,
                    "zoom": 16
                  },
                  {
                    "color": "#d5e4fb",
                    "opacity": 0.7,
                    "zoom": 17
                  },
                  {
                    "color": "#d5e4fb",
                    "opacity": 0.7,
                    "zoom": 18
                  },
                  {
                    "color": "#d5e4fb",
                    "opacity": 0.7,
                    "zoom": 19
                  },
                  {
                    "color": "#d5e4fb",
                    "opacity": 0.7,
                    "zoom": 20
                  },
                  {
                    "color": "#d5e4fb",
                    "opacity": 0.7,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": "cemetery",
                "elements": "geometry",
                "stylers": [
                  {
                    "color": "#c3d8f9",
                    "zoom": 0
                  },
                  {
                    "color": "#c3d8f9",
                    "zoom": 1
                  },
                  {
                    "color": "#c3d8f9",
                    "zoom": 2
                  },
                  {
                    "color": "#c3d8f9",
                    "zoom": 3
                  },
                  {
                    "color": "#c3d8f9",
                    "zoom": 4
                  },
                  {
                    "color": "#c3d8f9",
                    "zoom": 5
                  },
                  {
                    "color": "#c3d8f9",
                    "zoom": 6
                  },
                  {
                    "color": "#c3d8f9",
                    "zoom": 7
                  },
                  {
                    "color": "#c3d8f9",
                    "zoom": 8
                  },
                  {
                    "color": "#c3d8f9",
                    "zoom": 9
                  },
                  {
                    "color": "#c3d8f9",
                    "zoom": 10
                  },
                  {
                    "color": "#c3d8f9",
                    "zoom": 11
                  },
                  {
                    "color": "#c3d8f9",
                    "zoom": 12
                  },
                  {
                    "color": "#c3d8f9",
                    "zoom": 13
                  },
                  {
                    "color": "#ccdefa",
                    "zoom": 14
                  },
                  {
                    "color": "#d5e4fb",
                    "zoom": 15
                  },
                  {
                    "color": "#d5e4fb",
                    "zoom": 16
                  },
                  {
                    "color": "#d5e4fb",
                    "zoom": 17
                  },
                  {
                    "color": "#d5e4fb",
                    "zoom": 18
                  },
                  {
                    "color": "#d5e4fb",
                    "zoom": 19
                  },
                  {
                    "color": "#d5e4fb",
                    "zoom": 20
                  },
                  {
                    "color": "#d5e4fb",
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": "sports_ground",
                "elements": "geometry",
                "stylers": [
                  {
                    "color": "#abc8f7",
                    "opacity": 0,
                    "zoom": 0
                  },
                  {
                    "color": "#abc8f7",
                    "opacity": 0,
                    "zoom": 1
                  },
                  {
                    "color": "#abc8f7",
                    "opacity": 0,
                    "zoom": 2
                  },
                  {
                    "color": "#abc8f7",
                    "opacity": 0,
                    "zoom": 3
                  },
                  {
                    "color": "#abc8f7",
                    "opacity": 0,
                    "zoom": 4
                  },
                  {
                    "color": "#abc8f7",
                    "opacity": 0,
                    "zoom": 5
                  },
                  {
                    "color": "#abc8f7",
                    "opacity": 0,
                    "zoom": 6
                  },
                  {
                    "color": "#abc8f7",
                    "opacity": 0,
                    "zoom": 7
                  },
                  {
                    "color": "#abc8f7",
                    "opacity": 0,
                    "zoom": 8
                  },
                  {
                    "color": "#abc8f7",
                    "opacity": 0,
                    "zoom": 9
                  },
                  {
                    "color": "#abc8f7",
                    "opacity": 0,
                    "zoom": 10
                  },
                  {
                    "color": "#abc8f7",
                    "opacity": 0,
                    "zoom": 11
                  },
                  {
                    "color": "#abc8f7",
                    "opacity": 0,
                    "zoom": 12
                  },
                  {
                    "color": "#abc8f7",
                    "opacity": 0,
                    "zoom": 13
                  },
                  {
                    "color": "#b4cef8",
                    "opacity": 0,
                    "zoom": 14
                  },
                  {
                    "color": "#bed4f9",
                    "opacity": 0.5,
                    "zoom": 15
                  },
                  {
                    "color": "#bfd5f9",
                    "opacity": 1,
                    "zoom": 16
                  },
                  {
                    "color": "#c1d6f9",
                    "opacity": 1,
                    "zoom": 17
                  },
                  {
                    "color": "#c2d7f9",
                    "opacity": 1,
                    "zoom": 18
                  },
                  {
                    "color": "#c4d8fa",
                    "opacity": 1,
                    "zoom": 19
                  },
                  {
                    "color": "#c5d9fa",
                    "opacity": 1,
                    "zoom": 20
                  },
                  {
                    "color": "#c7dafa",
                    "opacity": 1,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": "terrain",
                "elements": "geometry",
                "stylers": [
                  {
                    "hue": "#dae7fb"
                  },
                  {
                    "opacity": 0.3,
                    "zoom": 0
                  },
                  {
                    "opacity": 0.3,
                    "zoom": 1
                  },
                  {
                    "opacity": 0.3,
                    "zoom": 2
                  },
                  {
                    "opacity": 0.3,
                    "zoom": 3
                  },
                  {
                    "opacity": 0.3,
                    "zoom": 4
                  },
                  {
                    "opacity": 0.35,
                    "zoom": 5
                  },
                  {
                    "opacity": 0.4,
                    "zoom": 6
                  },
                  {
                    "opacity": 0.6,
                    "zoom": 7
                  },
                  {
                    "opacity": 0.8,
                    "zoom": 8
                  },
                  {
                    "opacity": 0.9,
                    "zoom": 9
                  },
                  {
                    "opacity": 1,
                    "zoom": 10
                  },
                  {
                    "opacity": 1,
                    "zoom": 11
                  },
                  {
                    "opacity": 1,
                    "zoom": 12
                  },
                  {
                    "opacity": 1,
                    "zoom": 13
                  },
                  {
                    "opacity": 1,
                    "zoom": 14
                  },
                  {
                    "opacity": 1,
                    "zoom": 15
                  },
                  {
                    "opacity": 1,
                    "zoom": 16
                  },
                  {
                    "opacity": 1,
                    "zoom": 17
                  },
                  {
                    "opacity": 1,
                    "zoom": 18
                  },
                  {
                    "opacity": 1,
                    "zoom": 19
                  },
                  {
                    "opacity": 1,
                    "zoom": 20
                  },
                  {
                    "opacity": 1,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": "geographic_line",
                "elements": "geometry",
                "stylers": [
                  {
                    "color": "#2371e7"
                  }
                ]
              },
              {
                "tags": "land",
                "elements": "geometry",
                "stylers": [
                  {
                    "color": "#dae6fb",
                    "zoom": 0
                  },
                  {
                    "color": "#dae6fb",
                    "zoom": 1
                  },
                  {
                    "color": "#dae6fb",
                    "zoom": 2
                  },
                  {
                    "color": "#dae6fb",
                    "zoom": 3
                  },
                  {
                    "color": "#dae6fb",
                    "zoom": 4
                  },
                  {
                    "color": "#dfe9fb",
                    "zoom": 5
                  },
                  {
                    "color": "#e3ecfc",
                    "zoom": 6
                  },
                  {
                    "color": "#e8f0fc",
                    "zoom": 7
                  },
                  {
                    "color": "#edf3fd",
                    "zoom": 8
                  },
                  {
                    "color": "#edf3fd",
                    "zoom": 9
                  },
                  {
                    "color": "#edf3fd",
                    "zoom": 10
                  },
                  {
                    "color": "#edf3fd",
                    "zoom": 11
                  },
                  {
                    "color": "#edf3fd",
                    "zoom": 12
                  },
                  {
                    "color": "#edf3fd",
                    "zoom": 13
                  },
                  {
                    "color": "#f1f6fd",
                    "zoom": 14
                  },
                  {
                    "color": "#f6f9fe",
                    "zoom": 15
                  },
                  {
                    "color": "#f7f9fe",
                    "zoom": 16
                  },
                  {
                    "color": "#f7fafe",
                    "zoom": 17
                  },
                  {
                    "color": "#f8fafe",
                    "zoom": 18
                  },
                  {
                    "color": "#f9fbfe",
                    "zoom": 19
                  },
                  {
                    "color": "#f9fbfe",
                    "zoom": 20
                  },
                  {
                    "color": "#fafcfe",
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": "residential",
                "elements": "geometry",
                "stylers": [
                  {
                    "color": "#dae7fb",
                    "opacity": 0.5,
                    "zoom": 0
                  },
                  {
                    "color": "#dae7fb",
                    "opacity": 0.5,
                    "zoom": 1
                  },
                  {
                    "color": "#dae7fb",
                    "opacity": 0.5,
                    "zoom": 2
                  },
                  {
                    "color": "#dae7fb",
                    "opacity": 0.5,
                    "zoom": 3
                  },
                  {
                    "color": "#dae7fb",
                    "opacity": 0.5,
                    "zoom": 4
                  },
                  {
                    "color": "#dae7fb",
                    "opacity": 0.5,
                    "zoom": 5
                  },
                  {
                    "color": "#dae7fb",
                    "opacity": 0.5,
                    "zoom": 6
                  },
                  {
                    "color": "#dae7fb",
                    "opacity": 0.5,
                    "zoom": 7
                  },
                  {
                    "color": "#dae7fb",
                    "opacity": 0.5,
                    "zoom": 8
                  },
                  {
                    "color": "#dae7fb",
                    "opacity": 0.5,
                    "zoom": 9
                  },
                  {
                    "color": "#dae7fb",
                    "opacity": 0.5,
                    "zoom": 10
                  },
                  {
                    "color": "#dae7fb",
                    "opacity": 0.5,
                    "zoom": 11
                  },
                  {
                    "color": "#dae7fb",
                    "opacity": 0.5,
                    "zoom": 12
                  },
                  {
                    "color": "#dae7fb",
                    "opacity": 1,
                    "zoom": 13
                  },
                  {
                    "color": "#e3edfc",
                    "opacity": 1,
                    "zoom": 14
                  },
                  {
                    "color": "#edf3fd",
                    "opacity": 1,
                    "zoom": 15
                  },
                  {
                    "color": "#eef4fd",
                    "opacity": 1,
                    "zoom": 16
                  },
                  {
                    "color": "#f0f5fd",
                    "opacity": 1,
                    "zoom": 17
                  },
                  {
                    "color": "#f1f6fd",
                    "opacity": 1,
                    "zoom": 18
                  },
                  {
                    "color": "#f3f7fe",
                    "opacity": 1,
                    "zoom": 19
                  },
                  {
                    "color": "#f4f8fe",
                    "opacity": 1,
                    "zoom": 20
                  },
                  {
                    "color": "#f6f9fe",
                    "opacity": 1,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": "locality",
                "elements": "geometry",
                "stylers": [
                  {
                    "color": "#dae7fb",
                    "zoom": 0
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 1
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 2
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 3
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 4
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 5
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 6
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 7
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 8
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 9
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 10
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 11
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 12
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 13
                  },
                  {
                    "color": "#e3edfc",
                    "zoom": 14
                  },
                  {
                    "color": "#edf3fd",
                    "zoom": 15
                  },
                  {
                    "color": "#eef4fd",
                    "zoom": 16
                  },
                  {
                    "color": "#f0f5fd",
                    "zoom": 17
                  },
                  {
                    "color": "#f1f6fd",
                    "zoom": 18
                  },
                  {
                    "color": "#f3f7fe",
                    "zoom": 19
                  },
                  {
                    "color": "#f4f8fe",
                    "zoom": 20
                  },
                  {
                    "color": "#f6f9fe",
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": {
                  "any": "structure",
                  "none": [
                    "building",
                    "fence"
                  ]
                },
                "elements": "geometry",
                "stylers": [
                  {
                    "opacity": 0.9
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 0
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 1
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 2
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 3
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 4
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 5
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 6
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 7
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 8
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 9
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 10
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 11
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 12
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 13
                  },
                  {
                    "color": "#e3edfc",
                    "zoom": 14
                  },
                  {
                    "color": "#edf3fd",
                    "zoom": 15
                  },
                  {
                    "color": "#eef4fd",
                    "zoom": 16
                  },
                  {
                    "color": "#f0f5fd",
                    "zoom": 17
                  },
                  {
                    "color": "#f1f6fd",
                    "zoom": 18
                  },
                  {
                    "color": "#f3f7fe",
                    "zoom": 19
                  },
                  {
                    "color": "#f4f8fe",
                    "zoom": 20
                  },
                  {
                    "color": "#f6f9fe",
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": "building",
                "elements": "geometry.fill",
                "stylers": [
                  {
                    "color": "#c8dbf9"
                  },
                  {
                    "opacity": 0.7,
                    "zoom": 0
                  },
                  {
                    "opacity": 0.7,
                    "zoom": 1
                  },
                  {
                    "opacity": 0.7,
                    "zoom": 2
                  },
                  {
                    "opacity": 0.7,
                    "zoom": 3
                  },
                  {
                    "opacity": 0.7,
                    "zoom": 4
                  },
                  {
                    "opacity": 0.7,
                    "zoom": 5
                  },
                  {
                    "opacity": 0.7,
                    "zoom": 6
                  },
                  {
                    "opacity": 0.7,
                    "zoom": 7
                  },
                  {
                    "opacity": 0.7,
                    "zoom": 8
                  },
                  {
                    "opacity": 0.7,
                    "zoom": 9
                  },
                  {
                    "opacity": 0.7,
                    "zoom": 10
                  },
                  {
                    "opacity": 0.7,
                    "zoom": 11
                  },
                  {
                    "opacity": 0.7,
                    "zoom": 12
                  },
                  {
                    "opacity": 0.7,
                    "zoom": 13
                  },
                  {
                    "opacity": 0.7,
                    "zoom": 14
                  },
                  {
                    "opacity": 0.7,
                    "zoom": 15
                  },
                  {
                    "opacity": 0.9,
                    "zoom": 16
                  },
                  {
                    "opacity": 0.6,
                    "zoom": 17
                  },
                  {
                    "opacity": 0.6,
                    "zoom": 18
                  },
                  {
                    "opacity": 0.6,
                    "zoom": 19
                  },
                  {
                    "opacity": 0.6,
                    "zoom": 20
                  },
                  {
                    "opacity": 0.6,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": "building",
                "elements": "geometry.outline",
                "stylers": [
                  {
                    "color": "#a3c5f5"
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 0
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 1
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 2
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 3
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 4
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 5
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 6
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 7
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 8
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 9
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 10
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 11
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 12
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 13
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 14
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 15
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 16
                  },
                  {
                    "opacity": 1,
                    "zoom": 17
                  },
                  {
                    "opacity": 1,
                    "zoom": 18
                  },
                  {
                    "opacity": 1,
                    "zoom": 19
                  },
                  {
                    "opacity": 1,
                    "zoom": 20
                  },
                  {
                    "opacity": 1,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": {
                  "any": "urban_area",
                  "none": [
                    "residential",
                    "industrial",
                    "cemetery",
                    "park",
                    "medical",
                    "sports_ground",
                    "beach",
                    "construction_site"
                  ]
                },
                "elements": "geometry",
                "stylers": [
                  {
                    "color": "#c8dcf9",
                    "opacity": 1,
                    "zoom": 0
                  },
                  {
                    "color": "#c8dcf9",
                    "opacity": 1,
                    "zoom": 1
                  },
                  {
                    "color": "#c8dcf9",
                    "opacity": 1,
                    "zoom": 2
                  },
                  {
                    "color": "#c8dcf9",
                    "opacity": 1,
                    "zoom": 3
                  },
                  {
                    "color": "#c8dcf9",
                    "opacity": 1,
                    "zoom": 4
                  },
                  {
                    "color": "#c8dcf9",
                    "opacity": 1,
                    "zoom": 5
                  },
                  {
                    "color": "#c8dcf9",
                    "opacity": 1,
                    "zoom": 6
                  },
                  {
                    "color": "#c8dcf9",
                    "opacity": 1,
                    "zoom": 7
                  },
                  {
                    "color": "#c8dcf9",
                    "opacity": 1,
                    "zoom": 8
                  },
                  {
                    "color": "#c8dcf9",
                    "opacity": 1,
                    "zoom": 9
                  },
                  {
                    "color": "#c8dcf9",
                    "opacity": 1,
                    "zoom": 10
                  },
                  {
                    "color": "#c8dcf9",
                    "opacity": 1,
                    "zoom": 11
                  },
                  {
                    "color": "#c8dcf9",
                    "opacity": 1,
                    "zoom": 12
                  },
                  {
                    "color": "#c8dcf9",
                    "opacity": 1,
                    "zoom": 13
                  },
                  {
                    "color": "#d3e3fa",
                    "opacity": 1,
                    "zoom": 14
                  },
                  {
                    "color": "#dfeafb",
                    "opacity": 1,
                    "zoom": 15
                  },
                  {
                    "color": "#eaf1fc",
                    "opacity": 0.67,
                    "zoom": 16
                  },
                  {
                    "color": "#f6f9fe",
                    "opacity": 0.33,
                    "zoom": 17
                  },
                  {
                    "color": "#f6f9fe",
                    "opacity": 0,
                    "zoom": 18
                  },
                  {
                    "color": "#f6f9fe",
                    "opacity": 0,
                    "zoom": 19
                  },
                  {
                    "color": "#f6f9fe",
                    "opacity": 0,
                    "zoom": 20
                  },
                  {
                    "color": "#f6f9fe",
                    "opacity": 0,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": "poi",
                "elements": "label.icon",
                "stylers": [
                  {
                    "color": "#176be8"
                  },
                  {
                    "secondary-color": "#ffffff"
                  },
                  {
                    "tertiary-color": "#ffffff"
                  }
                ]
              },
              {
                "tags": "poi",
                "elements": "label.text.fill",
                "stylers": [
                  {
                    "color": "#0e408b"
                  }
                ]
              },
              {
                "tags": "poi",
                "elements": "label.text.outline",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "opacity": 0.5
                  }
                ]
              },
              {
                "tags": "outdoor",
                "elements": "label.icon",
                "stylers": [
                  {
                    "color": "#176be8"
                  },
                  {
                    "secondary-color": "#ffffff"
                  },
                  {
                    "tertiary-color": "#ffffff"
                  }
                ]
              },
              {
                "tags": "outdoor",
                "elements": "label.text.fill",
                "stylers": [
                  {
                    "color": "#0e408b"
                  }
                ]
              },
              {
                "tags": "outdoor",
                "elements": "label.text.outline",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "opacity": 0.5
                  }
                ]
              },
              {
                "tags": "park",
                "elements": "label.icon",
                "stylers": [
                  {
                    "color": "#176be8"
                  },
                  {
                    "secondary-color": "#ffffff"
                  },
                  {
                    "tertiary-color": "#ffffff"
                  }
                ]
              },
              {
                "tags": "park",
                "elements": "label.text.fill",
                "stylers": [
                  {
                    "color": "#0e408b"
                  }
                ]
              },
              {
                "tags": "park",
                "elements": "label.text.outline",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "opacity": 0.5
                  }
                ]
              },
              {
                "tags": "cemetery",
                "elements": "label.icon",
                "stylers": [
                  {
                    "color": "#176be8"
                  },
                  {
                    "secondary-color": "#ffffff"
                  },
                  {
                    "tertiary-color": "#ffffff"
                  }
                ]
              },
              {
                "tags": "cemetery",
                "elements": "label.text.fill",
                "stylers": [
                  {
                    "color": "#0e408b"
                  }
                ]
              },
              {
                "tags": "cemetery",
                "elements": "label.text.outline",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "opacity": 0.5
                  }
                ]
              },
              {
                "tags": "beach",
                "elements": "label.icon",
                "stylers": [
                  {
                    "color": "#176be8"
                  },
                  {
                    "secondary-color": "#ffffff"
                  },
                  {
                    "tertiary-color": "#ffffff"
                  }
                ]
              },
              {
                "tags": "beach",
                "elements": "label.text.fill",
                "stylers": [
                  {
                    "color": "#0e408b"
                  }
                ]
              },
              {
                "tags": "beach",
                "elements": "label.text.outline",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "opacity": 0.5
                  }
                ]
              },
              {
                "tags": "medical",
                "elements": "label.icon",
                "stylers": [
                  {
                    "color": "#176be8"
                  },
                  {
                    "secondary-color": "#ffffff"
                  },
                  {
                    "tertiary-color": "#ffffff"
                  }
                ]
              },
              {
                "tags": "medical",
                "elements": "label.text.fill",
                "stylers": [
                  {
                    "color": "#0e408b"
                  }
                ]
              },
              {
                "tags": "medical",
                "elements": "label.text.outline",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "opacity": 0.5
                  }
                ]
              },
              {
                "tags": "shopping",
                "elements": "label.icon",
                "stylers": [
                  {
                    "color": "#176be8"
                  },
                  {
                    "secondary-color": "#ffffff"
                  },
                  {
                    "tertiary-color": "#ffffff"
                  }
                ]
              },
              {
                "tags": "shopping",
                "elements": "label.text.fill",
                "stylers": [
                  {
                    "color": "#0e408b"
                  }
                ]
              },
              {
                "tags": "shopping",
                "elements": "label.text.outline",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "opacity": 0.5
                  }
                ]
              },
              {
                "tags": "commercial_services",
                "elements": "label.icon",
                "stylers": [
                  {
                    "color": "#176be8"
                  },
                  {
                    "secondary-color": "#ffffff"
                  },
                  {
                    "tertiary-color": "#ffffff"
                  }
                ]
              },
              {
                "tags": "commercial_services",
                "elements": "label.text.fill",
                "stylers": [
                  {
                    "color": "#0e408b"
                  }
                ]
              },
              {
                "tags": "commercial_services",
                "elements": "label.text.outline",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "opacity": 0.5
                  }
                ]
              },
              {
                "tags": "food_and_drink",
                "elements": "label.icon",
                "stylers": [
                  {
                    "color": "#176be8"
                  },
                  {
                    "secondary-color": "#ffffff"
                  },
                  {
                    "tertiary-color": "#ffffff"
                  }
                ]
              },
              {
                "tags": "food_and_drink",
                "elements": "label.text.fill",
                "stylers": [
                  {
                    "color": "#0e408b"
                  }
                ]
              },
              {
                "tags": "food_and_drink",
                "elements": "label.text.outline",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "opacity": 0.5
                  }
                ]
              },
              {
                "tags": "road",
                "elements": "label.icon",
                "types": "point",
                "stylers": [
                  {
                    "color": "#176be8"
                  },
                  {
                    "secondary-color": "#ffffff"
                  },
                  {
                    "tertiary-color": "#ffffff"
                  }
                ]
              },
              {
                "tags": "road",
                "elements": "label.text.fill",
                "types": "point",
                "stylers": [
                  {
                    "color": "#ffffff"
                  }
                ]
              },
              {
                "tags": "entrance",
                "elements": "label.icon",
                "stylers": [
                  {
                    "color": "#176be8"
                  },
                  {
                    "secondary-color": "#ffffff"
                  },
                  {
                    "hue": "#176be8"
                  }
                ]
              },
              {
                "tags": "locality",
                "elements": "label.icon",
                "stylers": [
                  {
                    "color": "#176be8"
                  },
                  {
                    "secondary-color": "#ffffff"
                  }
                ]
              },
              {
                "tags": "country",
                "elements": "label.text.fill",
                "stylers": [
                  {
                    "opacity": 0.8
                  },
                  {
                    "color": "#1560d1"
                  }
                ]
              },
              {
                "tags": "country",
                "elements": "label.text.outline",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "opacity": 0.5
                  }
                ]
              },
              {
                "tags": "region",
                "elements": "label.text.fill",
                "stylers": [
                  {
                    "color": "#1560d1"
                  },
                  {
                    "opacity": 0.8
                  }
                ]
              },
              {
                "tags": "region",
                "elements": "label.text.outline",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "opacity": 0.5
                  }
                ]
              },
              {
                "tags": "district",
                "elements": "label.text.fill",
                "stylers": [
                  {
                    "color": "#1560d1"
                  },
                  {
                    "opacity": 0.8
                  }
                ]
              },
              {
                "tags": "district",
                "elements": "label.text.outline",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "opacity": 0.5
                  }
                ]
              },
              {
                "tags": {
                  "any": "admin",
                  "none": [
                    "country",
                    "region",
                    "locality",
                    "district",
                    "address"
                  ]
                },
                "elements": "label.text.fill",
                "stylers": [
                  {
                    "color": "#1560d1"
                  }
                ]
              },
              {
                "tags": {
                  "any": "admin",
                  "none": [
                    "country",
                    "region",
                    "locality",
                    "district",
                    "address"
                  ]
                },
                "elements": "label.text.outline",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "opacity": 0.5
                  }
                ]
              },
              {
                "tags": "locality",
                "elements": "label.text.fill",
                "stylers": [
                  {
                    "color": "#0e408b",
                    "zoom": 0
                  },
                  {
                    "color": "#0e408b",
                    "zoom": 1
                  },
                  {
                    "color": "#0e408b",
                    "zoom": 2
                  },
                  {
                    "color": "#0e408b",
                    "zoom": 3
                  },
                  {
                    "color": "#0e408b",
                    "zoom": 4
                  },
                  {
                    "color": "#0e3e87",
                    "zoom": 5
                  },
                  {
                    "color": "#0d3c83",
                    "zoom": 6
                  },
                  {
                    "color": "#0d3b80",
                    "zoom": 7
                  },
                  {
                    "color": "#0c397c",
                    "zoom": 8
                  },
                  {
                    "color": "#0c3778",
                    "zoom": 9
                  },
                  {
                    "color": "#0b3574",
                    "zoom": 10
                  },
                  {
                    "color": "#0b3574",
                    "zoom": 11
                  },
                  {
                    "color": "#0b3574",
                    "zoom": 12
                  },
                  {
                    "color": "#0b3574",
                    "zoom": 13
                  },
                  {
                    "color": "#0b3574",
                    "zoom": 14
                  },
                  {
                    "color": "#0b3574",
                    "zoom": 15
                  },
                  {
                    "color": "#0b3574",
                    "zoom": 16
                  },
                  {
                    "color": "#0b3574",
                    "zoom": 17
                  },
                  {
                    "color": "#0b3574",
                    "zoom": 18
                  },
                  {
                    "color": "#0b3574",
                    "zoom": 19
                  },
                  {
                    "color": "#0b3574",
                    "zoom": 20
                  },
                  {
                    "color": "#0b3574",
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": "locality",
                "elements": "label.text.outline",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "opacity": 0.5
                  }
                ]
              },
              {
                "tags": "road",
                "elements": "label.text.fill",
                "types": "polyline",
                "stylers": [
                  {
                    "color": "#104ba2"
                  }
                ]
              },
              {
                "tags": "road",
                "elements": "label.text.outline",
                "types": "polyline",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "opacity": 0.5
                  }
                ]
              },
              {
                "tags": "road",
                "elements": "geometry.fill.pattern",
                "types": "polyline",
                "stylers": [
                  {
                    "scale": 1
                  },
                  {
                    "color": "#2e79ea"
                  }
                ]
              },
              {
                "tags": "road",
                "elements": "label.text.fill",
                "types": "point",
                "stylers": [
                  {
                    "color": "#ffffff"
                  }
                ]
              },
              {
                "tags": "structure",
                "elements": "label.text.fill",
                "stylers": [
                  {
                    "color": "#1456b8"
                  },
                  {
                    "opacity": 0.5
                  }
                ]
              },
              {
                "tags": "structure",
                "elements": "label.text.outline",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "opacity": 0.5
                  }
                ]
              },
              {
                "tags": "address",
                "elements": "label.text.fill",
                "stylers": [
                  {
                    "color": "#1456b8"
                  },
                  {
                    "opacity": 0.9,
                    "zoom": 0
                  },
                  {
                    "opacity": 0.9,
                    "zoom": 1
                  },
                  {
                    "opacity": 0.9,
                    "zoom": 2
                  },
                  {
                    "opacity": 0.9,
                    "zoom": 3
                  },
                  {
                    "opacity": 0.9,
                    "zoom": 4
                  },
                  {
                    "opacity": 0.9,
                    "zoom": 5
                  },
                  {
                    "opacity": 0.9,
                    "zoom": 6
                  },
                  {
                    "opacity": 0.9,
                    "zoom": 7
                  },
                  {
                    "opacity": 0.9,
                    "zoom": 8
                  },
                  {
                    "opacity": 0.9,
                    "zoom": 9
                  },
                  {
                    "opacity": 0.9,
                    "zoom": 10
                  },
                  {
                    "opacity": 0.9,
                    "zoom": 11
                  },
                  {
                    "opacity": 0.9,
                    "zoom": 12
                  },
                  {
                    "opacity": 0.9,
                    "zoom": 13
                  },
                  {
                    "opacity": 0.9,
                    "zoom": 14
                  },
                  {
                    "opacity": 0.9,
                    "zoom": 15
                  },
                  {
                    "opacity": 0.9,
                    "zoom": 16
                  },
                  {
                    "opacity": 1,
                    "zoom": 17
                  },
                  {
                    "opacity": 1,
                    "zoom": 18
                  },
                  {
                    "opacity": 1,
                    "zoom": 19
                  },
                  {
                    "opacity": 1,
                    "zoom": 20
                  },
                  {
                    "opacity": 1,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": "address",
                "elements": "label.text.outline",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "opacity": 0.5
                  }
                ]
              },
              {
                "tags": "landscape",
                "elements": "label.text.fill",
                "stylers": [
                  {
                    "color": "#1560d1",
                    "opacity": 1,
                    "zoom": 0
                  },
                  {
                    "color": "#1560d1",
                    "opacity": 1,
                    "zoom": 1
                  },
                  {
                    "color": "#1560d1",
                    "opacity": 1,
                    "zoom": 2
                  },
                  {
                    "color": "#1560d1",
                    "opacity": 1,
                    "zoom": 3
                  },
                  {
                    "color": "#1456b8",
                    "opacity": 0.5,
                    "zoom": 4
                  },
                  {
                    "color": "#1456b8",
                    "opacity": 0.5,
                    "zoom": 5
                  },
                  {
                    "color": "#1456b8",
                    "opacity": 0.5,
                    "zoom": 6
                  },
                  {
                    "color": "#1456b8",
                    "opacity": 0.5,
                    "zoom": 7
                  },
                  {
                    "color": "#1456b8",
                    "opacity": 0.5,
                    "zoom": 8
                  },
                  {
                    "color": "#1456b8",
                    "opacity": 0.5,
                    "zoom": 9
                  },
                  {
                    "color": "#1456b8",
                    "opacity": 0.5,
                    "zoom": 10
                  },
                  {
                    "color": "#1456b8",
                    "opacity": 0.5,
                    "zoom": 11
                  },
                  {
                    "color": "#1456b8",
                    "opacity": 0.5,
                    "zoom": 12
                  },
                  {
                    "color": "#1456b8",
                    "opacity": 0.5,
                    "zoom": 13
                  },
                  {
                    "color": "#1456b8",
                    "opacity": 0.5,
                    "zoom": 14
                  },
                  {
                    "color": "#1456b8",
                    "opacity": 0.5,
                    "zoom": 15
                  },
                  {
                    "color": "#1456b8",
                    "opacity": 0.5,
                    "zoom": 16
                  },
                  {
                    "color": "#1456b8",
                    "opacity": 0.5,
                    "zoom": 17
                  },
                  {
                    "color": "#1456b8",
                    "opacity": 0.5,
                    "zoom": 18
                  },
                  {
                    "color": "#1456b8",
                    "opacity": 0.5,
                    "zoom": 19
                  },
                  {
                    "color": "#1456b8",
                    "opacity": 0.5,
                    "zoom": 20
                  },
                  {
                    "color": "#1456b8",
                    "opacity": 0.5,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": "landscape",
                "elements": "label.text.outline",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 0
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 1
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 2
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 3
                  },
                  {
                    "opacity": 0,
                    "zoom": 4
                  },
                  {
                    "opacity": 0,
                    "zoom": 5
                  },
                  {
                    "opacity": 0,
                    "zoom": 6
                  },
                  {
                    "opacity": 0,
                    "zoom": 7
                  },
                  {
                    "opacity": 0,
                    "zoom": 8
                  },
                  {
                    "opacity": 0,
                    "zoom": 9
                  },
                  {
                    "opacity": 0,
                    "zoom": 10
                  },
                  {
                    "opacity": 0,
                    "zoom": 11
                  },
                  {
                    "opacity": 0,
                    "zoom": 12
                  },
                  {
                    "opacity": 0,
                    "zoom": 13
                  },
                  {
                    "opacity": 0,
                    "zoom": 14
                  },
                  {
                    "opacity": 0,
                    "zoom": 15
                  },
                  {
                    "opacity": 0,
                    "zoom": 16
                  },
                  {
                    "opacity": 0,
                    "zoom": 17
                  },
                  {
                    "opacity": 0,
                    "zoom": 18
                  },
                  {
                    "opacity": 0,
                    "zoom": 19
                  },
                  {
                    "opacity": 0,
                    "zoom": 20
                  },
                  {
                    "opacity": 0,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": "water",
                "elements": "label.text.fill",
                "stylers": [
                  {
                    "color": "#1c6ee9"
                  },
                  {
                    "opacity": 0.8
                  }
                ]
              },
              {
                "tags": "water",
                "elements": "label.text.outline",
                "types": "polyline",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "opacity": 0.2
                  }
                ]
              },
              {
                "tags": {
                  "any": "road_1",
                  "none": "is_tunnel"
                },
                "elements": "geometry.fill",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "scale": 0,
                    "zoom": 0
                  },
                  {
                    "scale": 0,
                    "zoom": 1
                  },
                  {
                    "scale": 0,
                    "zoom": 2
                  },
                  {
                    "scale": 0,
                    "zoom": 3
                  },
                  {
                    "scale": 0,
                    "zoom": 4
                  },
                  {
                    "scale": 0,
                    "zoom": 5
                  },
                  {
                    "scale": 2.97,
                    "zoom": 6
                  },
                  {
                    "scale": 3.19,
                    "zoom": 7
                  },
                  {
                    "scale": 3.53,
                    "zoom": 8
                  },
                  {
                    "scale": 4,
                    "zoom": 9
                  },
                  {
                    "scale": 3.61,
                    "zoom": 10
                  },
                  {
                    "scale": 3.06,
                    "zoom": 11
                  },
                  {
                    "scale": 2.64,
                    "zoom": 12
                  },
                  {
                    "scale": 2.27,
                    "zoom": 13
                  },
                  {
                    "scale": 2.03,
                    "zoom": 14
                  },
                  {
                    "scale": 1.9,
                    "zoom": 15
                  },
                  {
                    "scale": 1.86,
                    "zoom": 16
                  },
                  {
                    "scale": 1.48,
                    "zoom": 17
                  },
                  {
                    "scale": 1.21,
                    "zoom": 18
                  },
                  {
                    "scale": 1.04,
                    "zoom": 19
                  },
                  {
                    "scale": 0.94,
                    "zoom": 20
                  },
                  {
                    "scale": 0.9,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": {
                  "any": "road_1"
                },
                "elements": "geometry.outline",
                "stylers": [
                  {
                    "color": "#00000000",
                    "scale": 1.4,
                    "zoom": 0
                  },
                  {
                    "color": "#00000000",
                    "scale": 1.4,
                    "zoom": 1
                  },
                  {
                    "color": "#00000000",
                    "scale": 1.4,
                    "zoom": 2
                  },
                  {
                    "color": "#00000000",
                    "scale": 1.4,
                    "zoom": 3
                  },
                  {
                    "color": "#00000000",
                    "scale": 1.4,
                    "zoom": 4
                  },
                  {
                    "color": "#00000000",
                    "scale": 1.4,
                    "zoom": 5
                  },
                  {
                    "color": "#00000000",
                    "scale": 3.05,
                    "zoom": 6
                  },
                  {
                    "color": "#00000000",
                    "scale": 3.05,
                    "zoom": 7
                  },
                  {
                    "color": "#d1e1fa",
                    "scale": 3.15,
                    "zoom": 8
                  },
                  {
                    "color": "#dae7fb",
                    "scale": 3.37,
                    "zoom": 9
                  },
                  {
                    "color": "#dae7fb",
                    "scale": 3.36,
                    "zoom": 10
                  },
                  {
                    "color": "#dae7fb",
                    "scale": 3.17,
                    "zoom": 11
                  },
                  {
                    "color": "#dae7fb",
                    "scale": 3,
                    "zoom": 12
                  },
                  {
                    "color": "#dae7fb",
                    "scale": 2.8,
                    "zoom": 13
                  },
                  {
                    "color": "#e3edfc",
                    "scale": 2.66,
                    "zoom": 14
                  },
                  {
                    "color": "#e3edfc",
                    "scale": 2.61,
                    "zoom": 15
                  },
                  {
                    "color": "#e6effc",
                    "scale": 2.64,
                    "zoom": 16
                  },
                  {
                    "color": "#eaf1fc",
                    "scale": 2.14,
                    "zoom": 17
                  },
                  {
                    "color": "#edf4fd",
                    "scale": 1.79,
                    "zoom": 18
                  },
                  {
                    "color": "#f1f6fd",
                    "scale": 1.55,
                    "zoom": 19
                  },
                  {
                    "color": "#f3f7fd",
                    "scale": 1.41,
                    "zoom": 20
                  },
                  {
                    "color": "#f6f9fe",
                    "scale": 1.35,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": {
                  "any": "road_2",
                  "none": "is_tunnel"
                },
                "elements": "geometry.fill",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "scale": 0,
                    "zoom": 0
                  },
                  {
                    "scale": 0,
                    "zoom": 1
                  },
                  {
                    "scale": 0,
                    "zoom": 2
                  },
                  {
                    "scale": 0,
                    "zoom": 3
                  },
                  {
                    "scale": 0,
                    "zoom": 4
                  },
                  {
                    "scale": 0,
                    "zoom": 5
                  },
                  {
                    "scale": 2.97,
                    "zoom": 6
                  },
                  {
                    "scale": 3.19,
                    "zoom": 7
                  },
                  {
                    "scale": 3.53,
                    "zoom": 8
                  },
                  {
                    "scale": 4,
                    "zoom": 9
                  },
                  {
                    "scale": 3.61,
                    "zoom": 10
                  },
                  {
                    "scale": 3.06,
                    "zoom": 11
                  },
                  {
                    "scale": 2.64,
                    "zoom": 12
                  },
                  {
                    "scale": 2.27,
                    "zoom": 13
                  },
                  {
                    "scale": 2.03,
                    "zoom": 14
                  },
                  {
                    "scale": 1.9,
                    "zoom": 15
                  },
                  {
                    "scale": 1.86,
                    "zoom": 16
                  },
                  {
                    "scale": 1.48,
                    "zoom": 17
                  },
                  {
                    "scale": 1.21,
                    "zoom": 18
                  },
                  {
                    "scale": 1.04,
                    "zoom": 19
                  },
                  {
                    "scale": 0.94,
                    "zoom": 20
                  },
                  {
                    "scale": 0.9,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": {
                  "any": "road_2"
                },
                "elements": "geometry.outline",
                "stylers": [
                  {
                    "color": "#00000000",
                    "scale": 1.4,
                    "zoom": 0
                  },
                  {
                    "color": "#00000000",
                    "scale": 1.4,
                    "zoom": 1
                  },
                  {
                    "color": "#00000000",
                    "scale": 1.4,
                    "zoom": 2
                  },
                  {
                    "color": "#00000000",
                    "scale": 1.4,
                    "zoom": 3
                  },
                  {
                    "color": "#00000000",
                    "scale": 1.4,
                    "zoom": 4
                  },
                  {
                    "color": "#00000000",
                    "scale": 1.4,
                    "zoom": 5
                  },
                  {
                    "color": "#00000000",
                    "scale": 3.05,
                    "zoom": 6
                  },
                  {
                    "color": "#00000000",
                    "scale": 3.05,
                    "zoom": 7
                  },
                  {
                    "color": "#d1e1fa",
                    "scale": 3.15,
                    "zoom": 8
                  },
                  {
                    "color": "#dae7fb",
                    "scale": 3.37,
                    "zoom": 9
                  },
                  {
                    "color": "#dae7fb",
                    "scale": 3.36,
                    "zoom": 10
                  },
                  {
                    "color": "#dae7fb",
                    "scale": 3.17,
                    "zoom": 11
                  },
                  {
                    "color": "#dae7fb",
                    "scale": 3,
                    "zoom": 12
                  },
                  {
                    "color": "#dae7fb",
                    "scale": 2.8,
                    "zoom": 13
                  },
                  {
                    "color": "#e3edfc",
                    "scale": 2.66,
                    "zoom": 14
                  },
                  {
                    "color": "#e3edfc",
                    "scale": 2.61,
                    "zoom": 15
                  },
                  {
                    "color": "#e6effc",
                    "scale": 2.64,
                    "zoom": 16
                  },
                  {
                    "color": "#eaf1fc",
                    "scale": 2.14,
                    "zoom": 17
                  },
                  {
                    "color": "#edf4fd",
                    "scale": 1.79,
                    "zoom": 18
                  },
                  {
                    "color": "#f1f6fd",
                    "scale": 1.55,
                    "zoom": 19
                  },
                  {
                    "color": "#f3f7fd",
                    "scale": 1.41,
                    "zoom": 20
                  },
                  {
                    "color": "#f6f9fe",
                    "scale": 1.35,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": {
                  "any": "road_3",
                  "none": "is_tunnel"
                },
                "elements": "geometry.fill",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "scale": 0,
                    "zoom": 0
                  },
                  {
                    "scale": 0,
                    "zoom": 1
                  },
                  {
                    "scale": 0,
                    "zoom": 2
                  },
                  {
                    "scale": 0,
                    "zoom": 3
                  },
                  {
                    "scale": 0,
                    "zoom": 4
                  },
                  {
                    "scale": 0,
                    "zoom": 5
                  },
                  {
                    "scale": 0,
                    "zoom": 6
                  },
                  {
                    "scale": 0,
                    "zoom": 7
                  },
                  {
                    "scale": 0,
                    "zoom": 8
                  },
                  {
                    "scale": 2.51,
                    "zoom": 9
                  },
                  {
                    "scale": 2.62,
                    "zoom": 10
                  },
                  {
                    "scale": 1.68,
                    "zoom": 11
                  },
                  {
                    "scale": 1.67,
                    "zoom": 12
                  },
                  {
                    "scale": 1.38,
                    "zoom": 13
                  },
                  {
                    "scale": 1.19,
                    "zoom": 14
                  },
                  {
                    "scale": 1.08,
                    "zoom": 15
                  },
                  {
                    "scale": 1.04,
                    "zoom": 16
                  },
                  {
                    "scale": 0.91,
                    "zoom": 17
                  },
                  {
                    "scale": 0.84,
                    "zoom": 18
                  },
                  {
                    "scale": 0.82,
                    "zoom": 19
                  },
                  {
                    "scale": 0.84,
                    "zoom": 20
                  },
                  {
                    "scale": 0.9,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": {
                  "any": "road_3"
                },
                "elements": "geometry.outline",
                "stylers": [
                  {
                    "color": "#ffffff",
                    "scale": 1.6,
                    "zoom": 0
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.6,
                    "zoom": 1
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.6,
                    "zoom": 2
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.6,
                    "zoom": 3
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.6,
                    "zoom": 4
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.6,
                    "zoom": 5
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.6,
                    "zoom": 6
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.6,
                    "zoom": 7
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.29,
                    "zoom": 8
                  },
                  {
                    "color": "#dae7fb",
                    "scale": 4.21,
                    "zoom": 9
                  },
                  {
                    "color": "#dae7fb",
                    "scale": 2.74,
                    "zoom": 10
                  },
                  {
                    "color": "#dae7fb",
                    "scale": 2.04,
                    "zoom": 11
                  },
                  {
                    "color": "#dae7fb",
                    "scale": 2.13,
                    "zoom": 12
                  },
                  {
                    "color": "#dae7fb",
                    "scale": 1.88,
                    "zoom": 13
                  },
                  {
                    "color": "#e3edfc",
                    "scale": 1.7,
                    "zoom": 14
                  },
                  {
                    "color": "#e3edfc",
                    "scale": 1.59,
                    "zoom": 15
                  },
                  {
                    "color": "#e6effc",
                    "scale": 1.55,
                    "zoom": 16
                  },
                  {
                    "color": "#eaf1fc",
                    "scale": 1.37,
                    "zoom": 17
                  },
                  {
                    "color": "#edf4fd",
                    "scale": 1.27,
                    "zoom": 18
                  },
                  {
                    "color": "#f1f6fd",
                    "scale": 1.23,
                    "zoom": 19
                  },
                  {
                    "color": "#f3f7fd",
                    "scale": 1.26,
                    "zoom": 20
                  },
                  {
                    "color": "#f6f9fe",
                    "scale": 1.35,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": {
                  "any": "road_4",
                  "none": "is_tunnel"
                },
                "elements": "geometry.fill",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "scale": 0,
                    "zoom": 0
                  },
                  {
                    "scale": 0,
                    "zoom": 1
                  },
                  {
                    "scale": 0,
                    "zoom": 2
                  },
                  {
                    "scale": 0,
                    "zoom": 3
                  },
                  {
                    "scale": 0,
                    "zoom": 4
                  },
                  {
                    "scale": 0,
                    "zoom": 5
                  },
                  {
                    "scale": 0,
                    "zoom": 6
                  },
                  {
                    "scale": 0,
                    "zoom": 7
                  },
                  {
                    "scale": 0,
                    "zoom": 8
                  },
                  {
                    "scale": 0,
                    "zoom": 9
                  },
                  {
                    "scale": 1.69,
                    "zoom": 10
                  },
                  {
                    "scale": 1.26,
                    "zoom": 11
                  },
                  {
                    "scale": 1.41,
                    "zoom": 12
                  },
                  {
                    "scale": 1.19,
                    "zoom": 13
                  },
                  {
                    "scale": 1.04,
                    "zoom": 14
                  },
                  {
                    "scale": 0.97,
                    "zoom": 15
                  },
                  {
                    "scale": 1.15,
                    "zoom": 16
                  },
                  {
                    "scale": 0.99,
                    "zoom": 17
                  },
                  {
                    "scale": 0.89,
                    "zoom": 18
                  },
                  {
                    "scale": 0.85,
                    "zoom": 19
                  },
                  {
                    "scale": 0.85,
                    "zoom": 20
                  },
                  {
                    "scale": 0.9,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": {
                  "any": "road_4"
                },
                "elements": "geometry.outline",
                "stylers": [
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 0
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 1
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 2
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 3
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 4
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 5
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 6
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 7
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 8
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.12,
                    "zoom": 9
                  },
                  {
                    "color": "#dae7fb",
                    "scale": 1.9,
                    "zoom": 10
                  },
                  {
                    "color": "#dae7fb",
                    "scale": 1.62,
                    "zoom": 11
                  },
                  {
                    "color": "#dae7fb",
                    "scale": 1.83,
                    "zoom": 12
                  },
                  {
                    "color": "#dae7fb",
                    "scale": 1.64,
                    "zoom": 13
                  },
                  {
                    "color": "#e3edfc",
                    "scale": 1.51,
                    "zoom": 14
                  },
                  {
                    "color": "#e3edfc",
                    "scale": 1.44,
                    "zoom": 15
                  },
                  {
                    "color": "#e6effc",
                    "scale": 1.69,
                    "zoom": 16
                  },
                  {
                    "color": "#eaf1fc",
                    "scale": 1.47,
                    "zoom": 17
                  },
                  {
                    "color": "#edf4fd",
                    "scale": 1.34,
                    "zoom": 18
                  },
                  {
                    "color": "#f1f6fd",
                    "scale": 1.28,
                    "zoom": 19
                  },
                  {
                    "color": "#f3f7fd",
                    "scale": 1.28,
                    "zoom": 20
                  },
                  {
                    "color": "#f6f9fe",
                    "scale": 1.34,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": {
                  "any": "road_5",
                  "none": "is_tunnel"
                },
                "elements": "geometry.fill",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "scale": 0,
                    "zoom": 0
                  },
                  {
                    "scale": 0,
                    "zoom": 1
                  },
                  {
                    "scale": 0,
                    "zoom": 2
                  },
                  {
                    "scale": 0,
                    "zoom": 3
                  },
                  {
                    "scale": 0,
                    "zoom": 4
                  },
                  {
                    "scale": 0,
                    "zoom": 5
                  },
                  {
                    "scale": 0,
                    "zoom": 6
                  },
                  {
                    "scale": 0,
                    "zoom": 7
                  },
                  {
                    "scale": 0,
                    "zoom": 8
                  },
                  {
                    "scale": 0,
                    "zoom": 9
                  },
                  {
                    "scale": 0,
                    "zoom": 10
                  },
                  {
                    "scale": 0,
                    "zoom": 11
                  },
                  {
                    "scale": 1.25,
                    "zoom": 12
                  },
                  {
                    "scale": 0.95,
                    "zoom": 13
                  },
                  {
                    "scale": 0.81,
                    "zoom": 14
                  },
                  {
                    "scale": 0.95,
                    "zoom": 15
                  },
                  {
                    "scale": 1.1,
                    "zoom": 16
                  },
                  {
                    "scale": 0.93,
                    "zoom": 17
                  },
                  {
                    "scale": 0.85,
                    "zoom": 18
                  },
                  {
                    "scale": 0.82,
                    "zoom": 19
                  },
                  {
                    "scale": 0.84,
                    "zoom": 20
                  },
                  {
                    "scale": 0.9,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": {
                  "any": "road_5"
                },
                "elements": "geometry.outline",
                "stylers": [
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 0
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 1
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 2
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 3
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 4
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 5
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 6
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 7
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 8
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 9
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 10
                  },
                  {
                    "color": "#ffffff",
                    "scale": 0.62,
                    "zoom": 11
                  },
                  {
                    "color": "#dae7fb",
                    "scale": 1.61,
                    "zoom": 12
                  },
                  {
                    "color": "#dae7fb",
                    "scale": 1.36,
                    "zoom": 13
                  },
                  {
                    "color": "#e3edfc",
                    "scale": 1.22,
                    "zoom": 14
                  },
                  {
                    "color": "#e3edfc",
                    "scale": 1.41,
                    "zoom": 15
                  },
                  {
                    "color": "#e6effc",
                    "scale": 1.63,
                    "zoom": 16
                  },
                  {
                    "color": "#eaf1fc",
                    "scale": 1.4,
                    "zoom": 17
                  },
                  {
                    "color": "#edf4fd",
                    "scale": 1.27,
                    "zoom": 18
                  },
                  {
                    "color": "#f1f6fd",
                    "scale": 1.23,
                    "zoom": 19
                  },
                  {
                    "color": "#f3f7fd",
                    "scale": 1.25,
                    "zoom": 20
                  },
                  {
                    "color": "#f6f9fe",
                    "scale": 1.34,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": {
                  "any": "road_6",
                  "none": "is_tunnel"
                },
                "elements": "geometry.fill",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "scale": 0,
                    "zoom": 0
                  },
                  {
                    "scale": 0,
                    "zoom": 1
                  },
                  {
                    "scale": 0,
                    "zoom": 2
                  },
                  {
                    "scale": 0,
                    "zoom": 3
                  },
                  {
                    "scale": 0,
                    "zoom": 4
                  },
                  {
                    "scale": 0,
                    "zoom": 5
                  },
                  {
                    "scale": 0,
                    "zoom": 6
                  },
                  {
                    "scale": 0,
                    "zoom": 7
                  },
                  {
                    "scale": 0,
                    "zoom": 8
                  },
                  {
                    "scale": 0,
                    "zoom": 9
                  },
                  {
                    "scale": 0,
                    "zoom": 10
                  },
                  {
                    "scale": 0,
                    "zoom": 11
                  },
                  {
                    "scale": 0,
                    "zoom": 12
                  },
                  {
                    "scale": 2.25,
                    "zoom": 13
                  },
                  {
                    "scale": 1.27,
                    "zoom": 14
                  },
                  {
                    "scale": 1.25,
                    "zoom": 15
                  },
                  {
                    "scale": 1.31,
                    "zoom": 16
                  },
                  {
                    "scale": 1.04,
                    "zoom": 17
                  },
                  {
                    "scale": 0.9,
                    "zoom": 18
                  },
                  {
                    "scale": 0.85,
                    "zoom": 19
                  },
                  {
                    "scale": 0.85,
                    "zoom": 20
                  },
                  {
                    "scale": 0.9,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": {
                  "any": "road_6"
                },
                "elements": "geometry.outline",
                "stylers": [
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 0
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 1
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 2
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 3
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 4
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 5
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 6
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 7
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 8
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 9
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 10
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 11
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 12
                  },
                  {
                    "color": "#dae7fb",
                    "scale": 2.31,
                    "zoom": 13
                  },
                  {
                    "color": "#e3edfc",
                    "scale": 1.7,
                    "zoom": 14
                  },
                  {
                    "color": "#e3edfc",
                    "scale": 1.76,
                    "zoom": 15
                  },
                  {
                    "color": "#e6effc",
                    "scale": 1.89,
                    "zoom": 16
                  },
                  {
                    "color": "#eaf1fc",
                    "scale": 1.55,
                    "zoom": 17
                  },
                  {
                    "color": "#edf4fd",
                    "scale": 1.36,
                    "zoom": 18
                  },
                  {
                    "color": "#f1f6fd",
                    "scale": 1.27,
                    "zoom": 19
                  },
                  {
                    "color": "#f3f7fd",
                    "scale": 1.27,
                    "zoom": 20
                  },
                  {
                    "color": "#f6f9fe",
                    "scale": 1.34,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": {
                  "any": "road_7",
                  "none": "is_tunnel"
                },
                "elements": "geometry.fill",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "scale": 0,
                    "zoom": 0
                  },
                  {
                    "scale": 0,
                    "zoom": 1
                  },
                  {
                    "scale": 0,
                    "zoom": 2
                  },
                  {
                    "scale": 0,
                    "zoom": 3
                  },
                  {
                    "scale": 0,
                    "zoom": 4
                  },
                  {
                    "scale": 0,
                    "zoom": 5
                  },
                  {
                    "scale": 0,
                    "zoom": 6
                  },
                  {
                    "scale": 0,
                    "zoom": 7
                  },
                  {
                    "scale": 0,
                    "zoom": 8
                  },
                  {
                    "scale": 0,
                    "zoom": 9
                  },
                  {
                    "scale": 0,
                    "zoom": 10
                  },
                  {
                    "scale": 0,
                    "zoom": 11
                  },
                  {
                    "scale": 0,
                    "zoom": 12
                  },
                  {
                    "scale": 0,
                    "zoom": 13
                  },
                  {
                    "scale": 0.9,
                    "zoom": 14
                  },
                  {
                    "scale": 0.78,
                    "zoom": 15
                  },
                  {
                    "scale": 0.88,
                    "zoom": 16
                  },
                  {
                    "scale": 0.8,
                    "zoom": 17
                  },
                  {
                    "scale": 0.78,
                    "zoom": 18
                  },
                  {
                    "scale": 0.79,
                    "zoom": 19
                  },
                  {
                    "scale": 0.83,
                    "zoom": 20
                  },
                  {
                    "scale": 0.9,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": {
                  "any": "road_7"
                },
                "elements": "geometry.outline",
                "stylers": [
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 0
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 1
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 2
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 3
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 4
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 5
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 6
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 7
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 8
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 9
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 10
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 11
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 12
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 13
                  },
                  {
                    "color": "#e3edfc",
                    "scale": 1.31,
                    "zoom": 14
                  },
                  {
                    "color": "#e3edfc",
                    "scale": 1.19,
                    "zoom": 15
                  },
                  {
                    "color": "#e6effc",
                    "scale": 1.31,
                    "zoom": 16
                  },
                  {
                    "color": "#eaf1fc",
                    "scale": 1.21,
                    "zoom": 17
                  },
                  {
                    "color": "#edf4fd",
                    "scale": 1.17,
                    "zoom": 18
                  },
                  {
                    "color": "#f1f6fd",
                    "scale": 1.18,
                    "zoom": 19
                  },
                  {
                    "color": "#f3f7fd",
                    "scale": 1.23,
                    "zoom": 20
                  },
                  {
                    "color": "#f6f9fe",
                    "scale": 1.33,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": {
                  "any": "road_minor",
                  "none": "is_tunnel"
                },
                "elements": "geometry.fill",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "scale": 0,
                    "zoom": 0
                  },
                  {
                    "scale": 0,
                    "zoom": 1
                  },
                  {
                    "scale": 0,
                    "zoom": 2
                  },
                  {
                    "scale": 0,
                    "zoom": 3
                  },
                  {
                    "scale": 0,
                    "zoom": 4
                  },
                  {
                    "scale": 0,
                    "zoom": 5
                  },
                  {
                    "scale": 0,
                    "zoom": 6
                  },
                  {
                    "scale": 0,
                    "zoom": 7
                  },
                  {
                    "scale": 0,
                    "zoom": 8
                  },
                  {
                    "scale": 0,
                    "zoom": 9
                  },
                  {
                    "scale": 0,
                    "zoom": 10
                  },
                  {
                    "scale": 0,
                    "zoom": 11
                  },
                  {
                    "scale": 0,
                    "zoom": 12
                  },
                  {
                    "scale": 0,
                    "zoom": 13
                  },
                  {
                    "scale": 0,
                    "zoom": 14
                  },
                  {
                    "scale": 0,
                    "zoom": 15
                  },
                  {
                    "scale": 0.9,
                    "zoom": 16
                  },
                  {
                    "scale": 0.9,
                    "zoom": 17
                  },
                  {
                    "scale": 0.9,
                    "zoom": 18
                  },
                  {
                    "scale": 0.9,
                    "zoom": 19
                  },
                  {
                    "scale": 0.9,
                    "zoom": 20
                  },
                  {
                    "scale": 0.9,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": {
                  "any": "road_minor"
                },
                "elements": "geometry.outline",
                "stylers": [
                  {
                    "color": "#ffffff",
                    "scale": 0.4,
                    "zoom": 0
                  },
                  {
                    "color": "#ffffff",
                    "scale": 0.4,
                    "zoom": 1
                  },
                  {
                    "color": "#ffffff",
                    "scale": 0.4,
                    "zoom": 2
                  },
                  {
                    "color": "#ffffff",
                    "scale": 0.4,
                    "zoom": 3
                  },
                  {
                    "color": "#ffffff",
                    "scale": 0.4,
                    "zoom": 4
                  },
                  {
                    "color": "#ffffff",
                    "scale": 0.4,
                    "zoom": 5
                  },
                  {
                    "color": "#ffffff",
                    "scale": 0.4,
                    "zoom": 6
                  },
                  {
                    "color": "#ffffff",
                    "scale": 0.4,
                    "zoom": 7
                  },
                  {
                    "color": "#ffffff",
                    "scale": 0.4,
                    "zoom": 8
                  },
                  {
                    "color": "#ffffff",
                    "scale": 0.4,
                    "zoom": 9
                  },
                  {
                    "color": "#ffffff",
                    "scale": 0.4,
                    "zoom": 10
                  },
                  {
                    "color": "#ffffff",
                    "scale": 0.4,
                    "zoom": 11
                  },
                  {
                    "color": "#ffffff",
                    "scale": 0.4,
                    "zoom": 12
                  },
                  {
                    "color": "#ffffff",
                    "scale": 0.4,
                    "zoom": 13
                  },
                  {
                    "color": "#e3edfc",
                    "scale": 0.4,
                    "zoom": 14
                  },
                  {
                    "color": "#e3edfc",
                    "scale": 0.4,
                    "zoom": 15
                  },
                  {
                    "color": "#e6effc",
                    "scale": 1.4,
                    "zoom": 16
                  },
                  {
                    "color": "#eaf1fc",
                    "scale": 1.27,
                    "zoom": 17
                  },
                  {
                    "color": "#edf4fd",
                    "scale": 1.27,
                    "zoom": 18
                  },
                  {
                    "color": "#f1f6fd",
                    "scale": 1.29,
                    "zoom": 19
                  },
                  {
                    "color": "#f3f7fd",
                    "scale": 1.31,
                    "zoom": 20
                  },
                  {
                    "color": "#f6f9fe",
                    "scale": 1.32,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": {
                  "any": "road_unclassified",
                  "none": "is_tunnel"
                },
                "elements": "geometry.fill",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "scale": 0,
                    "zoom": 0
                  },
                  {
                    "scale": 0,
                    "zoom": 1
                  },
                  {
                    "scale": 0,
                    "zoom": 2
                  },
                  {
                    "scale": 0,
                    "zoom": 3
                  },
                  {
                    "scale": 0,
                    "zoom": 4
                  },
                  {
                    "scale": 0,
                    "zoom": 5
                  },
                  {
                    "scale": 0,
                    "zoom": 6
                  },
                  {
                    "scale": 0,
                    "zoom": 7
                  },
                  {
                    "scale": 0,
                    "zoom": 8
                  },
                  {
                    "scale": 0,
                    "zoom": 9
                  },
                  {
                    "scale": 0,
                    "zoom": 10
                  },
                  {
                    "scale": 0,
                    "zoom": 11
                  },
                  {
                    "scale": 0,
                    "zoom": 12
                  },
                  {
                    "scale": 0,
                    "zoom": 13
                  },
                  {
                    "scale": 0,
                    "zoom": 14
                  },
                  {
                    "scale": 0,
                    "zoom": 15
                  },
                  {
                    "scale": 0.9,
                    "zoom": 16
                  },
                  {
                    "scale": 0.9,
                    "zoom": 17
                  },
                  {
                    "scale": 0.9,
                    "zoom": 18
                  },
                  {
                    "scale": 0.9,
                    "zoom": 19
                  },
                  {
                    "scale": 0.9,
                    "zoom": 20
                  },
                  {
                    "scale": 0.9,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": {
                  "any": "road_unclassified"
                },
                "elements": "geometry.outline",
                "stylers": [
                  {
                    "color": "#ffffff",
                    "scale": 0.4,
                    "zoom": 0
                  },
                  {
                    "color": "#ffffff",
                    "scale": 0.4,
                    "zoom": 1
                  },
                  {
                    "color": "#ffffff",
                    "scale": 0.4,
                    "zoom": 2
                  },
                  {
                    "color": "#ffffff",
                    "scale": 0.4,
                    "zoom": 3
                  },
                  {
                    "color": "#ffffff",
                    "scale": 0.4,
                    "zoom": 4
                  },
                  {
                    "color": "#ffffff",
                    "scale": 0.4,
                    "zoom": 5
                  },
                  {
                    "color": "#ffffff",
                    "scale": 0.4,
                    "zoom": 6
                  },
                  {
                    "color": "#ffffff",
                    "scale": 0.4,
                    "zoom": 7
                  },
                  {
                    "color": "#ffffff",
                    "scale": 0.4,
                    "zoom": 8
                  },
                  {
                    "color": "#ffffff",
                    "scale": 0.4,
                    "zoom": 9
                  },
                  {
                    "color": "#ffffff",
                    "scale": 0.4,
                    "zoom": 10
                  },
                  {
                    "color": "#ffffff",
                    "scale": 0.4,
                    "zoom": 11
                  },
                  {
                    "color": "#ffffff",
                    "scale": 0.4,
                    "zoom": 12
                  },
                  {
                    "color": "#ffffff",
                    "scale": 0.4,
                    "zoom": 13
                  },
                  {
                    "color": "#e3edfc",
                    "scale": 0.4,
                    "zoom": 14
                  },
                  {
                    "color": "#e3edfc",
                    "scale": 0.4,
                    "zoom": 15
                  },
                  {
                    "color": "#e6effc",
                    "scale": 1.4,
                    "zoom": 16
                  },
                  {
                    "color": "#eaf1fc",
                    "scale": 1.27,
                    "zoom": 17
                  },
                  {
                    "color": "#edf4fd",
                    "scale": 1.27,
                    "zoom": 18
                  },
                  {
                    "color": "#f1f6fd",
                    "scale": 1.29,
                    "zoom": 19
                  },
                  {
                    "color": "#f3f7fd",
                    "scale": 1.31,
                    "zoom": 20
                  },
                  {
                    "color": "#f6f9fe",
                    "scale": 1.32,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": {
                  "all": "is_tunnel",
                  "none": "path"
                },
                "elements": "geometry.fill",
                "stylers": [
                  {
                    "color": "#d1e1fa",
                    "zoom": 0
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 1
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 2
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 3
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 4
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 5
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 6
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 7
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 8
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 9
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 10
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 11
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 12
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 13
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 14
                  },
                  {
                    "color": "#e3edfc",
                    "zoom": 15
                  },
                  {
                    "color": "#e5eefc",
                    "zoom": 16
                  },
                  {
                    "color": "#e6effc",
                    "zoom": 17
                  },
                  {
                    "color": "#e8f0fc",
                    "zoom": 18
                  },
                  {
                    "color": "#eaf1fd",
                    "zoom": 19
                  },
                  {
                    "color": "#ebf2fd",
                    "zoom": 20
                  },
                  {
                    "color": "#edf3fd",
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": {
                  "all": "path",
                  "none": "is_tunnel"
                },
                "elements": "geometry.fill",
                "stylers": [
                  {
                    "color": "#8ab5f4"
                  }
                ]
              },
              {
                "tags": {
                  "all": "path",
                  "none": "is_tunnel"
                },
                "elements": "geometry.outline",
                "stylers": [
                  {
                    "opacity": 0.7
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 0
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 1
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 2
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 3
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 4
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 5
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 6
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 7
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 8
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 9
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 10
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 11
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 12
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 13
                  },
                  {
                    "color": "#e3edfc",
                    "zoom": 14
                  },
                  {
                    "color": "#edf3fd",
                    "zoom": 15
                  },
                  {
                    "color": "#eef4fd",
                    "zoom": 16
                  },
                  {
                    "color": "#f0f5fd",
                    "zoom": 17
                  },
                  {
                    "color": "#f1f6fd",
                    "zoom": 18
                  },
                  {
                    "color": "#f3f7fe",
                    "zoom": 19
                  },
                  {
                    "color": "#f4f8fe",
                    "zoom": 20
                  },
                  {
                    "color": "#f6f9fe",
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": "road_construction",
                "elements": "geometry.fill",
                "stylers": [
                  {
                    "color": "#ffffff"
                  }
                ]
              },
              {
                "tags": "road_construction",
                "elements": "geometry.outline",
                "stylers": [
                  {
                    "color": "#b9d2f8",
                    "zoom": 0
                  },
                  {
                    "color": "#b9d2f8",
                    "zoom": 1
                  },
                  {
                    "color": "#b9d2f8",
                    "zoom": 2
                  },
                  {
                    "color": "#b9d2f8",
                    "zoom": 3
                  },
                  {
                    "color": "#b9d2f8",
                    "zoom": 4
                  },
                  {
                    "color": "#b9d2f8",
                    "zoom": 5
                  },
                  {
                    "color": "#b9d2f8",
                    "zoom": 6
                  },
                  {
                    "color": "#b9d2f8",
                    "zoom": 7
                  },
                  {
                    "color": "#b9d2f8",
                    "zoom": 8
                  },
                  {
                    "color": "#b9d2f8",
                    "zoom": 9
                  },
                  {
                    "color": "#b9d2f8",
                    "zoom": 10
                  },
                  {
                    "color": "#b9d2f8",
                    "zoom": 11
                  },
                  {
                    "color": "#b9d2f8",
                    "zoom": 12
                  },
                  {
                    "color": "#b9d2f8",
                    "zoom": 13
                  },
                  {
                    "color": "#8ab5f4",
                    "zoom": 14
                  },
                  {
                    "color": "#b9d2f8",
                    "zoom": 15
                  },
                  {
                    "color": "#c1d7f9",
                    "zoom": 16
                  },
                  {
                    "color": "#c9dcfa",
                    "zoom": 17
                  },
                  {
                    "color": "#d0e1fa",
                    "zoom": 18
                  },
                  {
                    "color": "#d8e6fb",
                    "zoom": 19
                  },
                  {
                    "color": "#e0ebfc",
                    "zoom": 20
                  },
                  {
                    "color": "#e8f0fd",
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": {
                  "any": "ferry"
                },
                "stylers": [
                  {
                    "color": "#78a9f2"
                  }
                ]
              },
              {
                "tags": "transit_location",
                "elements": "label.icon",
                "stylers": [
                  {
                    "hue": "#176be8"
                  },
                  {
                    "saturation": -0.18
                  }
                ]
              },
              {
                "tags": "transit_location",
                "elements": "label.text.fill",
                "stylers": [
                  {
                    "color": "#7a93b8"
                  }
                ]
              },
              {
                "tags": "transit_location",
                "elements": "label.text.outline",
                "stylers": [
                  {
                    "color": "#ffffff"
                  }
                ]
              },
              {
                "tags": "transit_schema",
                "elements": "geometry.fill",
                "stylers": [
                  {
                    "color": "#7a93b8"
                  },
                  {
                    "scale": 0.7
                  },
                  {
                    "opacity": 0.6,
                    "zoom": 0
                  },
                  {
                    "opacity": 0.6,
                    "zoom": 1
                  },
                  {
                    "opacity": 0.6,
                    "zoom": 2
                  },
                  {
                    "opacity": 0.6,
                    "zoom": 3
                  },
                  {
                    "opacity": 0.6,
                    "zoom": 4
                  },
                  {
                    "opacity": 0.6,
                    "zoom": 5
                  },
                  {
                    "opacity": 0.6,
                    "zoom": 6
                  },
                  {
                    "opacity": 0.6,
                    "zoom": 7
                  },
                  {
                    "opacity": 0.6,
                    "zoom": 8
                  },
                  {
                    "opacity": 0.6,
                    "zoom": 9
                  },
                  {
                    "opacity": 0.6,
                    "zoom": 10
                  },
                  {
                    "opacity": 0.6,
                    "zoom": 11
                  },
                  {
                    "opacity": 0.6,
                    "zoom": 12
                  },
                  {
                    "opacity": 0.6,
                    "zoom": 13
                  },
                  {
                    "opacity": 0.6,
                    "zoom": 14
                  },
                  {
                    "opacity": 0.5,
                    "zoom": 15
                  },
                  {
                    "opacity": 0.4,
                    "zoom": 16
                  },
                  {
                    "opacity": 0.4,
                    "zoom": 17
                  },
                  {
                    "opacity": 0.4,
                    "zoom": 18
                  },
                  {
                    "opacity": 0.4,
                    "zoom": 19
                  },
                  {
                    "opacity": 0.4,
                    "zoom": 20
                  },
                  {
                    "opacity": 0.4,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": "transit_schema",
                "elements": "geometry.outline",
                "stylers": [
                  {
                    "opacity": 0
                  }
                ]
              },
              {
                "tags": "transit_line",
                "elements": "geometry.fill.pattern",
                "stylers": [
                  {
                    "color": "#a3afc2"
                  },
                  {
                    "opacity": 0,
                    "zoom": 0
                  },
                  {
                    "opacity": 0,
                    "zoom": 1
                  },
                  {
                    "opacity": 0,
                    "zoom": 2
                  },
                  {
                    "opacity": 0,
                    "zoom": 3
                  },
                  {
                    "opacity": 0,
                    "zoom": 4
                  },
                  {
                    "opacity": 0,
                    "zoom": 5
                  },
                  {
                    "opacity": 0,
                    "zoom": 6
                  },
                  {
                    "opacity": 0,
                    "zoom": 7
                  },
                  {
                    "opacity": 0,
                    "zoom": 8
                  },
                  {
                    "opacity": 0,
                    "zoom": 9
                  },
                  {
                    "opacity": 0,
                    "zoom": 10
                  },
                  {
                    "opacity": 0,
                    "zoom": 11
                  },
                  {
                    "opacity": 0,
                    "zoom": 12
                  },
                  {
                    "opacity": 1,
                    "zoom": 13
                  },
                  {
                    "opacity": 1,
                    "zoom": 14
                  },
                  {
                    "opacity": 1,
                    "zoom": 15
                  },
                  {
                    "opacity": 1,
                    "zoom": 16
                  },
                  {
                    "opacity": 1,
                    "zoom": 17
                  },
                  {
                    "opacity": 1,
                    "zoom": 18
                  },
                  {
                    "opacity": 1,
                    "zoom": 19
                  },
                  {
                    "opacity": 1,
                    "zoom": 20
                  },
                  {
                    "opacity": 1,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": "transit_line",
                "elements": "geometry.fill",
                "stylers": [
                  {
                    "color": "#a3afc2"
                  },
                  {
                    "scale": 0.4
                  },
                  {
                    "opacity": 0,
                    "zoom": 0
                  },
                  {
                    "opacity": 0,
                    "zoom": 1
                  },
                  {
                    "opacity": 0,
                    "zoom": 2
                  },
                  {
                    "opacity": 0,
                    "zoom": 3
                  },
                  {
                    "opacity": 0,
                    "zoom": 4
                  },
                  {
                    "opacity": 0,
                    "zoom": 5
                  },
                  {
                    "opacity": 0,
                    "zoom": 6
                  },
                  {
                    "opacity": 0,
                    "zoom": 7
                  },
                  {
                    "opacity": 0,
                    "zoom": 8
                  },
                  {
                    "opacity": 0,
                    "zoom": 9
                  },
                  {
                    "opacity": 0,
                    "zoom": 10
                  },
                  {
                    "opacity": 0,
                    "zoom": 11
                  },
                  {
                    "opacity": 0,
                    "zoom": 12
                  },
                  {
                    "opacity": 1,
                    "zoom": 13
                  },
                  {
                    "opacity": 1,
                    "zoom": 14
                  },
                  {
                    "opacity": 1,
                    "zoom": 15
                  },
                  {
                    "opacity": 1,
                    "zoom": 16
                  },
                  {
                    "opacity": 1,
                    "zoom": 17
                  },
                  {
                    "opacity": 1,
                    "zoom": 18
                  },
                  {
                    "opacity": 1,
                    "zoom": 19
                  },
                  {
                    "opacity": 1,
                    "zoom": 20
                  },
                  {
                    "opacity": 1,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": "water",
                "elements": "geometry",
                "stylers": [
                  {
                    "color": "#a7c7f6",
                    "zoom": 0
                  },
                  {
                    "color": "#a7c7f6",
                    "zoom": 1
                  },
                  {
                    "color": "#a7c7f6",
                    "zoom": 2
                  },
                  {
                    "color": "#a7c7f6",
                    "zoom": 3
                  },
                  {
                    "color": "#a7c7f6",
                    "zoom": 4
                  },
                  {
                    "color": "#a7c7f6",
                    "zoom": 5
                  },
                  {
                    "color": "#a7c7f6",
                    "zoom": 6
                  },
                  {
                    "color": "#a7c7f6",
                    "zoom": 7
                  },
                  {
                    "color": "#aac9f6",
                    "zoom": 8
                  },
                  {
                    "color": "#adcbf7",
                    "zoom": 9
                  },
                  {
                    "color": "#b0cdf7",
                    "zoom": 10
                  },
                  {
                    "color": "#b2cef7",
                    "zoom": 11
                  },
                  {
                    "color": "#b3cff8",
                    "zoom": 12
                  },
                  {
                    "color": "#b5d0f8",
                    "zoom": 13
                  },
                  {
                    "color": "#b7d1f8",
                    "zoom": 14
                  },
                  {
                    "color": "#b9d3f8",
                    "zoom": 15
                  },
                  {
                    "color": "#bcd4f8",
                    "zoom": 16
                  },
                  {
                    "color": "#bed5f8",
                    "zoom": 17
                  },
                  {
                    "color": "#c0d7f9",
                    "zoom": 18
                  },
                  {
                    "color": "#c2d8f9",
                    "zoom": 19
                  },
                  {
                    "color": "#c5daf9",
                    "zoom": 20
                  },
                  {
                    "color": "#c7dbf9",
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": "water",
                "elements": "geometry",
                "types": "polyline",
                "stylers": [
                  {
                    "opacity": 0.4,
                    "zoom": 0
                  },
                  {
                    "opacity": 0.4,
                    "zoom": 1
                  },
                  {
                    "opacity": 0.4,
                    "zoom": 2
                  },
                  {
                    "opacity": 0.4,
                    "zoom": 3
                  },
                  {
                    "opacity": 0.6,
                    "zoom": 4
                  },
                  {
                    "opacity": 0.8,
                    "zoom": 5
                  },
                  {
                    "opacity": 1,
                    "zoom": 6
                  },
                  {
                    "opacity": 1,
                    "zoom": 7
                  },
                  {
                    "opacity": 1,
                    "zoom": 8
                  },
                  {
                    "opacity": 1,
                    "zoom": 9
                  },
                  {
                    "opacity": 1,
                    "zoom": 10
                  },
                  {
                    "opacity": 1,
                    "zoom": 11
                  },
                  {
                    "opacity": 1,
                    "zoom": 12
                  },
                  {
                    "opacity": 1,
                    "zoom": 13
                  },
                  {
                    "opacity": 1,
                    "zoom": 14
                  },
                  {
                    "opacity": 1,
                    "zoom": 15
                  },
                  {
                    "opacity": 1,
                    "zoom": 16
                  },
                  {
                    "opacity": 1,
                    "zoom": 17
                  },
                  {
                    "opacity": 1,
                    "zoom": 18
                  },
                  {
                    "opacity": 1,
                    "zoom": 19
                  },
                  {
                    "opacity": 1,
                    "zoom": 20
                  },
                  {
                    "opacity": 1,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": "bathymetry",
                "elements": "geometry",
                "stylers": [
                  {
                    "hue": "#a7c7f6"
                  }
                ]
              },
              {
                "tags": {
                  "any": [
                    "industrial",
                    "construction_site"
                  ]
                },
                "elements": "geometry",
                "stylers": [
                  {
                    "color": "#d1e1fa",
                    "zoom": 0
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 1
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 2
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 3
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 4
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 5
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 6
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 7
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 8
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 9
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 10
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 11
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 12
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 13
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 14
                  },
                  {
                    "color": "#e3edfc",
                    "zoom": 15
                  },
                  {
                    "color": "#e5eefc",
                    "zoom": 16
                  },
                  {
                    "color": "#e6effc",
                    "zoom": 17
                  },
                  {
                    "color": "#e8f0fc",
                    "zoom": 18
                  },
                  {
                    "color": "#eaf1fd",
                    "zoom": 19
                  },
                  {
                    "color": "#ebf2fd",
                    "zoom": 20
                  },
                  {
                    "color": "#edf3fd",
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": {
                  "any": "transit",
                  "none": [
                    "transit_location",
                    "transit_line",
                    "transit_schema",
                    "is_unclassified_transit"
                  ]
                },
                "elements": "geometry",
                "stylers": [
                  {
                    "color": "#d1e1fa",
                    "zoom": 0
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 1
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 2
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 3
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 4
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 5
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 6
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 7
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 8
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 9
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 10
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 11
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 12
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 13
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 14
                  },
                  {
                    "color": "#e3edfc",
                    "zoom": 15
                  },
                  {
                    "color": "#e5eefc",
                    "zoom": 16
                  },
                  {
                    "color": "#e6effc",
                    "zoom": 17
                  },
                  {
                    "color": "#e8f0fc",
                    "zoom": 18
                  },
                  {
                    "color": "#eaf1fd",
                    "zoom": 19
                  },
                  {
                    "color": "#ebf2fd",
                    "zoom": 20
                  },
                  {
                    "color": "#edf3fd",
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": "fence",
                "elements": "geometry.fill",
                "stylers": [
                  {
                    "color": "#bfd5f8"
                  },
                  {
                    "opacity": 0.75,
                    "zoom": 0
                  },
                  {
                    "opacity": 0.75,
                    "zoom": 1
                  },
                  {
                    "opacity": 0.75,
                    "zoom": 2
                  },
                  {
                    "opacity": 0.75,
                    "zoom": 3
                  },
                  {
                    "opacity": 0.75,
                    "zoom": 4
                  },
                  {
                    "opacity": 0.75,
                    "zoom": 5
                  },
                  {
                    "opacity": 0.75,
                    "zoom": 6
                  },
                  {
                    "opacity": 0.75,
                    "zoom": 7
                  },
                  {
                    "opacity": 0.75,
                    "zoom": 8
                  },
                  {
                    "opacity": 0.75,
                    "zoom": 9
                  },
                  {
                    "opacity": 0.75,
                    "zoom": 10
                  },
                  {
                    "opacity": 0.75,
                    "zoom": 11
                  },
                  {
                    "opacity": 0.75,
                    "zoom": 12
                  },
                  {
                    "opacity": 0.75,
                    "zoom": 13
                  },
                  {
                    "opacity": 0.75,
                    "zoom": 14
                  },
                  {
                    "opacity": 0.75,
                    "zoom": 15
                  },
                  {
                    "opacity": 0.75,
                    "zoom": 16
                  },
                  {
                    "opacity": 0.45,
                    "zoom": 17
                  },
                  {
                    "opacity": 0.45,
                    "zoom": 18
                  },
                  {
                    "opacity": 0.45,
                    "zoom": 19
                  },
                  {
                    "opacity": 0.45,
                    "zoom": 20
                  },
                  {
                    "opacity": 0.45,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": "medical",
                "elements": "geometry",
                "stylers": [
                  {
                    "color": "#d1e1fa",
                    "zoom": 0
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 1
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 2
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 3
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 4
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 5
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 6
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 7
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 8
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 9
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 10
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 11
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 12
                  },
                  {
                    "color": "#d1e1fa",
                    "zoom": 13
                  },
                  {
                    "color": "#dae7fb",
                    "zoom": 14
                  },
                  {
                    "color": "#e3edfc",
                    "zoom": 15
                  },
                  {
                    "color": "#e5eefc",
                    "zoom": 16
                  },
                  {
                    "color": "#e6effc",
                    "zoom": 17
                  },
                  {
                    "color": "#e8f0fc",
                    "zoom": 18
                  },
                  {
                    "color": "#eaf1fd",
                    "zoom": 19
                  },
                  {
                    "color": "#ebf2fd",
                    "zoom": 20
                  },
                  {
                    "color": "#edf3fd",
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": "beach",
                "elements": "geometry",
                "stylers": [
                  {
                    "color": "#d1e1fa",
                    "opacity": 0.3,
                    "zoom": 0
                  },
                  {
                    "color": "#d1e1fa",
                    "opacity": 0.3,
                    "zoom": 1
                  },
                  {
                    "color": "#d1e1fa",
                    "opacity": 0.3,
                    "zoom": 2
                  },
                  {
                    "color": "#d1e1fa",
                    "opacity": 0.3,
                    "zoom": 3
                  },
                  {
                    "color": "#d1e1fa",
                    "opacity": 0.3,
                    "zoom": 4
                  },
                  {
                    "color": "#d1e1fa",
                    "opacity": 0.3,
                    "zoom": 5
                  },
                  {
                    "color": "#d1e1fa",
                    "opacity": 0.3,
                    "zoom": 6
                  },
                  {
                    "color": "#d1e1fa",
                    "opacity": 0.3,
                    "zoom": 7
                  },
                  {
                    "color": "#d1e1fa",
                    "opacity": 0.3,
                    "zoom": 8
                  },
                  {
                    "color": "#d1e1fa",
                    "opacity": 0.3,
                    "zoom": 9
                  },
                  {
                    "color": "#d1e1fa",
                    "opacity": 0.3,
                    "zoom": 10
                  },
                  {
                    "color": "#d1e1fa",
                    "opacity": 0.3,
                    "zoom": 11
                  },
                  {
                    "color": "#d1e1fa",
                    "opacity": 0.3,
                    "zoom": 12
                  },
                  {
                    "color": "#d1e1fa",
                    "opacity": 0.65,
                    "zoom": 13
                  },
                  {
                    "color": "#dae7fb",
                    "opacity": 1,
                    "zoom": 14
                  },
                  {
                    "color": "#e3edfc",
                    "opacity": 1,
                    "zoom": 15
                  },
                  {
                    "color": "#e5eefc",
                    "opacity": 1,
                    "zoom": 16
                  },
                  {
                    "color": "#e6effc",
                    "opacity": 1,
                    "zoom": 17
                  },
                  {
                    "color": "#e8f0fc",
                    "opacity": 1,
                    "zoom": 18
                  },
                  {
                    "color": "#eaf1fd",
                    "opacity": 1,
                    "zoom": 19
                  },
                  {
                    "color": "#ebf2fd",
                    "opacity": 1,
                    "zoom": 20
                  },
                  {
                    "color": "#edf3fd",
                    "opacity": 1,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": {
                  "all": [
                    "is_tunnel",
                    "path"
                  ]
                },
                "elements": "geometry.fill",
                "stylers": [
                  {
                    "color": "#81aff3"
                  },
                  {
                    "opacity": 0.3
                  }
                ]
              },
              {
                "tags": {
                  "all": [
                    "is_tunnel",
                    "path"
                  ]
                },
                "elements": "geometry.outline",
                "stylers": [
                  {
                    "opacity": 0
                  }
                ]
              },
              {
                "tags": "road_limited",
                "elements": "geometry.fill",
                "stylers": [
                  {
                    "color": "#a2c4f6"
                  },
                  {
                    "scale": 0,
                    "zoom": 0
                  },
                  {
                    "scale": 0,
                    "zoom": 1
                  },
                  {
                    "scale": 0,
                    "zoom": 2
                  },
                  {
                    "scale": 0,
                    "zoom": 3
                  },
                  {
                    "scale": 0,
                    "zoom": 4
                  },
                  {
                    "scale": 0,
                    "zoom": 5
                  },
                  {
                    "scale": 0,
                    "zoom": 6
                  },
                  {
                    "scale": 0,
                    "zoom": 7
                  },
                  {
                    "scale": 0,
                    "zoom": 8
                  },
                  {
                    "scale": 0,
                    "zoom": 9
                  },
                  {
                    "scale": 0,
                    "zoom": 10
                  },
                  {
                    "scale": 0,
                    "zoom": 11
                  },
                  {
                    "scale": 0,
                    "zoom": 12
                  },
                  {
                    "scale": 0.1,
                    "zoom": 13
                  },
                  {
                    "scale": 0.2,
                    "zoom": 14
                  },
                  {
                    "scale": 0.3,
                    "zoom": 15
                  },
                  {
                    "scale": 0.5,
                    "zoom": 16
                  },
                  {
                    "scale": 0.6,
                    "zoom": 17
                  },
                  {
                    "scale": 0.7,
                    "zoom": 18
                  },
                  {
                    "scale": 0.79,
                    "zoom": 19
                  },
                  {
                    "scale": 0.83,
                    "zoom": 20
                  },
                  {
                    "scale": 0.9,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": "road_limited",
                "elements": "geometry.outline",
                "stylers": [
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 0
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 1
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 2
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 3
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 4
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 5
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 6
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 7
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 8
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 9
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 10
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 11
                  },
                  {
                    "color": "#ffffff",
                    "scale": 1.4,
                    "zoom": 12
                  },
                  {
                    "color": "#ffffff",
                    "scale": 0.1,
                    "zoom": 13
                  },
                  {
                    "color": "#e3edfc",
                    "scale": 0.2,
                    "zoom": 14
                  },
                  {
                    "color": "#e3edfc",
                    "scale": 0.3,
                    "zoom": 15
                  },
                  {
                    "color": "#e6effc",
                    "scale": 0.5,
                    "zoom": 16
                  },
                  {
                    "color": "#eaf1fc",
                    "scale": 0.6,
                    "zoom": 17
                  },
                  {
                    "color": "#edf4fd",
                    "scale": 0.7,
                    "zoom": 18
                  },
                  {
                    "color": "#f1f6fd",
                    "scale": 1.18,
                    "zoom": 19
                  },
                  {
                    "color": "#f3f7fd",
                    "scale": 1.23,
                    "zoom": 20
                  },
                  {
                    "color": "#f6f9fe",
                    "scale": 1.33,
                    "zoom": 21
                  }
                ]
              },
              {
                "tags": {
                  "any": "landcover",
                  "none": "vegetation"
                },
                "stylers": {
                  "visibility": "off"
                }
              }
            ]
        },
      ));
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

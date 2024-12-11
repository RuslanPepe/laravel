<!DOCTYPE html>
<html>
<head>
  <title>Быстрый старт. Размещение интерактивной карты на странице</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script>
    initMap();

    async function initMap() {
      await ymaps3.ready;

      const {YMap, YMapDefaultSchemeLayer} = ymaps3;

      const map = new YMap(
        document.getElementById('map'),
        {
          location: {
            center: [37.588144, 55.733842],
            zoom: 10
          }
        }
      );
      map.addChild(new YMapDefaultSchemeLayer());
    }

    const response = await axios.get('/suggest')

  </script>
</head>
<body>
<div id="resp"></div>
<div id="map" style="width: 600px; height: 400px"></div>
</body>
</html>

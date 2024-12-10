<template>
  <div id="app">
    <map-location/>
  </div>
</template>

<script>


import MapLocation from "../Components/mapLocation.vue";
import {YandexMap} from "vue-yandex-maps";

export default {
  components: {
    MapLocation,
    YandexMap,
  },
};
</script>

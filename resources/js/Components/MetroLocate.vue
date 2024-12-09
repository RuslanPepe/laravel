<template>
  <div class="room-location-metro-group">
    <img src='/image/metro-logo.png' style="filter: hue-rotate(190deg) saturate(300%)" class="room-location-metro-img" alt="">
    <p class="room-location-metro-text">{{metro}}</p>
    <p class="room-location-metro-text-time">{{metro_time}} мин.</p>
  </div>
</template>

<script>
export default {
  name: "MetroLocate",
  props: {
    metro: '',
    metro_time: '',
  }
}
</script>

<style scoped>

</style>

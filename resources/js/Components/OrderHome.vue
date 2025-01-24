<template>
  <div class="room-order" @click="orderRedirect(id)">
    <img :src="'/metadataUpload/7466376e3d26efc1acaaeeaed231b6d2.jpg'" style="margin: -1px;border-radius: 15px 15px 0 0 " alt="not found... 404" class="img-overlay">
    <p class="room-price">{{priceOrder}} ₽</p>
    <div class="room-metro">
      <div class="group-metro group-metro-1">
        <img src="/image/metro-logo.png" alt="" class="room-metro-icon">
        <p class="room-metro-text">{{metro[0]}}</p>
      </div>
      <div class="group-metro group-metro-2">
        <img src="/image/metro-logo.png" alt="" class="room-metro-icon">
        <p class="room-metro-text">{{metro[1]}}</p>
      </div>
      <div class="group-metro group-metro-3">
        <img src="/image/metro-logo.png" alt="" class="room-metro-icon">
        <p class="room-metro-text">{{metro[2]}}</p>
      </div>
    </div>
    <div class="room-characters">
      <p class="room-characters-text">{{roomCount}}-комн. кв.</p>
      <p class="room-characters-text">{{areaHouse}} м²</p>
      <p class="room-characters-text">{{countFloor}} этаж</p>
    </div>
  </div>
</template>

<script>
export default {
  name: "OrderHome",
  props: {
    metro: {},
    roomImage: '',
    priceOrder: '',
    roomCount: '',
    areaHouse: '',
    countFloor: '',
    id: ''
  },
  methods: {
    orderRedirect(id){
      window.open('order-'+id, '_self')
    },
  }
}
</script>

<style>
</style>

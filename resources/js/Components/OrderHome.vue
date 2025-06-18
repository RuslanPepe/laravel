<template>
  <div class="room-order" @click="orderRedirect(id)">
    <img :src="roomImage.image[0]" v-if="roomImage.image" style="object-fit: cover; margin: -1px;border-radius: 15px 15px 0 0; height: 420px;width: 420px " alt="not found... 404" class="img-overlay">
    <img src="/image/iconPreview.jpeg" v-if="!roomImage.image" style="margin: -1px;border-radius: 15px 15px 0 0; height: 420px;width: 420px " alt="not found... 404" class="img-overlay">
    <p class="room-price">{{ strFormate(priceOrder.toString()) }} ₽</p>
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
    strFormate(str) {
      return str
        .split('')
        .reverse()
        .join('')
        .replace(/(.{3})/g, '$1 ')
        .split('')
        .reverse()
        .join('')
        .trim();
    }
  }
}
</script>

<style>
</style>

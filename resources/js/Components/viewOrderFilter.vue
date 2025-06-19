<template>
  <div class="blockOrder" @click="redirectOrder">
    <img :src="this.data.image[0]" alt="" width="360" height="360">
    <div class="blockAllOrder">
      <p class="priceTitle">{{ strFormate(this.data.price.toString()) }} ₽</p>
      <div class="room-metro">
        <div class="group-metro group-metro-1">
          <img src="/image/metro-logo.png" alt="" class="room-metro-icon">
          <p class="room-metro-text">Арбатская</p>
        </div>
        <!--      <br>-->
        <div class="group-metro group-metro-2">
          <img src="/image/metro-logo.png" alt="" class="room-metro-icon">
          <p class="room-metro-text">Смоленская</p>
        </div>
        <!--      <br>-->
        <div class="group-metro group-metro-3">
          <img src="/image/metro-logo.png" alt="" class="room-metro-icon">
          <p class="room-metro-text">Алекс.сад</p>
        </div>
      </div>
    </div>
    <div class="groupOptions">
      <div class="countRoomGroup">
        <p class="countRoom">{{ this.data.roomCount }}-комн.</p>
      </div>
      <div class="areaRoomGroup">
        <p class="areaRoom">{{ this.data.areaRoom}} м²</p>
      </div>
      <div class="floorHouseGroup">
        <p class="floorHouse">{{ this.data.floor+'/'+this.data.floorAllHouse }} этаж</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "viewOrderFilter",
  props: {
    data: '',
  },
  mounted() {

  },
  methods: {
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
    },
    redirectOrder(){
      window.location.href = '/order-'+this.data.id
    }
  }
}
</script>

<style scoped>
.blockAllOrder{
  display: flex;
}
.groupOptions{
  margin: 10px 0 0 0;
}
.floorHouseGroup{
  font-size: 18px;
  font-weight: 600;
  margin: 0 0 0 40px;
  display: inline-block;
}
.areaRoomGroup{
  font-size: 18px;
  font-weight: 600;
  margin: 0 0 0 45px;
  display: inline-block;
}
.countRoomGroup{
  font-size: 18px;
  font-weight: 600;
  margin: 0 0 0 25px;
  display: inline-block;
}
.room-metro-icon{
  height: 12px;
  margin: 6px 3px 0 0;
}
.group-metro{
  display: flex;
  margin: 0 0 0 40px;
  //justify-content: end;
}
.room-metro{
  width: 144px;
  display: inline-block;
  margin: 10px 0 0 0;
  //position: absolute;
}
.priceTitle{
  margin: 25px 0 0 20px;
  font-size: 28px;
  font-weight: 600;
  //display: block;
}
.blockOrder{
  width: 360px;
  height: 490px;
  //background: #016FA6;
  display: inline-block;
  margin: 15px 30px 30px;
  border: 1px rgba(0, 0, 0, 0.02) solid;
  box-shadow: 0 0 20px 3px rgba(0, 0, 0, .07);
  border-radius: 15px;
}
</style>

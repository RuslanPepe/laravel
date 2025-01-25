
<template>
  <div class="room-about-apartment-group">
    <div class="room-about-apartment-group-select">
      <p class="room-about-apartment-type-1">{{ title }}</p>
      <p class="room-about-apartment-type-3"><span v-for="data in description">{{ data }}<br></span></p>
    </div>
    <div class="room-about-apartment-group-hr">
      <hr class="room-about-apartment-group-hr_hr">
    </div>
  </div>
</template>

<script>
export default {
  name: "CharactersRoomT3",
  props: {
    title: '',
    description: '',
    metre: '',
  }
}
</script>

<style>
.room-about-apartment-type-3{
  font-size: 18px;
  font-weight: 500;
  display: inline-block;
  align-self: end;
  text-align: end;
}
</style>

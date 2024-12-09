
<template>
  <div class="room-about-apartment-group">
    <div class="room-about-apartment-group-select">
      <p class="room-about-apartment-type-1">{{ title }}</p>
      <p class="room-about-apartment-type-2">{{ description }}{{ metre }}</p>
    </div>
    <div class="room-about-apartment-group-hr">
      <hr class="room-about-apartment-group-hr_hr">
    </div>
  </div>
</template>

<script>
export default {
  name: "CharactersRoom",
  props: {
    title: '',
    description: '',
    metre: '',
  }
}
</script>

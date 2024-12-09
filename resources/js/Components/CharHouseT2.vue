
<template>
  <div :class="'col-sm-4 room-characters-group-row-pos'">
    <div class="room-characters-group-all">
      <img :src="img" alt="" class="room-characters-img">
      <p class="room-characters-group-text">{{title}}<br><span class="room-characters-num-group">{{ description }}{{ metre }}</span></p>
    </div>
  </div>
</template>

<script>
export default {
  name: "CharHouseT2",
  props: {
    title: '',
    description: '',
    metre: '',
    img: '',
  }
}
</script>

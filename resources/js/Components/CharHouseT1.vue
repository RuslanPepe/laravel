
<template>
  <div :class="{'col-sm-4 room-characters-group-row-pos': class_m, 'col-sm-3 room-characters-group-row-pos room-characters-group-center-1': class_f, 'col-sm-3 room-characters-group-row-pos room-characters-group-center-2': class_s}">
    <div class="room-characters-group-all">
      <img :src="img" alt="" class="room-characters-img">
      <p class="room-characters-group-text">{{ title }}<br><span class="room-characters-num-group">{{ description }}{{ metre }}</span></p>
    </div>
  </div>
</template>

<script>
export default {
  name: "CharHouseT1",
  props: {
    title: '',
    description: '',
    metre: '',
    class_m: false,
    class_f: false,
    class_s: false,
    img: '',
  }
}
</script>

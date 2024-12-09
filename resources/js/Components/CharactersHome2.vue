<template>
  <div class="room-about-apartment-group">
    <div class="room-about-apartment-group-select">
      <p class="room-about-apartment-type-1">{{ title }}</p>
      <p class="room-about-apartment-type-2"><span v-if="charT1">{{charT1}} {{descriptionT1}}</span><br><span v-if="charT2">{{charT2}} {{descriptionT2}}</span></p>
    </div>
    <div class="room-about-apartment-group-hr">
      <hr class="room-about-apartment-group-hr_hr">
    </div>
  </div>
</template>

<script>
export default {
  name: "CharactersHomeT2",
  props: {
    title: '',
    descriptionT1: '',
    descriptionT2: '',
    charT1: '',
    charT2: '',
  }
}
</script>

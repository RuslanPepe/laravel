
<template>
  <div class="nav-order">
    <p class="nav-order-text">{{estate}}</p>
    <img src='/image/right.png' class="nav-order-arrow" alt="">
    <p class="nav-order-text">{{ typeEstate }}</p>
    <img src='/image/right.png' class="nav-order-arrow" alt="">
    <p class="nav-order-text"></p>
    <img src='/image/right.png' class="nav-order-arrow" alt="">
    <p class="nav-order-text">ЖК "LUCE"</p>
  </div>
</template>
<script>
export default {
  name: "navOrder",
  props: {
    estate: 'Недвижимость в Москве',
    typeEstate: 'Продажа 3-комн квартир',
    e2state: '',
  }
}

</script>

<style scoped>

</style>

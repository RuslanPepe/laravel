<template>
  <div>
        <div class="row justify-content-center room-list" >
          <order-home :room-image="data" :area-house="data.areaRoom" :count-floor="data.floor+'/'+data.floorAllHouse" :room-count="data.roomCount" :price-order="data.price" :id="data.orderId" :metro="['Арбатская','Смоленская','Алекс.сад']" v-for="(data, i) in orders"/>

        </div>

    <div ref="observerTarget" v-if="hasMore">Загрузка...</div>
  </div>
</template>

<script setup>
import {ref, onMounted} from "vue";
import axios from "axios";
import OrderHome from "@/Components/OrderHome.vue";

const orders = ref([])
const currentPage = ref(1)
const hasMore = ref(true)

const loadOrders = async () => {
  const res = await axios.get(`/api/orders?page=${currentPage.value}`)
  console.log(res)
  orders.value.push(...res.data.data)

  if (!res.data.next_page_url) {
    hasMore.value = false
  } else {
    currentPage.value++
  }
}

const observerTarget = ref(null)

onMounted(() => {
  loadOrders()

  const observer = new IntersectionObserver((entries) => {
    if (entries[0].isIntersecting && hasMore.value){
      loadOrders()
    }
  })

  if (observerTarget.value){
    observer.observe(observerTarget.value)
  }
})



</script>

<style scoped>

</style>

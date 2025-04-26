<template>
  <div class="modalPriceOrder" :style="stylePriceOrder">
    <input-price-order id="inputPriceMin" name="inputPriceMin" :style="styleInputOrder" v-model="priceMin" @priceCorrect="priceCorrect" placeholder="От"/>
    <span v-if="viewDash">-</span>
    <input-price-order id="inputPriceMax" name="inputPriceMax" :style="styleInputOrder" v-model="priceMax" @priceCorrect="priceCorrect" placeholder="До"/>
  </div>
</template>

<script>
import InputPriceOrder from "@/Components/inputPriceOrder.vue";

export default {
  name: "ModalPriceOrder",
  components: {InputPriceOrder},
  props: {
    stylePriceOrder: '',
    styleInputOrder: '',
    viewDash: true,
  },
  data() {
    return {
      priceMin: '',
      priceMax: '',
    }
  },
  methods: {
    priceCorrect(){
      this.$emit('priceCorrect', this.priceMin, this.priceMax)
    },
  },
}
</script>

<style scoped>
.modalPriceOrder{
  position: absolute;
  background: white;
  width: 300px;
  height: 85px;
  margin: 5px 0 0 0;
  padding: 20px 15px;
  box-shadow: 0 0 10px #5e5e5e;
  border-radius: 10px;
  border: 1px solid rgba(94, 94, 94, 0.35);

}
</style>

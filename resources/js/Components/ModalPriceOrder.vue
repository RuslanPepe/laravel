<template>
  <div class="modalPriceOrder">
    <input-price-order v-model="priceMin" @priceCorrect="priceCorrect" placeholder="От"/>
    <span>-</span>
    <input-price-order v-model="priceMax" @priceCorrect="priceCorrect" placeholder="До"/>
<!--    <button class="btnSubmitOrderPrice" type="button" @click="">Применить</button>-->
  </div>
</template>

<script>
import InputPriceOrder from "@/Components/inputPriceOrder.vue";

export default {
  name: "ModalPriceOrder",
  components: {InputPriceOrder},
  data() {
    return {
      priceMin: '',
      priceMax: '',
    }
  },
  methods: {
    priceCorrect(value){
      this.$emit('priceCorrect', this.priceMin, this.priceMax)
    }
  },
}
</script>

<style scoped>
.priceOrderInput::-webkit-inner-spin-button, .priceOrderInput[type="number"]::-webkit-outer-spin-button {-webkit-appearance: none; margin: 0;}
.priceOrderInput{
  border: 1px rgba(0, 0, 0, 0.3) solid;
  border-radius: 5px;
  font-size: 13px;
  font-weight: 600;
  width: 110px;
  margin: 5px 10px;
  padding: 5px 10px;
}
.btnSubmitOrderPrice{
  background: #1eaaff;
  border: 1px white solid;
  padding: 5px 10px;
  border-radius: 5px;
  color: white;
  font-size: 16px;
  font-weight: 600;
  justify-self: center;
  display: flex;
  margin: 10px 0 0 0;
}
.modalPriceOrder{
  position: absolute;
  background: white;
  width: 300px;
  height: 135px;
  margin: 5px 0 0 0;
  padding: 20px 15px;
  box-shadow: 0 0 10px #5e5e5e;
  border-radius: 10px;
  border: 1px solid rgba(94, 94, 94, 0.35);

}
</style>

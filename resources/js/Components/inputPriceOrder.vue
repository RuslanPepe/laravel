<template>
  <input class="priceOrderInput" ref="inputRef" type="text" :placeholder="placeholder"/>
</template>

<script>
import Cleave from 'cleave.js'
export default {
  name: 'NumberInput',
  props: {
    modelValue: String,
    placeholder: String,
    type: undefined,
    price: ''
  },
  emits: ['update:modelValue', 'priceCorrect'],
  data() {
    return {
      cleave: null,
    }
  },
  mounted() {
    this.cleave = new Cleave(this.$refs.inputRef, {
      numeral: true,
      numeralThousandsGroupStyle: 'thousand',
      delimiter: ' ',
      onValueChanged: (e) => {
        this.$emit('update:modelValue', e.target.rawValue)
        this.$emit('priceCorrect')
      }
    })

    if (this.modelValue) {
      this.cleave.setRawValue(this.modelValue)
    }

  },
  watch: {
    modelValue(newVal) {
      if (this.cleave && this.cleave.getRawValue() !== newVal) {
        this.cleave.setRawValue(newVal)
      }
    }
  }
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
</style>

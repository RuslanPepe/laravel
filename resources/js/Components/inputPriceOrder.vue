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

</style>

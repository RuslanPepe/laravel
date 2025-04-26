<template>
  <div class="blockFilter">
    <form method="post" id="formFilterRequest">
      <div class="blockTypeOrder">
        <p class="typeOrder">Тип недвижимости:</p>
        <modal-type-order style-modal-type="box-shadow: none; border: none;" style="margin: 0 0 0 20px; position: relative; " />
      </div>
      <div class="blockCountRoom">
        <p class="countRoom">Кол-во комнат:</p>
        <modal-count-rooms @checkedCountRoom="checkedCountRoom()" style-count-rooms="box-shadow: none; border:none; left: 0px;position: relative" />
      </div>
      <div class="blockPriceOrder">
        <p class="priceOrder">Цена:</p>
        <modal-price-order stylePriceOrder="position: relative; box-shadow: none; border: none; height: 140px;display: grid; width: 380px" :view-dash="false" style-input-order="width: 320px; font-size: 18px; position: relative; justify-content: center"/>
      </div>
      <div class="blockBtnFilter">
        <button class="btnSubmitFilter" @click="formRequest" type="button">Применить</button>
      </div>
    </form>
  </div>
</template>

<script>
import ModalTypeOrder from "@/Components/ModalTypeOrder.vue";
import ModalCountRooms from "@/Components/ModalCountRooms.vue";
import ModalPriceOrder from "@/Components/ModalPriceOrder.vue";

export default {
  name: "blockFilter",
  components: {ModalPriceOrder, ModalCountRooms, ModalTypeOrder},
  data(){
    return {
      countRoomsAll: [],
    }
  },
  mounted() {
    this.changeCountRoom()
    this.changeTypeOrder()
    this.changeInputPrice()
  },
  methods: {
    strFormate(str) {
      return str
        .split('')
        .reverse()
        .join('')
        .replace(/(.{3})/g, '$1 ')
        .split('')
        .reverse()
        .join('')
        .trim();
    },
    changeInputPrice(){
      let param = new URLSearchParams(window.location.search)
      let price = param.get('price').split(',')
      document.querySelectorAll('input[name="inputPriceMin"]')[0].value = this.strFormate(price[0].toString())
      document.querySelectorAll('input[name="inputPriceMax"]')[0].value = this.strFormate(price[1].toString())
    },
    changeTypeOrder(){
      let param = new URLSearchParams(window.location.search)
      let typeOrder = param.get('typeOrder').split(',')
      let inputTypeOrder = document.querySelectorAll('input[name="typeOrder[]"]')
      for (let i = 0; i < inputTypeOrder.length; i++) {
        for (let j = 0; j < typeOrder.length; j++) {
          if (inputTypeOrder[i].value === typeOrder[j]){
            inputTypeOrder[i].checked = true
          }
        }
      }
    },
    changeCountRoom(){
      let param = new URLSearchParams(window.location.search)
      let countRoom = param.get('countRooms').split(',')
      let inputCountRoom = document.querySelectorAll('input[name="countRoom[]"]')
      for (let i = 0; i < inputCountRoom.length; i++) {
        for (let z = 0; z < countRoom.length; z++) {
          if (inputCountRoom[i].id === countRoom[z] ){
            inputCountRoom[i].checked = true
            // console.log(inputCountRoom[i].checked)
          }
        }
      }
      let checkdeInput = document.querySelectorAll('input[name="countRoom[]"]:checked')
      let allEl = document.getElementsByClassName('CheckboxInputCountRoom')
      for (let z = 0; z < allEl.length; z++) {
        allEl[z].style.background = '#ffffff'
        allEl[z].children[0].style.color = '#000000'
        allEl[z].style.border = '1px rgba(0, 0, 0, 0.4) solid'
      }
      for (let i = 0; i < checkdeInput.length; i++) {
        document.getElementById(checkdeInput[i].id+'-l').style.background = '#0075ff'
        document.getElementById(checkdeInput[i].id+'-l').children[0].style.color = '#ffffff'
        document.getElementById(checkdeInput[i].id+'-l').style.border = '1px #ffffff solid'
      }
    },
    formRequest(){
      let formFilter = new FormData(document.getElementById('formFilterRequest'))
      formFilter.set('countRoom', this.countRoomsAll)
      document.body.style.overflow = 'hidden'
      this.$emit('hiddenLoadContents', true)
      axios.post('/filterRequest', formFilter)
        .then(response => {
          console.log(response)
          document.body.style.overflow = ''
          this.$emit('changeOrderList', response.data)
          this.$emit('hiddenLoadContents', false)
        })
    },
    checkedCountRoom(){
      this.countRoomsAll = Array.from(document.querySelectorAll('input[name="countRoom[]"]:checked')).map(to => to.id)
    },
  }
}
</script>

<style scoped>
.btnSubmitFilter{
  width: 180px;
  font-weight: 600;
  font-size: 24px;
  border-radius: 5px;
  margin: 20px 0 0 0;
  background: rgb(0, 117, 255, .8);
  border: 1px solid rgba(0, 0, 0, .03);
  color: white;
  box-shadow: 0 0 10px 3px rgba(0, 0, 0, .06);
  padding: 5px 10px;
}
.blockBtnFilter{
  display: flex;
  justify-content: center;
}
.priceOrder{
  margin: 20px 0 0 30px;
  font-size: 18px;
  font-weight: 600;
}
.blockFilter{
  width: 390px;
  height: 1000px;
  border-radius: 0 15px 15px 0;
  box-shadow: 0 0 20px 1px rgba(0, 0, 0, .06);
}
.typeOrder{
  margin: 20px 0 0 30px;
  font-size: 18px;
  font-weight: 600;
}
.countRoom{
  margin: 30px 0 0 30px;
  font-size: 18px;
  font-weight: 600;
}
</style>

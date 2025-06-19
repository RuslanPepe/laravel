<template>
  <Header/>
<!--  {{ this.data[0] }}-->
  <div class="contentBlockLoadOrder" v-if="hiddenLoadContent">
    <div class="spinner-border text-primary spinnerLoad" role="status"></div>
  </div>
  <div class="blockAllContent">
    <block-filter @hiddenLoadContents="hiddenLoadContents" @changeOrderList="changeDataOrder" />
    <div class="contentBlock">
      <div class="blockOrderView">
        <p class="emptyDataOrderDate" v-if="emptyDataContent">По вашему запросу ничего не найдено</p>
        <view-order-filter v-for="(item, i) in dataOrder" :data="this.dataOrder[i]"/>
      </div>
    </div>
  </div>
</template>

<script>
import Header from "@/Components/Header.vue";
import ViewOrderFilter from "@/Components/viewOrderFilter.vue";
import BlockFilter from "@/Components/blockFilter.vue";

export default {
  name: "Filter",
  components: {BlockFilter, ViewOrderFilter, Header},
  props: {
    data: undefined,
  },
  data() {
    return {
      imageArray: [],
      dataOrder: this.data,
      hiddenLoadContent: false,
      emptyDataContent: false
    }
  },
  mounted() {
    // this.emptyData()
  },
  methods: {
    changeDataOrder(data){
      this.dataOrder = data
      this.emptyData()
    },
    hiddenLoadContents(boolean){
      this.hiddenLoadContent = boolean
    },
    emptyData(){
      this.emptyDataContent = this.dataOrder[0] ? false : true
    },
  }
}
</script>

<style scoped>
.emptyDataOrderDate{
  display: flex;
  justify-content: center;
}
.spinnerLoad{
  position: fixed;
  margin: 520px 0 0 0;
}
.contentBlockLoadOrder{
  position: fixed;
  background: rgba(255, 255, 255, .6);
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  margin: -120px 0 0 0;
  z-index: 10;
}
.contentBlock{
  display: flex;
  justify-content: center;
  flex-grow: 1;
}
.blockOrderView{
  width: 1280px;
}
.blockAllContent{
  display: flex;
  margin: 50px 0 0 0;
}
</style>

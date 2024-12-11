<template>
  <div class="searchMn">
    <p class="textOrderTypeAdress">Введите адрес</p>
    <div class="groupInputData">
      <input class="inputData" v-model="query" @input="searchAdress" placeholder="Введите место">
    </div>
    <ul class="listData">
      <button class="btnData" type="submit" v-for="(suggestion, i) in suggestions">{{ suggestions[i].title.text }}</button>
    </ul>
  </div>
</template>

<script>

import axios from "axios";

export default {
  name: "SearchMap",

  data() {
    return{
      query: '',
      suggestions: [],
    }
  },
  methods: {
    async searchAdress() {
      console.log(this.query)
      if (this.query.length > 3) {
        try {
          const response = (await axios.get(`/searchMap?text=` + this.query));
          this.suggestions = response.data.results
          console.log(this.suggestions)
        } catch (error) {
          console.error(error);
        }
      }
    },
  }
};
</script>

<style>
.searchMn{
  margin: 20px 0 0 50px;
  display: inline-block;
}
.btnData{
  display: block;
  margin: 10px 0 0 0;
  border: 1px solid black;
  border-radius: 5px;
  min-width: 240px;
  text-align: left;
  font-size: 20px;
  font-weight: 500;
  background: white;
  padding: 10px 15px;
}
.listData{
  padding: 10px 0 0 0;
}
.inputData{
  width: 720px;
  margin: 10px 0 0 0;
  border: none;
}
.groupInputData{
  display: inline-block;
  padding: 5px 5px 15px 15px;
  background: #ffffff;
  border: black solid 1px;
  border-radius: 5px;
}
.textOrderTypeAdress{
  display: block;
  margin: 20px 0 5px 0;
  font-size: 20px;
  font-weight: 500;
}
</style>

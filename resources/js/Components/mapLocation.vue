<template>
  <div class="mapMn">
    <input class="inputData" v-model="query" @input="searchAdress" placeholder="Введите место">
    <ul class="listData">
      <button class="btnData" type="submit" v-for="(suggestion, i) in suggestions">{{ suggestions[i].title.text }}</button>
    </ul>
  </div>
</template>

<script>

import axios from "axios";

export default {
  name: "mapLocation",
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
          const response = (await axios.get(`/suggest?text=` + this.query));
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
#map {
  width: 100%;
  height: 400px;
}
.mapMn{
  margin: 70px 0 0 50px;
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
  width: 240px;
}
</style>

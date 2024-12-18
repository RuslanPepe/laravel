<template>
  <div class="searchMn">
    <p class="textOrderTypeAdress">Введите адрес</p>
    <div class="groupInputData">
      <input class="inputData" v-model="query" @input="searchAdress" placeholder="Введите адрес" id="inputAdress">
    </div>
    <ul class="listData">
      <div v-for="(suggestion, i) in suggestions">
        <button class="btnData" @click="requestGeoMap(suggestions[i].subtitle.text+' '+suggestions[i].title.text)" id="btnMap" type="button">
          <hr class="hrGroup" v-if="i>=1" id="">
          <span class="titleGroup">{{ suggestions[i].title.text }}</span>
          <span class="distanceGroup">{{ suggestions[i].distance.text }}</span>
          <span class="subTitleGroup" v-if="suggestions[i].subtitle">{{ suggestions[i].subtitle.text }}</span>
        </button>
      </div>
    </ul>
  </div>
  <div class="mnMap">
    <div id="map"></div>
  </div>
</template>

<script>

import {YandexMapOpenMapsButton} from "vue-yandex-maps";

let listData
let inputAdress
let maps;
let marker;


export default {
  name: "SearchMap",


  data() {
    return{
      query: '',
      suggestions: [],
      adress: [],
      coordinates: [],
    }
  },
  mounted() {
    inputAdress = document.getElementById('inputAdress')
    listData = document.getElementById('mapGroup')
    document.createElement('script').src = '/suggest'
    const {YMap, YMapDefaultSchemeLayer, YMapDefaultFeaturesLayer, YMapMarker, YMapControls} = ymaps3

    maps = new YMap(
      document.getElementById('map'), {
        location: {
          center: [37.564581, 55.770552],
          zoom: 17,
        },
      },
    );

    maps.addChild(new YMapDefaultSchemeLayer())
    maps.addChild(new YMapDefaultFeaturesLayer())
    const content = document.createElement('section');
    content.className = 'marker-class'
    content.innerHTML = '<img src="/image/marker.png" alt="" width="64">'

    marker = new YMapMarker({
      coordinates: [37.564581, 55.770552],
      draggable: true,
      mapFollowsOnDrag: true,
      onDragEnd: this.getAdress,
    },
    content
    );
    maps.addChild(marker)



  },
  methods: {
    async getAdress() {
      let adress = await axios.get('/requestGeoMap/?text='+marker.coordinates)
      adress.data.response.GeoObjectCollection.featureMember[0].GeoObject.description.split(',')
      // adress.data.response.GeoObjectCollection.featureMember[0].GeoObject.description = adress.data.response.GeoObjectCollection.featureMember[0].GeoObject.description[1]+adress.data.response.GeoObjectCollection.featureMember[0].GeoObject.description[0]
      inputAdress.value = adress.data.response.GeoObjectCollection.featureMember[0].GeoObject.description+', '+adress.data.response.GeoObjectCollection.featureMember[0].GeoObject.name
    },
    async searchAdress() {
      try {
        const response = (await axios.get(`/searchMap?text=` + this.query));
        this.suggestions = response.data.results
        if (this.suggestions){
          for (let i = 0; i < this.suggestions.length; i++) {
            if (!this.suggestions[i].subtitle){
              this.suggestions[i].subtitle = this.suggestions[i].title
            }
          }
        }
      } catch (error) {
        console.error(error);
      }
    },
    async requestGeoMap(adress) {
      this.suggestions = []
      const response = (await axios.get('/requestGeoMap/?text=' + adress));
      let cord = response.data.response.GeoObjectCollection.featureMember[0].GeoObject.Point.pos.split(' ')
      inputAdress.value = response.data.response.GeoObjectCollection.metaDataProperty.GeocoderResponseMetaData.request
      maps.update({location: {center: cord, duration: 1000, EasingFunctionDescription: 'ease-in-out', zoom: 19,}})
      marker.update({coordinates: cord, duration: 1000, EasingFunctionDescription: 'ease-in-out',})
      this.coordinates = cord;
    }
  }
};
</script>

<style>
.marker-class{
  margin: -64px -32px -32px -32px;
}
.titleGroup{
  padding: 0 15px 0 0;
}
.subTitleGroup{
  font-weight: 500;
  opacity: 80%;
  display: block;
}
.distanceGroup{
  font-weight: 500;
  opacity: 80%;
}

.hrGroup{
  margin: 0 0 16px 0;
}
.searchMn{
  margin: 20px 0 0 50px;
  display: inline-block;
}
.btnData{
  display: block;
  //margin: 10px 0 0 0;
  border: none;
  border-radius: 5px;
  min-width: 742px;
  text-align: left;
  font-size: 20px;
  font-weight: 500;
  background: white;
  padding: 10px 15px;
}
.listData{
  margin: 16px 0 0 0;
  padding: 0 0 0 0;
}
.inputData{
  width: 720px;
  margin: 10px 0 0 0;
  border: none;
  font-size: 18px;
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
.mnMap{
  width: 100%;
}
#map{
  margin: 150px auto 30px;
  width: 840px;
  height: 540px;
}
#map > ymaps {
  border-radius: 15px;
  overflow: hidden;
}
</style>

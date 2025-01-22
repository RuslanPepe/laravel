<template>
  <div class="searchMn">
    <p class="textOrderTypeAdress">Введите адрес</p>
    <div class="groupInputData">
      <input class="inputData" v-model="query" v-on:input="searchAdress" name="adressOrder" placeholder="Введите адрес" id="inputAdress">
    </div>
    <div class="groupMapsUL">
      <div class="mnMap">
        <div id="map"></div>
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
  </div>
</template>

<script>

let listData
let inputAdress
let maps = ymaps3;
let marker;


export default {
  name: "SearchMap",
  emits: ['data'],

  data() {
    return{
      query: '',
      suggestions: [],
      coordinates: [],
      qr: '',
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
      this.query = adress.data.response.GeoObjectCollection.featureMember[0].GeoObject.description+', '+adress.data.response.GeoObjectCollection.featureMember[0].GeoObject.name
      this.$emit('data', 'adressOrder', this.query)
    },
    async searchAdress() {
      this.$emit('data', inputAdress.value, 'adressOrder')
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
  },
};
</script>

<style>
.groupMapsUL{
  display: flex;
}
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
  margin: 0 0 35px 0;
}
.textOrderTypeAdress{
  display: block;
  margin: 20px 0 5px 0;
  font-size: 20px;
  font-weight: 500;
}
.mnMap{
  //width: 100%;
  width: 960px;
  height: 630px;
  margin: 0 70px 100px 0;
}
#map{
  margin: 30px 70px 0 0;
  width: 960px;
  height: 630px;
  display: flex;
  justify-content: end;
}
#map > ymaps {
  border-radius: 15px;
  overflow: hidden;
}
</style>

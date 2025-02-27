<template>
  <div class="reviewsBlock">
    <img class="avatarIconReviews" id="avatarReviews" src="/image/userIcon.png" alt="">
    <p class="nameAuthorReview">{{ this.name }}</p>
    <div class="starsGroup">
      <img class="stars" src="/image/star.png" v-for="i in this.stars" :id="i" alt="">
      <img class="stars" src="/image/starDisable.png" v-for="f in 5 - this.stars" :id="f" alt="">
<!--      <p class="starsValue">{{this.stars}}/5</p>-->
    </div>
    <div class="commentGroup">
      <p class="comment">{{ this.comment }}</p>
    </div>
    <hr>
  </div>
</template>

<script>
export default {
  name: "reviews",
  props: {
    name: null,
    stars: null,
    comment: '',
  },
  data(){
    return {

    }
  },
  mounted() {

  },
  methods: {

  },
}
</script>

<style>
.comment{
  font-size: 20px;
}
.commentGroup{
  margin: -15px 0 0 95px;
}
.starsValue{
  margin: 0 0 0 10px;
  font-size: 18px;
  font-weight: 500;
}
.stars{
  width: 24px;
  margin: -8px 0 0 0;
}
.starsGroup{
  display: inline-block;
}
.avatarIconReviews{
  height: 64px;
  margin: 10px 0 0 10px;
}
.nameAuthorReview{
  margin: 0 10px 0 20px;
  font-size: 20px;
}
</style>
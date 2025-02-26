<template>
  <Header/>
  <div class="container-fluid">
    <p class="titleLK">Личный кабинет</p>
    <div class="row">
      <div class="avatarLK col-4">
        <div class="avatar">
          <div class="userNameBlock">
            <p class="userName">{{ this.name }}</p>
          </div>
          <label for="avatarUpload">
            <input class="avatarUpload" @change="uploadAvatar($event.target)" type="file" name="avatar" id="avatarUpload">
            <img class="avatarIcon" id="avatar" src="/image/iconUser.png" alt="">
          </label>
          <div class="statusUser">
            <p class="statusUserTitle">Статус: {{ this.status }}</p>
          </div>
        </div>
      </div>
      <div class="col-7">
        <div class="inputBLock">
          <input-profile title="E-mail" name="email" :placeholder="'Введите свой email'"/>
          <input-profile title="Номер телефона" name="numberPhone" :placeholder="'Введите свой телефон'"/>
          <input-profile title="Соцсети" name="socialNetworks" :placeholder="'Введите свои соцсети'"/>
          <input-profile title="Мессенджеры" name="messangers" :placeholder="'Введите свои мессенджеры'"/>
          <textarea-profile title="Описание" name="description" :placeholder="'Краткое описание. \nПример: Ищу трешку в Москве, до ТТК, желательно в юго-западном районе. \nПример: Риелтор помогу продать вашу квартиру.'" input-style="width: 884px; height:240px; "/>
          <textarea-profile title="Дополнительная информация" name="options" :placeholder="'Краткое описание. \nПример: 5 лет работаю риелтором, высешее образование,\nПример: Бюджет: 40.000.000.р, Можно с детьми и домашними животными'" input-style="width: 884px; height:240px; "/>
          <button class="changeProfile" type="button">Изменить профиль</button>
        </div>
        <div class="myOrder">
          <p class="titleMyOrder">Мои объявления</p>
          <div class="myOrderGroup">
            <p class="myOrderEmpty">У вас нет объявлений</p>
          </div>
        </div>
      </div>
      <div class="reviewsGroup">
        <p class="reviewsTitle">Отзывы</p>
        <reviews :name="'Ruslan'" :stars="4" :comment="'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet blanditiis dolorem eaque in ipsam officiis quasi repudiandae sequi veritatis? Alias, aliquid at commodi consequuntur dolorum eaque et eum incidunt necessitatibus nobis non, omnis placeat provident quia quis sit tenetur. Accusantium aperiam at nesciunt odit provident quasi ratione totam unde vel. Accusantium ad aliquid, amet consectetur dolorum eligendi enim eos error facere harum in ipsam ipsum maiores minima nemo non nostrum perferendis possimus quas qui quisquam quo quod ratione rem repudiandae tempora vel voluptatum! Aperiam deserunt dolor dolorem doloremque eaque ex impedit laboriosam minima molestiae, mollitia nesciunt nobis repellat soluta totam.'"/>
        <reviews :name="'Andrey'" :stars="5" :comment="'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet blanditiis dolorem eaque in ipsam officiis quasi repudiandae sequi veritatis? Alias, aliquid at commodi consequuntur dolorum eaque et eum incidunt necessitatibus nobis non, omnis placeat provident quia quis sit tenetur. Accusantium aperiam at nesciunt odit provident quasi ratione totam unde vel. Accusantium ad aliquid, amet consectetur dolorum eligendi enim eos error facere harum in ipsam ipsum maiores minima nemo non nostrum perferendis possimus quas qui quisquam quo quod ratione rem repudiandae tempora vel voluptatum! Aperiam deserunt dolor dolorem doloremque eaque ex impedit laboriosam minima molestiae, mollitia nesciunt nobis repellat soluta totam.'"/>
        <reviews :name="'Katy'" :stars="4" :comment="'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet blanditiis dolorem eaque in ipsam officiis quasi repudiandae sequi veritatis? Alias, aliquid at commodi consequuntur dolorum eaque et eum incidunt necessitatibus nobis non, omnis placeat provident quia quis sit tenetur. Accusantium aperiam at nesciunt odit provident quasi ratione totam unde vel. Accusantium ad aliquid, amet consectetur dolorum eligendi enim eos error facere harum in ipsam ipsum maiores minima nemo non nostrum perferendis possimus quas qui quisquam quo quod ratione rem repudiandae tempora vel voluptatum! Aperiam deserunt dolor dolorem doloremque eaque ex impedit laboriosam minima molestiae, mollitia nesciunt nobis repellat soluta totam.'"/>
      </div>
    </div>
  </div>
</template>

<script>
import Header from "../Components/Header.vue";
import InputProfile from "@/Components/inputProfile.vue";
import TextareaProfile from "@/Components/textareaProfile.vue";
import Reviews from "@/Components/reviews.vue";

export default {
  name: "Profile",
  components: {Reviews, TextareaProfile, InputProfile, Header},
  data() {
    return {
      data: null,
      name: 'Ruslan',
      status: 'Пользователь',
    }
  },
  mounted() {

  },
  methods: {
    uploadAvatar(file){
      document.getElementById('avatar').src = URL.createObjectURL(file.files[0])
    },
  },

}
</script>

<style>
.reviewsGroup{
  padding: 10px 60px 60px 60px;
}
.reviewsTitle{
  font-size: 36px;
  font-weight: 500;
  margin: 0 0 16px 0;
}
.myOrderGroup{
  display: flex;
  justify-content: center;
  align-items: center;
  height: 480px;
}
.myOrderEmpty{
  font-size: 16px;
  opacity: 60%;
}
.titleMyOrder{
  font-size: 36px;
  font-weight: 500;
}
.myOrder{
  margin: 0 0 50px 0;
}
.statusUserTitle{
  font-size: 24px;
  font-weight: 600;
  color: black;
}
.statusUser{
  justify-content: center;
  display: flex;
  margin: 25px 0 0 0;
}
.changeProfile{
  background: rgb(99, 169, 255);
  padding: 10px 15px;
  font-size: 20px;
  font-weight: 500;
  border: none;
  color: white;
  margin: 70px 0 0 664px ;
  border-radius: 5px;
}
.inputBLock{
  margin: 0 0 40px 0;
}
.userNameBlock{
  display: flex;
  justify-self: center;
}
.userName{
 display: block;
  margin: 0 0 20px 0;
  font-size: 32px;
  font-weight: 600;
}
.titleLK{
  font-size: 48px;
  font-weight: 600;
  color: #3f3f3f;
  margin: 24px 0 0 50px;
  display: block;
}
.avatar{
  opacity: 70%;
  margin: 30px 0 0 57px;
  display: inline-block;
  cursor: default;

}
.avatarUpload{
  display: none;
}
.avatarIcon{
  width: 384px;
  height: 384px;
  cursor: pointer;
  border-radius: 384px;
}
</style>
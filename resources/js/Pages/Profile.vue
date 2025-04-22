<template>
  <Header/>
  <div class="container-fluid">
    <p class="titleLK">Личный кабинет</p>
    <div class="row">
      <div class="avatarLK col-4">
        <div class="avatar">
          <div class="userNameBlock">
            <p class="userName">{{ this.login }}</p>
          </div>
          <label for="avatarUpload">
            <input class="avatarUpload" v-if="!this.disabled" @change="uploadAvatar($event.target)" type="file" name="avatar" id="avatarUpload">
            <img class="avatarIcon" id="avatar" :src="this.avatar" alt="">
          </label>
          <div class="statusUser">
            <p class="statusUserTitle">Статус: {{ this.status }}</p>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="inputBLock">
          <p class="CodeEmailNotif" v-if="emailCodeStatus === 'wait'">| Вам на почту отправлен код.</p>
          <p class="CodeEmailNotif" v-if="emailCodeStatus === 'complite'">| Почта успешно подтверждена.</p>
          <p class="CodeEmailNotif" v-if="emailCodeStatus === 'warning'" style="color: darkred">| Код введен неверно.</p>
          <p class="CodeEmailNotif" v-if="emailCodeStatus === 'error'" style="color: darkred">| Почта введена неверно.</p>
          <input-profile-add @data="emailCodeActivate" @dataSave="emailSet" :value="email" marker="/image/iconMarker.png" title="E-mail" name="email" :placeholder="'Введите свой email'"/>
          <input-profile @data="uploadDataProfile" :value="telephone" :type="'tel'" title="Номер телефона" name="telephone" :placeholder="'Введите свой телефон'"/>
          <input-in-code-email @data="emailSendCode" v-if="emailViewinputCode" :placeholder="'Введите ваш код с почты'"/>
          <input-profile-add @data="saveDataSocialNetworks" title="Соцсети" name="socialNetworks" :placeholder="'Введите свои соцсети'"/>
          <input-profile-add @data="saveDataMessangers" title="Мессенджеры" name="messangers" :placeholder="'Введите свои мессенджеры'"/>
          <div class="row">
            <div class="col-5">
              <view-option @data="deleteItemSoc" :value="socialNetwork[i]" v-for="(value, i) in socialNetwork" :idItem="i" :input-style="'margin: 0 0 20px 0'"/>
            </div>
            <div class="col-6">
              <view-option @data="deleteItemMes" :value="messangers[i]" v-for="(value, i) in messangers" :idItem="i" :input-style="'margin: 0 0 20px 50px'"/>
            </div>
          </div>
          <textarea-profile @data="uploadDataProfile" :value="description" title="Описание" name="description" :placeholder="'Краткое описание. \nПример: Ищу трешку в Москве, до ТТК, желательно в юго-западном районе. \nПример: Риелтор помогу продать вашу квартиру.'" input-style="width: 884px; height:240px; "/>
          <textarea-profile @data="uploadDataProfile" :value="options" title="Дополнительная информация" name="options" :placeholder="'Доп. информация. \nПример: Бюджет: 40.000.000.р, Можно с детьми и домашними животными\nПример: 5 лет работаю риелтором, высешее образование,'" input-style="width: 884px; height:240px; "/>
          <button class="changeProfile" type="button" v-if="disabled" @click="changeProfileOn()">Изменить профиль</button>
          <button class="changeProfile" type="button" v-if="!disabled" @click="changeProfileSave()">Сохранить изменения</button>
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
        <p class="myReviewsEmpty" v-if="!this.reviews">У вас нет отзывов</p>
<!--                <reviews :name="'Ruslan'" :stars="4" :comment="'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet blanditiis dolorem eaque in ipsam officiis quasi repudiandae sequi veritatis? Alias, aliquid at commodi consequuntur dolorum eaque et eum incidunt necessitatibus nobis non, omnis placeat provident quia quis sit tenetur. Accusantium aperiam at nesciunt odit provident quasi ratione totam unde vel. Accusantium ad aliquid, amet consectetur dolorum eligendi enim eos error facere harum in ipsam ipsum maiores minima nemo non nostrum perferendis possimus quas qui quisquam quo quod ratione rem repudiandae tempora vel voluptatum! Aperiam deserunt dolor dolorem doloremque eaque ex impedit laboriosam minima molestiae, mollitia nesciunt nobis repellat soluta totam.'"/>-->
<!--        <reviews :name="" :stars="" :comment=""/>-->
     </div>
    </div>
  </div>
</template>

<script>
import Header from "../Components/Header.vue";
import InputProfile from "@/Components/inputProfile.vue";
import TextareaProfile from "@/Components/textareaProfile.vue";
import Reviews from "@/Components/reviews.vue";
import ViewOption from "@/Components/viewOption.vue";
import InputProfileAdd from "@/Components/inputProfileAdd.vue";
import InputInCodeEmail from "@/Components/inputInCodeEmail.vue";
import axios from "axios";

export default {
  name: "Profile",
  components: {InputInCodeEmail, InputProfileAdd, ViewOption, Reviews, TextareaProfile, InputProfile, Header},
  props: {
    data: null,
  },
  data() {
    return {
      login: this.data.login,
      email: this.data.email,
      telephone: this.data.telephone,
      socialNetwork: [],
      messangers: [],
      description: this.data.description,
      options: this.data.options,
      status: this.data.status,
      disabled: true,
      reviews: false,
      requestData: {},
      emailViewinputCode: false,
      emailCodeStatus: '',
      forName: ['email', 'telephone', 'description', 'options'],
      forValue: [this.data.email, this.data.telephone, this.data.description, this.data.options],
      metadataAvatar: '',
      avatarPath: '',
      avatar: '',
    }
  },
  mounted(){
    if (this.data.socialNetwork){
      this.socialNetwork = [JSON.parse(this.data.socialNetwork)][0]
    }
    if (this.data.messangers){
      this.messangers = [JSON.parse(this.data.messangers)][0]
    }
    this.changeVisible()

    for (let i = 0; i < this.forName.length; i++) {
      this.requestData[this.forName[i]] = this.forValue[i]
    }
    this.avatar = this.data.avatar
  },
  methods: {
    emailSet(value){
      this.email = value
    },
    emailCodeActivate(){
      if (!this.disabled){
        this.emailCodeStatus = 'wait'
        this.emailViewinputCode = true
        axios.post('/authEmailSave', {email: this.email} )
          .then(response => {
            console.log(response)
          })
          .catch(response => {
            this.emailCodeStatus = 'error'
          })
      }
    },
    emailSendCode(value){
      if (!this.disabled){
        axios.post('/authCheckEmailCode', {code: parseInt(value)})
          .then(response => {
            this.emailCodeStatus = 'complite'
            this.emailViewinputCode = false
            this.requestData['email'] = this.email
          })
          .catch(response => {
            this.emailCodeStatus = 'warning'
          })
      }
    },
    deleteItemSoc(id) {
      if (!this.disabled){
        this.socialNetwork.splice(id, 1)
      }
    },
    saveDataSocialNetworks(value, element){
      if (value && this.socialNetwork.length < 3 && !this.disabled){
        this.socialNetwork[this.socialNetwork.length] = value
        element.value = ''
      }
    },
    deleteItemMes(id) {
      if (!this.disabled){
        this.messangers.splice(id, 1)
      }
    },

    saveDataMessangers(value, element){
      if (value && this.messangers.length < 3 && !this.disabled){
        this.messangers[this.messangers.length] = value
        element.value = ''
      }
    },
    uploadDataProfile(name, value){
      this.requestData[name] = value
    },
    uploadAvatar(filesImg){
      const formData = new FormData
      let files = [new File(filesImg.files,  crypto.randomUUID()+'.'+filesImg.files[0].type.replace('image/', ''), {type: filesImg.files[0].type})]
      document.getElementById('avatar').src = URL.createObjectURL(files[0])
      formData.append('metadata[]', files[0])
      this.avatarPath = '/metadataUpload/'+files[0].name
      this.metadataAvatar = formData
    },
    changeVisible(){
      document.getElementsByClassName('avatarIcon')[0].style.cursor = 'pointer'
      let blockDisabledInput = document.getElementsByClassName('inputProfile')
      let blockDisabledInput1 = document.getElementsByClassName('inputProfile7')
      let blockDisabledTextarea = document.getElementsByClassName('textareaProfile')
      let btn = document.getElementsByClassName('addInput3')
      let btn1 = document.getElementsByClassName('addInput7')
      if (this.disabled){
        for (let i = 0; i < blockDisabledInput.length; i++) {
          blockDisabledInput[i].disabled = true
        }
        for (let i = 0; i < blockDisabledInput1.length; i++) {
          blockDisabledInput1[i].disabled = true
        }
        for (let i = 0; i < blockDisabledTextarea.length; i++) {
          blockDisabledTextarea[i].disabled = true
        }
        for (let i = 0; i < btn.length; i++) {
          btn[i].style.cursor = 'default'
        }
        for (let i = 0; i < btn1.length; i++) {
          btn1[i].style.cursor = 'default'
        }
        document.getElementsByClassName('avatarIcon')[0].style.cursor = 'default'
      }
      else {
        for (let i = 0; i < blockDisabledInput.length; i++) {
          blockDisabledInput[i].disabled = false
        }
        for (let i = 0; i < blockDisabledInput1.length; i++) {
          blockDisabledInput1[i].disabled = false
        }
        for (let i = 0; i < blockDisabledTextarea.length; i++) {
          blockDisabledTextarea[i].disabled = false
        }
        for (let i = 0; i < btn.length; i++) {
          btn[i].style.cursor = 'pointer'
        }
        for (let i = 0; i < btn1.length; i++) {
          btn1[i].style.cursor = 'pointer'
        }
        document.getElementsByClassName('avatarIcon')[0].style.cursor = 'pointer'
      }
    },
    changeProfileOn(){
      this.disabled = false
      this.changeVisible()
    },
    changeProfileSave(){
      this.disabled = true
      this.changeVisible()
      axios.post('/authProfileSave', [this.requestData, this.messangers, this.socialNetwork, this.avatarPath])
      axios.post('/uploadMetaData', this.metadataAvatar, {headers: {'Content-Type': 'multipart/form-data'}})
    }
  },
}
</script>

<style>
.CodeEmailNotif{
  position: absolute;
  margin: 3px 0 0 70px;
  font-weight: 500;
  color: royalblue;
  opacity: 70%;
}
.myReviewsEmpty{
  justify-self: center;
  font-size: 16px;
  opacity: 60%;
}
.reviewsGroup{
  padding: 10px 60px 60px 60px;
  display: grid;
  height: 360px;
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
  border-radius: 384px;
}
</style>

<template>
  <form id="formAuth">
    <div class="authMenuBackground" v-if="this.authView === true">
      <div class="authMenu">
        <button class="closeAuthMenu" type="button" @click="this.authView = false"><img src="/image/closeIcon.png" alt=""></button>
        <div class="iconOnAuth">
          <img class="imgIconAuth" src="/image/logo128.png" alt="">
        </div>
        <!--      RegAuth-->
        <div class="changeTypeAuthReg" v-if="this.authType === 'reg' && this.authView === true"><button class="btnChangeTypeAuth" type="button" v-on:click="this.authType = 'login'"><p style="margin: 0">Войти</p></button></div>
        <div class="lableAuth" v-if="this.authType === 'reg' && this.authView === true">Регистрация</div>
        <div class="authMenuBtn" v-if="this.authType === 'reg' && this.authView === true">
          <div class="inputAuthBlock">
            <label class="inputLable" for="login">Логин</label>
            <input class="inputAuth" @input="readRequest($event.target.name, $event.target.value)" type="text" name="login" id="login">
          </div>
          <div class="inputAuthBlock authMenuBtnPass1">
            <label class="inputLable" for="pass1">Введите пароль</label>
            <input class="inputAuth" @input="readRequest($event.target.name, $event.target.value)" type="password" name="password" id="password1">
          </div>
          <div class="inputAuthBlock authMenuBtnPass2">
            <label class="inputLable" for="pass2">Введите пароль еще раз</label>
            <input class="inputAuth" @input="readRequest($event.target.name, $event.target.value)" type="password" name="password2" id="password2">
          </div>
          <div class="warningAuthReg" v-if="this.warningRegAuth">Пароли не совпадают</div>
          <div class="warningAuthRegRefresh" v-if="this.warningLoginAuthRefresh">Пользователь с таким логином уже существует</div>
          <div class="authMenuBtnSubmit">
            <button class="btnAuthSubmit" type="button" @click="regForm()">Зарегистрироваться</button>
          </div>
        </div>
        <!--      LoginAuth-->
        <div class="changeTypeAuthLogin" v-if="this.authType === 'login' && this.authView === true"><button class="btnChangeTypeAuth" type="button" v-on:click="this.authType = 'reg'"><p style="margin: 0">Регистрация</p></button></div>
        <div class="lableAuth" v-if="this.authType === 'login' && this.authView === true">Вход</div>
        <div class="authMenuBtnLogin" v-if="this.authType === 'login' && this.authView === true">
          <div class="inputAuthBlock authMenuBtnLogin">
            <label class="inputLable" for="login">Логин</label>
            <input class="inputAuth" @input="readRequest($event.target.name, $event.target.value)" type="text" name="login" id="login">
          </div>
          <div class="inputAuthBlock authMenuBtnPass1">
            <label class="inputLable" for="password">Введите пароль</label>
            <input class="inputAuth" @input="readRequest($event.target.name, $event.target.value)" type="password" name="password" id="password">
          </div>
          <div class="warningAuthLogin" v-if="this.warningLoginAuth">Неверные данные</div>
          <div class="authMenuBtnSubmit">
            <button class="btnAuthSubmitLogin" type="button" @click="authForm()">Вход</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <div class="container-fluid header">
    <div class="icon">
      <a class="aHref" href="/">
        <img class="imgIcon" src="/image/logo128.png" alt=""></a>
    </div>
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <div class="button-header-cl text-center" style="margin-left: 34px">
          <a class="button-header" href="">Аренда</a>
          <a class="button-header" href="">Продажа</a>
          <a class="button-header" href="">Новостройки</a>
          <a class="button-header" href="">Строительство</a>
          <a class="button-header" href="">Коммерческая</a>
          <a class="button-header" href="">Ипотека</a>
          <a class="button-header" href="">Застройщики</a>
        </div>
      </div>
      <div class="col-sm-2 header-group-add">
        <div class="header-group">
          <a class="header-group-plus-btn" v-if="this.authStatus" href="/order-create"><button class="header-group-btn">+</button></a>
          <p class="header-group-btn-text" v-if="this.authStatus"> Подать за 0 ₽</p>
          <button type="button" class="header-group-imgs" v-if="!this.authStatus" v-on:click="auth"><img id="profile" src="/image/iconUser.png" alt="" style="margin: 0 0 0 10px" class="header-group-img"></button>
          <button type="button" class="header-group-imgs" v-if="this.authStatus" v-on:click="redirectToProfile"><img id="profile" src="/image/iconUser.png" alt="" style="margin: 0 0 0 10px" class="header-group-img"></button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Cookies from 'js-cookie';

  export default {
    name: 'Header',
    props: {

    },
    data() {
      return {
        authView: false,
        authType: 'login',
        warningRegAuth: false,
        warningLoginAuth: false,
        warningLoginAuthRefresh: false,
        dataRequest: {},
        authStatus: false,
      }
    },
    mounted() {
      if (Cookies.get('authStatus')){
        this.authStatus = Cookies.get('authStatus')
      }
    },
    methods: {
      auth() {
        this.authView = true
        this.authType = 'reg'
      },
      authForm(){
        axios.post('/authLogin', this.dataRequest)
          .then(response => {
              this.warningLoginAuth = false
            }
          )
          .catch(response => {
            if (response.status === 401 || 403){
              this.warningLoginAuth = true
            }
          })
      },
      regForm() {
        if (this.dataRequest['password'] === this.dataRequest['password2']){
          this.warningRegAuth = false
          axios.post('/authReg', this.dataRequest)
            .then(response => {
              this.warningLoginAuthRefresh = false
              }
            )
            .catch(response => {
              if (response.status === 401){
                this.warningLoginAuthRefresh = true
              }
            })
        }
        else{
          this.warningRegAuth = true
        }
      },
      readRequest(name, value) {
        if (this.authType !== this.dataRequest['authType']){ this.dataRequest = {}}
        this.dataRequest['authType'] = this.authType
        this.dataRequest[name] = value
      }
    },
  };
</script>

<style>
.header{
  margin-bottom: 20px;
  height: 100px;
  user-select: none;
  display: block;
}
.header-group-imgs{
  margin: 0 0 0 160px;
  width: 28px;
  align-self: center;
  cursor: pointer;
  background: none;
  border: none;
  position: absolute;
  top: 67px;
}
.warningAuthLogin{
  position: absolute;
  top: 700px;
  margin: -80px 0 0 105px;
  font-size: 20px;
  color: rgba(139, 0, 0, 0.76);
  font-weight: 600;
}
.warningAuthReg{
  position: absolute;
  top: 700px;
  margin: 0 0 0 90px;
  font-size: 20px;
  color: rgba(139, 0, 0, 0.76);
  font-weight: 600;
}
.warningAuthRegRefresh{
  position: absolute;
  top: 700px;
  margin: -60px 0 0 -50px;
  font-size: 20px;
  color: rgba(139, 0, 0, 0.76);
  font-weight: 600;
}
.btnChangeTypeAuth{
  border: none;
  color: rgba(20, 138, 255, 0.64);
  font-weight: 600;
  padding: 10px 20px;
  border-radius: 5px;
  background: none;
}
.changeTypeAuthReg{
  position: absolute;
  margin: 120px 0 0 380px;
  font-weight: 500;
  font-size: 20px;
}
.changeTypeAuthLogin{
  position: absolute;
  margin: 124px 0 0 360px;
  font-weight: 500;
  font-size: 20px;
}
.lableAuth{
  position: absolute;
  justify-items: center;
  margin: 120px 0 0 0;
  font-size: 30px;
  font-weight: 500;
  color: rgba(0, 0, 0, 0.8);
}
.btnAuthSubmit{
  position: absolute;
  margin: 60px 0 0 60px;
  font-size: 24px;
  font-weight: 600;
  padding: 8px 15px;
  background: rgba(20, 138, 255, 0.64);
  border-radius: 5px;
  border: none;
  color: rgb(255, 255, 255);
}
.btnAuthSubmitLogin{
  position: absolute;
  margin: 60px 0 0 120px;
  font-size: 24px;
  font-weight: 600;
  padding: 8px 50px;
  background: rgba(20, 138, 255, 0.64);
  border-radius: 5px;
  border: none;
  color: rgb(255, 255, 255);
}
.closeAuthMenu{
  height: 48px;
  background: none;
  border: none;
  position: absolute;
  margin: 10px 0 0 460px;
}
.imgIconAuth{
  position: absolute;
  height: 64px;
  margin: 48px 0 0 -32px;
}
.inputAuthBlock{
  margin: 10px 0 0 0;
}
.inputLable{
  display: block;
  font-size: 20px;
  font-weight: 500;
  margin: 20px 0 5px 0;
}
.inputAuth{
  border: 3px solid rgba(0, 0, 0, 0.3);
  border-radius: 5px;
  font-size: 20px;
  width: 380px;
  padding: 10px 10px;
}
.authMenuBtn{
  margin: -40px 0 0 0;
}
.authMenuBtnLogin{
  margin: -50px 0 0 0;
}
.authMenuBackground{
  position: fixed;
  background: rgba(0, 0, 0, 0.75);
  width: 100%;
  height: 100%;
  z-index: 10;
  //margin: -120px 0 0 0;
  display: grid;
}
.authMenu{
  background: #ffffff;
  border-radius: 15px;
  width: 540px;
  height: 680px;
  justify-self: center;
  align-self: center;
  display: grid;
  justify-content: center;
  justify-items: center;
}
</style>

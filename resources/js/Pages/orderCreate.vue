<template>
<div style="display: grid;height: 100%">
  <!--  <form>-->
  <form method="post" id="formOrderCreate">
    <div class="contentOrderCreate">
      <div id="group-0" class="group-0" v-if="group0">
        <p class="textOrder">Новое объявление</p>
        <div class="group-0-1">
          <button-create @data="btnData" :cls="0" :data="['Аренда','Продажа']"
                         :data-value="['Аренда', 'Продажа']" :data-name="['typeOrder']"
                         :type-label="'Тип сделки'"
          />
          <div v-if="dataRequest.typeOrder === 'Продажа'">
            <button-create-t2 @data="btnData"
                              :cls="1"
                              :data-value="['apartament', 'apartamentNew', 'room', 'house', 'cottage', 'townhouse', 'housePart', 'area', 'garage', 'Office', 'Building', 'RetailSpace', 'FreeUsePremises', 'Production', 'Warehouse', 'Business', 'CommercialLand']"
                              :data1="['Квартира', 'Квартира в новостройке', 'Комната или доля', 'Дом/Дача', 'Коттедж', 'Таунхаус', 'Часть дома', 'Участок', 'Гараж']"
                              :data2="['Офис', 'Здание', 'Торговая площадь', 'Помещение свободного назначения', 'Производство', 'Склад', 'Бизнес', 'Коммерческая земля']"
                              :data-value1="['apartament', 'apartamentNew', 'room', 'house', 'cottage', 'townhouse', 'housePart', 'area', 'garage']"
                              :data-value2="['Office', 'Building', 'RetailSpace', 'FreeUsePremises', 'Production', 'Warehouse', 'Business', 'CommercialLand']"
                              :type-label1="'Жилая недвижимость'"
                              :type-label2="'Коммерческая недвижимость'"
                              :data-name="['typeRoom']"/>
          </div>
          <div v-if="dataRequest.typeOrder === 'Аренда'">
            <button-create-t2 @data="btnData"
                              :cls="2"
                              :data-value="['apartament', 'room', 'house', 'cottage', 'townhouse', 'housePart', 'garage', 'Office', 'Coworking', 'Building', 'RetailSpace', 'FreeUsePremises', 'Warehouse', 'Production', 'CommercialLand']"
                              :data1="['Квартира', 'Комната', 'Дом/Дача', 'Коттедж', 'Таунхаус', 'Часть дома', 'Гараж']"
                              :data2="['Офис', 'Коворкинг','Здание', 'Торговая площадь', 'Помещение свободного назначения', 'Склад', 'Производство', 'Коммерческая земля']"
                              :data-value1="['apartament', 'room', 'house', 'cottage', 'townhouse', 'housePart', 'garage']"
                              :data-value2="['Office', 'Coworking', 'Building', 'RetailSpace', 'FreeUsePremises', 'Warehouse', 'Production', 'CommercialLand']"
                              :type-label1="'Жилая недвижимость'"
                              :type-label2="'Коммерческая недвижимость'"
                              :data-name="['typeRoom']"
                              style1="width: 1200px"
                              style2="width: 1200px"/>
          </div>
        </div>
        <div v-if="dataRequest.typeRoom">
          <SearchMap @data="btnData"/>
        </div>
        <button class="btnSubmit" type="button" v-on:click="group1 = true; group0 = false" id="submits">Далее</button>
      </div>
      <div class="group-1" id="group-1" v-if="group1">
        <p class="textOrder">О здании</p>
        <input-create @data="btnData" id="inputNumber1" subtitle="" title="Год постройки" name="yearCreate"/>
        <br>
        <div class="group-1-1">
          <button-create @data="btnData" :cls="5" :data="['Кирпичный', 'Монолитный', 'Панельный', 'Блочный', 'Деревянный', 'Сталинский', 'Монолитно-кирпичный']" :data-value="['Кирпичный', 'Монолитный', 'Панельный', 'Блочный', 'Деревянный', 'Сталинский', 'Монолитно-кирпичный']" :data-name="['typeHouse']" :type-label="'Тип дома'" style="width: 800px;"/>
        </div>
        <button class="btnSubmit" type="button" v-on:click="group2 = true; group1 = false" id="submits">Далее</button>
      </div>
      <div id="group-2" class="group-2" v-if="group2">
        <p class="textOrder">Параметры квартиры</p>
        <div class="group-2-1">
          <button-create @data="btnData" :cls="3"
                         :data="['Студия','1','2','3','4','5','6+']"
                         :data-value="['studio', '1','2','3','4','5','6']"
                         :data-name="['roomCount']"
                         :type-label="'Количество комнат'"/>
        </div>
        <input-create @data="btnData" subtitle="м²" name="areaRoom" title="Общая площадь"/>
        <input-create @data="btnData" subtitle="м²" name="areaLifeRoom" title="Жилая площадь"/>
        <br>
        <input-create @data="btnData" subtitle="м²" name="areaKitchenRoom" title="Площадь кухни"/>
        <br>
        <input-create @data="btnData" subtitle="" name="floor" title="Этаж"/>
        <input-create @data="btnData" subtitle="" name="floorAllHouse" title="Этажей в доме"/>
        <br>
        <div class="group-2-2">
          <button-create
            @data="btnData"
            :cls="4"
            :data="['Квартира','Апартаменты']"
            :data-value="['flat', 'apartaments']"
            :data-name="['typeState']"
            :type-label="'Тип недвижемости'"/>
        </div>
        <input-create @data="btnData" id="inputNumber0" subtitle="" name="numApart" title="Номер квартиры"/>
        <div class="numApart">
          <img class="numApartImg" src="/image/glassOrg.png" alt="" >
          <p class="numApartText">Мы не покажем номер квартиры</p>
        </div>
        <button class="btnSubmit" type="button" v-on:click="group3 = true; group2 = false" id="submits">Далее</button>
      </div>
      <div class="group-3" id="group-3" v-if="group3">
        <p class="textOrder">Фотографии и планировка</p>
        <p class="subTitleOrder">Фотографии и планировка</p>
        <img src="/image/phtotCamera.png" class="cameraIcon" width="42" alt="">
        <p class="camText">На фото не должно быть людей, животных, алкоголя, табака, оружия. <br> Не добавляйте чужие фото, картинки с водяными знаками и рекламу </p>
        <button type="button" class="btnDeleteImg" @click="activateDeleteBtn" v-if="photoImgsAll.size >= 1">Удалить изображения</button>
        <div class="photoGroupLocation">
          <div class="camLoadPhoto">
            <button type="button" class="camGroupLoadPhoto">
              <label for="photoLoadImage" class="photoloadImg">
                <div class="backWhiteLoadPhoto" style="display: inline-block">
                  <img class="iconLoadPhoto" src="/image/selectPhoto.jpg" alt="" style="display: inline-block;margin: 0 5px 0 0">
                  <input type="file" name="photoList" @change="selectPhoto" id="photoLoadImage" alt="" class="photoList" accept="image/*" multiple>
                </div>
              </label>
            </button>
            <button type="button" class="btnLeftScrollPhoto" id="btnLeftScrollPhoto" v-on:click="photoList('left')"><img src="/image/left.png" alt="" class="imgLeftScroll" width="32px"></button>
          </div>
          <div class="photoGroup" id="photoCollection">
            <img-select :all-index="this.photoImgsAll.size" :index="i" :imghash="hash[1]" :onload="this.photoOnload" :func="deleteImg" v-for="(hash, i) in this.photoImgsAll"/>
          </div>
          <div class="backgroundPhoto"></div>
          <button type="button" class="btnRightScrollPhoto" id="btnRightScrollPhoto" v-on:click="photoList('right')"><img src="/image/left.png" alt="" class="imgRightScroll" style="transform: rotate(180deg)" width="32px"></button>
        </div>
<!--        video-->
        <p class="subTitleOrder">Видео</p>
        <img src="/image/phtotCamera.png" class="cameraIcon" width="42" alt="">
        <p class="camText">На видео не должно быть людей, животных, алкоголя, табака, оружия. <br> Не добавляйте чужие фото, картинки с водяными знаками и рекламу </p>
        <button type="button" class="btnDeleteImg" @click="activateDeleteBtnVideo" v-if="VideoAll.size >= 1">Удалить видео</button>
        <div class="photoGroupLocation1">
          <div class="camLoadPhoto1">
            <button type="button" class="camGroupLoadPhoto">
              <label for="videoLoadImages" class="photoloadImg">
                <div class="backWhiteLoadPhoto" style="display: inline-block">
                  <img class="iconLoadPhoto" src="/image/selectVideo.png" alt="" style="display: inline-block;margin: 0 5px 0 0">
                  <input formenctype="multipart/form-data" type="file" name="photoList" @change="selectVideo" id="videoLoadImages" alt="" accept="video/*" class="photoList" multiple>
                </div>
              </label>
            </button>
            <button type="button" class="btnLeftScrollPhoto1" id="btnLeftScrollPhoto1" v-on:click="videoList('left')"><img src="/image/left.png" alt="" class="imgLeftScroll" width="32px"></button>
          </div>
          <div ref="videoAll" class="photoGroup" id="videoCollection">
            <vid-select :func="deleteVideo" :video-onload="videoOnload" :index="i" :allindex="VideoAll.size" :meta-date-video="hashVideo" v-for="(hashVideo, i) in VideoAll"/>
          </div>
          <div class="backgroundPhoto1"></div>
          <button type="button" class="btnRightScrollPhoto1" id="btnRightScrollPhoto1" v-on:click="videoList('right')"><img src="/image/left.png" alt="" class="imgRightScroll" style="transform: rotate(180deg)" width="32px"></button>
        </div>
        <button class="btnSubmit" type="button" v-on:click="group4 = true; group3 = false; saveMetaDate()" id="submits">Далее</button>
      </div>
      <div class="group-4" id="group-4" v-if="group4">
        <p class="textOrder">Особенности квартиры</p>
        <div class="group-4-1selectCharacters">
          <div class="group-4-1-1selectCharacters">
            <div class="group-4-1-1-1selectCharacters">
              <div class="group-4-1-2selectCharacters">
                <img src="/image/balconyRoom.png" class="balconyIcon" alt="">
                <p class="subTitleCharacters">Балконы</p>
              </div>
              <select-characters-btn @data="btnData" :title="'Балкон'" :name="'balconyRoom'"/>
              <select-characters-btn @data="btnData" :title="'Лоджия'" :name="'loggiaRoom'"/>
            </div>
          </div>
          <div class="group-4-1-3selectCharacters">
            <button-create-v3 @data="btnData" :cls="37" :data="['На улицу', 'Во двор']" :data-value="['На улицу', 'Во двор']" :data-name="['viewWindow']" :type-label="'Вид из окна'" :image-path="'/image/iconTree.png'"/>
            <div class="group-4-1-1-1selectCharacters">
              <div class="group-4-1-2selectCharacters">
                <img src="/image/iconBathRoom.png" class="balconyIcon" alt="">
                <p class="subTitleCharacters">Санузел</p>
              </div>
              <select-characters-btn @data="btnData" :title="'Раздельный'" :name="'bathroomCombinedRoom'"/>
              <select-characters-btn @data="btnData" :title="'Совмещенный'" :name="'bathroomSeparateRoom'"/>
            </div>
            <button-create-v3 @data="btnData"
                              :cls="543"
                              :data="['Без ремонта', 'Косметический', 'Евро', 'Дизайнерский']"
                              :data-value="['Без ремонта', 'Косметический', 'Евро', 'Дизайнерский']"
                              :data-name="['finishing']"
                              :type-label="'Ремонт'"
                              :image-path="'/image/iconFinishing.png'"/>
          </div>
          <view-menu :title="'Как выбрать ремонт? '" :inner-text="`
            <span style='font-weight: 600'>Без ремонта</span> — без отделки или со старой отделкой и коммуникациями. <br>
            <span style='font-weight: 600'>Косметический</span> — с недорогой внешней отделкой, без замены коммуникаций. <br>
            <span style='font-weight: 600'>Евро</span> — с современной качественной отделкой и нужными коммуникациями. <br>
            <span style='font-weight: 600'>Дизайнерский</span> — по индивидуальному проекту с нестандартным интерьером и планировкой. <br>
          `"/>
        </div>
        <div class="group-4-2selectCharacters">
          <div class="group-4-2-1selectCharacters">
            <div class="group-4-2-2selectCharacters">
              <img src="/image/iconElevator.png" class="balconyIcon" alt="">
              <p class="subTitleCharacters">Лифты</p>
            </div>
            <select-characters-btn @data="btnData" :title="'Пассажирский'" :name="'elevatorCountPassenger'"/>
            <select-characters-btn @data="btnData" :title="'Грузовой'" :name="'elevatorCountFreight'"/>
          </div>
        </div>
        <div class="group-4-3selectCharacters">
          <btn-create-select-mult @data="btnData"
                                  :cls="547"
                                  :data="['Пандус', 'Мусоропровод']"
                                  :data-value="['Пандус', 'Мусоропровод']"
                                  :data-name="['conveniences']"
                                  :type-label="'Подъезд'"
                                  :image-path="'/image/iconEntrance.png'"/>
        </div>
        <div class="group-4-4selectCharacters">
          <button-create-v3 @data="btnData"
                            :cls="2323"
                            :data="['Наземная', 'Многоуровневая', 'Подземная', 'На крыше']"
                            :data-value="['Наземная', 'Многоуровневая', 'Подземная', 'На крыше']"
                            :data-name="'parking'"
                            :type-label="'Парковка'"
                            :image-path="'/image/iconParking.png'"/>
        </div>
        <button class="btnSubmit" type="button" v-on:click="group5 = true; group4 = false" id="submits">Далее</button>
      </div>
      <div class="group-5" id="group-5" v-if="group5">
        <p class="textOrder">Особенности квартиры</p>
        <div class="group-5-1">
          <div class="group-5-1-1">
            <btn-create-select-mult @data="btnData"
                              :cls="92"
                              :data="['Без мебели', 'На кухне', 'В комнатах']"
                              :data-value="['Без мебели', 'На кухне', 'В комнатах']"
                              :data-name="['furniture']"
                              :type-label="'Мебель'"
                              :image-path="'/image/iconFurniture.png'"/>
          </div>
          <div class="group-5-1-2">
            <btn-create-select-mult @data="btnData"
                              :cls="265"
                              :data="['Ванна', 'Душевая кабина']"
                              :data-value="['Ванна', 'Душевая кабина']"
                              :data-name="['bathType']"
                              :type-label="'Ванная комната'"
                              :image-path="'/image/iconBathRoom.png'"/>
          </div>
          <div class="group-5-1-3">
            <btn-create-select-mult @data="btnData"
                              :cls="56"
                              :data="['Кондиционер', 'Холодильник', 'Телевизор', 'Посудомоечная машина', 'Стиральная машина']"
                              :data-value="['Кондиционер', 'Холодильник', 'Телевизор', 'Посудомоечная машина', 'Стиральная машина']"
                              :data-name="['technic']"
                              :type-label="'Техника'"
                              style="width: 800px;"
                              :image-path="'/image/iconWashingMachine.png'"/>
          </div>
          <div class="group-5-1-4">
            <btn-create-select-mult @data="btnData"
                                    :cls="9232"
                                    :data="['Интернет', 'Телефон']"
                                    :data-value="['network', 'telephone']"
                                    :data-name="'connectionNetwork'"
                                    :type-label="'Связь'"
                                    :image-path="'/image/iconNetwork.png'"/>
          </div>
        </div>
        <button class="btnSubmit" type="button" v-on:click="group6 = true; group5 = false" id="submits">Далее</button>
      </div>
      <div class="group-6" id="group-6" v-if="group6">
        <p class="textOrder">Описание квартиры</p>
        <div class="group-6-1">
          <div class="group-6-1-1">
            <p class="subtitleDescriptionRoom">Заголовок</p>
            <input class="titlOrderRoom" name="titleOrderRoom" v-model="title" @input="btnData('title', title)" placeholder="Просторная видовая двушка у парка">
          </div>
          <div class="group-6-1-2">
            <p class="subtitleDescriptionRoom">Описание</p>
            <textarea class="descriptionOrderRoom" name="descriptionOrder" v-model="description" @input="btnData('description', description)" id="" cols="136" rows="10"></textarea>
          </div>
        </div>
        <button class="btnSubmit" type="button" v-on:click="group7 = true; group6 = false" id="submits">Далее</button>
      </div>
      <div v-if="dataRequest['typeOrder'] === 'Продажа'">
        <div class="group-7" id="group-7" v-if="group7">
          <p class="textOrder">Цена и контакты</p>
          <div class="group-7-1">
            <div class="group-7-1-1">
              <input-create @data="btnData" subtitle="₽" :placeholder="'Например: 15 000 000'" :style2="'width: 400px;font-size: 20px'" :style1="'width: 340px;text-align: left;'" name="price" title="Цена"/>
            </div>
            <div class="group-7-1-6">
              <input-create @data="btnData" :placeholder="'Например: 000000000000'" :style2="'width: 260px'" :style1="'width: 200px;text-align: left;'" name="inn" title="Укажите ИНН"/>
            </div>
            <div class="group-7-1-7">
              <view-menu :title="'Зачем это указывать? '" :style="'font-weight: 500;'" :inner-text="`
            Если вы продаете как самозанятый, мы отметим ваше объявление специальном значком: <br>
            таким больше доверяют пользователи. Номер ИНН никто не увидит: он нужен только <br>
            для проверки. <br>
          `"/>
            </div>
          </div>
          <div class="group-7-2">
            <div class="group-7-2-1">
              <p class="textOrder">Контакты арендодателя</p>
              <div class="group-7-2-1-1">
                <img class="phoneIcon" src="/image/phoneNumber.png" alt="">
                <p class="phoneNumberinvisible">Защитим ваш личный номер от спама и мошенников: покажем в объявлении другой, <br> а звонки перенаправим вам</p>
              </div>
              <input-create @data="btnData" :placeholder="'+7 (xxx) xxx-xx-xx'" :style2="'width: 260px'" :style1="'width: 200px;text-align: left;'" name="numberPhone" title="Телефон"/>
            </div>
            <div class="group-7-3">
              <button-create-v3 @data="btnData"
                                :cls="3984"
                                :data="['Звонки и сообщения', 'Анкеты от арендаторов']"
                                :data-value="['callMessage', 'ankets']"
                                :data-name="['communicationMethod']"
                                :type-label="'Способ связи'"/>
              <view-menu :title="'Что такое анкеты? '" :style="'font-weight: 500;'" :inner-text="`
            Потенциальные жильцы заполнят небольшие анкеты-заявки о себе: вы получите их в <br>
            личном кабинете и сами выберете, с кем пообщаться. Удобно, если не хотите отвечать на <br>
            поток звонков. <br>
          `"/>
            </div>
          </div>
          <button class="btnSubmit" type="button" @click="this.fetchData" id="submit" style="margin-top: 0">Отправить</button>
        </div>
      </div>
<!--      -->
      <div v-if="dataRequest['typeOrder'] ==='Аренда'">
        <div class="group-7" id="group-7" v-if="group7">
          <p class="textOrder">Цена и условия аренды</p>
          <div class="group-7-1">
            <div class="group-7-1-1">
              <input-create @data="btnData" subtitle="₽" :placeholder="'Например: 40 000'" :style2="'width: 260px'" :style1="'width: 200px;text-align: left;'" name="price" title="Аренда в месяц"/>
            </div>
            <div class="group-7-1-2">
              <button-create-v3 @data="btnData"
                                :cls="1324"
                                :data="['Собственник', 'Арендатор']"
                                :data-value="['Собственник', 'Арендатор']"
                                :data-name="['network']"
                                :type-label="'По счётчикам платит'"/>
            </div>
            <div class="group-7-1-3">
              <view-menu :title="'Что входит в эти платежи? '" :style="'font-weight: 500;'" :inner-text="`
            По счётчикам оплачивают свет, воду и иногда газ — сколько израсходовали за месяц. <br>
            Остальные услуги ЖКХ — это отопление, капремонт, вывоз мусора и другие услуги, <br>
            которые чаще всего оплачивает сам собственник. <br>
          `"/>
            </div>
            <div class="group-7-1-3">
              <button-create-v3 @data="btnData"
                                :cls="910"
                                :data="['1', '2', '3','4 и более']"
                                :data-value="['1', '2', '3','4']"
                                :data-name="['prepayment']"
                                :type-label="'Предоплата по месяцам'"/>
            </div>
            <div class="group-7-1-4">
              <input-create @data="btnData" subtitle="₽" :placeholder="'Например: 40 000'" :style2="'width: 260px'" :style1="'width: 200px;text-align: left;'" name="deposit" title="Залог"/>
            </div>
            <div class="group-7-1-5">
              <button-create-v3 @data="btnData"
                                :cls="890"
                                :data="['Несколько месяцев', 'От года']"
                                :data-value="['Несколько месяцев', 'От года']"
                                :data-name="['countMonthRental']"
                                :type-label="'Срок аренды'"/>
              <btn-create-select-mult @data="btnData"
                                      :cls="923"
                                      :data="['Можно с детьми', 'Можно с домашними питомцами']"
                                      :data-value="['kids', 'pets']"
                                      :data-name="'conditions'"
                                      :type-label="'Условия проживания'"/>
              <button-create-v3 @data="btnData"
                                :cls="394"
                                :data="['Да', 'Нет']"
                                :data-value="['Да', 'Нет']"
                                :data-name="['selfEmployed']"
                                :type-label="'Сдаю как самозанятый'"/>
            </div>
            <div class="group-7-1-6">
              <input-create @data="btnData" :placeholder="'Например: 000000000000'" :style2="'width: 260px'" :style1="'width: 200px;text-align: left;'" name="inn" title="Укажите ИНН"/>
            </div>
            <div class="group-7-1-7">
              <view-menu :title="'Зачем это указывать? '" :style="'font-weight: 500;'" :inner-text="`
            Если вы сдаёте как самозанятый, мы отметим ваше объявление специальном значком: <br>
            таким больше доверяют пользователи. Номер ИНН никто не увидит: он нужен только <br>
            для проверки. <br>
          `"/>
            </div>
          </div>
          <div class="group-7-2">
            <div class="group-7-2-1">
              <p class="textOrder">Контакты арендодателя</p>
              <div class="group-7-2-1-1">
                <img class="phoneIcon" src="/image/phoneNumber.png" alt="">
                <p class="phoneNumberinvisible">Защитим ваш личный номер от спама и мошенников: покажем в объявлении другой, <br> а звонки перенаправим вам</p>
              </div>
              <input-create @data="btnData" :placeholder="'+7 (xxx) xxx-xx-xx'" :style2="'width: 260px'" :style1="'width: 200px;text-align: left;'" name="numberPhone" title="Телефон"/>
            </div>
            <div class="group-7-3">
              <button-create-v3 @data="btnData"
                                :cls="3984"
                                :data="['Звонки и сообщения', 'Анкеты от арендаторов']"
                                :data-value="['callMessage', 'ankets']"
                                :data-name="['communicationMethod']"
                                :type-label="'Способ связи'"/>
              <view-menu :title="'Что такое анкеты? '" :style="'font-weight: 500;'" :inner-text="`
            Потенциальные жильцы заполнят небольшие анкеты-заявки о себе: вы получите их в <br>
            личном кабинете и сами выберете, с кем пообщаться. Удобно, если не хотите отвечать на <br>
            поток звонков. <br>
          `"/>
            </div>
          </div>
          <button class="btnSubmit" type="button" id="submit" @click="this.fetchData" style="margin-top: 0">Отправить</button>
        </div>
      </div>
      <button class="btnSubmit" type="button" @click="this.fetchData" id="submit" style="margin-top: 0">Отправить</button>
      {{ this.dataRequest }}
    </div>
  </form>
</div>
</template>

<script>

import axios from "axios";
import {defineComponent} from "vue";
import Header from "../Components/Header.vue";
import Footer from "../Components/Footer.vue";
import ButtonCreate from "../Components/buttonCreate.vue";
import SearchMap from "../Components/SearchMap.vue";
import InputCreate from "@/Components/inputCreate.vue";
import ButtonCreateT2 from "../Components/buttonCreateT2.vue";
import DeleteBtn from "@/Components/deleteBtn.vue";
import imgSelect from "../Components/imgSelect.vue";
import ImgSelect from "@/Components/imgSelect.vue";
import VidSelect from "@/Components/vidSelect.vue";
import SelectCharactersBtn from "../Components/selectCharactersBtn.vue";
import ButtonCreateV3 from "@/Components/btnCreateV3.vue";
import ViewMenu from "@/Components/ViewMenu.vue";
import BtnCreateSelectMult from "@/Components/btnCreateSelectMult.vue";

export default defineComponent({
  computed: {
    data() {
      return data
    },
  },
  components: {
    BtnCreateSelectMult, ViewMenu, ButtonCreateV3, SelectCharactersBtn, VidSelect, ImgSelect, imgSelect, DeleteBtn, ButtonCreateT2, InputCreate, SearchMap, Map, ButtonCreate, Footer, Header},
  data(){
    return{
      title: '',
      description: '',
      group0: true,
      group1: false,
      group2: false,
      group3: false,
      group4: false,
      group5: false,
      group6: false,
      group7: false,
      photoImgsAll: new Map([]),
      VideoAll: new Map([]),
      dataPhotoLoad: [],
      // dataRequest: {"typeOrder": "rental", "typeRoom": "apartament", "adressOrder": "Москва, Россия, Ходынская улица, 2с1", "yearCreate": "2025", "typeHouse": "brick", "roomCount": "3", "areaRoom": "130", "areaLifeRoom": "91", "areaKitchenRoom": "15", "floor": "18", "floorAllHouse": "44", "typeState": "flat", "numApart": "536", "image": [ "/metadataUpload/02ce000e-d24d-4119-9fdb-df2bf1c369ce.jpeg", "/metadataUpload/ff21984a-464b-4a0b-92c3-985110b3cb2c.jpeg", "/metadataUpload/18dd6290-796d-4676-bcbd-d7d935aabca9.png", "/metadataUpload/2ce5c9d4-2ecd-4086-b97d-ea53f67b68b0.jpeg" ], "video": [ "/metadataUpload/d02bc5e5-7b96-46ef-b0f0-702e44651c60.mp4" ], "balconyRoom": 1, "loggiaRoom": 1, "viewWindow": "На улицу", "bathroomCombinedRoom": 1, "bathroomSeparateRoom": 1, "finishing": "Дизайнерский", "elevatorCountPassenger": 1, "elevatorCountFreight": 1, "conveniences": [ "ramp", "garbageСhute" ], "parking": "multiLevel", "furniture": [ "kitchen", "rooms" ], "bathType": [ "bath", "showerCabin" ], "technic": [ "AirConditioning", "Refrigerator", "TV", "Dishwasher", "WashingMachine" ], "connectionNetwork": [ "network", "telephone" ], "title": "Просторная Двушка в центре Москвы ", "description": "Description", "price": "400 000", "network": "Собственник", "prepayment": "3", "deposit": "400 000", "countMonthRental": "Несколько месяцев", "conditions": [ "kids", "pets" ], "selfEmployed": "Да", "inn": "012345678901", "numberPhone": "+7 978 579 94 34", "communicationMethod": "callMessage" },
      dataRequest: { "typeOrder": "Аренда", "typeRoom": "apartament", "adressOrder": "Москва, Россия, Ходынская улица, 2", "yearCreate": "2019", "typeHouse": "Монолитный", "roomCount": "3", "areaRoom": "152", "areaLifeRoom": "120", "areaKitchenRoom": "15", "floor": "24", "floorAllHouse": "44", "typeState": "flat", "numApart": "232", "video": [], "loggiaRoom": 2, "balconyRoom": 3, "viewWindow": "На улицу", "bathroomCombinedRoom": 2, "bathroomSeparateRoom": 1, "finishing": "Дизайнерский", "elevatorCountPassenger": 8, "elevatorCountFreight": 4, "conveniences": [ "Пандус", "Мусоропровод" ], "parking": "Многоуровневая", "furniture": [ "На кухне", "В комнатах" ], "bathType": [ "Ванна", "Душевая кабина" ], "technic": [ "Кондиционер", "Холодильник", "Телевизор", "Посудомоечная машина", "Стиральная машина" ], "connectionNetwork": [ "network", "telephone" ], "title": "Квартира в центре Москвы ", "description": "Пресня Сити — это элитный жилой комплекс, расположенный в самом центре Москвы, в престижном районе Пресненский. ЖК Пресня Сити объединяет современную архитектуру, развитую инфраструктуру и комфорт городской жизни, предлагая уникальные условия для проживания.", "price": "230 000", "network": "Собственник", "prepayment": "3", "deposit": "320 000", "countMonthRental": "Несколько месяцев", "conditions": [ "kids", "pets" ], "selfEmployed": "Нет", "inn": "012345678901", "numberPhone": "+7 978 579 94-34", "communicationMethod": "callMessage" },
      // dataRequest: {},
      countListFlip: 1,
      photoImg: {},
      videoWidth: '',
      photoWidth: '',
      fetch: '',
      requestData: {}
    }
  },
  mounted() {
    this.fetch = new FormData(document.getElementById('formOrderCreate'))
  },
  methods: {
    fetchData(){
      console.log(this.dataRequest)
      axios.post('/DBcreateOrder', this.dataRequest)
        .then(response => {
          console.log(response)
        })
    },
    activateDeleteBtn(){
      let btn = document.getElementsByClassName('deleteImg')
      for (let i = 0; i < btn.length; i++) {
        if (btn[i].style.display === 'block'){
          btn[i].style.display = 'none'
        }
        else {
          btn[i].style.display = 'block'
        }
      }
    },
    activateDeleteBtnVideo(){
      let btn = document.getElementsByClassName('deleteImg1')
      for (let i = 0; i < btn.length; i++) {
        if (btn[i].style.display === 'block'){
          btn[i].style.display = 'none'
        }
        else {
          btn[i].style.display = 'block'
        }
      }
    },
    deleteImg(target){
      let allImg = document.getElementById('photoCollection')

      for (let photoKey of this.photoImgsAll) {
        if(photoKey[1][1] === target){
          this.photoImgsAll.delete(photoKey[0])
        }
      }
    },
    deleteVideo(target){
      for (let videoKey of this.VideoAll){
        if (videoKey[1][1] === target.previousElementSibling.attributes[1].value){
          this.VideoAll.delete(videoKey[0])
          this.videoOnload()
          return
        }
      }
    },
    photoOnload(){
      let btnRight = document.getElementById('btnRightScrollPhoto')
      let btnLeft = document.getElementById('btnLeftScrollPhoto')
      let photoAll = document.getElementById('photoCollection')
      let widthPhoto = 0

      widthPhoto += photoAll.getBoundingClientRect().width

      if (widthPhoto > 780){
        btnRight.style.display = 'inline-block'
      }

      this.photoWidth = widthPhoto
    },
    videoOnload(){
      let btnRight = document.getElementById('btnRightScrollPhoto1')
      let btnLeft = document.getElementById('btnLeftScrollPhoto1')
      let videocol = document.getElementsByClassName('videocol')
      let widthVideo = 0
      for (let i = 0; i < this.VideoAll.size; i++) {
        widthVideo += videocol[i].getBoundingClientRect().width+40
      }
      if (widthVideo > 1440){
        btnRight.style.display = 'inline-block'
      }
      else {
        btnRight.style.display = 'none'
      }

      this.videoWidth = widthVideo
    },
    saveMetaDate(){
      if (this.photoImgsAll.size >= 1 || this.VideoAll.size >= 1){
        let hash = []
        const formData = new FormData()
        this.VideoAll.forEach((value) => {hash.push(value)})
        this.photoImgsAll.forEach((value) => {hash.push(value)})
        for (let i = 0; i < hash.length; i++) {
          formData.append('metadata[]', hash[i][2])
        }

        axios.post('/uploadMetaData', formData, {headers: {'Content-Type': 'multipart/form-data'}})
          .then(response => {
            let image = []
            let video = []
            for (let d = 0; d < response.data.length; d++) {
              if (response.data[d].image){
                image[image.length++] = response.data[d].image
              }
              if (response.data[d].video){
                video[video.length++] = response.data[d].video
              }
            }
            this.dataRequest['image'] = image
            this.dataRequest['video'] = video

          })
      }
    },
    selectPhoto(){
      let btn = document.getElementsByClassName('deleteImg')
      const photoImgs = document.getElementById('photoLoadImage')
      let photo = document.getElementsByClassName('imgCollection')
      let btnRight = document.getElementById('btnRightScrollPhoto')
      let date = new Date()
      let widthPhotoList = 0
      let photoImg
      let photoImgAll = new Map()
      const regI = /image/;

      for (let i = 0; i < btn.length; i++) {btn[i].style.display = 'none'} //отключение кнопок делит

        for (let r = 0; r < photoImgs.files.length; r++) {
          let file = new File([photoImgs.files[r]],  crypto.randomUUID()+'.'+photoImgs.files[r].type.replace('image/', ''), {type: photoImgs.files[r].type})
          let urlPhoto = URL.createObjectURL(file)
          this.photoImgsAll.set(this.photoImgsAll.size, [urlPhoto, file.name, file])
        }

      // if (widthPhotoList > 780){
      //   btnRight.style.display = 'inline-block'
      // }

      photoImgs.value = ''
    },
    selectVideo(){
      const videos = document.getElementById('videoLoadImages')
      let btnRight = document.getElementById('btnRightScrollPhoto1')
      let videogroup = document.getElementById('videoCollection')
      let videoCollAll = document.getElementsByClassName('videocol')
      let btn = document.getElementsByClassName('deleteImg1')
      let timeStamp = []
      let videoAll = []
      const regV = /video/
      let video
      let date = new Date()
      let btnDelete = document.getElementById('vid')
      let widthVideo
      //Параметры обьектов получать по id

      for (let i = 0; i < btn.length; i++) {btn[i].style.display = 'none'} //отключение кнопок делит

      for (let r = 0; r < videos.files.length; r++) {
        let file = new File([videos.files[r]], crypto.randomUUID()+'.'+videos.files[r].type.replace('video/', ''), { type: videos.files[r].type})
        let urlVideo = URL.createObjectURL(file)
        this.VideoAll.set(this.VideoAll.size ,[urlVideo, file.name, file])
      }

      videos.value = ''
    },
    photoList(orient){
      let groupPhoto = document.getElementById('photoCollection') //div всех изображений
      let photo = document.getElementsByClassName('imgCollection') //все изображения полученные по классу "для получения widthPhotoList(длины всех изображений)"
      let btnLeft = document.getElementById('btnLeftScrollPhoto') //левая стрелка
      let btnRight = document.getElementById('btnRightScrollPhoto') //правая стрелка
      let widthPhotoList = groupPhoto.getBoundingClientRect().width //длина массива изображений
      let marginLeft = groupPhoto.style.marginLeft.replace( /[a-z]/g,'')-270 //отступ массива изображений
      //длина видимого поля 750px (groupPhoto)
      //1000px

      switch (orient){
        case 'left':
          if (marginLeft >= -270){
            marginLeft = 270
            btnLeft.style.display = 'none'
          }
          else {
            marginLeft = marginLeft - -540
            btnRight.style.display = 'inline-block'
          }
          break;
        case 'right':
          if (widthPhotoList+marginLeft < 680){
            marginLeft = -widthPhotoList+1000
            btnRight.style.display = 'none'
          }
          else {
            marginLeft - 360
            btnLeft.style.display = 'inline-block'
          }
          break;
      }

      groupPhoto.style.marginLeft = marginLeft+'px'
    },
    videoList(orient){
      let groupPhoto = document.getElementById('videoCollection') //div всех изображений
      let photo = document.getElementsByClassName('videocol') //все изображения полученные по классу "для получения widthPhotoList(длины всех изображений)"
      let btnLeft = document.getElementById('btnLeftScrollPhoto1') //левая стрелка
      let btnRight = document.getElementById('btnRightScrollPhoto1') //правая стрелка
      let widthPhotoList = this.videoWidth //длина массива видео
      let marginLeft = groupPhoto.style.marginLeft.replace( /[a-z]/g,'')-270 //отступ массива изображений
      //длина видимого поля 750px (groupPhoto)
      //1000px
      // groupPhoto.style.marginLeft = '0px'

      switch (orient){
        case 'left':
          if (marginLeft >= -270){
            marginLeft = 270
            btnLeft.style.display = 'none'
          }
          else {
            marginLeft = marginLeft - -540
            btnRight.style.display = 'inline-block'
          }
          break;
        case 'right':
          if (widthPhotoList+marginLeft < 1600){
            marginLeft = -widthPhotoList+1600
            btnRight.style.display = 'none'
            btnLeft.style.display = 'inline-block'
          }
          else {
            marginLeft - 360
            btnLeft.style.display = 'inline-block'
          }
          break;
      }


      groupPhoto.style.marginLeft = marginLeft+'px'
    },
    btnData(name, value){
      this.dataRequest[name] = value
    },
  }
},
)
</script>

<style>
p{margin: 0}
button{padding: 0}
body{
  overflow-x: hidden;
}
.phoneNumberinvisible{
  margin: 0 0 0 10px;
}
.phoneIcon{
  margin: -20px 0 0 60px;
}
.group-2-1{
  margin: 0 0 0 50px;
}
.group-2-2{
  margin: 0 0 0 50px;
}
.group-1-1{
  margin: 0 0 0 50px;
}
.group-0-1{
  margin: 0 0 0 50px;
}
.group-7-2{
  margin: 0 0 0 15px;
}
.group-7-3{
  margin: 0 0 0 50px;
}
.group-7-2-1-1{
  margin: 20px 0 10px 0;
}
.group-7-1-1{
  margin: 0 0 0 15px;
}
.group-7-1-7{
  margin: 0 0 0 65px;
}
.group-7-1-2{
  margin: 0 0 0 65px;
}
.group-7-1-3{
  margin: 0 0 0 65px;
}
.group-7-1-4{
  margin: 0 0 0 15px;
}
.group-7-1-5{
  margin: 0 0 0 65px;
}
.group-7-1-6{
  margin: 0 0 0 15px;
}
.descriptionOrderRoom:focus{
  border: none !important;
}
.descriptionOrderRoom{
  border-radius: 5px;
  font-size: 20px;
  font-weight: 500;
  border: 1px solid rgba(0, 0, 0, 0.18);
}
.subtitleDescriptionRoom{
  display: block;
  margin: 20px 0 10px 0;
  font-size: 18px;
  font-weight: 600;
}
.titlOrderRoom::placeholder{
  font-size: 18px;
}
.titlOrderRoom{
  padding: 8px 10px;
  border-radius: 5px;
  font-size: 20px;
  font-weight: 500;
  width: 1280px;
  border: 1px solid rgba(0, 0, 0, 0.18);
}
.group-6-1{
  margin: 35px 0 0 65px;
}
.group-5-1{
  margin: 25px 0 0 55px;
}
.group-4-3selectCharacters{
  margin: 15px 0 0 65px;
}
.group-4-4selectCharacters{
  margin: 15px 0 0 65px;
}
.group-4-2selectCharacters{
  margin: 0 0 0 65px;
}
.group-4-1-3selectCharacters{
  margin: 40px 0 0 0;
}
.group-4-1-1-1selectCharacters{
  margin: 0 0 30px 0;
}
.group-4-1-2selectCharacters{
  display: block;
  margin: 0 0 10px 0;
}
.balconyIcon{
  display: inline;
  margin: 0 15px 0 0;
}
.subTitleCharacters{
  font-size: 24px;
  font-weight: 600;
  margin: 15px 0 20px 0;
  display: inline-block;
}
.group-4{
  //display: inline-block;
}
.group-4-1selectCharacters{
  margin: 25px 0 0 60px;
}
.videocol{
  margin: 0 20px;
  display: grid;
  justify-items: center;
  align-items: center;
}
.photoListInvisible{
  display: none;
}
.btnDeleteImg{
  margin: 0 0 0 30px;
  border: solid #b2b2b2;
  border-radius: 5px;
  background: none;
  padding: 5px 15px;
  font-size: 18px;
  font-weight: 600;
  position: absolute;
}
.deleteImg{
  //display: grid;
  background: none;
  border: none;
  position: absolute;
  display: none;
}
.deleteImg1{
  //display: grid;
  background: none;
  border: none;
  position: absolute;
  display: none;
}
.groupImgCollection{
  display: grid;
  height: 120px;
  justify-items: center;
  align-items: center;
}
.photoloadImg{
  cursor: pointer;
}
.photoList{
  display: none;
}
.imgLeftScroll{
  display: inline-block;
}
.imgRightScroll{
  display: inline-block;
}
.btnLeftScrollPhoto{
  border: none;
  background: none;
  //position: absolute;
  display: none;
  z-index: 1;
  padding: 22px 10px 22px 5px;
}
.btnRightScrollPhoto{
  border: none;
  background: none;
  position: absolute;
  display: none;
  z-index: 1;
  padding: 44px 20px;
  left: 1020px;
}
.btnLeftScrollPhoto1{
  border: none;
  background: none;
  //position: absolute;
  display: none;
  z-index: 1;
  padding: 0 10px 22px 5px;
  top: -100px;
}
.btnRightScrollPhoto1{
  border: none;
  background: none;
  position: absolute;
  display: none;
  z-index: 1;
  margin: 160px 20px 0 5px;
  left: 1820px;
}
.backgroundPhoto{
  background: #ffffff;
  width: 1200px;
  height: 130px;
  margin: 0 0 0 1020px;
  position: absolute;
  top: 300px;
  z-index: 1;
}
.backgroundPhoto1{
  background: #ffffff;
  width: 1200px;
  height: 380px;
  margin: 0 0 0 1780px;
  position: absolute;
  top: 580px;
  z-index: 1;
}
.photoGroup{
  display: inline-flex;
  margin: 10px 0 0 270px;
  transition: all 1s;
  position: absolute;
}
.camGroupLoadPhoto{
  border: none;
  background: none;
}
.camLoadPhoto{
  cursor: pointer;
  display: inline-block;
  border: none;
  background: white;
  height: 130px;
  padding: 10px 0 0 55px;
  position: absolute;
  z-index: 1;
}
.camLoadPhoto1{
  display: inline-block;
  border: none;
  background: white;
  height: 380px;
  padding: 118px 0 0 55px;
  position: absolute;
  z-index: 1;
}
img {
  -webkit-user-drag: none;
}
.loadPhoto{
  user-select: none;
  -webkit-user-drag: none;
}
.btnLeft{
  border: none;
  background: none;
  display: none;
}
.btnRight{
  background: none;
  border: none;
  margin: 60px 0 0 10px;
  display: inline-block;
}
.backWhiteLoadPhoto{
  background: white;
  user-select: none;
  -webkit-user-drag: none;
}
.rightBackFlip{
  -webkit-user-drag: none;
  user-select: none;
  margin: 48px 0 0 10px;
  opacity: 70%;
}
.backFlip{
  -webkit-user-drag: none;
  height: 155px;
  width: 1200px;
  background: white;
  position: absolute;
  margin: -155px 0 0 800px;
  user-select: none;
}
.photoGroupLocation {
  -webkit-user-drag: none;
  user-select: none;
  height: 155px;
  margin: 0 0 0 0;
}
.photoGroupLocation1 {
  -webkit-user-drag: none;
  user-select: none;
  height: 380px;
  margin: 10px 0 0 0;
}
.imgCollection{
  height: 120px;
  margin: 0 10px 0 15px !important;
}
.camText{
  font-weight: 600;
  opacity: 90%;
}
.cameraIcon{
  opacity: 80%;
  display: inline-block;
  margin: -28px 15px 0 45px;
}
.numApartImg{
  margin: -3px 0 0 0;
}
.numApartText{
  margin: 0 0 0 10px;
}
.numApart{
  margin: 0 0 0 55px;
}
.mapGroup{
  display: flex;
}
.contentOrderCreate{
  display: block;
}
.textOrder{
  font-size: 40px;
  font-weight: 600;
  margin: 0 0 0 45px;
  display: block;
}
.subTitleOrder{
  font-size: 24px;
  font-weight: 600;
  margin: 15px 0 20px 55px;
  display: block;
}
.btnSubmit{
  margin: 50px 0 50px 1650px;
  font-size: 24px;
  font-weight: 600;
  padding: 10px 25px;
  border: solid #ffffff 1px;
  border-radius: 5px;
  background: #499ABF;
  color: white;
}
</style>

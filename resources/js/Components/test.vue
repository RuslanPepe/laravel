<template>
  <div class="scroll-wrapper">
    <input type="file" multiple @change="onFileChange" accept="image/*" />

    <!-- Обёртка для стрелок и прокрутки -->
    <div class="scroll-box">
      <!-- Левая кнопка -->
      <button class="scroll-btn left" type="button" @click="scrollLeft">◀</button>

      <!-- Контейнер с изображениями -->
      <div class="scroll-container" ref="scrollRef">
        <div class="item" v-for="(img, index) in photo" :key="index">
          <img :src="img" class="preview-img" />
        </div>
      </div>

      <!-- Правая кнопка -->
      <button class="scroll-btn right" type="button" @click="scrollRight">▶</button>
    </div>
  </div>
</template>

<script setup>
import { ref } from "vue"

const photo = ref([])
const scrollRef = ref(null)

function onFileChange(event) {
  const files = event.target.files
  photo.value = []

  Array.from(files).forEach(file => {
    if (file.type.startsWith('image/')) {
      const url = URL.createObjectURL(file)
      photo.value.push(url)
    }
  })
}

function scrollLeft() {
  scrollRef.value?.scrollBy({ left: -700, behavior: 'smooth' })
}
function scrollRight() {
  scrollRef.value?.scrollBy({ left: 700, behavior: 'smooth' })
}
</script>

<style scoped>
.scroll-wrapper {
  width: 100%;
  max-width: 100vw;
  overflow: hidden;
  padding: 20px 0;
}

.scroll-box {
  position: relative;
}

.scroll-container {
  display: flex;
  overflow-x: auto;
  gap: 10px;
  scroll-snap-type: x mandatory;
  padding: 10px;
  scroll-behavior: smooth;
  scrollbar-width: none;
}
.scroll-container::-webkit-scrollbar {
  display: none;
}

.item {
  flex: 0 0 auto;
  scroll-snap-align: start;
}
.preview-img {
  width: 150px;
  height: auto;
  object-fit: cover;
  border-radius: 8px;
}

/* Кнопки поверх скролл-контейнера */
.scroll-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 10;
  background: rgba(255, 255, 255, 0.8);
  border: none;
  font-size: 24px;
  padding: 5px 10px;
  border-radius: 6px;
  cursor: pointer;
  transition: background 0.2s;
}
.scroll-btn:hover {
  background: rgba(200, 200, 200, 0.9);
}
.scroll-btn.left {
  left: 0;
}
.scroll-btn.right {
  right: 0;
}
</style>

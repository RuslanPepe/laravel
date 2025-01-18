# Базовый образ Node.js (LTS)
FROM node:lts

# Устанавливаем рабочую директорию в контейнере
WORKDIR /app

# Копируем package.json и package-lock.json для установки зависимостей
COPY package.json package-lock.json ./

# Устанавливаем зависимости для Vue.js (Node.js)
RUN npm install

# Копируем весь код Vue.js в контейнер
COPY . .

# Собираем проект
RUN npm run build

# Указываем, что результат сборки будет доступен
CMD ["npm", "run", "dev"]

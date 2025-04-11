FROM node:lts

WORKDIR /vue

COPY . .

RUN npm install

EXPOSE 5170

CMD ["npm", "run", "dev", "--", "--host=0.0.0.0", "--port=5170"]

FROM node:lts

COPY . /vue

WORKDIR /vue

RUN npm i

EXPOSE 5170

CMD [ "npm", "run", "dev", "--", "--host=0.0.0.0", "--port=5170"]


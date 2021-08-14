FROM node:12-buster-slim

WORKDIR /app
COPY package.json .

ENV NODE_ENV production
ENV PORT 80
RUN npm install

COPY . .

EXPOSE 80

CMD ["node", "/app/server.js"]
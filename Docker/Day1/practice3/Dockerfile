FROM node
WORKDIR /app
COPY package.json .
RUN npm i
COPY . .
EXPOSE 8050
CMD npm run dev -- --host --port 8050

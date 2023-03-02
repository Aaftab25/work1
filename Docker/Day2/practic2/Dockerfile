FROM node:latest
WORKDIR /app
COPY package.json .
RUN npm i 
COPY . .
EXPOSE 5001      
CMD npm run dev -- --host --port 5001

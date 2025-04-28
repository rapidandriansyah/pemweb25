# LANGKAH-LANGKAH
1. Buat Folder pert1
2. Buat file bernama coding
3. Buat file bernama .env 
   (Isi 
   COMPOSE_PROJECT_NAME=esgul
   REPOSITORY_NAME=pemweb
   IMAGE_TAG=latest
   )
4. Buat file docker-compose.yml
   (Isi
    version: '3'
    services:
    web:
    image: nginx:latest
    ports: 
    - "80:80"
    volumes:
    - ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf
    - ./src:/usr/share/nginx/html
   )
5. Buat file nginx.conf
   (isi
    server {
    listen 80;
    server_name localhost;

    root /usr/share/nginx/html;
    index index.html index.htm;

    location / {
        try_files $uri $uri/ =404;
      }
    }
   )
navicate wsl-localhost
port 13306
password = p455w0rd

docker exec -it pemweb bash
root@pemweb:/var/www/html# composer create-project --prefer-dist raugadh/fila-starter .

jika koneksi terputus rm -rf .*

masuk ke src -> .env 
APP_NAME="Pemweb"
APP_ENV=local
APP_KEY=base64:lDbLSVLLZymaOGi5GlL/TUA4Wikqc2CyRLrt5kybhAw=
APP_DEBUG=true
APP_TIMEZONE='Asia/Jakarta'
APP_URL=http://localhost
ASSET_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=db_pemweb
DB_PORT=3306
DB_DATABASE=db_pemweb
DB_USERNAME=root
DB_PASSWORD=p455w0rd


chown -R www-data:www-data storage/*
php artisan storage:link
php artisan migrate
php artisan migrate:fresh
php artisan db:seed --force
php artisan shield:generate --all
php artisan project:init
chmod 777 -R storage/* && chmod 777 -R bootstrap/*

pindahkan tempalate tadi ke publik buat folder baru bernama front. Pindahkan css, images, js, plugins

## lalu buka resource, view -> buat folder components 
## -> lalu buat file yang bernama app.blade.php
## -> lalu di dalam view -> buat folder bernama livewire -> ada file bernama show-home-page.blade.php, show-profile.blade.php, show-about.blade.php.
## lalu buka app -> buat folder bernama Liveware -> lalu buat file bernama = ShowHomePage.php, ShowProfile.php, ShowAbout.php.
## setelah itu lanjut buka routes lalukan perubahan pada web.php
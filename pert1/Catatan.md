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
6. Buat folder src di dalamnya ada index html dan div html
   isi dari file div html
    <!-- <!DOCTYPE html> -->
    <!-- <html lang="en"> -->
    <!-- <head> -->
    <!-- <meta charset="UTF-8"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <!-- <title>Tag div</title> -->
    <!-- </head> -->
    <!-- <body> -->
    <!-- <div> -->
        This is a div element.
        <p>This a paragraph inside the div</p>
    <!-- </div> -->
    <!-- </body> -->
    <!-- </html> -->

   isi dari index.html
    <!-- <!DOCTYPE html> -->
    <!-- <html lang="en"> -->
    <!-- <head> -->
    <!-- <meta charset="UTF-8"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <!-- <title>Document</title> -->
    <!-- </head> -->
    <!-- <body> -->
    <!-- <h1>Aku ingin begini aku ingin begitu, sample html</h1> -->
    <!-- </body> -->
    <!-- </html> -->

Tag Struktur Dasar HTML
Tag	     Fungsi
<html>	  Menentukan dokumen sebagai HTML
<head>	  Berisi metadata, link CSS, dan judul halaman
<title>	  Menentukan judul halaman (terlihat di tab browser)
<body>	  Menampung seluruh konten yang akan ditampilkan di halaman

Tag Heading & Teks
Tag	         Fungsi
<h1> - <h6>	   Heading (judul), dari besar (h1) ke kecil (h6)
<p>	         Paragraf teks
<br>	         Baris baru (tanpa perlu paragraf baru)
<hr>	         Garis horizontal
<strong>	      Teks tebal (bold)
<em>	         Teks miring (italic)
<u>	         Garis bawah (underline)
<mark>	      Menyoroti teks
<small>	      Teks kecil
<del>	         Coret teks (strikethrough)

Tag Gambar & Multimedia
Tag	   Fungsi
<img>	   Menampilkan gambar
<audio>	Menampilkan pemutar audio
<video>	Menampilkan pemutar video

Tag Link & Navigasi
Tag	 Fungsi
<a>	 Membuat hyperlink
<nav>	 Menandai area navigasi

Tag List (Daftar)
Tag	 Fungsi
<ul>	 Membuat daftar tak berurutan (bullet points)
<ol>	 Membuat daftar berurutan (angka)
<li>	 Elemen dalam <ul> atau <ol>
<dl>	 Daftar deskripsi
<dt>	 Judul dalam daftar deskripsi
<dd>	 Deskripsi dalam daftar deskripsi

Tag Form & Input
Tag	      Fungsi
<form>	   Membuat form input data
<input>	   Elemen input (teks, email, password, dll.)
<textarea>	Kotak teks besar
<button>	   Tombol interaktif
<select>	   Dropdown
<option>	   Pilihan dalam dropdown
<label>	   Label untuk input

Tag Tabel
Tag	     Fungsi
<table>	  Membuat tabel
<tr>	     Baris tabel
<td>	     Kolom tabel
<th>	     Kolom header
<thead>	  Kepala tabel
<tbody>	  Isi tabel
<tfoot>	  Kaki tabel
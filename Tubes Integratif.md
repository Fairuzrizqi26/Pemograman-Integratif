
# Install Laravel- Pemograman Integratif

**Fairuzrizqi Nugraharsanto   1202190044**
---

### Install PHP

•	Download php di website https://windows.php.net/download#php-8.1. Kemudian pilih file zip Thread Safe seperti di gambar

 ![Screenshot (496)](https://user-images.githubusercontent.com/92350603/173061686-12344725-0aee-4a88-b5ad-f67abed3b407.png)


•	Lalu Ekstrak file php, kemudian copy di lokasi ` C:\Program Files ` dan cari file bernama `php.ini development`, ubah nama file salinan menjadi `php.ini`. setelah itu buka menggunakan text editor, dan jadikan seperti pada gambar, kemudian simpan.

  ![Screenshot (499)](https://user-images.githubusercontent.com/92350603/173063804-73a2cb59-d55a-4d09-9a3b-f6ca653c010b.png)
  ![Screenshot (500)](https://user-images.githubusercontent.com/92350603/173063819-245834f4-3f85-468f-90a8-598729031b22.png) 

•	Buka `Edit The System Environment Variables`, klik `Environment Variables`

  ![Screenshot (501)](https://user-images.githubusercontent.com/92350603/173063706-e95eac23-5974-40cf-9aff-8b29d16e94a0.png)

  
•	Pilih variabel path untuk menambahkan alamat dari file php tadi, kemudian pilih ok.

  ![Screenshot (502)](https://user-images.githubusercontent.com/92350603/173063739-5563bc04-3a82-47a8-b3d4-253771703c18.png)
  ![Screenshot (506)](https://user-images.githubusercontent.com/92350603/173063765-0054eacd-69fb-4ef2-84da-b999a1e4b5a3.png)


•	Buka terminal dan ketikkan `php –v`, maka akan muncul tampilan seperti digambar, yang artinya php berhasil terinstall.

  ![Screenshot (507)](https://user-images.githubusercontent.com/92350603/173063854-27480a7b-71ff-4364-888c-bab9950e1f9b.png)


### INSTALL COMPOSER

•	Downlaod Composer https://getcomposer.org/download/

  ![Screenshot (497)](https://user-images.githubusercontent.com/92350603/173065064-1db1a6ee-dfd4-4815-8e4a-b5d88f7cb68f.png)

  
•	Install file composer seperti biasa. Jika sudah buka terminal dan ketik “composer”, maka akan muncul tampilan seperti digambar, yang mana composer sudah terinstall.

  ![Screenshot (508)](https://user-images.githubusercontent.com/92350603/173065140-45fbebbd-392e-4577-ac9f-b8602003f385.png)


### INSTALL LARAVEL VIA COMPOSER 

•	Buka website https://laravel.com/docs/9.x#installation-via-composer, untuk menyalin command installasi laravel via composer

•	Buat folder baru di komputer untuk menginstall laravel. Kemudian buka terminal lalu masuk ke folder yang telah di buat

 ![Screenshot (511)](https://user-images.githubusercontent.com/92350603/173066077-77607315-3a72-4849-92f7-7fa496dd335b.png)

•	Buat project untuk install laravel dengan command `composer create-project laravel/laravel nama_project`
 
 ![Screenshot (512)](https://user-images.githubusercontent.com/92350603/173066144-b1b33794-aa9c-4776-bd05-6f4269053f43.png)

•	Masuk  terlebih dahulu ke folder project yang sudah dibuat dengan command `cd nama_project/` Dan jalankan project dengan command `php artisan serve`

  ![Screenshot (513)](https://user-images.githubusercontent.com/92350603/173066510-99e581df-9cc8-492d-9239-29859be24314.png)
  
•	Copy server laravel, untuk dibuka di browser

 ![Screenshot (514)](https://user-images.githubusercontent.com/92350603/173066567-28d75161-1d60-44e1-8845-59ec9915c3e5.png)
 ![Screenshot (515)](https://user-images.githubusercontent.com/92350603/173066605-f3f6e812-c3b2-44d8-bfe1-a8ec4845f4e7.png)
 
---
# TAHAP 2 - RSS 
---

• Ubah DB_DATABASE di .env sesuai dengan nama database yang dibuat di phpmyadmin

 ![Screenshot (538)](https://user-images.githubusercontent.com/92350603/175769425-43958050-f202-4ecc-887f-48c06065afe6.png)
 ![Screenshot (539)](https://user-images.githubusercontent.com/92350603/175769495-55558887-8947-4843-958c-0edfee04f431.png)


• Buat 2 table rss dan news dengan fitur migrations menggunakan perintah
  ```
  php artisan make:migration create_rss_table
  
  php artisan make:migration create_news_table
  ```
• Tambahkan kolom name dan url pada tabel rss, seperti pada gambar dibawah
  ![Screenshot (554)](https://user-images.githubusercontent.com/92350603/175769559-7c32856e-18fa-44f8-81f9-c953c0903477.png)
  
• Tambahkan kolom title, img_url, description, source_url,  dan rss_id pada tabel news, seperti pada gambar dibawah
  ![image](https://user-images.githubusercontent.com/92350603/175769571-77c25226-2e96-4173-9d86-a757a645dcd7.png)

• Untuk menjalankan migrasi yang dibuat jalankan perintah diterminal seperti dibawah, lalu cek database
  ```
  php artisan migrate
  ```
  ![image](https://user-images.githubusercontent.com/92350603/175769656-a221d9ee-cb90-4f3b-b353-eeec02ec2ee8.png)

• Buat koneksi  model  ke database  dengan membuat seeder dan controller untuk tabel Rss dan News, dengan perintah
  ```
  php artisan make:model Rss --seed --controller
  ```
• Edit file Rss.php, RssSeeder.php serta DatabaseSeeder.php seperti pada gambar dibawah
  ![image](https://user-images.githubusercontent.com/92350603/175769756-88453f90-75d4-4b0d-98e5-9cf1912afd2e.png)
  ![image](https://user-images.githubusercontent.com/92350603/175769765-bf7b178a-60ff-4aae-a31a-9c59c165eb5a.png)
  ![image](https://user-images.githubusercontent.com/92350603/175769779-82fed0dc-1a03-4d54-9b94-e6b1cf966571.png)

• Kemudian cek koneksi dengan perintah
  ```
  php artisan db:seed
  ```  
• Edit file News.php, NewsController.php, web.php, serta file migration News seperti pada gambar dibawah
  ![image](https://user-images.githubusercontent.com/92350603/175769819-224b6314-2d49-4806-a4c6-870804160943.png)
  ![image](https://user-images.githubusercontent.com/92350603/175769842-03c73196-1762-41a3-ad79-4a795a078867.png)
  ![image](https://user-images.githubusercontent.com/92350603/175769834-f94c1037-c276-4d5d-b35f-46b1422e0931.png)

• Cek localhost di http://127.0.0.1:8000/aggregrate/1 
  ![Screenshot (550)](https://user-images.githubusercontent.com/92350603/175769884-46c7fd9a-ee50-43d2-8be3-b95015c434ce.png)
  
• Cek localhost di http://127.0.0.1:8000/aggregrate/2
  ![Screenshot (551)](https://user-images.githubusercontent.com/92350603/175769941-e02f4460-ad5e-4b21-8aac-314ef49ecfc1.png)
  
• Cek localhost di http://127.0.0.1:8000/aggregrate/3 
  ![Screenshot (552)](https://user-images.githubusercontent.com/92350603/175769945-35275d49-846b-4a2e-8c3b-787ec8d84afa.png)
  
• Dan cek database phpmyadmin
  ![image](https://user-images.githubusercontent.com/92350603/175769961-ba17e603-9437-45b3-85a1-65666272a77b.png)

  
### Thank You - Fairuzrizqi


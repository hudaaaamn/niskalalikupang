# Website Pariwisata Sektoral Likupang

Website Pariwisata Likupang: Pulisan dan Marinsow hadir sebagai platform digital untuk memperkenalkan potensi pariwisata sektoral yang dimiliki oleh dua desa wisata unggulan di Kecamatan Likupang Timur, yakni Desa Pulisan dan Desa Marinsow. Website ini dikembangkan sebagai bagian dari program kerja Kuliah Kerja Nyata-Pembelajaran Pemberdayaan Masyarakat (KKN-PPM) Universitas Gadjah Mada yang bertujuan untuk mendukung masyarakat dalam memajukan sektor pariwisata lokal secara berkelanjutan. Melalui laman ini, kami menyuguhkan informasi terkini seputar destinasi wisata alam, budaya lokal, kuliner khas, kegiatan masyarakat, serta fasilitas pendukung yang tersedia di kawasan Pulisan dan Marinsow. Semua disusun agar wisatawan, baik domestik maupun mancanegara, dapat dengan mudah merencanakan perjalanan yang berkesan di kawasan pesisir utara Sulawesi Utara ini. Dengan desain yang ramah pengguna dan konten yang informatif, website ini menjadi jembatan antara kekayaan alam serta budaya lokal dengan para wisatawan yang ingin menjelajah lebih jauh keindahan Likupang. Kami percaya bahwa pemanfaatan teknologi digital dapat memperkuat promosi wisata dan meningkatkan dampak positif bagi masyarakat setempat.

## Tech Stack

-   **Client :** Tailwind, Blade Template
-   **Server :** PHP with Laravel
-   **DBMS   :** MySQL

## Additional supporting details

- CK Editor, Sweet Alert, Yajra Datatables, Template Tailadmin, Template Tailwind Awesome, Flowbite, AOS (Animate on Scroll), GSAP, Boxicons, Chart Js, Laravel Breeze

## Run Locally

Clone the project

```bash
  git clone https://github.com/hudaaaamn/niskalalikupang/.git
```

Go to the project directory

```bash
  cd desa-wisata
```

Run the command

```bash
  composer update
```

Or

```bash
  composer install
```

Copy the .env file from .env.example.

```bash
  cp .env.example .env
```

Please don't forget to create the 'db_desawisata' database in phpMyAdmin. The database name is up to you, but in this project, We are using that name.

Configuration in .env is for database setup

```bash
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=db_desawisata
  DB_USERNAME=root
  DB_PASSWORD=
```

If you are using Apache or Nginx as your web server, change "APP_URL" in the .env to the following, choose one according to your web server:

```bash
  // Apache
  APP_URL=http://desa-wisata.test

  // Nginx
  APP_URL=http://desa-wisata.test:8080
```

If you want to set the default timezone of your Laravel application to Asia or specifically Indonesia, make sure to change APP_TIMEZONE in .env to the following:

```bash
  APP_TIMEZONE=Asia/Jakarta
```

If you want to set the default language of your Laravel application to Indonesian, make sure to change APP_LOCALE in .env to the following:

```bash
  APP_LOCALE=id
```

Generate key

```bash
  php artisan key:generate
```

Create symlink

```bash
  php artisan storage:link
```

Migrate database

```bash
  php artisan migrate
```

Run User Seeder

```bash
  php artisan db:seed --class=UserSeeder
```

Install node_modules

```bash
  npm i
```

Run npm run dev

```bash
  npm run dev
```

Run the application, make sure the web server is running

```bash
  // If you are using Apache, enter the following URL in your web browser:
  http://desa-wisata.test

  // If you are using Nginx, enter the following URL in your web browser:
  http://desa-wisata.test:8080
```

Another way to run the application is to use the command php artisan serve. Take the URL from the command output and enter it in your web browser

## Documentation

-   [Tailwind](https://tailwindcss.com/docs/installation)
-   [Blade Template](https://laravel.com/docs/11.x/blade)
-   [Laravel](https://laravel.com/docs/11.x)
-   [CK Editor 4](https://ckeditor.com/docs/ckeditor4/latest/guide/dev_installation.html)
-   [Sweet Alert](https://realrashid.github.io/sweet-alert/)
-   [Yajra Datatables](https://yajrabox.com/docs/laravel-datatables/master/installation)
-   [Template Tailadmin](https://tailadmin.com/)
-   [Tailwind Awesome](https://www.tailwindawesome.com/)
-   [Flowbite](https://flowbite.com/)
-   [AOS](https://michalsnik.github.io/aos/)
-   [GSAP](https://gsap.com/)
-   [Boxicons](https://boxicons.com/)
-   [Chart Js](https://www.chartjs.org/)
-   [Laravel Breeze](https://laravel.com/docs/11.x/starter-kits#laravel-breeze)

## Features

-   User Management
-   Login
-   Destination Management
-   Event Management
-   Article Management
-   Light/dark mode toggle at CMS


## Authors

- [@hudaaaamn](https://www.github.com/hudaaaamn)

## Feedback

If you have any feedback, please reach out to us at hudamnur21@gmail.com

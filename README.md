<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Tutorial Github

## Forking dari Repository Utama

1. Buka Halaman [Repo](https://github.com/Harun1804/reservasi-barbershop-salon)

2. Tekan Icon Fork

## Mengcloning Repository Hasil Forking

1. Buka Halaman Github Anda

2. Pilih Repository Hasil Forking

3. Pada Komputer Anda Buka Console / Command Promt

4. Ketikan Perintah Berikut

```
git clone https://github.com/usernamegithubanda/reservasi-barbershop-salon
```

4. Masuk Ke Dalam Folder Hasil Clone

```
cd reservasi-barbershop-salon
```

## Hubungkan dengan repository utama

1. Ketikan perintah berikut pada folder repo hasil forking anda

```
git remote add upstream https://github.com/Harun1804/reservasi-barbershop-salon.git
```

2. Ketikan perintah berikut untuk mengupdate data terbaru

```
git fetch upstream
```

3. Untuk mendownload data terbaru dari branch master gunakan perintah berikut

```
git pull upstream master
```

# Tutorial Penggunaan & Konfigurasi Laravel

1. Install Composer Terlebih Dahulu <br>
   [Download disini](https://getcomposer.org/download/)
2. Install Packagenya Terlebih Dahulu

```
composer install
```

3. Copy isi file .env.example

```
cp .env.example .env
```

4. Generate Key Baru

```
php artisan key:generate
```

5. Buatlah database kosong di phpmyadmin dengan nama **db_reservasi**
6. Kemudian Database Tersebut Atur Di File .env pada bagian DB_DATABASE
7. Lakukan Migrasi Database

```
php artisan migrate
```

8. Jalankan aplikasi

```
php artisan serve
```

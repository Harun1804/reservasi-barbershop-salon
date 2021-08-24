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

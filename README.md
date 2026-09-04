# Library System

---

# 🎯 Description
Simple Library Information System. Aplikasi ini dibangun untuk mempermudah pengelolaan operasional perpustakaan, mulai dari manajemen pendataan buku, pendaftaran anggota, hingga pencatatan transaksi peminjaman dan pengembalian buku secara terkomputerisasi.

---

# ⚙️ Requirements
- PHP
- Composer
- MySQL
- Laravel

## Installation
1. Clone repository ini ke mesin lokal kamu:
   ```bash
   git clone [https://github.com/username-kamu/library-system.git](https://github.com/username-kamu/library-system.git)
2. cd library-system
3. composer install
4. cp .env.example .env
5. Buka file .env dan sesuaikan kredensial koneksi database MySQL kamu (fokus pada DB_DATABASE, DB_USERNAME, dan DB_PASSWORD).
6. php artisan key:generate
7. php artisan migrate
8. php artisan serve

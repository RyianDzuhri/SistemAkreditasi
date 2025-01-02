# Cara Clone Yii Framework Aplikasi Sistem Akreditasi

Dokumentasi ini menjelaskan langkah-langkah untuk meng-clone project berbasis Yii Framework dari repository.

## Prasyarat
1. **Git** telah terinstall di sistem Anda. Jika belum, download dan install [Git](https://git-scm.com/).
2. **Composer** telah terinstall di sistem Anda. Jika belum, download dan install [Composer](https://getcomposer.org/).
3. Memiliki URL repository project Yii Framework yang akan di-clone.
4. Web server seperti **XAMPP**, **Laragon**, atau **Laravel Valet** sudah terpasang (opsional, untuk menjalankan aplikasi).

---

## Langkah-Langkah

### 1. Clone Repository
- Buka terminal atau command prompt.
- Arahkan ke direktori tempat Anda ingin menyimpan project.
- Jalankan perintah berikut:

  ```bash
  git clone <URL-repository>
  ```
  Contoh:
  ```bash
  git clone https://github.com/RyianDzuhri/SistemAkreditasi.git
  ```

- Setelah selesai, masuk ke direktori project:

  ```bash
  cd SistemAkreditasi
  ```

---

### 2. Install Dependencies dengan Composer
- Di dalam direktori project, jalankan perintah:

  ```bash
  composer install
  ```
  Perintah ini akan mengunduh semua package yang dibutuhkan sesuai dengan file `composer.json`.

---
### 3. Jalankan Aplikasi
- Jika Anda menggunakan built-in server Yii Framework, jalankan perintah berikut:

  ```bash
  php yii serve
  ```
- Akses aplikasi di browser pada alamat `http://localhost:8080` (port default).

---
# Untuk Tugas Mobile klik "tugas" dibawah:
[Tugas](tugas.md)
---
# Untuk Clone Project Baca Di Bawah Ini 
# Tugas-flutter-app-web-FullStack

## Struktur Proyek
- `backend/` : Laravel API backend
- `fe_digital_library/` : Flutter frontend aplikasi digital library

## Clone Repository
```bash
git clone <repository-url>
cd Tugas-flutter-app-web-FullStack
```

## Setup Backend (Laravel)
1. Masuk ke folder backend:
   ```bash
   cd backend
   ```
2. Install dependency PHP:
   ```bash
   composer install
   ```
3. Salin file environment dan konfigurasi:
   ```bash
   cp .env.example .env
   ```
   Pada Windows dapat menggunakan:
   ```powershell
   copy .env.example .env
   ```
4. Generate application key:
   ```bash
   php artisan key:generate
   ```
5. Atur koneksi database di file `.env`.
6. Jalankan migrasi dan seeder:
   ```bash
   php artisan migrate --seed
   ```
7. Jika menggunakan asset front-end Laravel, install juga Node dependency:
   ```bash
   npm install
   npm run dev
   ```
8. Jalankan server lokal Laravel:
   ```bash
   php artisan serve
   ```

## Setup Frontend (Flutter)
1. Masuk ke folder Flutter:
   ```bash
   cd fe_digital_library
   ```
2. Install dependency Flutter:
   ```bash
   flutter pub get
   ```
3. Jalankan aplikasi:
   ```bash
   flutter run
   ```
   Atau untuk target browser:
   ```bash
   flutter run -d chrome
   ```

## Prasyarat
- PHP
- Composer
- Node.js dan npm
- Flutter SDK
- Database yang dikonfigurasi sesuai `.env`

## Catatan
- Pastikan kedua bagian proyek dijalankan di direktori yang benar.
- Backend Laravel menyediakan API yang dapat diakses dari frontend Flutter bila bekerja dalam mode development.

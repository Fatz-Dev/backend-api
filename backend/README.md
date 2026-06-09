# Tugas Milestone Mk Web Framework
## Fata Zikrillah

## Installasi Backend Laravel
1. Masuk ke folder backend:
   ```bash
   cd backend
   ```
2. Install dependency PHP:
   ```bash
   composer install
   ```
3. Salin file environment:
   ```bash
   cp .env.example .env
   ```
   Pada Windows:
   ```powershell
   copy .env.example .env
   ```
4. Generate application key:
   ```bash
   php artisan key:generate
   ```
5. Edit konfigurasi database di `.env`.
6. Jalankan migrasi dan seeder:
   ```bash
   php artisan migrate --seed
   ```
7. Jika diperlukan, install dependency front-end:
   ```bash
   npm install
   npm run dev
   ```
8. Jalankan server lokal:
   ```bash
   php artisan serve
   ```

## Struktur Proyek Backend
- `app/` : kode aplikasi Laravel
- `routes/` : definisi routing API dan web
- `database/migrations/` : skema tabel
- `database/seeders/` : data awal

## Informasi Tambahan
- Pastikan PHP, Composer, Node.js, dan npm sudah terpasang.
- Sesuaikan pengaturan database pada `.env` sebelum migrasi.

## License
Proyek ini menggunakan lisensi MIT.

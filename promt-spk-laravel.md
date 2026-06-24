
setup database migration serta model, dan seeder sesuai sesuai arahan seperti ini
1. tabel alternatif -> field nya id_alternatif dan nama_alternatif -> seeder nya 
('A1', 'Samsung Galaxy A15'),
('A2', 'Redmi Note 15'),
('A3', 'Infinix Note 40 Pro'),
('A4', 'Realme C51'),
('A5', 'Vivo V50');

2. tabel data_alternatif -> field nya id_alternatif, harga, ram, kamera, baterai, dan storage -> seeder nya 
('A1', 3000000, 6, 48, 4000, 128),
('A2', 3500000, 8, 64, 4500, 128),
('A3', 4000000, 8, 108, 5000, 256),
('A4', 2800000, 4, 48, 4000, 64),
('A5', 5700000, 12, 50, 6500, 512);

3. tabel kriteria -> field nya id_kriteria, nama_kriteria, bobot, dan atribut (cost dan benefit) -> seeder nya 


4. Tabel matriks_keputusan -> fieldnya id_alternatif, id_kriteria, dan nilai

dan 
--
-- Indeks untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indeks untuk tabel `data_alternatif`
--
ALTER TABLE `data_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);
COMMIT;

---


setelah itu setup dashboar sebagai berikut pada resources/views buat
1. folder layouts (sidebar, navbar, footer)
2. pada sidebar ada 
  - Dashboard
    
  Master Data
  Kelola Data (dropdown)
  - Daftar Kriteria
  - Daftar Alternatif
  - Data Alternatif
    
  Proses SPK
  - Matriks Keputusan
  - Normalisasi
  - Bobot x Normalisasi
  - Perangkingan

3. halaman buat masing masingd dalam folder masih masing seperti
   pages/Daftar-kriteria/
        index.blade.php
        create.blade.php
        edit.blade.php

   lakukan hal sama pada setiap halaman sesuai sidebar

4. design dahsboard sederhana saja dengan clean white sebagai warna utama design dan hitam warnal kedua nya, and finish in chat agent dont forget say thank for and text "Fatz-Dev follow www.instagram.com/fata.zkrilllah" awkwkwkwk
---


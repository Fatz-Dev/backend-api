<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('books')->insert([
            [
                'title' => 'Bumi',
                'author_id' => 1,
                'publisher_id' => 1,
                'isbn' => '978-602-03-0403-1',
                'tahun_terbit' => 2014,
                'kategori' => 'Fiksi Ilmiah',
                'jumlah_stok' => 15
            ],
            [
                'title' => 'Laskar Pelangi',
                'author_id' => 2,
                'publisher_id' => 2,
                'isbn' => '979-3062-79-7',
                'tahun_terbit' => 2005,
                'kategori' => 'Novel',
                'jumlah_stok' => 20
            ],
            [
                'title' => 'Cantik Itu Luka',
                'author_id' => 3,
                'publisher_id' => 3,
                'isbn' => '978-602-220-153-2',
                'tahun_terbit' => 2002,
                'kategori' => 'Fiksi Sejarah',
                'jumlah_stok' => 10
            ],
            [
                'title' => 'Ayat-Ayat Cinta',
                'author_id' => 4,
                'publisher_id' => 4,
                'isbn' => '978-979-3604-02-4',
                'tahun_terbit' => 2004,
                'kategori' => 'Novel',
                'jumlah_stok' => 25
            ],
            [
                'title' => 'Supernova',
                'author_id' => 5,
                'publisher_id' => 5,
                'isbn' => '978-979-96257-0-2',
                'tahun_terbit' => 2001,
                'kategori' => 'Fiksi Ilmiah',
                'jumlah_stok' => 12
            ],
            [
                'title' => 'Negeri 5 Menara',
                'author_id' => 6,
                'publisher_id' => 6,
                'isbn' => '978-979-22-4861-6',
                'tahun_terbit' => 2009,
                'kategori' => 'Novel',
                'jumlah_stok' => 18
            ],
            [
                'title' => 'Pulang',
                'author_id' => 7,
                'publisher_id' => 7,
                'isbn' => '978-602-03-2311-7',
                'tahun_terbit' => 2015,
                'kategori' => 'Novel',
                'jumlah_stok' => 14
            ],
            [
                'title' => 'Marmut Merah Jambu',
                'author_id' => 8,
                'publisher_id' => 8,
                'isbn' => '978-979-780-357-5',
                'tahun_terbit' => 2010,
                'kategori' => 'Komedi',
                'jumlah_stok' => 22
            ],
            [
                'title' => 'Hujan',
                'author_id' => 1,
                'publisher_id' => 1,
                'isbn' => '978-602-03-2478-7',
                'tahun_terbit' => 2016,
                'kategori' => 'Fiksi Ilmiah',
                'jumlah_stok' => 30
            ],
            [
                'title' => 'Rembulan Tenggelam di Wajahmu',
                'author_id' => 10,
                'publisher_id' => 10,
                'isbn' => '978-602-8328-22-7',
                'tahun_terbit' => 2009,
                'kategori' => 'Fiksi Fantasi',
                'jumlah_stok' => 11
            ],
        ]);
    }
}

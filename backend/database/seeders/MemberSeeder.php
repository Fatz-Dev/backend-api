<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('members')->insert([
            [
                'name' => 'Ali',
                'email' => 'ali@mail.com',
                'phone' => '081234567',
                'address' => 'Jl. Merdeka No. 1'
            ],
            [
                'name' => 'Budi',
                'email' => 'budi@mail.com',
                'phone' => '081987654',
                'address' => 'Jl. Sudirman No. 2'
            ],
            [
                'name' => 'Cici',
                'email' => 'cici@mail.com',
                'phone' => '081111222',
                'address' => 'Jl. Diponegoro No. 3'
            ],
            [
                'name' => 'Dedi',
                'email' => 'dedi@mail.com',
                'phone' => '081222333',
                'address' => 'Jl. Gatot Subroto No. 4'
            ],
            [
                'name' => 'Eko',
                'email' => 'eko@mail.com',
                'phone' => '081333444',
                'address' => 'Jl. Jenderal Sudirman No. 5'
            ],
            [
                'name' => 'Fajar',
                'email' => 'fajar@mail.com',
                'phone' => '081444555',
                'address' => 'Jl. Diponegoro No. 6' 
            ],
            [
                'name' => 'Gita',
                'email' => 'gita@mail.com',
                'phone' => '081555666',
                'address' => 'Jl. Merdeka No. 7'
            ],
            [
                'name' => 'Hadi',
                'email' => 'hadi@mail.com',
                'phone' => '081666777',
                'address' => 'Jl. Sudirman No. 8'
            ],
            [
                'name' => 'Indah',
                'email' => 'indah@mail.com',
                'phone' => '081777888',
                'address' => 'Jl. Diponegoro No. 9'
            ],
            [
                'name' => 'Joko',
                'email' => 'joko@mail.com',
                'phone' => '081888999',
                'address' => 'Jl. Jenderal Sudirman No. 10'
            ],
        ]);
    }
}

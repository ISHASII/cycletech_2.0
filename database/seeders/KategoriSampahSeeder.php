<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSampahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategoris = [
            ['kategori' => 'cardboard', 'created_at' => now(), 'updated_at' => now()],
            ['kategori' => 'glass', 'created_at' => now(), 'updated_at' => now()],
            ['kategori' => 'metal', 'created_at' => now(), 'updated_at' => now()],
            ['kategori' => 'paper', 'created_at' => now(), 'updated_at' => now()],
            ['kategori' => 'plastic', 'created_at' => now(), 'updated_at' => now()],
            ['kategori' => 'plastic sachet', 'created_at' => now(), 'updated_at' => now()],
            ['kategori' => 'trash', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('kategori_sampah')->insert($kategoris);
    }
}
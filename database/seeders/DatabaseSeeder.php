<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AdminSeeder::class);
        $this->call(ArtikelSeeder::class);
        $this->call(KategoriSampahSeeder::class);
        $this->call(KreasiCBSeeder::class);
        $this->call(KreasiGLSeeder::class);
        $this->call(KreasiMTSeeder::class);
        $this->call(KreasiPLSeeder::class);
        $this->call(KreasiPPSeeder::class);
        $this->call(KreasiPSSeeder::class);
        $this->call(RewardSeeder::class);
    }
}
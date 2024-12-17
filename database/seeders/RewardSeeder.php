<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RewardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rewards')->insert([
            [
                'name' => 'Tumbler Stainless Steel',
                'points_required' => 1000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tempat Makan Plastik',
                'points_required' => 700,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kaos Cycle Tech',
                'points_required' => 600,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tas Ramah Lingkungan',
                'points_required' => 450,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
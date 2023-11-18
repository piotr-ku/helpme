<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AssistantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('assistants')->insert([
            'name' => 'Stacja benzynowa ORLEN',
            'type' => 'business',
            'address' => 'ul. Wspólna 1, 70-100 Szczecin',
            'latitude' => 53.430000,
            'longitude' => 14.550000,
            'rating' => 4.5
        ]);

        DB::table('assistants')->insert([
            'name' => 'Restauracja Kaszubski',
            'type' => 'business',
            'address' => 'ul. Rolnicza 8, 70-120 Szczecin',
            'latitude' => 53.230000,
            'longitude' => 14.120000,
            'rating' => 4.0
        ]);

        DB::table('assistants')->insert([
            'name' => 'Marek',
            'type' => 'volunteer',
            'address' => '',
            'latitude' => 53.130000,
            'longitude' => 14.020000,
            'rating' => 5.0
        ]);
    }
}

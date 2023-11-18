<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'assistance_id' => 1,
            'title' => 'Tankowanie',
            'description' => 'Nasz asystent zatankuje Twój samochód.',
        ]);

        DB::table('services')->insert([
            'assistance_id' => 1,
            'title' => 'Otworzenie drzwi',
            'description' => 'Nasz asystent otworzy Tobie drzwi.',
        ]);

        DB::table('services')->insert([
            'assistance_id' => 2,
            'title' => 'Otworzenie drzwi',
            'description' => 'Nasz asystent otworzy Tobie drzwi.',
        ]);

        DB::table('services')->insert([
            'assistance_id' => 3,
            'title' => 'Pomoc w zrobieniu zakupów.',
            'description' => 'Chętnie pomogę w zrobieniu zakupów na terenie Pomorzan.',
        ]);
    }
}

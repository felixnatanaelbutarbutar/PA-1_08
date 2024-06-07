<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LingkunganSeeder extends Seeder
{
    public function run()
    {
        $lingkungans = [
            ['nama' => 'Kapernaum'],
            ['nama' => 'Tiberias'],
            ['nama' => 'Jerusalem'],
            ['nama' => 'Samaria'],
            ['nama' => 'Nazaret'],
            ['nama' => 'Betlehem'],
            ['nama' => 'Galilea'],
            ['nama' => 'Sion'],
        ];

        DB::table('lingkungans')->insert($lingkungans);
    }
}

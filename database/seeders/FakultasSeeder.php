<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakultas = [
            'nama' => 'Ilmu Komputer',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        DB::table('fakultas')->insert($fakultas);
    }
}

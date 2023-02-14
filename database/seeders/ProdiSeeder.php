<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prodi = [
            [
                'nama' => 'Teknologi Informasi',
                'fakultas_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Sistem Informasi',
                'fakultas_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        DB::table('prodis')->insert($prodi);
    }
}

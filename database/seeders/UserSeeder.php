<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'name' => 'admin',
                'username' => 'admin',
                'role' => 'admin',
                'is_active' => true,
                'email' => 'admin@sobatkrs.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'user',
                'username' => 'user',
                'nim' => '215150700111001',
                'fakultas_id' => 1,
                'prodi_id' => 1,
                'is_active' => true,
                'email' => 'user@sobatkrs.com',
                'password' => bcrypt('password'),
                'instagram_url' => 'https://www.instagram.com/m_irtada/'
            ]
        ])->each(function ($user)
        {
            DB::table('users')->insert($user);
        });
    }
}

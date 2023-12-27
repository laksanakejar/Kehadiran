<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Pembimbing',
                'email' => 'pembimbing@gmail.com',
                'password' => bcrypt('pembimbing'),
                'role' => 'pembimbing',
            ],
            [
                'name' => 'Kesiswaan',
                'email' => 'kesiswaan@gmail.com',
                'password' => bcrypt('kesiswaan'),
                'role' => 'kesiswaan',
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => bcrypt('user'),
                'role' => 'user',
            ]
            ]);
    }
}

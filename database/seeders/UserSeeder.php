<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Ivan',
            'email' => 'ivan@gmail.ru',
            'password' => '12345678',
            'is_admin' => true,
        ]);
    }
}

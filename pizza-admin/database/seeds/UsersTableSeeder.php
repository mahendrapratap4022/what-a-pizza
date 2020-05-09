<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Pizza',
            'last_name' => 'Admin',
            'email' => 'admin-pizza@gmail.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Another',
            'last_name' => 'User',
            'email' => 'another@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}

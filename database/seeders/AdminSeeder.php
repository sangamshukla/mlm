<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin@feedwell.com',
            'del'=>0,
            'password' => Hash::make('password'),
            'remember_token'=>NULL,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

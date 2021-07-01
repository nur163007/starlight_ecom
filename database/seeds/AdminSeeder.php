<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Nur',
            'email' => 'nur@gmail.com',
            'password' => Hash::make('password'),
            'phone' => '01768476053',
        ]);
    }
}

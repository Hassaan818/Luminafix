<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $current_time_stamp = now();
        DB::table('users')->insert([
            'id' => 1,
            'role_id' => '1',
            'name' => 'Waqar',
            'email'  => 'fwaseem9@gmail.com',
            'is_active'  => 1,
            'password'  => bcrypt("luminafix24"),
            'created_at'  => $current_time_stamp,
            'updated_at'  => $current_time_stamp
        ]);
    }
}

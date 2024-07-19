<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $current_time_stamp = now();

        DB::table('roles')->insert([
            'name' =>  "admin",
            'description' => "This is admin role",
            'created_at'  => $current_time_stamp,
            'updated_at'  => $current_time_stamp
        ]);
    }
}

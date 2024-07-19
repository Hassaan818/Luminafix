<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'title' => 'web Development',
            'slug' => 'web-development',
            'sub_heading' => 'reviving the trend of making your business online',
            'short_description' => fake()->paragraph(30),
            'description' => fake()->paragraph(50),
            'logo' => fake()->image(),
            'status' => '1',
            'created_by' => 1,
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            'title' => 'Ecommerce App',
            'description' => fake()->paragraph(50),
            'image' => fake()->image(),
        ]);
        DB::table('projects')->insert([
            'title' => 'Shopify App',
            'description' => fake()->paragraph(50),
            'image' => fake()->image(),
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'title' => 'Amazon Dropshipping',
            'slug' => 'amazon-dropshipping',
            'sequence' => '1',
            'short_description' => fake()->paragraph(50),
            'logo' => fake()->image(),
            'created_by' => 1,
        ]);
        DB::table('categories')->insert([
            'title' => 'Website Development',
            'slug' => 'website-development',
            'sequence' => '2',
            'short_description' => fake()->paragraph(50),
            'logo' => fake()->image(),
            'created_by' => 1,
        ]);
        DB::table('categories')->insert([
            'title' => 'Article Writing',
            'slug' => 'article-writing',
            'sequence' => '3',
            'short_description' => fake()->paragraph(50),
            'logo' => fake()->image(),
            'created_by' => 1,
        ]);
    }
}

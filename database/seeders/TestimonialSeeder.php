<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testimonials')->insert([
            'title' => 'Blog web app',
            'slug' => 'Blog-web-app',
            'description' => fake()->paragraph(20),
            'image' => fake()->imageUrl(),
        ]);
        DB::table('testimonials')->insert([
            'title' => 'Amazon affiliate',
            'slug' => 'amazon-affiliate',
            'description' => fake()->paragraph(20),
            'image' => fake()->imageUrl(),
        ]);
    }
}

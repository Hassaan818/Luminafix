<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teams')->insert([
           'name' => 'waqar',
            'slug' => 'waqar',
            'job_title' => fake()->sentence(),
            'short_description' => fake()->paragraph(50),
            'image' => fake()->image(),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'description' => fake()->paragraph(100)
        ]);
        DB::table('teams')->insert([
            'name' => 'farrukh',
             'slug' => 'farrukh',
             'job_title' => fake()->sentence(),
             'short_description' => fake()->paragraph(50),
             'image' => fake()->image(),
             'phone' => fake()->phoneNumber(),
             'email' => fake()->email(),
             'description' => fake()->paragraph(100)
         ]);
         DB::table('teams')->insert([
            'name' => 'ahmed',
             'slug' => 'ahmed',
             'job_title' => fake()->sentence(),
             'short_description' => fake()->paragraph(50),
             'image' => fake()->image(),
             'phone' => fake()->phoneNumber(),
             'email' => fake()->email(),
             'description' => fake()->paragraph(100)
         ]);
    }
}

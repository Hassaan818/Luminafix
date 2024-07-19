<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            'phone' => fake()->randomNumber(),
            'email' => fake()->email(),
            'facebook' => fake()->url(),
            'instagram' => fake()->url(),
            'X' => fake()->url(),
            'linkedin' => fake()->url(),
            'logo' => fake()->image(),
            'favicon' => fake()->image(),
            'terms_and_conditions' => fake()->paragraph(200),
            'privacy_policy' => fake()->paragraph(200)
        ]);
    }
}

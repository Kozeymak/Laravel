<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Articles;
// use Illuminate\Database\Eloquent\Factories\Factory;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Articles::factory()->count(10)->create();
    }
}
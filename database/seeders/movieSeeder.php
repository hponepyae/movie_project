<?php

namespace Database\Seeders;


use App\Models\AllMovie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class movieSeeder extends Seeder
{

    public function run(): void
    {
        AllMovie::factory()->count(2)->create();
    }
}

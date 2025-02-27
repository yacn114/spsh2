<?php

namespace Database\Seeders;

use App\Models\SiteData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteData::factory()->count(1)->create();
    }
}

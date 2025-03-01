<?php

namespace Database\Seeders;

use App\Models\categoryCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class categoryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = categoryCategory::insert([[
            "name"=> "مهندسی نرم افزار",
            'slug'=>"it",
            "image"=>"/assets/img/content.png"
        ],
        [
            "name"=> "استارت آپ",
            'slug'=>"startup",
            "image"=>"/assets/img/briefcase.png"
        ],
        [
            "name"=> "مالی و حسابداری",
            'slug'=>"finance",
            "image"=>"/assets/img/career.png"
        ],
        [
            "name"=> "فناوری اطلاعات",
            'slug'=>"it2",
            "image"=>"/assets/img/python.png"
        ],
        [
            "name"=> "طراحی و گرافیک",
            'slug'=>"photoshop",
            "image"=>"/assets/img/designer.png"
        ],
        [
            "name"=> "دیجیتال مارکتینگ",
            'slug'=>"digital",
            "image"=>"/assets/img/speaker.png"
        ],
        [
            "name"=> "هنر",
            'slug'=>"art",
            "image"=>"/assets/img/photo.png"
        ],
        [
            "name"=> "علوم انسانی",
            'slug'=>"human",
            "image"=>"/assets/img/yoga.png"
        ],
        [
            "name"=> "سبک زندگی",
            'slug'=>"life",
            "image"=>"/assets/img/health.png"
        ],
        
        ]
        
    );

    }
}

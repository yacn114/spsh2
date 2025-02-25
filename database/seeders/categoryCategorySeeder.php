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
            "image"=>"/assets/img/content.png",
            "product_count"=>0,
        ],
        [
            "name"=> "استارت آپ",
            'slug'=>"startup",
            "image"=>"/assets/img/briefcase.png",
            "product_count"=>0,
        ],
        [
            "name"=> "مالی و حسابداری",
            'slug'=>"finance",
            "image"=>"/assets/img/career.png",
            "product_count"=>0,
        ],
        [
            "name"=> "فناوری اطلاعات",
            'slug'=>"it2",
            "image"=>"/assets/img/python.png",
            "product_count"=>0,
        ],
        [
            "name"=> "طراحی و گرافیک",
            'slug'=>"photoshop",
            "image"=>"/assets/img/designer.png",
            "product_count"=>0,
        ],
        [
            "name"=> "دیجیتال مارکتینگ",
            'slug'=>"digital",
            "image"=>"/assets/img/speaker.png",
            "product_count"=>0,
        ],
        [
            "name"=> "هنر",
            'slug'=>"art",
            "image"=>"/assets/img/photo.png",
            "product_count"=>0,
        ],
        [
            "name"=> "علوم انسانی",
            'slug'=>"human",
            "image"=>"/assets/img/yoga.png",
            "product_count"=>0,
        ],
        [
            "name"=> "سبک زندگی",
            'slug'=>"life",
            "image"=>"/assets/img/health.png",
            "product_count"=>0,
        ],
        
        ]
        
    );

    }
}

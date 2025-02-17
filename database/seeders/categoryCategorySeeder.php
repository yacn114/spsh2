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
            "image"=>"/assets/img/content.png",
            "product_count"=>0,
        ],
        [
            "name"=> "استارت آپ",
            "image"=>"/assets/img/briefcase.png",
            "product_count"=>0,
        ],
        [
            "name"=> "مالی و حسابداری",
            "image"=>"/assets/img/career.png",
            "product_count"=>0,
        ],
        [
            "name"=> "فناوری اطلاعات",
            "image"=>"/assets/img/python.png",
            "product_count"=>0,
        ],
        [
            "name"=> "طراحی و گرافیک",
            "image"=>"/assets/img/designer.png",
            "product_count"=>0,
        ],
        [
            "name"=> "دیجیتال مارکتینگ",
            "image"=>"/assets/img/speaker.png",
            "product_count"=>0,
        ],
        [
            "name"=> "هنر",
            "image"=>"/assets/img/photo.png",
            "product_count"=>0,
        ],
        [
            "name"=> "علوم انسانی",
            "image"=>"/assets/img/yoga.png",
            "product_count"=>0,
        ],
        [
            "name"=> "سبک زندگی",
            "image"=>"/assets/img/health.png",
            "product_count"=>0,
        ],
        
        ]
        
    );

    }
}

<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\SiteData;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
//        $child_categories = Category::query()->whereNotNull("category_id")->get();
        $site_data = SiteData::first();
        $parent_categories = Category::query()->whereNull("category_id")->get();
        
//        view()->share("child_categories", $child_categories);
        view()->share("parent_categories", $parent_categories);
        view()->share("data", $site_data);

    }
}

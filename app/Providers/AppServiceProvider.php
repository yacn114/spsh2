<?php

namespace App\Providers;

use App\Models\{Category,SiteData};
use Illuminate\Support\Facades\Cache;
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

        $site_data = Cache::remember("site_data",3600, function () {
            return SiteData::first() ?? new SiteData();
        });
        $parent_categories = Cache::remember("categories",800, function () {
            return Category::whereNull("category_id")->get() ?? collect();
        });
        view()->share("parent_categories", $parent_categories);
        view()->share("data", $site_data);
        
        
    
    }
}

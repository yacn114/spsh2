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
        
        $site_data = SiteData::first() ?? new SiteData();
        $parent_categories = Category::whereNull("category_id")->get() ?? collect();
        
        view()->share("parent_categories", $parent_categories);
        view()->share("data", $site_data);
        
    
    }
}

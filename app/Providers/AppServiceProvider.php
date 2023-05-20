<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Product;
use App\Models\Customer;
use App\Models\product_category;
use App\Models\site_section;
use App\Models\SiteMenu;
use App\Models\Country;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    
        $products=Product::all();
        $customers=Customer::all();
     
        
        $menus=SiteMenu::all();
        $sections=site_section::all();
        $categories=product_category::all();
        $countries=Country::all();

        //  View::share("pages.site.home",["products" => $products,"menus"=>$menus,"sections"=>$sections,"categories"=>$categories]);
           View::share('categories', $categories);
           View::share('menus', $menus);
           View::share('sections', $sections);
           View::share('products', $products);
           View::share('customers', $customers);
           View::share('countries', $countries);
        
           Paginator::useBootstrapThree();
           
    }
}

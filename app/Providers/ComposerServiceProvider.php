<?php

namespace App\Providers;

use App\Models\product;
use App\Models\ShopData;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
                // You can use a class for composer
        // you will need NavComposer@compose method
        // which will be called everythime partials.nav is requested
        View::composer(
            'partials.nav', 'App\Http\ViewComposers\NavComposer'
        );

        // You can use Closure based composers
        // which will be used to resolve any data
        // in this case we will pass menu items from database
        View::composer('partials.nav', function ($view) {
            $view->with('menu', ShopData::all());
        });

       // View::share('Shopdaten',$Shopdaten);
    }
}

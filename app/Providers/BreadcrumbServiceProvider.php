<?php

namespace App\Providers;

use App\Models\Product;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Illuminate\Support\ServiceProvider;

class BreadcrumbServiceProvider extends ServiceProvider
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
        Breadcrumbs::for('home', function ($trail) {
            $trail->push('Home', route('home'));
        });

        // Generate breadcrumb for 404
        Breadcrumbs::for('errors.404', function ($trail) {
            $trail->parent('home');
            $trail->push('Not Found');
        });

        // Generate breadcrumb for 404
        Breadcrumbs::for('product.details', function ($trail) {
            $trail->parent('home');
            $trail->push('Product Not Found');
        });

        // Generate breadcrumb for 404
        Breadcrumbs::for('products.by.cat', function ($trail) {
            $trail->parent('home');
            $trail->push('Category Not Found');
        });

    }
}

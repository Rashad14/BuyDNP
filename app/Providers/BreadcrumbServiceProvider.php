<?php

namespace App\Providers;

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

        Breadcrumbs::for('about', function ($trail) {
            $trail->parent('home');
            $trail->push('About Us', route('about'));
        });

        Breadcrumbs::for('contact', function ($trail) {
            $trail->parent('home');
            $trail->push('Contact Us', route('contact'));
        });

        Breadcrumbs::for('category', function ($trail, $category) {
            $trail->parent('home');
            $trail->push($category->name, route('category', $category->slug));
        });

    }
}

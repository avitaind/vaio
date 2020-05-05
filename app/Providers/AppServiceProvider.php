<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\News;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    Schema::defaultStringLength(191);


        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }

        \View::composer('layout.header', function ($view) {

            $offer_enabled = ( News::published()->offers()->count() > 0 ) ;

            $life_enabled = ( News::published()->lifes()->count() > 0 ) ;

            $view->with(compact('offer_enabled', 'life_enabled'));

        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}

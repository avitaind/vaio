<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $lang = app()->getLocale();

//        if ($lang == 'tc' ) {
//            $store_url = "https://vaio.nexstmall.com/zh_hk/vaio.html";
//        } else {
//            $store_url = "https://vaio.nexstmall.com/en_hk/vaio.html";
//        }

        $store_url = "https://vaio-sg.nexstmall.com/";

        $store_enabled = env('ENABLE_VAIO_MALL', false);

        View::share('store_enabled', $store_enabled);

        if (!$store_enabled) {
            $store_url = "https://vaio-sg.nexstmall.com/";
        }

        View::composer( 'layout.header', function ( $view ) use ( $store_url ){

            $url = "https://vaio-sg.nexstmall.com/";
            $view->with('store_url', $url);
        });


        View::composer('layout.footer', function ( $view ) use ($store_url) {
            $url = "https://vaio-sg.nexstmall.com/";
            $view->with('store_url', $url);
        });

        View::composer('home.banner', function ( $view ) use ($store_url) {
            $url = "https://vaio-sg.nexstmall.com/";
            $view->with('store_url', $url);
        });

        View::composer('products.*', function ($view) use ($store_url) {
            $url = "https://vaio-sg.nexstmall.com/";
            $view->with('top_store_url', $url);

            $url = "https://vaio-sg.nexstmall.com/";
            $view->with('store_url', $url);

        });







    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

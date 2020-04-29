<?php

namespace App\Http\Middleware;

use Closure;

class AppMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        $this->handleLocale();

        $languages = config('languages');
        view()->share('languages', $languages);

        $user = \Auth::user();

        view()->share('user', $user);

        return $next($request);
    }


    protected function handleLocale( ) {

        // Setup default locale.
        $locale = config('app.fallback_locale');



        if( \Session::has('applocale') ) {
            $locale = session('applocale');
        }

        app()->setLocale( $locale );
    }
}

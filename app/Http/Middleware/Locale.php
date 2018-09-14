<?php

namespace App\Http\Middleware;
use Schema;
use Illuminate\Support\Facades\Session;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $language = Session::get('website_language', config('app.locale'));
        if($language) {
            App::setLocale($language);
        } else {
            App::setLocale(Config::get('app.fallback_locale'));
        }

        return $next($request);
    }
}

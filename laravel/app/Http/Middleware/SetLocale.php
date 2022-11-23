<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Cookie;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        //check locale is already set
        if (!session()->has('locale')) session()->put('locale', 'en');
        //return locale page
        App::setLocale(session('locale'));
        URL::defaults(['locale' => session('locale')]);
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $language = session('language', config('app.locale'));
        switch ($language) {
            case 'vi':
                $language = 'vi';
                break;
            default:
                $language = 'en';
                break;
        }
        \App::setLocale($language);
        
        return $next($request);
    }
}

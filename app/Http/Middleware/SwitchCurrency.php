<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class SwitchCurrency
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
        if (!Session::has('currency'))
         {
           Session::put('currency',Config::get('app.currency'));
        }
        if($request->currency){
            Session::put('currency',$request->currency);
        }
        return $next($request);
    }
}

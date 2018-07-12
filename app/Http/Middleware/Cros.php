<?php

namespace App\Http\Middleware;

use Closure;

class Cros
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
        //这里如果写*的话,就是通配所有的域名
        //return $next($request)->header('Access-Control-Allow-Origin','*');
        //这里指定单条的域名
        return $next($request)->header('Access-Control-Allow-Origin','http://www.hd.com');

    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Cors
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
        return $next($request)

       ->header("Access-Control-Allow-Origin","https://nefrouros.net")

       ->header("Access-Control-Allow-Methods","GET,POST,PUT,DELETE")

       ->header("Access-Control-Allow-Methods","X-Requested-With, Content-Type, X-Token-Auth, Authorization");
    }
}

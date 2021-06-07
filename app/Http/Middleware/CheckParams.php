<?php

namespace App\Http\Middleware;

use Closure;

class CheckParams
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
        $params = $request->all();
        echo '<br>';
        var_dump($params);
        echo '<br>';
        return $next($request);
    }
}



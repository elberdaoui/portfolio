<?php

namespace App\Http\Middleware;

use Closure;

class UserMiddleware
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

      if ( \Auth::user()->hasRole('user'))
        return response(trans('backpack::base.unauthorized'),401);
        return $next($request);
    }
}

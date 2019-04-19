<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if(Auth::guard('users')->check())
        {
            view()->share('quanly', Auth::guard('users')->user());
            return $next($request);
        }
        else
        {
            abort(403, 'Unauthorized action.');
        }
       
    }
}

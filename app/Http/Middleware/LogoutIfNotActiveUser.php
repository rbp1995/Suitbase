<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class LogoutIfNotActiveUser
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
        if (Auth::check())
        {
            if(Auth::user()->status == 'Inactive')
            {
                Auth::logout();
                return redirect('/login');
            }
        }

        return $next($request);
    }
}
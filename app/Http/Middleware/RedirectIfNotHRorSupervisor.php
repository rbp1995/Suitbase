<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RedirectIfNotHRorSupervisor
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
            $userType = Auth::user()->type;
            if($userType != 'HR')
            {
                if($userType != 'Supervisor')
                {
                    return redirect()->route('home');
                }
            }
        }
        return $next($request);
    }
}
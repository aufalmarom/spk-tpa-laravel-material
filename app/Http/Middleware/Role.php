<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Role
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
        if (Auth::user()->role == 'admin') {
            return $next($request);
        }
        elseif (Auth::user()->role == 'manager') {
            return redirect()->route('manager.dashboard');
        }

        return redirect('/operator');

    }
}

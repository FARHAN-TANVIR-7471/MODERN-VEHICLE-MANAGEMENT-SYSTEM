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
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (Auth::user()->usertype == 'admin') {
            return $next($request);
        }elseif (Auth::user()->usertype == 'driver') {
            return redirect()->route('schodule.list');
        }elseif (Auth::user()->usertype == 'transport_managers') {
            return $next($request);
            // return redirect()->route('schodule.list');
        }elseif (Auth::user()->usertype == null) {
            return redirect()->route('user.dashboard');
        }
        else{
            return redirect('/home');
        }
        
    }
}

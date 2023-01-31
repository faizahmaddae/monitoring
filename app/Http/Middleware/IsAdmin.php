<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // return $next($request);
        if (Auth::user() &&  Auth::user()->role == 'admin') {
            return $next($request);
            return redirect('/home');
        } else {
            // return $next($request);
            return redirect()->route('client.index');
        }
    }
}


// https://laracasts.com/discuss/channels/general-discussion/create-middleware-to-auth-admin-users

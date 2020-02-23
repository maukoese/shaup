<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Access
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
        if(Auth::check()){
            $role = auth()->user()->role;
            return ($request->is($role) || $request->is("$role/*")) ? $next($request) : abort(403);
        } else {
            return $next($request);
        }
    }
}

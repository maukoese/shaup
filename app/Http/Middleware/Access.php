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
            $user = auth()->user();
            $role = $user->role;

            if (! $user->verified) {
                return abort(403, 'You need to verify your account to access this service');
            }

            return ($request->is($role) || $request->is("$role/*") || $role=='admin') ? $next($request) : abort(403, 'You do not have permissions to acces this service.');
        } else {
            return $next($request);
        }
    }
}

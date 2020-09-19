<?php

namespace App\Http\Middleware;

use Closure;

class SuperAdmin
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
        if ( ! auth()->check()){
            return redirect()->guest(route('login'))->with('error', 'Please login with admin details');
        }

        $user = auth()->user();

        if ( $user->role === 'Super Admin' || $user->role === 'Human Resource' || $user->role === 'Finance')

            return $next($request);

        return redirect(route('login'))->with('error', 'Unauthorized access!');
    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfStudent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = "student")
    {
        if (!auth()->guard($guard)->check()) {
            return redirect(route('student.login'));
        }
        return $next($request);
    }
}

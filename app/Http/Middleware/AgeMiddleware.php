<?php

namespace App\Http\Middleware;

use Closure;

class AgeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $age)
    {
        if ($request->user()->age <= $age) {
            abort(403, "¡No tienes edad para ver este video! le diremos a tus padres.");
        }
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class OldMiddleware
{
    public function handle($request, Closure $next)
    {
		/*
			En este middleware, sólo permitiremos el acceso a la ruta si la edad suministrada, es mayor a 200. 
			De lo contrario, redirigiremos a los usuarios a la URI "home".
		*/
        if ($request->input('age') <= 200) {
            return redirect('home');
        }

        return $next($request);
		// return $next($request);
		
    }
}

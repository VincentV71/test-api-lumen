<?php

namespace App\Http\Middleware;

use Closure;

class TokenMiddleware
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
        if ($request->headers->get('client-token') != env("CLIENT_API_KEY")) {
            return response('Unauthorized : your api key is not valid', 401);
        }

        return $next($request);
    }
}

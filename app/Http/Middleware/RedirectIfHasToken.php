<?php

namespace App\Http\Middleware;

use Tymon\JWTAuth\Middleware\BaseMiddleware;

class RedirectIfHasToken extends BaseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, \Closure $next)
    {
        $token = $this->auth
            ->setRequest($request)
            ->getToken();

        if ($token) {
            return $this->respond(
                'tymon.jwt.absent',
                'token_provided',
                400
            );
        }

        return $next($request);
    }
}

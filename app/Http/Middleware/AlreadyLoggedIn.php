<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;

use Closure;

class AlreadyLoggedIn
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
        if (Session()->has('loginId') && (url('customer-login') == $request->url() || url('customer-register') == $request->url())) {
            return back();        }
        return $next($request);
    }
}

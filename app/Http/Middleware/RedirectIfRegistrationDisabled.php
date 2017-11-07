<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfRegistrationDisabled
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     * @param string|null              $guard
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (config('vulcan.registration.enabled') === false) {
            return redirect('/login');
        }

        return $next($request);
    }
}

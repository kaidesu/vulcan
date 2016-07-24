<?php

namespace Vulcan\Http\Middleware;

use Closure;

class AbortIfInstalled
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (file_exists(storage_path('installed'))) {
            abort(404);
        }

        return $next($request);
    }
}

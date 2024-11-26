<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $permission)
    {
        if (!Auth::user()->hasPermission($permission)) {
            // Handle unauthorized access
            return redirect()->route('dashboard')->with('error', 'You do not have permission to access this page');
        }

        return $next($request);
    }
}

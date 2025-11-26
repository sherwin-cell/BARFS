<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $role = null)
    {
        // Check if user is logged in
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login first.');
        }

        $user = Auth::user();

        // Check role if provided (case-insensitive)
        if ($role && strtolower($user->role) !== strtolower($role)) {
            // Option 1: Redirect based on role
            if (strtolower($user->role) === 'admin') {
                return redirect()->route('dashboard.index')->with('error', 'Unauthorized access.');
            }

            return redirect()->route('user.dashboard')->with('error', 'Unauthorized access.');

            // Option 2: Strict 403 instead of redirect
            // abort(403, 'Unauthorized action.');
        }

        // Role matches, allow request
        return $next($request);
    }
}

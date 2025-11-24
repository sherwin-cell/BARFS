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

        // If role parameter is provided, check it
        if ($role && $user->role !== $role) {
            // Redirect based on user role
            if ($user->role === 'admin') {
                return redirect()->route('dashboard.index')->with('error', 'Unauthorized access.');
            } else {
                return redirect()->route('user.dashboard')->with('error', 'Unauthorized access.');
            }
        }

        // Continue request
        return $next($request);
    }
}

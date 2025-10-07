<?php

namespace App\Http\Middleware;

use App\Models\User;


use Closure;
use Illuminate\Http\Request;

class RestrictGuest
{
    public function handle(Request $request, Closure $next)
    {
        // Restrict guest users from accessing certain pages
        if (auth()->check() && auth()->user()->role === 'guest') {
            return redirect()->route('home')->with('error', 'Guest users cannot access this page.');
        }

        return $next($request);
    }
}

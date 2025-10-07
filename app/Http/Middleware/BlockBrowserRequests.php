<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BlockBrowserRequests
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->expectsJson()) {
            return response()->json([
                'status' => false,
                'message' => 'Access denied from browser. Use Postman or API client.',
            ], 403);
        }

        return $next($request);
    }
}

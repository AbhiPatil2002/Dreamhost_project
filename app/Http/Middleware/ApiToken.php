<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;



class ApiToken
{
    public function handle(Request $request, Closure $next)
    {
        // Define the static token (store it securely in .env)
        $staticToken = env('API_ACCESS_TOKEN', 'YOUR_STATIC_ACCESS_TOKEN');

        // Retrieve token from the Authorization header
        $token = $request->header('Authorization');
        if (!$token || $token !== 'Bearer ' . $staticToken) {
            return response()->json(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
        }

        return $next($request);
    }
}

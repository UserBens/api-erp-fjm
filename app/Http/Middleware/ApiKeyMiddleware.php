<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiKeyMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $apiKey = $request->header('X-Api-Key') ?: $request->header('X-API-KEY');
        $apiKey = $apiKey ?: $request->query('api_key', '');

        if (!$apiKey && $request->header('Authorization')) {
            $authHeader = $request->header('Authorization');
            if (str_starts_with($authHeader, 'ApiKey ')) {
                $apiKey = substr($authHeader, 7);
            }
        }

        $expected = config('api.key') ?: env('API_KEY');

        if (!$expected) {
            return response()->json([
                'success' => false,
                'message' => 'API key is not configured',
            ], 500);
        }

        if (!$apiKey || $apiKey !== $expected) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized',
            ], 401);
        }

        return $next($request);
    }
}

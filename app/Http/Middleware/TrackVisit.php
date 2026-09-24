<?php

namespace App\Http\Middleware;

use App\Models\Visit;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class TrackVisit
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->isMethod('GET') && $request->path() === '/') {
            try {
                Visit::create([
                    'path' => $request->path(),
                    'ip_hash' => hash('sha256', $request->ip() ?? 'unknown'),
                    'user_agent' => Str::limit($request->userAgent() ?? '', 190),
                    'visit_date' => now()->toDateString(),
                ]);
            } catch (\Throwable $e) {
                Log::warning('Failed to track visit: '.$e->getMessage());
            }
        }

        return $next($request);
    }
}

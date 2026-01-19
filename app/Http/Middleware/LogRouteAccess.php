<?php

namespace App\Http\Middleware;

use App\Services\AuditService;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogRouteAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Log route access for authenticated users
        if (auth()->check() && !$request->is('login', 'logout', 'api/*')) {
            try {
                $routeName = $request->route() ? ($request->route()->getName() ?? $request->path()) : $request->path();
                AuditService::logRouteAccess(
                    $routeName,
                    $request->except(['password', '_token'])
                );
            } catch (\Exception $e) {
                // Silently fail if audit logging fails
                \Log::warning('Audit logging failed: ' . $e->getMessage());
            }
        }

        return $response;
    }
}


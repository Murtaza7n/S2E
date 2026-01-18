<?php

namespace App\Services;

use App\Models\AuditLog;
use Illuminate\Support\Facades\Auth;

class AuditService
{
    public static function log($action, $modelType, $modelId = null, $description = null, $oldValues = [], $newValues = [])
    {
        if (!Auth::check()) {
            return;
        }

        return AuditLog::create([
            'user_id' => Auth::id(),
            'model_type' => $modelType,
            'model_id' => $modelId,
            'action' => $action,
            'description' => $description,
            'old_values' => $oldValues,
            'new_values' => $newValues,
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);
    }

    public static function logRouteAccess($routeName, $requestData = [])
    {
        if (!Auth::check()) {
            return;
        }

        try {
            return AuditLog::create([
                'user_id' => Auth::id(),
                'model_type' => 'route',
                'model_id' => 0, // Use 0 instead of null for route access
                'action' => 'accessed',
                'description' => "Accessed route: {$routeName}",
                'old_values' => [],
                'new_values' => $requestData,
                'ip_address' => request()->ip(),
                'user_agent' => request()->userAgent(),
            ]);
        } catch (\Exception $e) {
            // Silently fail if audit logging fails
            \Log::warning('Audit logging failed: ' . $e->getMessage());
            return null;
        }
    }
}


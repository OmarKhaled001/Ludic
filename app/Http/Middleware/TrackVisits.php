<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Visit;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TrackVisits
{
    public function handle(Request $request, Closure $next)
    {
        // استثناء زيارات لوحة التحكم (التحقق من المسار)
        if ($request->is('admin/*')) {
            return $next($request);
        }

        // التحقق مما إذا تم تسجيل زيارة لهذا الـ IP في نفس اليوم
        $ipAddress = $request->ip();
        $today = Carbon::today();

        $existingVisit = Visit::where('ip_address', $ipAddress)
            ->whereDate('created_at', $today)
            ->first();

        // إذا لم يتم تسجيل زيارة لهذا الـ IP في اليوم الحالي، قم بتسجيلها
        if (!$existingVisit) {
            Visit::create([
                'ip_address' => $ipAddress,
            ]);
        }

        return $next($request);
    }
}

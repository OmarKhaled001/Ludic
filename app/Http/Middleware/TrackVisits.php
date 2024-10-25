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
        if ($request->is('admin/*')) {
            return $next($request);
        }

        $ipAddress = $request->ip();
        $today = Carbon::today();

        $existingVisit = Visit::where('ip_address', $ipAddress)
            ->whereDate('created_at', $today)
            ->first();

        if (!$existingVisit) {
            Visit::create([
                'ip_address' => $ipAddress,
            ]);
        }

        return $next($request);
    }
}

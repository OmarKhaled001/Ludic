<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use App\Models\Visit;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $startDate = Carbon::now()->subDays($this->timeRange);
        $endDate = Carbon::now();

        // Retrieve the number of visits for each day within the selected time range
        $visits = Visit::whereBetween('created_at', [$startDate, $endDate])
            ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->get();

        // Arrays for dates and visit counts
        $dates = [];
        $visitCounts = [];

        // Fill dates and visit counts
        foreach ($visits as $visit) {
            $dates[] = Carbon::parse($visit->date)->format('m-d');
            $visitCounts[] = $visit->count;
        }

        return [
            Stat::make('Unique views',  Visit::count())
            ->chart($visitCounts)
            ->color('success')
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Unique views', '192.1k')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success')
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Unique views', '192.1k')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success')
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
        ];
    }
}

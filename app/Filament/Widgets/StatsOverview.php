<?php

namespace App\Filament\Widgets;

use App\Models\Contact;
use App\Models\Product;
use Carbon\Carbon;
use App\Models\Visit;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    public ?string $timeRange = '30'; // Default value: 30 days

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
        
        $contacts = Contact::selectRaw('DATE(created_at) as date, COUNT(*) as count')
        ->groupBy('date')
        ->orderBy('date', 'ASC')
        ->get();

        $products = Product::selectRaw('DATE(created_at) as date, COUNT(*) as count')
        ->groupBy('date')
        ->orderBy('date', 'ASC')
        ->get();

        // Arrays for dates and visit counts
        $dates = [];
        $visitCounts = [];
        $contactCounts = [];

        // Fill dates and visit counts
        foreach ($visits as $visit) {
            $visitCounts[] = $visit->count;
        }
        foreach ($contacts as $contact) {
            $contactCounts[] = $contact->count;
        }

        return [
            Stat::make('Unique views',  Visit::distinct('ip_address')->count('ip_address'))
            ->chart($visitCounts)
            ->color('success')
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Unread messages', Contact::where('seen',0)->count())
            ->chart( $contactCounts)
            ->color('danger')
            ->descriptionIcon('heroicon-m-arrow-trending-down'),
            Stat::make('Products', $products->count())
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success')
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
        ];
    }
}

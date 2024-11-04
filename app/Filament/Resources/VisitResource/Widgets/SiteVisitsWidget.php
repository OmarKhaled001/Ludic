<?php

namespace App\Filament\Resources\VisitResource\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Visit;
use Carbon\Carbon;
use Filament\Forms\Components\Select;

class SiteVisitsWidget extends ChartWidget
{
    protected static ?string $heading = 'Site Visits';
    protected int | string | array $columnSpan = 'full';
    public ?string $timeRange = '30'; // Default value: 30 days

    // Time range selection
    protected function getFormSchema(): array
    {
        return [
            Select::make('timeRange')
                ->options([
                    '7' => 'Last 7 days',
                    '30' => 'Last 30 days',
                    '90' => 'Last 3 months',
                ])
                ->default('30')
                ->reactive() // Makes the selection reactive
                ->label('Time Range')
        ];
    }

    protected function getData(): array
    {
        // Determine the time range based on user selection
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
            $dates[] = Carbon::parse($visit->date)->format('Y-m-d');
            $visitCounts[] = $visit->count;
        }

        // Return data for the chart
        return [
            'labels' => $dates, // Dates as labels on the X-axis
            'datasets' => [
                [
                    'label' => 'Number of Visits',
                    'data' => $visitCounts, // Number of visits for each day
                    'borderColor' => '#4CAF50', // Line color
                    'fill' => false, // No fill under the line
                ],
            ],
        ];
    }

    // Set the chart type to 'line'
    protected function getType(): string
    {
        return 'line';
    }

  
}

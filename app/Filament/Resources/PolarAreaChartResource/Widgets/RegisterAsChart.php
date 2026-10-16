<?php

namespace App\Filament\Resources\PolarAreaChartResource\Widgets;

use App\Models\Ahtes;
use Filament\Widgets\ChartWidget;

class RegisterAsChart extends ChartWidget
{
    protected static ?string $heading = 'Registration Types';

    protected function getData(): array
    {
        $categories = ['Premium Delegate', 'Delegate', 'Regular Delegate'];

        $counts = Ahtes::query()
            ->select('register_as')
            ->selectRaw('COUNT(*) as total')
            ->groupBy('register_as')
            ->pluck('total', 'register_as');

        return [
            'datasets' => [
                [
                    'label' => 'Total Users',
                    'data' => array_map(fn($category) => $counts[$category] ?? 0, $categories),
                    'backgroundColor' => [
                        '#FCD34D', // Amber for Premium
                        '#60A5FA', // Blue for Regular
                        '#34D399', // Green for Standard
                    ],
                    'borderColor' => [
                        '#FBBF24', // Darker Amber for Premium
                        '#3B82F6', // Darker Blue for Regular
                        '#10B981', // Darker Green for Standard
                    ],
                    'borderWidth' => 2,
                    'hoverBackgroundColor' => [
                        '#FBBF24', // Darker Amber for Premium
                        '#3B82F6', // Darker Blue for Regular
                        '#10B981', // Darker Green for Standard
                    ],
                    'hoverBorderColor' => [
                        '#F59E0B', // Even Darker Amber for Premium
                        '#2563EB', // Even Darker Blue for Regular
                        '#059669', // Even Darker Green for Standard
                    ],
                    'hoverBorderWidth' => 3,
                ],
            ],
            'labels' => $categories,
        ];
    }

    protected function getType(): string
    {
        return 'polarArea';
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'tooltip' => [
                    'enabled' => true,
                    'mode' => 'index',
                    'intersect' => false,
                ],
                'legend' => [
                    'display' => true,
                    'position' => 'top',
                ],
            ],
            'responsive' => true,
            'maintainAspectRatio' => false,
        ];
    }
}
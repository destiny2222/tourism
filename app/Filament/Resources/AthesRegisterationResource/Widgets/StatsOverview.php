<?php

namespace App\Filament\Resources\AthesRegisterationResource\Widgets;

use App\Models\Ahtes;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $premiumDelegateCount = Ahtes::where('register_as', 'Premium Delegate')->where('created_at', '>=', now()->subMonths(2))->count();
        $delegateCount = Ahtes::where('register_as', 'Delegate')->where('created_at', '>=', now()->subMonths(2))->count();
        $regularDelegateCount = Ahtes::where('register_as', 'Regular Delegate')->where('created_at', '>=', now()->subMonths(2))->count();
        $totalCount = Ahtes::where('created_at', '>=', now()->subMonths(2))->count();
        $totalRegistered = $totalCount.' Ahtes';
                 
        $totalRegisteredVisitors = Ahtes::where('register_as', 'visitor')->where('created_at', '>=', now()->subMonths(2))->count();

        return [
            Card::make('Premium Delegates', $premiumDelegateCount)
                ->description('Total registered as Premium Delegate')
                ->descriptionIcon('heroicon-s-star') // Optional icon
                ->color('success'),

            Card::make('Delegates', $delegateCount)
                ->description('Total registered as Delegate')
                ->descriptionIcon('heroicon-s-user-group') // Optional icon
                ->color('primary'),

            Card::make('Regular Delegates', $regularDelegateCount)
                ->description('Total registered as Regular Delegate')
                ->descriptionIcon('heroicon-s-user-circle') // Optional icon
                ->color('warning'),
            Card::make('Total Registered', $totalRegistered)
                ->description('Total registered')
                ->descriptionIcon('heroicon-s-users') // Optional icon
                ->color('info'),    

            Card::make('Visitors', $totalRegisteredVisitors)
                ->description('Total registered as Visitor')
                ->descriptionIcon('heroicon-s-user') // Optional icon
                ->color('danger'),
                
        ];
    }
}

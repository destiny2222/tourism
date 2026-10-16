<?php

namespace App\Filament\Resources\AhtesResource\Pages;

use App\Filament\Resources\AhtesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAhtes extends ListRecords
{
    protected static string $resource = AhtesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}

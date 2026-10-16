<?php

namespace App\Filament\Resources\BuildAfrikaResource\Pages;

use App\Filament\Resources\BuildAfrikaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBuildAfrikas extends ListRecords
{
    protected static string $resource = BuildAfrikaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

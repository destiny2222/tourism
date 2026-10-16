<?php

namespace App\Filament\Resources\BuildAfrikaResource\Pages;

use App\Filament\Resources\BuildAfrikaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBuildAfrika extends EditRecord
{
    protected static string $resource = BuildAfrikaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

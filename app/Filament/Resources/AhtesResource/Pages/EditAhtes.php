<?php

namespace App\Filament\Resources\AhtesResource\Pages;

use App\Filament\Resources\AhtesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAhtes extends EditRecord
{
    protected static string $resource = AhtesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

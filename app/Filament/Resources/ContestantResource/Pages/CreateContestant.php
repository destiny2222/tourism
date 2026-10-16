<?php

namespace App\Filament\Resources\ContestantResource\Pages;

use App\Filament\Resources\ContestantResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateContestant extends CreateRecord
{
    protected static string $resource = ContestantResource::class;
    protected static ?string $title = 'Create New Contestant';
    protected static ?string $navigationLabel = 'Create Contestant';
    protected static ?string $navigationGroup = 'Build Afrika Contestants';
    protected function getRedirectUrl(): string
    {
        return ContestantResource::getUrl('index');
    }
   
    // change the save button label
}

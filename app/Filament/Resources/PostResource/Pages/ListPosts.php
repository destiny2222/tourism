<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPosts extends ListRecords
{
    protected static string $resource = PostResource::class;
    protected static ?string $title = 'Blog Posts';
    // protected static ?string $
    protected static ?string $navigationLabel = 'Blog Posts';
    protected static ?string $navigationGroup = 'Blog Posts Management';
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    
    

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

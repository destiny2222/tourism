<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;
    protected static ?string $title = 'Create New Blog Post';
    protected static ?string $navigationLabel = 'Create Blog';
    protected static ?string $navigationGroup = 'Blog Posts Management';

    protected function getRedirectUrl(): string
    {
        return PostResource::getUrl('index');
    }
    
}

<?php

namespace App\Filament\Resources\LinkServiceResource\Pages;

use App\Filament\Resources\LinkServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLinkService extends CreateRecord
{
    protected static string $resource = LinkServiceResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

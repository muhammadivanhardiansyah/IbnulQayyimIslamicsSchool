<?php

namespace App\Filament\Resources\LinkServiceResource\Pages;

use App\Filament\Resources\LinkServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLinkService extends EditRecord
{
    protected static string $resource = LinkServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

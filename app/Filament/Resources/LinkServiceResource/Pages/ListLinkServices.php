<?php

namespace App\Filament\Resources\LinkServiceResource\Pages;

use App\Filament\Resources\LinkServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLinkServices extends ListRecords
{
    protected static string $resource = LinkServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

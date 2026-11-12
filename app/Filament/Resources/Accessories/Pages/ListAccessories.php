<?php

namespace App\Filament\Resources\Accessories\Pages;

use App\Filament\Resources\Accessories\AccessoriesResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAccessories extends ListRecords
{
    protected static string $resource = AccessoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

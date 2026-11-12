<?php

namespace App\Filament\Resources\Accessories\Pages;

use App\Filament\Resources\Accessories\AccessoriesResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAccessories extends ViewRecord
{
    protected static string $resource = AccessoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}

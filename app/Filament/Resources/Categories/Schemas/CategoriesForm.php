<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CategoriesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                FileUpload::make('image_url')
                    ->disk('assets')
                    ->directory('images/categories')
                    ->visibility('public')
                    ->image()
                    ->required(),
                Toggle::make('is_featured')
                    ->required(),
            ]);
    }
}

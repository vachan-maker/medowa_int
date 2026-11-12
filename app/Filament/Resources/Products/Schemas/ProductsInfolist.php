<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ProductsInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('description'),
                TextEntry::make('category_id')
                    ->numeric(),
                TextEntry::make('price')
                    ->money(),
                ImageEntry::make('image_url'),
                IconEntry::make('is_featured')
                    ->boolean(),
                TextEntry::make('tagline')
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                IconEntry::make('is_new')
                    ->boolean(),
                TextEntry::make('text_color')
                    ->columnSpanFull(),
            ]);
    }
}

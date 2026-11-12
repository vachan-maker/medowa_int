<?php

namespace App\Filament\Resources\Accessories;

use App\Filament\Resources\Accessories\Pages\CreateAccessories;
use App\Filament\Resources\Accessories\Pages\EditAccessories;
use App\Filament\Resources\Accessories\Pages\ListAccessories;
use App\Filament\Resources\Accessories\Pages\ViewAccessories;
use App\Filament\Resources\Accessories\Schemas\AccessoriesForm;
use App\Filament\Resources\Accessories\Schemas\AccessoriesInfolist;
use App\Filament\Resources\Accessories\Tables\AccessoriesTable;
use App\Models\Accessories;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AccessoriesResource extends Resource
{
    protected static ?string $model = Accessories::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'accessories';

    public static function form(Schema $schema): Schema
    {
        return AccessoriesForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AccessoriesInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AccessoriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAccessories::route('/'),
            'create' => CreateAccessories::route('/create'),
            'view' => ViewAccessories::route('/{record}'),
            'edit' => EditAccessories::route('/{record}/edit'),
        ];
    }
}

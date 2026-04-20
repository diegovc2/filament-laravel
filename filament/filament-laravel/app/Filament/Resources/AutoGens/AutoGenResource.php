<?php

namespace App\Filament\Resources\AutoGens;

use App\Filament\Resources\AutoGens\Pages\CreateAutoGen;
use App\Filament\Resources\AutoGens\Pages\EditAutoGen;
use App\Filament\Resources\AutoGens\Pages\ListAutoGens;
use App\Filament\Resources\AutoGens\Schemas\AutoGenForm;
use App\Filament\Resources\AutoGens\Tables\AutoGensTable;
use App\Models\AutoGen;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AutoGenResource extends Resource
{
    protected static ?string $model = AutoGen::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'AutoGen';

    public static function form(Schema $schema): Schema
    {
        return AutoGenForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AutoGensTable::configure($table);
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
            'index' => ListAutoGens::route('/'),
            'create' => CreateAutoGen::route('/create'),
            'edit' => EditAutoGen::route('/{record}/edit'),
        ];
    }
}

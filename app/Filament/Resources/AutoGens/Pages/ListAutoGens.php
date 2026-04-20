<?php

namespace App\Filament\Resources\AutoGens\Pages;

use App\Filament\Resources\AutoGens\AutoGenResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAutoGens extends ListRecords
{
    protected static string $resource = AutoGenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

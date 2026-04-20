<?php

namespace App\Filament\Resources\AutoGens\Pages;

use App\Filament\Resources\AutoGens\AutoGenResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAutoGen extends EditRecord
{
    protected static string $resource = AutoGenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

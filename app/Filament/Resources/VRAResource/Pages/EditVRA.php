<?php

namespace App\Filament\Resources\VRAResource\Pages;

use App\Filament\Resources\VRAResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVRA extends EditRecord
{
    protected static string $resource = VRAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

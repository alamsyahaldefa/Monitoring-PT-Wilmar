<?php

namespace App\Filament\Resources\VRAResource\Pages;

use App\Filament\Resources\VRAResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVRAS extends ListRecords
{
    protected static string $resource = VRAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\LaporanHarianMesinResource\Pages;

use App\Filament\Resources\LaporanHarianMesinResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLaporanHarianMesins extends ListRecords
{
    protected static string $resource = LaporanHarianMesinResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

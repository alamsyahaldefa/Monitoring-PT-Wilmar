<?php

namespace App\Filament\Resources\LaporanHarianMesinResource\Pages;

use App\Filament\Resources\LaporanHarianMesinResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaporanHarianMesin extends EditRecord
{
    protected static string $resource = LaporanHarianMesinResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

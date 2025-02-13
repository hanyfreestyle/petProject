<?php

namespace App\Filament\Resources\ConfigDataResource\Pages;

use App\Filament\Resources\ConfigDataResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditConfigData extends EditRecord
{
    protected static string $resource = ConfigDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\PetHelpRequestResource\Pages;

use App\Filament\Resources\PetHelpRequestResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPetHelpRequest extends EditRecord
{
    protected static string $resource = PetHelpRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

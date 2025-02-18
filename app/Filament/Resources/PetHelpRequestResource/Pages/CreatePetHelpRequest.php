<?php

namespace App\Filament\Resources\PetHelpRequestResource\Pages;

use App\Filament\Resources\PetHelpRequestResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePetHelpRequest extends CreateRecord
{
    protected static string $resource = PetHelpRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}

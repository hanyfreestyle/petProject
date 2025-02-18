<?php

namespace App\Filament\Resources\PetHelpRequestResource\Pages;

use App\Filament\Resources\PetHelpRequestResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListPetHelpRequests extends ListRecords
{
    protected static string $resource = PetHelpRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }


    public function getTabs(): array {
        return [
            'All' => Tab::make()
                ->badge(static::getModel()::query()
                    ->count()
                ),

            'Active' => Tab::make()
                ->modifyQueryUsing(fn(Builder $query) =>
                $query->where('status', 1))
                ->badge(static::getModel()::query()->where('status', 1)
                    ->count())
            ->badgeColor('success'),

            'Pending' => Tab::make()
                ->modifyQueryUsing(fn(Builder $query) =>
                $query->where('status', 0))
                ->badge(static::getModel()::query()->where('status', 0)
                    ->count())
                ->badgeColor('warning'),
        ];
    }
}

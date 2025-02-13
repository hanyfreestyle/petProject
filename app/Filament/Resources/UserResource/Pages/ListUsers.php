<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Models\User;
use Filament\Actions;

use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Tab;
use Illuminate\Database\Eloquent\Builder;


class ListUsers extends ListRecords {
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array {
        return [
            'All' => Tab::make()
                ->badge(User::query()->count()),

            'Active' => Tab::make()
                ->modifyQueryUsing(fn(Builder $query) => $query->where('is_active', '=', 1))
                ->badge(User::query()->where('is_active', '=', 1)->count()),

            'Pending' => Tab::make()
                ->modifyQueryUsing(fn(Builder $query) => $query->where('is_active', '=', 0))
                ->badge(User::query()->where('is_active', '=', 0)->count()),
        ];
    }
}

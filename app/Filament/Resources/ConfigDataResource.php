<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConfigDataResource\Pages;

use App\Models\ConfigData;
use Filament\Forms;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Stack;



class ConfigDataResource extends Resource {
    protected static ?string $model = ConfigData::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form {
        return $form
            ->schema([
                Forms\Components\TextInput::make('cat_id')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('is_active')
                    ->required()
                    ->maxLength(255),
            ]);
    }




    public static function table(Table $table): Table
    {
        return $table
            ->columns([

//                Split::make([
//
//
//
//
//                ]),
                TextColumn::make('name')
                    ->sortable()
                    ->searchable(),

                IconColumn::make('is_active')
                    ->boolean(),

//                Stack::make([
//
//                ]),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

            ])
            ->filters([
                // إضافة الفلاتر إذا لزم الأمر
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }




    public static function getRelations(): array {
        return [
            //
        ];
    }

    public static function getPages(): array {
        return [
            'index' => Pages\ListConfigData::route('/'),
            'create' => Pages\CreateConfigData::route('/create'),
            'edit' => Pages\EditConfigData::route('/{record}/edit'),
        ];
    }
}

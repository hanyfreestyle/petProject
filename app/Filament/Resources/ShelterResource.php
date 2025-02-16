<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShelterResource\Pages;
use App\Filament\Resources\ShelterResource\RelationManagers;
use App\Models\Shelter;
use ArberMustafa\FilamentLocationPickrField\Forms\Components\LocationPickr;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ShelterResource extends Resource {
    protected static ?string $model = Shelter::class;
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationGroup = 'Animal Services';

    public static function form(Forms\Form $form): Forms\Form {
        return $form
            ->schema([
                Section::make('Shelter Details')
                    ->schema([


                        LocationPickr::make('location')
                            ->mapControls([
                                'mapTypeControl'    => true,
                                'scaleControl'      => true,
                                'streetViewControl' => true,
                                'rotateControl'     => true,
                                'fullscreenControl' => true,
                                'zoomControl'       => false,
                            ])
                            ->defaultZoom(10)
                            ->draggable()
                            ->clickable()
                            ->height('40vh')
                            // {"lat":29.93708932842956,"lng":31.200219124460776}
                            ->defaultLocation([29.93708932842956,31.200219124460776])
                            ->myLocationButtonLabel('My location'),


                        TextInput::make('name')
                            ->label('Shelter Name')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('website')
                            ->label('Website')
                            ->url()
                            ->maxLength(255),

                        Textarea::make('services')
                            ->label('Services')
                            ->maxLength(500),

//                        TextInput::make('location')
//                            ->label('Location')
//                            ->required(),

                        TextInput::make('landmark')
                            ->label('Landmark'),

//                        Repeater::make('phone_number')
//                            ->label('Phone Numbers')
//                            ->schema([
//                                TextInput::make('number')
//                                    ->label('Phone Number')
//                                    ->tel()
//                                    ->required(),
//                            ])
//                            ->minItems(1)
//                            ->maxItems(5)
//                            ->columnSpanFull(),
                    ])->columnSpan(2)->columns(1),


                Forms\Components\Group::make()->schema([
                    Section::make('Shelter Logo')
                        ->schema([
                            FileUpload::make('logo')
                                ->label('Logo')
                                ->image()
                                ->visibility('public')
                                ->disk('public')
                                ->directory('images/shelter')
                                ->nullable()
//                                ->required()
                                ->columnSpanFull(),
                        ])->columnSpan(1)->columns(1),

                    Section::make('Shelter Phone Numbers')
                        ->schema([

                            Repeater::make('phone_number')
                                ->label('Phone Numbers')
                                ->schema([
                                    TextInput::make('number')
                                        ->label('Phone Number')
                                        ->tel()
                                        ->required(),
                                ])
                                ->minItems(1)
                                ->maxItems(5)
                                ->columnSpanFull(),
                        ])->columnSpan(1)->columns(1)

                ]),


            ])->columns(3);
    }

    public static function table(Tables\Table $table): Tables\Table {
        return $table
            ->columns([

                Tables\Columns\ImageColumn::make('logo'),

                TextColumn::make('name')
                    ->sortable()
                    ->searchable(),

//                TextColumn::make('website')
//                    ->label('Website')
//                    ->url(fn($record) => $record->website, true),
//
//                TextColumn::make('location')
//                    ->sortable()
//                    ->searchable(),

                BadgeColumn::make('phone_number')
                    ->label('Phone Numbers')
                    ->formatStateUsing(function ($state) {
                        return implode(',', $state);
                    })
                    ->color('primary'),

//                TextColumn::make('created_at')
//                    ->label('Created At')
//                    ->dateTime(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array {
        return [
            //
        ];
    }

    public static function getPages(): array {
        return [
            'index' => Pages\ListShelters::route('/'),
            'create' => Pages\CreateShelter::route('/create'),
            'edit' => Pages\EditShelter::route('/{record}/edit'),
        ];
    }
}

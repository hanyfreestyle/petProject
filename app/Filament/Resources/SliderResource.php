<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SliderResource\Pages;
use App\Filament\Resources\SliderResource\RelationManagers;
use App\Models\Slider;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SliderResource extends Resource {
    protected static ?string $model = Slider::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Textarea::make('description')
                    ->rows(4)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('url')
                    ->maxLength(255)
                    ->default(null),

                FileUpload::make('photo')
                    ->label('Photo')
                    ->image()
                    ->visibility('public')
                    ->disk('public')
                    ->directory('images/slider')
                    ->required()
                    ->columnSpanFull(),

//                FileUpload::make('photo')
//                    ->label('Photo')
//                    ->image()
//                    ->nullable()
//                    ->afterStateUpdated(function ($state, $set) {
//                        if ($state) {
//                            $image = Image::make($state->getRealPath());
//                            $image->resize(300, 400, function ($constraint) {
//                                $constraint->aspectRatio();
//                                $constraint->upsize();
//                            });
//                            $imagePath = '/uploads/photos/' . $state->hashName();
//                            $image->save(public_path($imagePath));
//                            $set('photo', $imagePath);
//                        }
//                    }),

            ])->columns(1);
    }

    public static function table(Table $table): Table {
        return $table
            ->columns([

                ImageColumn::make('photo'),

                Tables\Columns\TextColumn::make('title')
                    ->searchable(),



//                Tables\Columns\TextColumn::make('photo')
//                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
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
            'index' => Pages\ListSliders::route('/'),
            'create' => Pages\CreateSlider::route('/create'),
            'edit' => Pages\EditSlider::route('/{record}/edit'),
        ];
    }
}

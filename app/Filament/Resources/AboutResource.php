<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Filament\Resources\AboutResource\RelationManagers;
use App\Models\About;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class AboutResource extends Resource {
    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    // Disable the "Add" action
    public static function canCreate(): bool
    {
        return false;
    }

    // Disable the "Delete" action
    public static function canDelete($record): bool
    {
        return false;
    }

    public static function form(Form $form): Form {
        return $form
            ->schema([


                FileUpload::make('photo')
                    ->label('Photo')
                    ->image()
                    ->visibility('public')
                    ->disk('public') // يحدد القرص حيث يتم تخزين الملفات
                    ->directory('images') // يحدد المجلد داخل القرص حيث يتم تخزين الملفات
                    ->nullable()
                    ->columnSpanFull(),

                Forms\Components\TextInput::make('title')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->rows(5)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('title_2')
                    ->maxLength(255)
                    ->columnSpanFull()
                    ->default(null),
                Forms\Components\Textarea::make('description_2')
                    ->rows(5)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('title_3')
                    ->maxLength(255)
                    ->columnSpanFull()
                    ->default(null),
                Forms\Components\Textarea::make('description_3')
                    ->rows(5)
                    ->columnSpanFull(),
//                Forms\Components\TextInput::make('photo')
//                    ->maxLength(255)
//                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table {
        return $table
            ->columns([
                ImageColumn::make('photo'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title_2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title_3')
                    ->searchable(),

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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}

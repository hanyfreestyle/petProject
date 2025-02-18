<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PetHelpRequestResource\Pages;
use App\Models\PetHelpRequest;
use Filament\Facades\Filament;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class PetHelpRequestResource extends Resource
{
    protected static ?string $model = PetHelpRequest::class;

    protected static ?string $slug = 'pet-help-requests';

    protected static ?string $navigationGroup = 'Animal Services';
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('status',0)->count();
    }


        protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('pet_name')
                    ->required(),

                TextInput::make('owner_name')
                    ->required(),

                TextInput::make('owner_phone')
                    ->required(),

                TextInput::make('last_seen'),

                Textarea::make('details')
                    ->columnSpan(2)
                    ->required(),

                FileUpload::make('image')
                    ->required()
                    ->hiddenLabel()
                    ->acceptedFileTypes(['image/*'])
                    ->disk('public')
                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file) {
                        // return 'uploads/sass/blog/' . $file->getClientOriginalName();
                        return  '/images/help/' .time().'_'.$file->getClientOriginalName();

                    })
                    ->image()
                    ->imageEditor()
                    ->downloadable()
                    ->openable()
                    ->panelAspectRatio('16:9')
                    ->panelLayout('integrated')
                    ->columnSpan(2),

                Toggle::make('status')
                    ->required()
                    ->columnSpan(2),

                Placeholder::make('created_at')
                    ->label('Created Date')
                    ->content(fn(?PetHelpRequest $record): string => $record?->created_at?->diffForHumans() ?? '-'),

                Placeholder::make('updated_at')
                    ->label('Last Modified Date')
                    ->content(fn(?PetHelpRequest $record): string => $record?->updated_at?->diffForHumans() ?? '-'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('image'),
                TextColumn::make('pet_name'),

                TextColumn::make('owner_name')
                ->searchable(),

                TextColumn::make('owner_phone')
                ->searchable(),

                TextColumn::make('last_seen'),





                ToggleColumn::make('status'),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPetHelpRequests::route('/'),
            'create' => Pages\CreatePetHelpRequest::route('/create'),
            'edit' => Pages\EditPetHelpRequest::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['owner_phone'];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingsResource\Pages;
use App\Filament\Resources\SettingsResource\RelationManagers;
use App\Models\Sass\SassSetting;
use App\Models\Settings;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class SettingsResource extends Resource {
    protected static ?string $model = Settings::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    public function mount() {

        $content = Settings::query()->where('team_id', Filament::getTenant()->id)->first();


        $this->form->fill(
            $content->toArray()
        );


    }
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    public static function form(Form $form): Form {
        return $form
            ->schema([

                Forms\Components\Section::make('Main Settings')->schema([
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(255)
                        ->default('Helping Paws'),
                    Forms\Components\TextInput::make('slogan')
                        ->required()
                        ->maxLength(255)
                        ->default('Care, Connect, Rescue'),

                    Forms\Components\Textarea::make('des')
                        ->label('Description')
                        ->rows(5)
                        ->columnSpanFull(),
                ])->columnSpanFull()->columns(3),


                Forms\Components\Section::make('Logos')->schema([
                    Forms\Components\TextInput::make('logo')
                        ->maxLength(255)
                        ->default(null),
                    Forms\Components\TextInput::make('logo_dark')
                        ->maxLength(255)
                        ->default(null),
                    Forms\Components\TextInput::make('logo_side')
                        ->maxLength(255)
                        ->default(null),
                ])->columnSpanFull()->columns(3),


                Forms\Components\Section::make('Main Settings')->schema([
                    Forms\Components\TextInput::make('phone')
                        ->tel()
                        ->maxLength(255)
                        ->default(null),
                    Forms\Components\TextInput::make('mobile')
                        ->maxLength(255)
                        ->default(null),
                    Forms\Components\TextInput::make('whatsapp')
                        ->maxLength(255)
                        ->default(null),

                ])->columnSpan(1)->columns(1),

                Forms\Components\Section::make('Main Settings')->schema([
                    Forms\Components\TextInput::make('facebook')
                        ->maxLength(255)
                        ->default(null),
                    Forms\Components\TextInput::make('twitter')
                        ->maxLength(255)
                        ->default(null),
                    Forms\Components\TextInput::make('instagram')
                        ->maxLength(255)
                        ->default(null),
                    Forms\Components\TextInput::make('linkedin')
                        ->maxLength(255)
                        ->default(null),
                    Forms\Components\TextInput::make('map_url')
                        ->default(null),
                    Forms\Components\Toggle::make('map_is_active'),
                ])->columnSpan(2)->columns(1),



            ])->columns(3);
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    public static function table(Table $table): Table {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),


            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
//                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSettings::route('/create'),
            'edit' => Pages\EditSettings::route('/{record}/edit'),
        ];
    }
}

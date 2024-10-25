<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Setting;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SettingResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SettingResource\RelationManagers;
use Tapp\FilamentTimezoneField\Forms\Components\TimezoneSelect;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?string $navigationGroup = 'Settings';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                ->label('Name')
                ->required(),

            // Email field
            TextInput::make('email')
                ->label('Email')
                ->email() // Validation for email format
                ->required(),

            // Phone field
            TextInput::make('phone')
                ->label('Phone')
                ->tel() // Input type for phone
                ->required(),

            // Facebook field
            TextInput::make('facebook')
                ->label('Facebook')
                ->url(), // Validation for URL format

            // Instagram field
            TextInput::make('instagram')
                ->label('Instagram')
                ->url(), // Validation for URL format

            // Twitter field
            TextInput::make('twitter')
                ->label('Twitter')
                ->url(), // Validation for URL format

            // LinkedIn field
            TextInput::make('linkedin')
                ->label('LinkedIn')
                ->url(), // Validation for URL format

            // Products Count field
            TextInput::make('products_count')
                ->label('Products Count')
                ->numeric() // Ensures input is numeric
                ->required(),

            // Suppliers Count field
            TextInput::make('suppliers_count')
                ->label('Suppliers Count')
                ->numeric() // Ensures input is numeric
                ->required(),

            // CAGR Count field
            TextInput::make('cagr_count')
                ->label('CAGR Count')
                ->numeric() // Ensures input is numeric
                ->required(),

            // Timezone field
            TimezoneSelect::make('timezone')
                ->searchable()
                ->label('Timezone')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}

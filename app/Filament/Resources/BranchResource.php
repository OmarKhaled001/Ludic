<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Branch;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BranchResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BranchResource\RelationManagers;
use Cheesegrits\FilamentGoogleMaps\Fields\Map;


class BranchResource extends Resource
{
    protected static ?string $model = Branch::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                ->required()
                ->label('Branch Name'),
            Forms\Components\TextInput::make('address')
                ->required()
                ->label('Branch Address'),
                Map::make('location')
                ->setCenter([30.033333, 31.233334]) 
                ->setZoom(12)
                ->required()
                ->geocodeField('address') 
                ->longitude('longitude')  
                ->latitude('latitude'),  
            Forms\Components\Select::make('country_id')
                ->relationship('country', 'name')
                ->required()
                ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                        ->required()
                        ->label('Country Name') 
                ]
                )
                ->label('Country'),
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
            'index' => Pages\ListBranches::route('/'),
            'create' => Pages\CreateBranch::route('/create'),
            'edit' => Pages\EditBranch::route('/{record}/edit'),
        ];
    }
}

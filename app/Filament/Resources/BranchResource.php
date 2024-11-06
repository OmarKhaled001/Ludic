<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Branch;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BranchResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BranchResource\RelationManagers;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class BranchResource extends Resource
{
    protected static ?string $model = Branch::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';
    protected static ?string $navigationGroup = 'Settings';

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
            Forms\Components\TextInput::make('latitude')
                ->required()
                ->label('Latitude'),
            Forms\Components\TextInput::make('longitude')
                ->required()
                ->label('Longitude'),
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
                SpatieMediaLibraryFileUpload::make('logo')->collection('logos')->label('logo')->maxSize(10240)->columnSpanFull(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('address')->searchable(),
                TextColumn::make('country.name')->searchable(),
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

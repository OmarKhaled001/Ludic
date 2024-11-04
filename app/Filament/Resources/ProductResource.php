<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use App\Models\Service;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProductResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\ProductResource\RelationManagers;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-fire';
    protected static ?string $navigationGroup = 'Services';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                 Grid::make()->columns(12)->schema([
                    Section::make([
                        Select::make('service_id')
                        ->label('Service')
                        ->options(Service::all()->pluck('name', 'id'))
                        ->preload()
                        ->required()
                        ->searchable(),
                        
                        TextInput::make('name')->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                        TextInput::make('slug')->readOnly(),
                        TextInput::make('subtitle')->label('Sub Name')->required(),
                        Textarea::make('details')->required(),
                        SpatieMediaLibraryFileUpload::make('product')->collection('products')->label('Cover (size : 800*800)')->maxSize(10240),
                        // SpatieMediaLibraryFileUpload::make('image_product')->collection('images_products')->label('Cover (size : 800*800)')->maxSize(10240),
                        Toggle::make('is_active')
                    ])->columnSpan(8),
                    Section::make('SEO')->schema([
                        TextInput::make('title')->required(),
                        Textarea::make('description')->required(),
                        TagsInput::make('keywords')->separator(',')->required()

                    ])->columnSpan(4),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('product')
                ->collection('products')->square(),
                TextColumn::make('name')->searchable(),
                TextColumn::make('service.name')
                ->label('Service'),
                ToggleColumn::make('is_active'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make()->label(false),
                Tables\Actions\EditAction::make()->label(false),
                Tables\Actions\DeleteAction::make()->label(false),

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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}

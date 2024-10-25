<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Contact;
use App\Models\Service;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Mail\SendNotification;
use Filament\Facades\Filament;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Mail;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\CheckboxColumn;
use App\Filament\Resources\ContactResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ContactResource\RelationManagers;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox-arrow-down';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                TextInput::make('email'),
                TextInput::make('subject'),
                Select::make('service_id')
                ->label('Service')
                ->options(Service::all()->pluck('name', 'id')),
                Textarea::make('message')->required()->columnSpanFull(),
            ]);
    }



    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->copyable(),
                TextColumn::make('email')->searchable()->copyable(),
                TextColumn::make('subject')->searchable()->copyable(),
                TextColumn::make('service.name')->sortable()->copyable(),
                CheckboxColumn::make('seen')->sortable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
               
                
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
    
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('seen',0)->count();
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}

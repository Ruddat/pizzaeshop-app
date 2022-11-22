<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\ShopData;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Livewire\TemporaryUploadedFile;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ShopDataResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\ShopDataResource\RelationManagers;

class ShopDataResource extends Resource
{
    protected static ?string $model = ShopData::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Shoptitel')
                   // ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('contact_information')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone_info')
                    // ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone_number')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('country')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('city')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('zip')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('street')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('vat_number')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('mapapikey')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('owner')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('impress')
                    ->required()
                    ->maxLength(255),
                    SpatieMediaLibraryFileUpload::make('logo')
                    ->image()
                    ->collection('sidelogo')
                    //->multiple()
                    ->enableReordering()
                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                        return (string) str($file->getClientOriginalName())->prepend('pizza-express-');
                    })->reactive(),
                Forms\Components\Toggle::make('available')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Shoptitel'),
                Tables\Columns\TextColumn::make('contact_information'),
                Tables\Columns\TextColumn::make('phone_info'),
                Tables\Columns\TextColumn::make('phone_number'),
                Tables\Columns\TextColumn::make('country'),
                Tables\Columns\TextColumn::make('city'),
                Tables\Columns\TextColumn::make('zip'),
                Tables\Columns\TextColumn::make('street'),
                Tables\Columns\TextColumn::make('vat_number'),
                Tables\Columns\TextColumn::make('mapapikey'),
                Tables\Columns\TextColumn::make('owner'),
                Tables\Columns\TextColumn::make('impress'),
                Tables\Columns\IconColumn::make('available')
                    ->boolean(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListShopData::route('/'),
            'create' => Pages\CreateShopData::route('/create'),
            'view' => Pages\ViewShopData::route('/{record}'),
            'edit' => Pages\EditShopData::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}

<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Livewire\TemporaryUploadedFile;
use Illuminate\Database\Eloquent\Builder;
use BezhanSalleh\FilamentShield\Support\Utils;
use App\Filament\Resources\ProductResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\ProductResource\RelationManagers;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                SpatieMediaLibraryFileUpload::make('productpicture')
                ->image()
                ->collection('productpic')
                //->multiple()
                ->enableReordering()
                ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                    return (string) str($file->getClientOriginalName())->prepend('heidi-kaufmich-');
                })->reactive(),

                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('category')
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->required(),
                Forms\Components\TextInput::make('pickup_price')
                    ->required(),

                    TinyEditor::make('description')
                    ->maxLength(65535),

                Forms\Components\TextInput::make('allergens')
                    ->required(),
                Forms\Components\TextInput::make('external_item_id')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                SpatieMediaLibraryImageColumn::make('productpicture')
                ->collection('productpic')
                //->conversion('thumbs-fotos')
                ->toggleable(isToggledHiddenByDefault: true)
                ->sortable(),

                Tables\Columns\TextColumn::make('name')
                ->sortable(),
                Tables\Columns\TextColumn::make('category'),
                Tables\Columns\TextColumn::make('price'),
                Tables\Columns\TextColumn::make('pickup_price'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('allergens'),
                Tables\Columns\TextColumn::make('external_item_id'),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'view' => Pages\ViewProduct::route('/{record}'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
    protected static function getNavigationBadge(): ?string
    {
        return Utils::isResourceNavigationBadgeEnabled()
            ? static::getModel()::count()
            : null;
    }


}

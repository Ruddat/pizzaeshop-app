<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TagsColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Filters\TrashedFilter;
use App\Filament\Resources\UserResource\Pages;
use BezhanSalleh\FilamentShield\Support\Utils;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\RelationManagers;
use XliteDev\FilamentImpersonate\Tables\Actions\ImpersonateAction;

class UserResource extends Resource
{
    protected static ?string $model = User::class;



    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('token'),

                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\DateTimePicker::make('email_verified_at'),

                TextInput::make('password')
                    ->same('passwordConfirmation')
                    ->password()
                    ->maxLength(255)
                    ->required(fn ($component, $get, $livewire, $model, $record, $set, $state) => $record === null)
                    ->dehydrateStateUsing(fn ($state) => ! empty($state) ? Hash::make($state) : '')
                    ->label(strval(__('filament-authentication::filament-authentication.field.user.password'))),
                TextInput::make('passwordConfirmation')
                     ->password()
                    ->dehydrated(false)
                    ->maxLength(255)
                    ->label(strval(__('filament-authentication::filament-authentication.field.user.confirm_password'))),

                Select::make('roles')
                    ->multiple()
                    ->relationship('roles', 'name')
                    ->preload(),
          ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                ->searchable(isIndividual: false),
                Tables\Columns\TextColumn::make('email'),
                IconColumn::make('email_verified_at')
                ->options([
                    'heroicon-o-check-circle',
                    'heroicon-o-x-circle' => fn ($state): bool => $state === null,
                ])
                ->colors([
                    'success',
                    'danger' => fn ($state): bool => $state === null,
                ]),
            //  ->label(strval(__('filament-support::filament-support.field.user.verified_at'))),

               // Tables\Columns\TextColumn::make('email_verified_at')
                 //   ->dateTime(),
                TagsColumn::make('roles.name'),
                  //  ->label(strval(__('filament-authentication::filament-authentication.field.user.roles'))),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->since()
                    ->sortable()
                    ->searchable(),
            ])->defaultSort('updated_at', 'desc')->poll('10s')
            ->filters([
                //
                TrashedFilter::make(),
            ])
            ->actions([
                ImpersonateAction::make(), // <---
                Tables\Actions\EditAction::make(),
               // Tables\Actions\DeleteAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
               Tables\Actions\RestoreAction::make(),



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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    protected static function getNavigationBadge(): ?string
    {
        return Utils::isResourceNavigationBadgeEnabled()
            ? static::getModel()::count()
            : null;
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }


}

<?php

namespace App\Filament\Resources\UserResource\Widgets;

use Closure;
use App\Models\User;
use Filament\Tables;
use Illuminate\Support\Facades\DB;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestUser extends BaseWidget
{
    protected function getTableQuery(): Builder
    {
        $userClass = \App\Models\User::class;

        return $userClass::query()
        ->latest()
        ->limit(5);
    }

    protected function getTableColumns(): array
    {
        return [
        TextColumn::make('id')
            ->label('ID'),
        TextColumn::make('name'),
           // ->label(strval(__('filament-authentication::filament-authentication.field.user.name'))),
        TextColumn::make('created_at'),
            //->humanDate()
            //->label(strval(__('filament-authentication::filament-authentication.field.user.created_at'))),
        ];
    }
}

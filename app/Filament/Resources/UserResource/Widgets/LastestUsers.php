<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\User;
use Filament\Widgets\Widget;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Widgets\StatsOverviewWidget\Card;

class LastestUsers extends Widget
{
    protected static string $view = 'filament.resources.user-resource.widgets.lastest-users';

    protected function getCards(): array
    {
        return [
            Card::make('Unique views', '192.1k'),
            Card::make('Bounce rate', '21%'),
            Card::make('Average time on page', '3:12'),
        ];
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('id')
                ->label('ID'),
            TextColumn::make('name')
                ->label(strval(__('filament-authentication::filament-authentication.field.user.name'))),
            TextColumn::make('created_at')
                ->humanDate()
                ->label(strval(__('filament-authentication::filament-authentication.field.user.created_at'))),
        ];
    }

}

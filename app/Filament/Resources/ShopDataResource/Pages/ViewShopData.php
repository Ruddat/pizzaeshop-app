<?php

namespace App\Filament\Resources\ShopDataResource\Pages;

use App\Filament\Resources\ShopDataResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewShopData extends ViewRecord
{
    protected static string $resource = ShopDataResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

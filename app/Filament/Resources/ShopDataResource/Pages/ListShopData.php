<?php

namespace App\Filament\Resources\ShopDataResource\Pages;

use App\Filament\Resources\ShopDataResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListShopData extends ListRecords
{
    protected static string $resource = ShopDataResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

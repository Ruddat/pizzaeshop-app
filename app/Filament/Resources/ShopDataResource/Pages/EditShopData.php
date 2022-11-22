<?php

namespace App\Filament\Resources\ShopDataResource\Pages;

use App\Filament\Resources\ShopDataResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShopData extends EditRecord
{
    protected static string $resource = ShopDataResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}

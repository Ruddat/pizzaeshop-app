<?php

namespace App\Http\ViewComposers;

use App\Nav;
use App\Models\ShopData;

class DataComposer
{
    public function compose($view)
    {
       $view->with('media', ShopData::first());

    }
}

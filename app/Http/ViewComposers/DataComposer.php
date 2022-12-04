<?php

namespace App\Http\ViewComposers;
use App\Nav;

use App\Models\product;
use App\Models\ShopData;
use Illuminate\View\View;

class DataComposer
{
    public function compose(View $view)
    {
        $this->composeShopdaten($view);
        $this->composeProducts($view);

    }

    private function composeShopdaten(View $view)
    {
        $Shopdaten = ShopData::with('media')
        ->where('available', '=', 1)
        ->orderBy('updated_at', 'desc')
        ->first();
     //   dd($Shopdaten);
        $view->with('Shopdaten', $Shopdaten);
    }

    private function composeProducts(View $view)
    {
        $Produkte = product::with('media')
        ->where('available', '=', 1)
        //->where('visible', '=', 1)
        //->with('media')
        ->orderBy('updated_at', 'desc')
        ->take (30)
        ->get();

       // dd($Produkte);

        $view->with('Produkte', $Produkte);
    }

}

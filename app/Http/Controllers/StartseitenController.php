<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\ShopData;
use Illuminate\Http\Request;

class StartseitenController extends Controller
{

    public function getstartseitendata()
    {

        $Produkte = product::with('media')
        ->where('available', '=', 1)
        //->where('visible', '=', 1)
        //->with('media')
        ->orderBy('updated_at', 'desc')
        ->take (30)
        ->get();

        $Shopdaten = ShopData::with('media')
        ->where('available', '=', 1)
        ->orderBy('updated_at', 'desc')
        ->first();

        //dd($Shopdaten);

       return view('components.frontend.pizza.pages.startseite', [

        'Produkte' => $Produkte,
        'Shopdaten' => $Shopdaten,]
       );
       //->with('articles', $articles);

    }
}

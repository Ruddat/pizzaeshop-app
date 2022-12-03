<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\ShopData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

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

        View::share('Shopdaten',$Shopdaten);

       return view('components.frontend.layout', [

        'Produkte' => $Produkte,
        'Shopdaten' => $Shopdaten,]
       );
       //->with('articles', $articles);

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class StartseitenController extends Controller
{

    public function getstartseintendata()
    {

        $Produkte = product::with('media')

        //where('slider', '=', 1)
        //->where('visible', '=', 1)
        //->with('media')
        ->orderBy('updated_at', 'desc')
        ->take (30)
        ->get();


      //dd($Produkte);

       return view('components.frontend.pizza.pages.startseite', [

        'Produkte' => $Produkte, ]
    );

    }
}

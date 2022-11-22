<?php

namespace App\View\Components\frontend\pizza\pages;

use Illuminate\View\Component;

class startseite extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $Produkte;
    public $ShopDaten;

    public function __construct($Produkte, $ShopDaten)
    {
        //
        $this->Produkte = $Produkte;
        $this->ShopDaten = $ShopDaten;
    }




    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        return view('components.frontend.pizza.pages.startseite');
    }
}

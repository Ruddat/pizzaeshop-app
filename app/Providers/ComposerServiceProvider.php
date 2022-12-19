<?php

namespace App\Providers;

use Carbon\Carbon;
use App\Models\product;
use App\Models\ShopData;
use Illuminate\Support\Facades\View;
use Spatie\OpeningHours\OpeningHours;
use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\DataComposer;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('components.frontend.layout', DataComposer::class);

        Carbon::setLocale(env('LOCALE', 'de'));

        view()->composer('components.frontend.layout', function($view)

        {
            $openingHours = OpeningHours::create([
                'monday' => ['09:00-12:00', '13:00-15:00'],
                'tuesday' => [],
                'wednesday' => ['17:00-22:00'],
                'thursday' => ['17:00-22:00'],
                'friday' => ['17:00-22:00'],
                'saturday' => ['16:00-22:00'],
                'sunday' => ['16:00-22:00'],
                'exceptions' => [
                    '2016-11-11' => [],
                    '2016-12-25' => [],
                    '01-01' => ['16:00-22:00'], // Recurring on each 1st of january
                    '12-25' => ['09:00-12:00'], // Recurring on each 25th of december
                ],
            ]);
         //   $newData = json_encode($openingHours);
          //  dd($openingHours);
         // $today = Carbon::now()->format('l');
        //   dd($openingHours->forWeek());

//        $heute = $openingHours->forDay($today);

          view()->share('openingHours', $openingHours);
        });

    }
}

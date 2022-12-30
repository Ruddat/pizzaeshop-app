<?php

namespace Database\Seeders;

use App\Models\ShopData;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ShopDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ShopData::create([
            'Shoptitel' => 'Pizza DemoShop',
            'contact_information' => 'Jon Doe',
            'phone_info' => 'Jetzt anrufen',
            'phone_number' => '123456',
            'country' => 'Deutschland',
            'city' => 'Edemissen',
            'zip' => '38100',
            'street' => 'Heideweg 50',
            'vat_number' => 'DE911234567891',
            'mapapikey' => '911234567891',
            'owner' => 'Inhaber Jon Doe',
            'impress' => 'Ich mache alles',
            'available' => '1'


        ]);
    }





}

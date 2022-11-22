<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_data', function (Blueprint $table) {
            $table->id();
            $table->string('Shoptitel');
            $table->string('contact_information');
            $table->string('phone_info');
            $table->string('phone_number');
            $table->string('country');
            $table->string('city');
            $table->string('zip');
            $table->string('street');
            $table->string('vat_number');
            $table->string('mapapikey');
            $table->string('owner');
            $table->string('impress');
            $table->boolean('available')
            ->default(1)
            ->comment('Shop ist online');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_data');
    }
};

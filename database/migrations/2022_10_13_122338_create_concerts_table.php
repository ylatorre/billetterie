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
        Schema::create('concerts', function (Blueprint $table) {
            $table->id();
            $table->mediumText('Name');
            $table->mediumText('duree');
            $table->mediumText('Price');
            $table->mediumText('Description');
            $table->mediumText('Image');
            $table->mediumText('type');
            $table->integer('IdArtiste');
            $table->integer('NumberPlacesReserved');
            $table->integer('NumberPlacesAvailable');
            $table->date('Date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('concerts');
    }
};

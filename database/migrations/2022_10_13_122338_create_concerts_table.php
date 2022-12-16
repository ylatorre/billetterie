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
            $table->text('Name');
            $table->text('duree');
            $table->text('Price');
            $table->text('Description');
            $table->text('Image');
            $table->text('type');
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

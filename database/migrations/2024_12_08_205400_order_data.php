<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
      Schema::create('order_data', function (Blueprint $table) {
        $table->increments('orderId');
        $table->text('typeOrder')->nullable();
        $table->text('typeRoom')->nullable();
        $table->text('adressOrder')->nullable();
        $table->text('yearCreate')->nullable();
        $table->text('typeHouse')->nullable();
        $table->text('roomCount')->nullable();
        $table->text('areaRoom')->nullable();
        $table->text('areaLifeRoom')->nullable();
        $table->text('areaKitchenRoom')->nullable();
        $table->text('floor')->nullable();
        $table->text('floorAllHouse')->nullable();
        $table->text('typeState')->nullable();
        $table->text('numApart')->nullable();
        $table->text('image')->nullable();
        $table->text('video')->nullable();
        $table->text('balconyRoom')->nullable();
        $table->text('loggiaRoom')->nullable();
        $table->text('viewWindow')->nullable();
        $table->text('bathroomCombinedRoom')->nullable();
        $table->text('bathroomSeparateRoom')->nullable();
        $table->text('finishing')->nullable();
        $table->text('technic')->nullable();
        $table->text('parking')->nullable();
        $table->text('elevatorCountPassenger')->nullable();
        $table->text('elevatorCountFreight')->nullable();
        $table->text('conveniences')->nullable();
        $table->text('bathType')->nullable();
        $table->text('connectionNetwork')->nullable();
        $table->text('price')->nullable();
        $table->text('network')->nullable();
        $table->text('prepayment')->nullable();
        $table->text('deposit')->nullable();
        $table->text('countMonthRental')->nullable();
        $table->text('conditions')->nullable();
        $table->text('selfEmployed')->nullable();
        $table->text('inn')->nullable();
        $table->text('numberPhone')->nullable();
        $table->text('communicationMethod')->nullable();
        $table->text('title')->nullable();
        $table->text('description')->nullable();
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

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
        $table->string('typeOrder')->nullable();
        $table->string('typeRoom')->nullable();
        $table->string('adressOrder')->nullable();
        $table->string('yearCreate')->nullable();
        $table->string('typeHouse')->nullable();
        $table->string('roomCount')->nullable();
        $table->string('areaRoom')->nullable();
        $table->string('areaLifeRoom')->nullable();
        $table->string('areaKitchenRoom')->nullable();
        $table->string('floor')->nullable();
        $table->string('floorAllHouse')->nullable();
        $table->string('typeState')->nullable();
        $table->string('numApart')->nullable();
        $table->string('image')->nullable();
        $table->string('video')->nullable();
        $table->string('balconyRoom')->nullable();
        $table->string('loggiaRoom')->nullable();
        $table->string('viewWindow')->nullable();
        $table->string('bathroomCombinedRoom')->nullable();
        $table->string('bathroomSeparateRoom')->nullable();
        $table->string('finishing')->nullable();
        $table->string('technic')->nullable();
        $table->string('parking')->nullable();
        $table->string('elevatorCountPassenger')->nullable();
        $table->string('elevatorCountFreight')->nullable();
        $table->string('conveniences')->nullable();
        $table->string('bathType')->nullable();
        $table->string('connectionNetwork')->nullable();
        $table->string('price')->nullable();
        $table->string('network')->nullable();
        $table->string('prepayment')->nullable();
        $table->string('deposit')->nullable();
        $table->string('countMonthRental')->nullable();
        $table->string('conditions')->nullable();
        $table->string('selfEmployed')->nullable();
        $table->string('inn')->nullable();
        $table->string('numberPhone')->nullable();
        $table->string('communicationMethod')->nullable();
        $table->string('title')->nullable();
        $table->string('description')->nullable();
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

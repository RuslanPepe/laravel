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
        $table->string('typeOrder')->default('');
        $table->string('typeRoom')->default('');
        $table->string('areaRoom')->default('');
        $table->string('areaLifeRoom')->default('');
        $table->string('areaKitchenRoom')->default('');
        $table->string('wallHeightRoom')->default('');
        $table->string('bathroomCombinedRoom')->default('');
        $table->string('bathroomSeparateRoom')->default('');
        $table->string('balconyRoom')->default('');
        $table->string('loggiaRoom')->default('');
        $table->string('viewWindow')->default('');
        $table->string('finishing')->default('');
        $table->string('elevatorCountPassenger')->default('');
        $table->string('elevatorCountFreight')->default('');
        $table->string('typeHouse')->default('');
        $table->string('typeParking')->default('');
        $table->string('developAuthor')->default('');
        $table->string('yearCreate')->default('');
        $table->string('houseFinishingCount')->default('');
        $table->string('houseFinishingCountLCD')->default('');
        $table->string('houseBuildingCount')->default('');
        $table->string('houseBuildingCountLCD')->default('');
        $table->string('procentHouseBuilding')->default('');
        $table->string('descriptionDeveloperLCD')->default('');
        $table->string('titleOrder')->default('');
        $table->string('metro')->default('');
        $table->string('metro_time')->default('');
        $table->string('adressOrder')->default('');
        $table->string('priceOrder')->default('');
        $table->string('priceOrderQuadro')->default('');
        $table->string('roomCount')->default('');
        $table->string('yearComplete')->default('');
        $table->string('houseComplete')->default('');
        $table->string('typeState')->default('');
        $table->string('numApart')->default('');
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

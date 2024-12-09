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
        $table->id('orderId');
        $table->string('type_room');
        $table->string('area_room');
        $table->string('area_life_room');
        $table->string('area_kitchen_room');
        $table->string('wall_height_room');
        $table->string('bathroom_combined_room');
        $table->string('bathroom_separate_room');
        $table->string('balcony_room');
        $table->string('loggia_room');
        $table->string('view_window');
        $table->string('finishing');
        $table->string('elevator_count_passenger');
        $table->string('elevator_count_freight');
        $table->string('type_house');
        $table->string('type_parking');
        $table->string('developAuthor');
        $table->string('yearCreate');
        $table->string('houseFinishingCount');
        $table->string('houseFinishingCountLCD');
        $table->string('houseBuildingCount');
        $table->string('houseBuildingCountLCD');
        $table->string('procentHouseBuilding');
        $table->string('descriptiomDeveloperLCD');
        $table->string('titleOrder');
        $table->string('metro');
        $table->string('metro_time');
        $table->string('adressOrder');
        $table->string('priceOrder');
        $table->string('priceOrderQuadro');
        $table->string('roomCount');
        $table->string('yearComplete');
        $table->string('houseComplete');
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

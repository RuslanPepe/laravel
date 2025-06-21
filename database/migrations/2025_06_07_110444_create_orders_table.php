<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('typeOrder');
            $table->string('typeRoom');
            $table->string('adressOrder');
            $table->decimal('lat',10 ,7);
            $table->decimal('lon', 10, 7);
            $table->unsignedSmallInteger('yearCreate');
            $table->string('typeHouse');
            $table->string('roomCount');
            $table->unsignedSmallInteger('areaRoom');
            $table->unsignedSmallInteger('areaLifeRoom');
            $table->unsignedSmallInteger('areaKitchenRoom');
            $table->unsignedSmallInteger('floor');
            $table->unsignedSmallInteger('floorAllHouse');
            $table->string('typeState');
            $table->string('numApart');
            $table->json('image');
            $table->json('video');
            $table->unsignedTinyInteger('balconyRoom');
            $table->unsignedTinyInteger('loggiaRoom');
            $table->string('viewWindow');
            $table->unsignedTinyInteger('bathroomCombinedRoom');
            $table->unsignedTinyInteger('bathroomSeparateRoom');
            $table->string('finishing');
            $table->json('technic');
            $table->string('parking');
            $table->unsignedSmallInteger('elevatorCountPassenger');
            $table->unsignedTinyInteger('elevatorCountFreight');
            $table->json('conveniences');
            $table->json('furniture');
            $table->json('bathType');
            $table->json('connectionNetwork');
            $table->unsignedInteger('price');
            $table->string('communalServices');
            $table->string('prepayment');
            $table->unsignedInteger('deposit');
            $table->string('countMonthRental');
            $table->json('conditions');
            $table->string('selfEmployed');
            $table->string('inn');
            $table->string('numberPhone');
            $table->string('communicationMethod');
            $table->string('title');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

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
        Schema::create('userData', function (Blueprint $table){
            $table->increments('id');
            $table->string('login');
            $table->string('password');
            $table->string('name')->nullable();
            $table->string('avatar')->nullable();
            $table->string('email')->nullable();
            $table->string('telephone')->nullable();
            $table->string('socialNetwork')->nullable();
            $table->string('messengers')->nullable();
            $table->string('description')->nullable();
            $table->string('options')->nullable();
            $table->string('status')->default('Покупатель');
            $table->string('myOrder')->nullable();
            $table->string('reviews')->nullable();
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

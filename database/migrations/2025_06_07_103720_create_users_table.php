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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('login');
            $table->string('password');
            $table->string('email_verification_token')->nullable();
            $table->string('avatar')->default('/image/iconUser.png');
            $table->string('email')->nullable();
            $table->string('telephone')->nullable();
            $table->string('socialNetwork')->nullable();
            $table->string('messengers')->nullable();
            $table->string('description')->nullable();
            $table->string('options')->nullable();
            $table->string('status')->default('Покупатель');
            $table->string('myOrder')->nullable();
            $table->string('reviews')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

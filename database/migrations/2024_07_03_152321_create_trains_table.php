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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('company_name', 100);
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->time('arrival_time');
            $table->time('departure_time');
            $table->bigInteger('train_code');
            $table->tinyInteger('number_of_carriages');
            $table->boolean('in_time');
            $table->boolean('deleted');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};

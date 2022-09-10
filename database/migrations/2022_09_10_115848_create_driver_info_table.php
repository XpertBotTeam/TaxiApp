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
        Schema::create('driver_info', function (Blueprint $table) {
            $table->id();
            $table->string('driver_name');
            $table->string('gender');
            $table->string('color');
            $table->string('car_model');
            $table->string('location');
            $table->string('phone');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('driver_info');
    }
};

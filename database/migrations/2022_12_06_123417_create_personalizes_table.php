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
        Schema::create('personalizes', function (Blueprint $table) {
            $table->id();
            $table->string('designers')->nullable();
            $table->string('contractors')->nullable();
            $table->string('buildings')->nullable();
            $table->string('services')->nullable();
            $table->string('artisans')->nullable();
            $table->string('wares')->nullable();
            $table->string('properties')->nullable();
            $table->text('others')->nullable();
            $table->string('user_id');
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
        Schema::dropIfExists('personalizes');
    }
};

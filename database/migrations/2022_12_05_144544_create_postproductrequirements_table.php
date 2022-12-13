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
        Schema::create('postproductrequirements', function (Blueprint $table) {
            $table->id();
            $table->text('purpose')->nullable();
            $table->string('requirement_title')->nullable();
            $table->text('qoutation_deadline')->nullable();
            $table->text('terms_of_payment')->nullable();
            $table->text('delivery_address')->nullable();
            $table->text('delivery_city')->nullable();
            $table->string('no_of_qoutations')->nullable();
            $table->text('product_you_inquire')->nullable();
            $table->text('attachment')->nullable();
            
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
        Schema::dropIfExists('postproductrequirements');
    }
};

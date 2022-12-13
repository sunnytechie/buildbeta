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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('title');
            $table->text('description');
            $table->string('price')->nullable();
            $table->text('image');
            $table->text('thumbnail')->nullable();
            $table->text('thumbnail1')->nullable();
            $table->text('thumbnail2')->nullable();
            $table->text('thumbnail3')->nullable();
            $table->text('thumbnail4')->nullable();
            $table->text('thumbnail5')->nullable();
            $table->string('category_id');
            $table->string('category_title')->nullable();
            $table->string('subcategory_id')->nullable();
            $table->string('subcategory_title')->nullable();
            $table->string('provider_id')->nullable();
            $table->string('publish')->default(0);

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
        Schema::dropIfExists('products');
    }
};

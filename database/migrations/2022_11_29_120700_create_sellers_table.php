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
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('category_id');
            $table->integer('provider_id');
            $table->text('business_name')->nullable();
            $table->text('business_address')->nullable();
            $table->text('business_phone')->nullable();
            $table->text('business_email')->nullable();
            $table->text('business_website')->nullable();
            $table->text('business_description')->nullable();
            $table->text('business_logo')->nullable();
            
            $table->text('business_reg_no')->nullable();
            $table->text('business_cert_image')->nullable();
            $table->text('business_vat_no')->nullable();
            $table->text('business_tax_no')->nullable();

            $table->text('business_bank_name')->nullable();
            $table->text('business_bank_account')->nullable();
            $table->text('business_bank_branch')->nullable();

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
        Schema::dropIfExists('sellers');
    }
};

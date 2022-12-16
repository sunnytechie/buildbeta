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
        Schema::create('escrows', function (Blueprint $table) {
            $table->id();
            $table->text('depositor_name');
            $table->text('depositor_username');
            $table->text('depositor_email');
            $table->text('depositor_phone');
            $table->text('depositor_address');
            $table->text('depositor_country');
            $table->text('depositor_state');
            $table->text('depositor_city');
            $table->text('depositor_zip');

            $table->text('beneficiary_name');
            $table->text('beneficiary_username');
            $table->text('beneficiary_email');
            $table->text('beneficiary_phone');
            $table->text('beneficiary_address');
            $table->text('beneficiary_country');
            $table->text('beneficiary_state');
            $table->text('beneficiary_city');
            $table->text('beneficiary_zip');

            $table->text('amount');
            $table->text('currency');
            $table->text('status');
            $table->text('transaction_reference');
            $table->text('transaction_fee');

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
        Schema::dropIfExists('escrows');
    }
};

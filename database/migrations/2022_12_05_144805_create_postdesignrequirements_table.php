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
        Schema::create('postdesignrequirements', function (Blueprint $table) {
            $table->id();
            $table->string('requirement_title');
            $table->text('design_service_type');
            $table->text('grade_of_decoration');
            $table->string('no_of_intensions');
            $table->text('submission_deadline');
            $table->text('project_location');
            $table->text('attachment');
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
        Schema::dropIfExists('postdesignrequirements');
    }
};

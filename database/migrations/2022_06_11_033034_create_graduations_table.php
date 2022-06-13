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
        Schema::create('graduations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exam_id')->nullable();
            $table->integer('point_range_min')->nullable();
            $table->integer('point_range_max')->nullable();
            $table->integer('graduation_range_min')->nullable();
            $table->integer('graduation_range_max')->nullable();
            $table->foreign('exam_id')->references('id')->on('exams');
            $table->softDeletes();
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
        Schema::dropIfExists('graduations');
    }
};

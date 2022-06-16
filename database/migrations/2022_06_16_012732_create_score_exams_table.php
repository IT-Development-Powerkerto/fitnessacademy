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
        Schema::create('score_exams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('component_exam_id');
            $table->foreignId('user_id')->nullable();
            $table->integer('score')->nullable();
            $table->foreign('component_exam_id')->references('id')->on('component_exams');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('score_exams');
    }
};

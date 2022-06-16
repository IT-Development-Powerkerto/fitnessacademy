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
        Schema::create('score_sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('component_session_id');
            $table->foreignId('user_id')->nullable();
            $table->integer('score')->nullable();
            $table->foreign('component_session_id')->references('id')->on('component_sessions');
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
        Schema::dropIfExists('score_sessions');
    }
};

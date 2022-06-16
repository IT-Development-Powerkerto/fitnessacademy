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
        Schema::create('component_sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('session_id')->nullable();
            $table->string('component_name')->nullable();
            $table->foreign('session_id')->references('id')->on('sessions');
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
        Schema::dropIfExists('component_sessions');
    }
};

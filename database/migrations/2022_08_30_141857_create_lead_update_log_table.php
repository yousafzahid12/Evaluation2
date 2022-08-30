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
        Schema::create('lead_update_log', function (Blueprint $table) {
            $table->unsignedBigInteger('lead-id');
            $table->foreign('lead-id')->references('id')->on('leads');
            $table->unsignedBigInteger('user-id');
            $table->foreign('user-id')->references('id')->on('users');
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
        Schema::dropIfExists('lead_update_log');
    }
};

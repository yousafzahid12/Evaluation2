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
        Schema::create('share_access', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lead_share_id');
            $table->foreign('lead_share_id')->references('id')->on('lead_share');
            $table->enum('action', ['full_access','read_only', 'update', 'delete','can_share'])->default('read_only');
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
        Schema::dropIfExists('share_access');
    }
};

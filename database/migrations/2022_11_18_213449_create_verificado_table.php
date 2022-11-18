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
        Schema::create('verificado', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usr');
            $table->foreign('usr')->references('id')->on('users');
            $table->foreignId('local_id');
            $table->foreign('local_id')->references('local_id')->on('locais');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verificado');
    }
};

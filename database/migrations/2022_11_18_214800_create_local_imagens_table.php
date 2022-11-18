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
        Schema::create('local_imagens', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('local_id');
            $table->foreign('local_id')->references('local_id')->on('locais');
            $table->string("caminho");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('local_imagens');
    }
};

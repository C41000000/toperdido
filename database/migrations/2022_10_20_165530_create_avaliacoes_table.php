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
        Schema::create('avaliacoes', function (Blueprint $table) {
            $table->id('avaliacao_id');
            $table->string('comentario');
            $table->float('nota');
            $table->float('nota_bairro');
            $table->foreignId('local_id');
            $table->foreign('local_id')->references('local_id')->on('locais');
            $table->foreignId('usr');
            $table->foreign('usr')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avaliacoes');
    }
};

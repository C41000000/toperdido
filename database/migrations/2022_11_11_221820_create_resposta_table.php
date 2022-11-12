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
        Schema::create('resposta', function (Blueprint $table) {
            $table->id();
            $table->string('comentario');
            $table->foreignId('usr');
            $table->foreign('usr')->references('id')->on('users');
            $table->foreignId('avaliacao_id');
            $table->foreign('avaliacao_id')->references('avaliacao_id')->on('avaliacoes');
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
        Schema::dropIfExists('resposta');
    }
};

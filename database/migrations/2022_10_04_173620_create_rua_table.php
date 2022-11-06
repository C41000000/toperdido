<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Bairro;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rua', function (Blueprint $table) {
            $table->id('rua_id');
            $table->foreignIdFor(Bairro::class)->references('bairro_id')->on('bairro');
            $table->string('rua_nome');
            $table->string("cep");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rua');
    }
};

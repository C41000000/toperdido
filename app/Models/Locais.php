<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locais extends Model
{
    use HasFactory;

    public function retornaInformacoes($dados){
        $local = DB::table('locais')->where('nome', $dados['nome']);

        return $local;

    }
}

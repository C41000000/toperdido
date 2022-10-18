<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Cidade extends Model
{
    use HasFactory;
    protected $fillable = ['cidade_nome', 'estado_id'];


    public function retornaCidade($cidade, $estado){

        $sql = "
            SELECT
                estado_id,
                c.*
            FROM cidades c
            NATURAL JOIN estado e
            WHERE c.cidade_nome = '{$cidade}'
            AND e.sigla = '{$estado}'
            ";

        return DB::select($sql);

    }

    public function retornaCidadePeloId($cidade){

        $sql = "
            SELECT
                c.*
            FROM cidades c
            WHERE c.cidade_id = {$cidade}
            ";

        return DB::select($sql);

    }    

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Bairro extends Model
{
    use HasFactory;
    protected $fillable = ['cidade_id', 'bairro_nome'];
    protected $table = "bairro";
    public $timestamps = false;

    public function retornaBairro($bairro, $cidade){
        $barrio = trim($bairro);
        $sql = "
            SELECT
                *
            FROM bairro b
            NATURAL JOIN cidades c
            WHERE b.bairro_nome = '{$bairro}'
            AND c.cidade_id = '{$cidade}'
        ";
        
        $dados = DB::select($sql);

        return $dados;
    }

}

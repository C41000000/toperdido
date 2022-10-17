<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Locais extends Model
{
    use HasFactory;
    protected $table = "locais";
    protected $fillable = ['nome', 'rua_id', 'img'];
    public $timestamps = false;

    public function retornaInformacoes($dados){
        dd($dados);
        $nome = $dados['endereco0'];
        $rua = explode('-', $dados['endereco1'])[0];
        $bairro = explode('-', $dados['endereco1'])[1];
        $cidade = explode('-', $dados['endereco2'])[0];
        $estado = explode('-', $dados['endereco2'])[1];
        $pais = $dados['endereco3'];
        $sql = "
            SELECT
                *
            FROM locais l 
            INNER JOIN rua r ON r.rua_id = l.rua_id
            INNER JOIN bairro b ON b.bairro_id = r.bairro_id
            INNER JOIN cidades c ON c.cidade_id = b.cidade_id
            INNER JOIN estado e ON e.estado_id = c.estado_id
            INNER JOIN pais p ON p.pais_id = e.pais_id
            WHERE l.nome = '{$nome}'
            AND r.rua_nome = '{$rua}'
            AND b.bairro_nome = '{$bairro}'
            AND c.cidade_nome = '{$cidade}'
            AND e.sigla = '{$estado}'
        ";
        $local = DB::select($sql);

        return $local;

    }

    public function criaLocal($dados){

    }
}

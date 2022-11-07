<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Locais extends Model
{
    use HasFactory;
    protected $table = "locais";
    protected $fillable = ['nome', 'rua_id', 'img', 'numero'];
    public $timestamps = false;
    protected $primaryKey = "local_id";

    public function retornaInformacoes($dados){
        
        $nome = str_replace("'", " ",$dados['endereco0']);
        $rua_e_numero = trim(explode('-',$dados['endereco1'])[0]);
        $rua = str_replace("Zona Rural", "", trim(explode(",", $rua_e_numero)[0]));
        $teste = explode(",", $rua_e_numero);
        
        if(isset($teste[1])){
            $numero = trim(explode(",", $rua_e_numero)[1]);
        }else{
            $numero = 0;
        }
        
        $teste_bairro = explode('-', $dados['endereco1']);
        if(isset($teste_bairro[1])){
            $bairro = trim(explode('-', $dados['endereco1'])[1]);
        }else{
            $bairro = "Zona Rural";
        }
        
        $cidade = trim(explode('-', $dados['endereco2'])[0]);
        $estado = trim(explode('-', $dados['endereco2'])[1]);
        $pais = trim($dados['endereco3']);
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
            AND l.numero = '{$numero}'
        ";
        
        $local = DB::select($sql);
        
        return $local;

    }


    public function buscaSeisMelhoresDaCidade($cidade){
        $sql = "
        SELECT
            l.local_id,
            l.nome,
            r.rua_nome,
            b.bairro_nome,
            c.cidade_nome,
            l.img,
            l.numero
        FROM locais l
        INNER JOIN rua r ON r.rua_id = l.rua_id
        INNER JOIN bairro b ON b.bairro_id = r.bairro_id
        INNER JOIN cidades c ON c.cidade_id = b.cidade_id
        WHERE c.cidade_id = {$cidade}
        ORDER BY l.nota DESC
        LIMIT 6
        ";
        
        return DB::select($sql);
    }

    public function bucasDadosLocal($local){
        $sql = "
            SELECT
                l.local_id,
                l.nome,
                l.numero,
                l.img,
                c.cidade_nome,
                b.bairro_nome
            FROM locais l 
            INNER JOIN rua r ON r.rua_id = l.rua_id
            INNER JOIN bairro b ON b.bairro_id = r.bairro_id
            INNER JOIN cidades c ON c.cidade_id = b.cidade_id
            INNER JOIN estado e ON e.estado_id = c.estado_id
            INNER JOIN pais p ON p.pais_id = e.pais_id
            WHERE l.local_id = {$local}
        ";

        return DB::select($sql);
    }

    public function buscaLocalPeloNome($local){
        $sql = "
        SELECT
           l.local_id,
           l.nome,
           r.rua_nome
        FROM locais l 
        INNER JOIN rua r ON r.rua_id = l.rua_id
        INNER JOIN bairro b ON b.bairro_id = r.bairro_id
        INNER JOIN cidades c ON c.cidade_id = b.cidade_id
        INNER JOIN estado e ON e.estado_id = c.estado_id
        INNER JOIN pais p ON p.pais_id = e.pais_id
        WHERE l.nome LIKE '%{$local}%'
    ";

        return DB::select($sql);
    }

    public function buscaUltimoLocalCriado(){
        $sql = "
            SELECT
            l.local_id,
            l.nome,
            r.rua_nome,
            l.img
            FROM locais l 
            INNER JOIN rua r ON r.rua_id = l.rua_id
            INNER JOIN bairro b ON b.bairro_id = r.bairro_id
            INNER JOIN cidades c ON c.cidade_id = b.cidade_id
            INNER JOIN estado e ON e.estado_id = c.estado_id
            INNER JOIN pais p ON p.pais_id = e.pais_id
            ORDER BY local_id DESC LIMIT 1
        ";

        return DB::select($sql);

    }
    public function rua(){
        return $this->hasOne(Rua::class);
    }
}

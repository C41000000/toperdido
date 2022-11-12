<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Resposta extends Model{
    use HasFactory;
    protected $table = "resposta";
    protected $fillable = ['usr', 'avaliacao_id', 'comentario'];
    protected $primaryKey = "id";


    public function buscaTodasRepostas($avaliacao){

        $sql = "
            SELECT
                r.*,
                u.name
            FROM resposta r
            INNER JOIN users u ON u.id = r.usr
            WHERE r.avaliacao_id = {$avaliacao}
        ";

        return DB::select($sql);

    }

}

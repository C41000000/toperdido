<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Avaliacoes extends Model
{
    use HasFactory;

    protected $table = "avaliacoes";
    protected $fillable = ['avaliacao_id', 'comentario', 'local_id', 'nota', 'usr'];
    public $timestamps = false;
    protected $primaryKey = "avaliacao_id";

    public function buscaTodasAvaliacoesLocal($local){
        $sql = "
            SELECT
                *
            FROM avaliacoes a
            INNER JOIN users u ON u.id = a.usr
            WHERE a.local_id = {$local}
        ";

        return DB::select($sql);
    }


}

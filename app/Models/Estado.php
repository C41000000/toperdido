<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Estado extends Model
{
    use HasFactory;
    protected $table = "estado";
    public $timestamps = false;

    public function retornaEstadoPelaSigla($sigla){
        $sql = "
            SELECT 
                *
            FROM estado
            WHERE sigla = '{$sigla}' 
        ";

        return DB::select($sql);
    }

    public function retornaTodosEstados(){
        $sql = "
            SELECT 
                *
            FROM estado
            ORDER BY estado_nome
        ";

        return DB::select($sql);
    }
}

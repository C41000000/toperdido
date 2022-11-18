<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Verificado extends Model
{
    use HasFactory;

    public function retornaSeVerificado($user, $local){
        $sql = "
            SELECT
                *
            FROM verificado
            WHERE usr = {$user} 
            AND local_id = {$local}
        ";

        $result = DB::select($sql);

        return $result;
        
    }
}

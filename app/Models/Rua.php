<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Rua extends Model
{
    use HasFactory;
    protected $table = "rua";
    protected $fillable = ['bairro_id', 'rua_nome', 'cep'];
    public $timestamps = false;
    protected $primaryKey = "rua_id";

    public function retornaRua($rua, $bairro){
        $rua = trim($rua);
        
        $sql = "
            SELECT
                *
            FROM rua r
            NATURAL JOIN bairro b
            WHERE rua_nome = '{$rua}'
            AND b.bairro_id = '{$bairro}'
        ";
        
        return DB::select($sql);
    }

}

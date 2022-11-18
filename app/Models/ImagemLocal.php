<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ImagemLocal extends Model
{
    use HasFactory;
    protected $table = "local_imagens";
    public $timestamps = false;
    protected $fillable = [
        'name',
        'local_id',
        'caminho',
    ];

    public function buscaImagensDoLocal($id){
        $sql = "
            SELECT
                caminho
            FROM local_imagens
            WHERE local_id = {$id}
        ";

        $result =  DB::select($sql);
        
        if(empty($result)){
            return false;
        }else{
            return $result;
        }
    }
}

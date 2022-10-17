<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rua extends Model
{
    use HasFactory;
    protected $table = "rua";
    protected $fillable = ['bairro_id', 'rua_nome', 'cep'];
    public $timestamps = false;

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacoes extends Model
{
    use HasFactory;

    protected $table = "avaliacoes";
    protected $fillable = ['avaliacao_id', 'comentario', 'local_id', 'nota'];
    public $timestamps = false;
    protected $primaryKey = "avaliacao_id";
}

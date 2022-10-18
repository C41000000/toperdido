<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Locais;
use App\Models\Rua;
use App\Models\Bairro;
use App\Models\Cidade;
use App\Models\Estado;


class CadastroController extends Controller
{
	public function index(){
		$estado_model = new Estado();
		$estados = $estado_model->retornaTodosEstados();

		return view('cadastro.index', 
			['estados' => $estados]
		);
	}
    
}

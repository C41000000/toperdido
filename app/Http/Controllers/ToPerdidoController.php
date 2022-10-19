<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Locais;
use App\Models\Rua;
use App\Models\Bairro;
use App\Models\Cidade;
use App\Models\Estado;



use Illuminate\Http\Request;

class ToPerdidoController extends Controller
{
    public function index(){
        
        return view('index');
    }

    public function login(){
        return view('to-perdido.login');
    }

    public function buscaLocal(Request $request){
        $locais = new Locais();
        
        $local = $locais->retornaInformacoes($request->all());
        if(!$local){
            $local = $this->criaCoisas($request->all());   
        }
        return view('local', [
            'local' => $local
        ]);
    }

    public function locais($cidade = 1687){
        $locais_model = new Locais();
        $cidade_model = new Cidade();
        $cid = $cidade_model->retornaCidadePeloId($cidade);
        $cid = array_shift($cid);
        $todosLocais = $locais_model->buscaSeisMelhoresDaCidade($cidade);
        
        
        return view('locais',[
            'locais' => $todosLocais,
            'cidade' => $cid

        ]);
    }

    public function buscaCidadesJson($nome){
        $cidade_model = new Cidade();

        return $cidade_model->buscaCidadesPeloNome($nome);

    }

    private function criaCoisas($dados){
        
        $model_bairro = new Bairro();
        $model_rua = new Rua();
        $model_cidade = new Cidade();
        $model_estado = new Estado();

        $nome = $dados['endereco0'];
        $rua = trim(explode('-', $dados['endereco1'])[0]);
        $numero = trim(explode(',', $rua)[1]);
        $rua = trim(explode(',', $rua)[0]);
        
        $bairro = trim(explode('-', $dados['endereco1'])[1]);
        $cidade = trim(explode('-', $dados['endereco2'])[0]);
        
        $sigla = trim(explode('-',$dados['endereco2'])[1]);
        $cidade_criada = $model_cidade->retornaCidade($cidade, $sigla);
        
        if(!$cidade_criada){
            
            $estado = $model_estado->retornaEstadoPelaSigla($sigla);
            $estado = array_shift($estado);
            
            $cidade_criada = Cidade::create([
                'estado_id' => $estado->estado_id,
                'cidade_nome' => $cidade
            ]);
        }
        
        
        
        $cidade_criada = array_shift($cidade_criada);
        $cid = (!is_object($cidade_criada) && isset($cidade_criada['cidade_id'])) ? $cidade_criada['cidade_id']: $cidade_criada->cidade_id;
        $bairro_criado = $model_bairro->retornaBairro($bairro, $cid);
        
        if(!$bairro_criado){

            $bairro_criado = Bairro::create([
                'bairro_nome' => $bairro,
                'cidade_id' => $cid,
    
            ]);
        }
            
        $bairro = (!is_object($bairro_criado) && isset($bairro_criado['bairro_id']))? $bairro_criado['bairro_id'] : $bairro_criado->bairro_id;
        $bairro = $bairro_criado['id'] ? $bairro_criado['id'] : $bairro;
        $rua_criada = $model_rua->retornaRua($rua, $bairro);
        
        if(!$rua_criada){
            $rua_criada = Rua::create([
                'bairro_id' => $bairro,
                'rua_nome' => $rua,
                'cep' => '000000-00'
    
            ]);
        }

        $rua_id = (!is_object($rua_criada) && isset($rua_criada['rua_id'])) ? $rua_criada['rua_id'] : $rua_criada->rua_id;
        $rua_id = $rua_criada['id'] ? $rua_criada['id'] : $rua_id; 
        
        $locais = Locais::create([
            'nome' => $nome,
            'rua_id' => $rua_id,
            'img' => '',
            'numero' => $numero
        ]);
        
        return $locais;
    }


    public function detalhes($local){
        $dados = Locais::where('local_id', $local)->first();
        dd($dados->rua);
    }
    public function pr($string, $die = 1){
        echo"<pre>";
        print_r($string);
        if($die){
            die;
        }
    }
}

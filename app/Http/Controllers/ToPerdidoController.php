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
        
        return view('detalhes', [
            'dados' => array_shift($local)
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

    public function buscaCidades($nome){
        $cidade_model = new Cidade();

        return $cidade_model->buscaCidadesPeloNome($nome);

    }

    private function criaCoisas($dados){
        
        $model_bairro = new Bairro();
        $model_rua = new Rua();
        $model_cidade = new Cidade();
        $model_estado = new Estado();
        $model_local = new Locais();

        
        $nome = $dados['endereco0'];
        $rua = trim(explode('-', $dados['endereco1'])[0]);
        $teste = explode(',', $rua);
        if(isset($teste[1])){
            $numero = trim(explode(',', $rua)[1]);
        }else{
            $numero = 0;
        }
        $rua = trim(explode(',', $rua)[0]);
        $teste_bairro = explode('-', $dados['endereco1']);
        if(isset($teste_bairro[1])){
            $bairro = trim(explode('-', $dados['endereco1'])[1]);
        }else{
            $bairro = "Zona Rural";
        }
        
        
        
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

            $cidade_criada = $model_cidade->buscaUltimaCidade();
        }
        $cidade_criada = array_shift($cidade_criada);
        

        $bairro_criado = $model_bairro->retornaBairro($bairro, $cidade_criada->cidade_id);
        
        if(!$bairro_criado){

            $bairro_criado = Bairro::create([
                'bairro_nome' => $bairro,
                'cidade_id' => $cidade_criada->cidade_id,
    
            ]);
            $bairro_criado = $model_bairro->buscaUltimoBairro();
          
        }
        $bairro_criado = array_shift($bairro_criado);
        
        
        $rua_criada = $model_rua->retornaRua($rua, $bairro);
        
        if(!$rua_criada){
            $rua_criada = Rua::create([
                'bairro_id' => $bairro_criado->bairro_id,
                'rua_nome' => $rua,
                'cep' => '000000-00'
    
            ]);
            $rua_criada = $model_rua->buscaUltimaRuaCriada();
            
        }

        $rua_criada = array_shift($rua_criada);
        
        $locais = Locais::create([
            'nome' => $nome,
            'rua_id' => $rua_criada->rua_id,
            'img' => '/img/global-settings.png',
            'numero' => $numero
        ]);
        $locais = $model_local->buscaUltimoLocalCriado();
        
        return $locais;
    }


    public function detalhes($local){
        $model_local = new locais();
        
        $dados = $model_local->bucasDadosLocal($local);
        
        return view('detalhes',[
            'dados' => array_shift($dados)
        ]);
    }

    public function buscaLocaisAutocomplete($local){
        $locais_model = new Locais();

        return $locais_model->buscaLocalPeloNome($local);

    }

    public function pr($string, $die = 1){
        echo"<pre>";
        print_r($string);
        if($die){
            die;
        }
    }
}

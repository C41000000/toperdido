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

    public function doideira(Request $request){
        
        $usuario = $request['email'];
        $senha = $request['senha'];
        
        if (Auth::validate(['email' => $usuario, 'password' => $senha]))
        {   
            $_SESSION = ['aaaaaa' => true];

            return redirect()->intended('/');
        }else{
            // $user = [
            //     'name' => $usuario,
            //     'email' => $usuario,
            //     'password' => Hash::make($senha)
            // ];
    
            // $user = User::create($user);
            
            return redirect()->route('login')->with('uai', 'uai2');
        }


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


    private function criaCoisas($dados){
        
        $model_bairro = new Bairro();
        $model_rua = new Rua();
        $model_cidade = new Cidade();
        $model_estado = new Estado();

        $nome = $dados['endereco0'];
        $rua = trim(explode('-', $dados['endereco1'])[0]);
        $bairro = trim(explode('-', $dados['endereco1'])[1]);
        $cidade = trim(explode('-', $dados['endereco2'])[0]);
        
        $sigla = trim(explode('-',$dados['endereco2'])[1]);

        if(!$cidade_criada = $model_cidade->retornaCidade($cidade, $sigla)){
            $estado = $model_estado->retornaEstadoPelaSigla($sigla);
            $estado = array_shift($estado);
            $cidade_criada = Cidade::create([
                'estado_id' => $estado->estado_id,
                'cidade_nome' => $cidade
            ]);
        }
        $this->pr($cidade_criada);
        
        if(!$bairro_criado = $model_bairro->retornaBairro($bairro, $cidade_criada['cidade_id'])){
            
            $bairro_criado = Bairro::create([
                'bairro_nome' => $bairro,
                'cidade_id' => $cidade_criada['cidade_id'],
    
            ]);
        }
        
        if(!$rua_criada = $model_rua->retornaRua($rua, $bairro_criado['bairro_id'])){
            $rua_criada = Rua::create([
                'bairro_id' => $bairro['bairro_id'],
                'rua_nome' => $rua,
                'cep' => '000000-00'
    
            ]);
        }
        
        $locais = Locais::create([
            'nome' => $nome,
            'rua_id' => $rua_criada['rua_id'],
            'img' => ''
        ]);
        
        return $locais;
    }


    public function pr($string, $die = 1){
        echo"<pre>";
        print_r($string);
        if($die){
            die;
        }
    }
}

<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Locais;
use App\Models\Rua;
use App\Models\Bairro;



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
        return view('local');
    }


    private function criaCoisas($dados){
        $nome = $dados['endereco0'];
        $rua = explode('-', $dados['endereco1'])[0];
        $bairro = explode('-', $dados['endereco1'])[1];

        $bairro = Bairro::create([
            'bairro_nome' => $bairro,
            'cidade_id' => 1,

        ]);
        
        $rua = Rua::create([
            'bairro_id' => $bairro['id'],
            'rua_nome' => $rua,
            'cep' => '000000-00'

        ]);

        $locais = Locais::create([
            'nome' => $nome,
            'rua_id' => $rua['id'],
            'img' => ''
        ]);
        
        return $locais;
    }
}

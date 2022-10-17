<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Locais;

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
        return $local;
        return view('local');
    }
}

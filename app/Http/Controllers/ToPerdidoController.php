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
use App\Models\Avaliacoes;
use App\Models\Resposta;



use Illuminate\Http\Request;

class ToPerdidoController extends Controller
{
    public function index(){
        
        return view('index');
    }

    public function buscaLocal(Request $request){
        $locais = new Locais();
        
        $local = $locais->retornaInformacoes($request->all());
        if(!$local){
            $local = $this->criaCoisas($request->all());   
        }
        $todas_notas = [0,0,0,0,0,0];

        foreach($todas_notas as $key => $cada_nota){
            $todas_notas[$key] = 0;
        }
        
        return view('detalhes', [
            'dados' => array_shift($local),
            'avaliacoes' => false,
            'numero_total' => 0,
            'todas_notas' => $todas_notas,
            'media' => 0
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
        $model_avaliacoes = new Avaliacoes();
        $model_resposta = new Resposta();
        
        $dados = $model_local->bucasDadosLocal($local);
        $todas_avaliacoes = $model_avaliacoes->buscaTodasAvaliacoesLocal($local);
        $media = 0;
        $soma = 0;
        $todas_notas = [0,0,0,0,0,0];
        
        foreach($todas_avaliacoes as $key => $cada_avaliacao){
            $soma += $cada_avaliacao->nota;
            $todas_notas[$cada_avaliacao->nota]+=1;
            $todas_avaliacoes[$key]->respostas = $model_resposta->buscaTodasRepostas($cada_avaliacao->avaliacao_id);
        }

        krsort($todas_notas);
        
        
        
        
        
        $numero_total = count($todas_avaliacoes);
        
        $media = ($soma !=0 && $numero_total) ?  ($soma / $numero_total) : 0;

        
        return view('detalhes',[
            'dados' => array_shift($dados),
            'avaliacoes' => $todas_avaliacoes,
            'numero_total' => $numero_total,
            'todas_notas' => $todas_notas,
            'media' => $media
        ]);
    }

    public function buscaLocaisAutocomplete($local){
        $locais_model = new Locais();

        return $locais_model->buscaLocalPeloNome($local);

    }

    public function adicionarComentario(Request $request){
        $model_avaliacoes = new Avaliacoes();
        $user =  Auth::id();;
        $dados = $request->all();
        
        Avaliacoes::create([
            'comentario' => $dados['texto'],
            'nota' => $dados['nota'],
            'nota_bairro' => $dados['nota_bairro'],
            'usr' => $user,
            'local_id' => $dados['id']
        ]);

        
        return redirect()->route('detalhes', $dados['id']);
        
    }

    public function adicionarResposta(Request $request){
        $model_resposta = new Resposta();
        $user = Auth::id();
        $dados = $request->all();
        
        
        Resposta::create([
            'usr' => $user,
            'avaliacao_id' => $dados['avaliacao_id'],
            'comentario' => $dados['comentario']
        ]);

        return redirect()->route('detalhes', $dados['id']);
    }

    public function pr($string, $die = 1){
        echo"<pre>";
        print_r($string);
        if($die){
            die;
        }
    }
}

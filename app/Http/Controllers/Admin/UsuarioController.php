<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Usuario;
use App\Cidade;
use App\Role;
use App\Igreja;
use App\Instrumento;
use Auth;
use Carbon\Carbon;

class UsuarioController extends Controller
{
//    private $totalpage = 10;

    //função para dar ou nao permissao de acesso
    /*public function __construct()
    {
        $this->authorize('update', Usuario::class);
    } */
    
    public function index()
    {
     //   $this->authorize('view', Usuario::class);

        $registros = Usuario::all(); // ($this->totalpage);

        return view('admin.usuarios.index', compact('registros'));
    }

    public function show($id)
    {
        $this->authorize('viewAny', Usuario::class);

        $registro = Usuario::find($id);
        $roles = Role::all();
        $igrejas = Igreja::all();
        $cidades = Cidade::all();
        $instrumentos = Instrumento::all();

        return view('admin.usuarios.show', compact('registro', 'roles', 'igrejas', 'cidades', 'instrumentos'));
    }


    public function edit($id)
    {

        $registro = Usuario::find($id);
        $roles = Role::all();
        $igrejas = Igreja::all();
        $cidades = Cidade::all();
        $instrumentos = Instrumento::all();

        return view('admin.usuarios.edit', compact('registro', 'roles', 'igrejas', 'cidades', 'instrumentos'));
    }


    public function update(Request $request, $id)
    {

        $dados = $request->all();

        $registro = Usuario::find($id);
        $registro->termos = $dados['termos'];
        $registro->nomecompleto = $dados['nomecompleto'];
        $registro->nome = $dados['nome'];
        $registro->email = $dados['email'];

        $file = $request->file('avatar');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/usuarios/".str_slug($dados['avatar'],'_')."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $registro->avatar = $diretorio.'/'.$nomeArquivo;
        }

        if(isset($dados['senha']) && strlen($dados['senha']) > 6 ){
            $dados['senha'] = bcrypt($dados['senha']);
        }else{
            unset($dados['senha']);
        }

        $registro->celular = $dados['celular'];
        $registro->cpf = $dados['cpf'];
        $registro->endereco = $dados['endereco'];
        $registro->sexo = $dados['sexo'];
        $registro->cidade_id= $dados['cidade_id'];
        $registro->bairro = $dados['bairro'];
        $registro->tel_fixo = $dados['tel_fixo'];
        $registro->igreja_id= $dados['igreja_id'];

        //Calcula a idade com base na data de nascimento
        // Usa a biblioteca do Carbon
        $agora = Carbon::now();
        $registro->dtnasc = $dados['dtnasc'];       
        $date2 = Carbon::createFromFormat('Y-m-d', $dados['dtnasc']);
        $registro->idade = $agora->diffInYears($date2);

        $registro->responsavel = $dados['responsavel'];
        $registro->toca = $dados['toca'];
        $registro->ativo = $dados['ativo'];
        $registro->instrumento_id = $dados['instrumento_id'];
        $registro->role_id = $dados['funcao'];

        $registro->update();

        if($registro){
        \Session::flash('mensagem', 
            [   'titulo'=>'Atualizar!',
                'msg'=>'Registro atualizado com sucesso!', 
                'class'=>'alert alert-success alert-dismissible fade show'
            ]); 
            return redirect()->route('home');
        }else{
            \Session::flash('mensagem', ['msg'=>'Não foi possível atualizar o registro!', 'class'=>'alert alert-danger alert-dismissible fade show']);
            return redirect()->route('home');
        }
    }

    public function destroy($id)
    {
        $this->authorize('delete', Usuario::class);
        
        Usuario::find($id)->delete();

        \Session::flash('mensagem', ['msg'=>'Registro deletado com sucesso!', 'class'=>'alert alert-success']);
        return redirect()->route('usuario.index');
    }
}

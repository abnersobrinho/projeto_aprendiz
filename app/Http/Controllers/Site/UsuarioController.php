<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Usuario;
use App\Cidade;
use App\Role;
use App\Igreja;
use Auth;
use Carbon\Carbon;
use App\Instrumento;


class UsuarioController extends Controller
{
    
    public function create()
    {
        $roles        = Role::all();
        $igrejas      = Igreja::all();
        $cidades      = Cidade::all();
        $instrumentos = Instrumento::all();

        return view('site.usuarios.create', compact('roles', 'igrejas', 'cidades', 'instrumentos'));
    }

    public function edit($id)
    {

        $registro = Usuario::find($id);
        $roles = Role::all();
        $igrejas = Igreja::all();
        $cidades = Cidade::all();
        $instrumentos = Instrumento::all();

        return view('site.usuarios.edit', compact('registro', 'roles', 'igrejas', 'cidades', 'instrumentos'));
    }

    public function store(Request $request)
    {
    	$dados = $request->all();

    	$registro = new Usuario();
        $registro->termos  = $dados['termos'];
    	$registro->nomecompleto = $dados['nomecompleto'];
        $registro->nome    = $dados['nome'];
    	$registro->email   = $dados['email'];
    	$registro->senha   = bcrypt($dados['senha']);
    	$registro->celular = $dados['celular'];

        $registro->role_id = $dados['funcao'];
        $registro->igreja_id = $dados['igreja_id'];
        $registro->cidade_id = $dados['cidade_id'];
        $registro->toca = $dados['toca'];
        $registro->instrumento_id = $dados['instrumento_id'];

        $file = $request->file('avatar');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/usuarios/".str_slug($dados['avatar'],'_')."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $registro->imagem = $diretorio.'/'.$nomeArquivo;
        }

        $registro->save();

        if($registro){
        \Session::flash('mensagem', 
            [   'titulo'=>'Registro criado com sucesso!',
                'msg'=>'Um e-mail foi enviado para o seu pastor para aprovação do cadastro.', 
                'class'=>'alert alert-success alert-dismissible fade show'
            ]); 
            return redirect()->route('login');
        }else{
            \Session::flash('mensagem', ['msg'=>'Não foi possível criar o registro!', 'class'=>'alert alert-danger alert-dismissible fade show']);
            return redirect()->route('login');
        }
    }
}

<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;
use Auth;
use App\Usuario;
use App\Cidade;
use App\Role;
use App\Igreja;
use App\Evento;

class HomeController extends Controller
{
    private $totalPage = 5;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cidades = Cidade::all();
        $roles = Role::all();
        $igrejas = Igreja::all();

        $cursos = Curso::where('publicar','=','s')->orderBy('id','desc')->paginate(10);
        $eventos = Evento::where('publicar','=','s')->orderBy('id','desc');
        $paginacao = true;
        $cidades = Cidade::orderBy('nome')->get();

        return view('home.home', compact('cursos', 'eventos', 'paginacao', 'cidades', 'roles', 'igrejas'));
    }

    
    public function perfil()
    {
        $cidades = Cidade::all();

        return redirect()->route('home', compact('cidades'));    
    }

    public function atualizarperfil(Request $request, $id)
    {

        $dados = $request->all();

        $registro = Usuario::find($id);
        $registro->nome = $dados['nome'];
        $registro->email = $dados['email'];

        if(isset($dados['senha']) && strlen($dados['senha']) > 6 ){
            $dados['senha'] = bcrypt($dados['senha']);
        }else{
            unset($dados['senha']);
        }

        $registro->cpf = $dados['cpf'];
        $registro->endereco = $dados['endereco'];
        $registro->bairro = $dados['bairro'];
        $registro->tel_fixo = $dados['tel_fixo'];
        $registro->celular = $dados['celular'];
        $registro->dtnasc = $dados['dtnasc'];

        $datain = Carbon::createFromFormat('Y-m-d', '2019-12-25');
        $datafin = Carbon::createFromFormat('Y-m-d', $registro->dtnasc);
        $registro->idade = $datafin->diffInYears($datain);

        $registro->responsavel = $dados['responsavel'];

        $registro->cidade_id= $dados['cidade_id'];
        $registro->role_id = $dados['role_id'];
        $registro->igreja_id= $dados['igreja_id'];

        $registro->update();

        return redirect()->route('home');
    }
}


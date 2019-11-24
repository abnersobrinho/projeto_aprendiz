<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuario;
use App\Cidade;
use App\Role;
use App\Igreja;

class UsuarioController extends Controller
{
    private $totalpage = 5;

    //função para dar ou nao permissao de acesso
 /*   public function __construct()
    {
        $this->authorize('update', Usuario::class);
    } */
    
    public function index()
    {

        $registros = Usuario::paginate($this->totalpage);

        return view('admin.usuarios.index', compact('registros'));
    }

    public function registrar()
    {
        $registro = new Usuario();
    	$cidades = Cidade::all();
    	$roles = Role::all();
    	$igrejas = Igreja::all();

    	return view('admin.usuarios.registrar', compact('registro', 'cidades', 'roles', 'igrejas'));
    }

    public function salvar(Request $request)
    {
    	$dados = $request->all();

    	$registro = new Usuario();
    	$registro->nome = $dados['nome'];
    	$registro->email = $dados['email'];
    	$registro->senha = bcrypt($dados['senha']);
    	$registro->cpf = $dados['cpf'];
    	$registro->endereco = $dados['endereco'];
    	$registro->bairro = $dados['bairro'];
    	$registro->tel_fixo = $dados['tel_fixo'];
    	$registro->celular = $dados['celular'];
    	$registro->dtnasc = $dados['dtnasc'];
    	$registro->idade = $dados['idade'];
    	$registro->responsavel = $dados['responsavel'];

        $registro->cidade_id= $dados['cidade_id'];
        $registro->role_id= 1;
        $registro->igreja_id= $dados['igreja_id'];

        $registro->save();

    	return redirect()->route('login');
    }

    public function show($id)
    {

        $registro = Usuario::find($id);
        $roles = Role::all();
        $igrejas = Igreja::all();
        $cidades = Cidade::all();

        return view('admin.usuarios.show', compact('registro', 'roles', 'igrejas', 'cidades'));
    }


    public function edit($id)
    {

        $registro = Usuario::find($id);
        $roles = Role::all();
        $igrejas = Igreja::all();
        $cidades = Cidade::all();

        return view('admin.usuarios.edit', compact('registro', 'roles', 'igrejas', 'cidades'));
    }


    public function update(Request $request, $id)
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
        $registro->idade = $dados['idade'];
        $registro->responsavel = $dados['responsavel'];

        $registro->cidade_id= $dados['cidade_id'];
        $registro->role_id = $dados['role_id'];
        $registro->igreja_id= $dados['igreja_id'];

        $registro->update();

        return redirect()->route('usuario.index');
    }
}

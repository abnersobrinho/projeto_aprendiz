<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Turma;
use App\Curso;
use App\Usuario;
use App\File;

class TurmaController extends Controller
{
    private $totalPage = 5;

    public function index(Request $request)
    {

        $registros = DB::table('turmas')->where('usuario_id', '=', Auth::user()->id)->get();
        $files = File::all();

        return view('admin.turmas.index', compact('registros', 'files'));
    }


    public function buscar(Request $request, Curso $buscarCurso)
    {
        $dataForm = $request->all();
        $registros = $buscarCurso->buscar($dataForm, $this->totalPage);

        return view('admin.cursos.index', compact('registros'));

    }


    public function create()
    {
       // $this->authorize('update', Turma::class);

        $monitores = Usuario::where('role_id', '=', 3)->get();
        $cursos = Curso::all();

        return view('admin.turmas.create', compact('monitores', 'cursos'));
    }


    public function store(Request $request)
    {
        $dados = $request->all();

        $registro = new Turma();
        $registro->titulo = $dados['titulo'];
        $registro->usuario_id = $dados['usuario_id'];

        $registro->usu_nome = $dados['usu_nome'];
        $registro->usu_email = $dados['usu_email'];
        $registro->usu_celular = $dados['usu_celular'];
        $registro->usu_avatar = $dados['usu_avatar'];

        $registro->curso_id = $dados['curso_id'];
        $registro->datain = $dados['datain'];
        $registro->datafim = $dados['datafim'];
        $registro->horario = $dados['horario'];
        $registro->dia = $dados['dia'];
        $registro->local = $dados['local'];
        $registro->informacoes = $dados['informacoes'];
        $registro->publicar = $dados['publicar'];


        $file = $request->file('imagem');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/turmas/".str_slug($dados['imagem'],'_');
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $registro->imagem = $diretorio.'/'.$nomeArquivo;
        }

        if(isset($dados['mapa']) && trim($dados['mapa']) != "" ){
            $registro->mapa = trim($dados['mapa']);
        }else{
            $registro->mapa = null;
        } 

        $registro->save();

        if($registro){
        \Session::flash('mensagem', 
            [   'titulo'=>'Registro criado com sucesso!',
                'msg'=>'O Senhor é meu pastor e nada me faltará!', 
                'class'=>'alert alert-success alert-dismissible fade show'
            ]); 
            return redirect()->route('turma.index');
        }else{
            \Session::flash('mensagem', ['msg'=>'Não foi possível criar o registro!', 'class'=>'alert alert-danger alert-dismissible fade show']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('update', Curso::class);

        $registro = Curso::find($id);
        return view('admin.cursos.show', compact('registro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //  $this->authorize('update', Turma::class);
        $registro = Turma::find($id);
        $usuarios = Usuario::where('role_id', '=', 3)->get();
        $cursos = Curso::all();

        return view('admin.turmas.edit', compact('registro', 'usuarios', 'cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //$this->authorize('update', Curso::class);

        $dados = $request->all(); 
        $registro = Turma::find($id);

        $registro->titulo = $dados['titulo'];
        $registro->usuario_id = $dados['usuario_id'];

        $registro->usu_nome = $dados['usu_nome'];
        $registro->usu_email = $dados['usu_email'];
        $registro->usu_celular = $dados['usu_celular'];
        $registro->usu_avatar = $dados['usu_avatar'];

        $registro->curso_id = $dados['curso_id'];
        $registro->datain = $dados['datain'];
        $registro->datafim = $dados['datafim'];
        $registro->horario = $dados['horario'];
        $registro->dia = $dados['dia'];
        $registro->local = $dados['local'];
        $registro->informacoes = $dados['informacoes'];
        $registro->publicar = $dados['publicar'];


        $file = $request->file('imagem');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/turmas/".str_slug($dados['imagem'],'_');
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $registro->imagem = $diretorio.'/'.$nomeArquivo;
        }

        if(isset($dados['mapa']) && trim($dados['mapa']) != "" ){
            $registro->mapa = trim($dados['mapa']);
        }else{
            $registro->mapa = null;
        } 
     
        $registro->update();

        if($registro){
        \Session::flash('mensagem', 
            [   'titulo'=>'Registro atualizado com sucesso!',
                'msg'=>'O Senhor é meu pastor e nada me faltará!', 
                'class'=>'alert alert-success alert-dismissible fade show'
            ]); 
            return redirect()->route('turma.index');
        }else{
            \Session::flash('mensagem', ['msg'=>'Não foi possível atualizar o registro!', 'class'=>'alert alert-danger alert-dismissible fade show']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Curso::find($id)->delete();

        \Session::flash('mensagem', ['msg'=>'Registro deletado com sucesso!', 'class'=>'alert alert-success']);
        return redirect()->route('turma.index');
    }
}

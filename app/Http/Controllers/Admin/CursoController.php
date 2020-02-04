<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Curso;
use App\Usuario;


class CursoController extends Controller
{
    private $totalPage = 5;

    public function index(Request $request)
    {
        $cursos = Curso::paginate($this->totalPage);

     //   dd($registros);

        return view('admin.cursos.index', compact('cursos'));
    }


    public function buscar(Request $request, Curso $buscarCurso)
    {
        $dataForm = $request->all();
        $registros = $buscarCurso->buscar($dataForm, $this->totalPage);

        return view('admin.cursos.index', compact('registros'));

    }


    public function create()
    {
        $this->authorize('update', Curso::class);

        $monitores = Usuario::where('role_id', '=', 3)->get();

        return view('admin.cursos.create', compact('monitores'));
    }


    public function store(Request $request)
    {
        $dados = $request->all();

        $registro = new Curso();
        $registro->titulo = $dados['titulo'];
        $registro->descricao = $dados['descricao'];
        $registro->publico = $dados['publico'];
        $registro->informacoes = $dados['informacoes'];
        $registro->publicar = $dados['publicar'];

        $file = $request->file('imagem');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/cursos/".str_slug($dados['imagem'],'_');
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $registro->imagem = $diretorio.'/'.$nomeArquivo;
        }

        $registro->save();

        if($registro){
        \Session::flash('mensagem', 
            [   'titulo'=>'Nova inclusão', 
                'msg'   =>'O registro foi incluído com sucesso!',
                'class' =>'alert alert-success alert-dismissible fade show'
            ]); 
            return redirect()->route('turma.index');
        }else{
            \Session::flash('mensagem', ['msg'=>'Não foi possível atualizar o registro!', 'class'=>'alert alert-danger alert-dismissible fade show']);
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
        $this->authorize('update', Curso::class);
        $registro = Curso::find($id);
        $monitores = Usuario::where('role_id', '=', 3)->get();

        return view('admin.cursos.edit', compact('registro', 'monitores'));
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
        $this->authorize('update', Curso::class);

        $dados = $request->all(); 
        $registro = Curso::find($id);

        $registro->titulo = $dados['titulo'];
        $registro->descricao = $dados['descricao'];
        $registro->publico = $dados['publico'];
        $registro->informacoes = $dados['informacoes'];
        $registro->publicar = $dados['publicar'];

        $file = $request->file('imagem');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/cursos/".str_slug($dados['imagem'],'_')."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $registro->imagem = $diretorio.'/'.$nomeArquivo;
        }
     
        $registro->update();

        if($registro){
        \Session::flash('mensagem', 
            [   'titulo'=>'Atualização concluída!',
                'msg'=>'O registro foi atualizado com sucesso', 
                'class'=>'alert alert-success alert-dismissible fade show'
            ]); 
            return redirect()->route('curso.index');
        }else{
            \Session::flash('mensagem', 
                [
                    'titulo'=>'Falha ao editar',
                    'msg'   =>'Não foi possível atualizar o registro!', 
                    'class' =>'alert alert-danger alert-dismissible fade show']);
            return redirect()->route('curso.edit');
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
        return redirect()->route('curso.index');
    }
}

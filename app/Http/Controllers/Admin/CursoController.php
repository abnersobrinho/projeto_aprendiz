<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;


class CursoController extends Controller
{
    private $totalPage = 5;

    public function index(Request $request)
    {

        $registros = Curso::paginate($this->totalPage);
        return view('admin.cursos.index', compact('registros'));
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
        return view('admin.cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();

        $registro = new Curso();
        $registro->titulo = $dados['titulo'];
        $registro->descricao = $dados['descricao'];
        $registro->informacoes = $dados['informacoes'];

        $file = $request->file('logo');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/cursos/".str_slug($dados['logo'],'_');
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $registro->logo = $diretorio.'/'.$nomeArquivo;
        }

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
            \Session::flash('mensagem', ['msg'=>'Registro criado com sucesso!', 'class'=>'alert alert-success']); 
            return redirect()->route('curso.index');
        }else{
            \Session::flash('mensagem', ['msg'=>'Não foi possível criar o registro!', 'class'=>'alert alert-danger']);
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
        return view('admin.cursos.edit', compact('registro'));
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
        $registro->informacoes = $dados['informacoes'];

        $file = $request->file('logo');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/cursos/".str_slug($dados['logo'],'_');
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $registro->logo = $diretorio.'/'.$nomeArquivo;
        }

        $file = $request->file('imagem');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/cursos/".str_slug($dados['imagem'],'_');
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $registro->imagem = $diretorio.'/'.$nomeArquivo;
        }
     
        $update = $registro->update($dados);

        if($update){
            \Session::flash('mensagem', ['msg'=>'Registro atualizado com sucesso!', 'class'=>'alert alert-success']); 
            return redirect()->route('curso.index');
        }else{
            \Session::flash('mensagem', ['msg'=>'Falha ao editar registro!', 'class'=>'alert alert-danger']); 
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

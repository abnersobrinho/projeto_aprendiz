<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Evento;
use App\Cidade;
use Validator;

class EventoController extends Controller
{
    private $totalPage = 10;

    public function index(Request $request)
    {
        $registros = Evento::paginate($this->totalPage);
        return view('admin.eventos.index', compact('registros'));
    }

    public function buscar(Request $request, Evento $buscarEvento)
    {
        $dataForm = $request->all();
        $registros = $buscarEvento->buscar($dataForm, $this->totalPage);

        return view('admin.eventos.index', compact('registros'));

    }

    public function create()
    {
        $cidades = Cidade::all();
        return view('admin.eventos.create', compact('cidades'));
    }

    public function store(Request $request)
    {
       // $this->authorize('update', Evento::class);

        $dados = $request->all();

        $registro = new Evento();
        $registro->usuario_id = Auth()->user()->id;
        $registro->titulo = $dados['titulo'];
        $registro->descricao = $dados['descricao'];
        $registro->data = $dados['data'];
        $registro->hora = $dados['hora'];
        $registro->local = $dados['local'];
        $registro->endereco = $dados['endereco'];
        $registro->bairro = $dados['bairro'];
        $registro->publicar = $dados['publicar'];
        $registro->ordem = $dados['ordem'];
        $registro->visualizacoes = 0;
        $registro->cidade_id= $dados['cidade_id'];

        $file = $request->file('imagem');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/eventos/".str_slug($dados['titulo'],'_')."/";
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

        \Session::flash('mensagem', ['msg'=>'Registro criado com sucesso!', 'class'=>'alert alert-success']); 

        return redirect()->route('evento.index');
    }


    public function show($id)
    {
     //   $this->authorize('update', Evento::class);

        $cidade = Cidade::all();

        $registro = Evento::find($id);
        return view('admin.eventos.show', compact('registro', 'cidade'));
    }




    public function edit($id)
    {
    //    $this->authorize('update', Evento::class);

        $cidades = Cidade::all();
                
        $registro = Evento::find($id);
        return view('admin.eventos.edit', compact('registro', 'cidades'));
    }

    public function update(Request $request, $id)
    {
    //    $this->authorize('update', Evento::class);

        $dados = $request->all();
        $registro = Evento::find($id);

        $registro->usuario_id = $registro->usuario_id;
        $registro->titulo = $dados['titulo'];
        $registro->descricao = $dados['descricao'];
        $registro->data = $dados['data'];
        $registro->hora = $dados['hora'];
        $registro->local = $dados['local'];
        $registro->endereco = $dados['endereco'];
        $registro->bairro = $dados['bairro'];
        $registro->publicar = $dados['publicar'];
        $registro->ordem = $dados['ordem'];
        $registro->cidade_id= $dados['cidade_id'];

        $file = $request->file('imagem');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/eventos/".str_slug($dados['titulo'],'_')."/";
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

        $update = $registro->update($dados);

        if($update){
            \Session::flash('mensagem', ['msg'=>'Registro atualizado com sucesso!', 'class'=>'alert alert-success']); 
            return redirect()->route('evento.index');
        }else{
            \Session::flash('mensagem', ['msg'=>'Falha ao editar registro!', 'class'=>'alert alert-danger']); 
            return redirect()->route('evento.edit');
        }
    }

    public function destroy($id)
    {

        Evento::find($id)->delete();

        \Session::flash('mensagem',['msg'=>'Registro deletado com sucesso!','class'=>'alert alert-success']);
        return redirect()->route('evento.index');
    }

}

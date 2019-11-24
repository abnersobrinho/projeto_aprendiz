<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Igreja;
use App\Cidade;
use App\Area;
use App\Usuario;

class IgrejaController extends Controller
{
    private $totalPage = 5;

    //função para dar ou nao permissao de acesso
    public function __construct()
    {
       // $this->authorize('update', Usuario::class);
    } 


    public function index(Request $request)
    {
        $cidade = Cidade::all();
        $area = Area::all();
        $registros = Igreja::paginate($this->totalPage);

        return view('admin.igrejas.index', compact('registros', 'cidade', 'area'));
    }


    public function buscar(Request $request, Igreja $buscarIgreja)
    {
        $dataForm = $request->all();
        $registros = $buscarIgreja->buscar($dataForm, $this->totalPage);

        return view('admin.igrejas.index', compact('registros'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('update', Igreja::class);

        $cidades = Cidade::all();
        $areas = Area::all();

        return view('admin.igrejas.create', compact('cidades', 'areas'));
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

        $registro = new Igreja();
        $registro->nome = $dados['nome'];
        $registro->cep = $dados['cep'];
        $registro->endereco = $dados['endereco'];

        $registro->cidade_id = $dados['cidade_id'];
        $registro->area_id = $dados['area_id'];
        $registro->bairro = $dados['bairro'];

        $file = $request->file('imagem');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/igrejas/".str_slug($dados['nome'],'_');
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
            \Session::flash('mensagem', ['msg'=>'Registro criado com sucesso!', 'class'=>'alert alert-success']); 
            return redirect()->route('igreja.index');
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
        $this->authorize('update', Igreja::class);

        $cidade = Cidade::all();
        $area = Area::all();

        $registro = Igreja::find($id);
        return view('admin.igrejas.show', compact('registro', 'cidade', 'area'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('update', Igreja::class);

        $cidades = Cidade::all();
        $areas = Area::all();
                
        $registro = Igreja::find($id);
        return view('admin.igrejas.edit', compact('registro', 'cidades', 'areas'));
    }


    public function update(Request $request, $id)
    {

       /* $validator = $this->validarCidade($request);
        
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        } */

        $this->authorize('update', Igreja::class);

        $dados = $request->all(); 
        $registro = Igreja::find($id);

        $registro->nome = $dados['nome'];
        $registro->cep = $dados['cep'];
        $registro->endereco = $dados['endereco'];

        $registro->cidade_id = $dados['cidade_id'];
        $registro->area_id = $dados['area_id'];
        $registro->bairro = $dados['bairro'];

        $file = $request->file('imagem');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/igrejas/".str_slug($dados['nome'],'_');
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
            return redirect()->route('igreja.index');
        }else{
            \Session::flash('mensagem', ['msg'=>'Falha ao editar registro!', 'class'=>'alert alert-danger']); 
            return redirect()->route('igreja.edit');
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

        if(Usuario::where('igreja_id','=',$id)->count())
        {
            $msg = "Não é possível deletar essa igreja! As pessoas (";
            $usuarios = Usuario::where('igreja_id','=',$id)->get();
            

            foreach ($usuarios as $usuario) 
            {   
                $msg .= $usuario->nome."; ";
            }
           $msg .= ") estão relacionadas a ela.";
           \Session::flash('mensagem', ['msg'=>$msg,'class'=>'alert alert-danger']);
           return redirect()->route('igreja.index');        
        } 

        Igreja::find($id)->delete();

        \Session::flash('mensagem', ['msg'=>'Registro deletado com sucesso!', 'class'=>'alert alert-success']);
        return redirect()->route('igreja.index');
    }
}

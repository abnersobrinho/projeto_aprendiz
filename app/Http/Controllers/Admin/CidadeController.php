<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cidade;
use Illuminate\Support\Facades\DB;
use App\Igreja;

class CidadeController extends Controller
{

    public function index(Request $request)
    {

        $registros = Cidade::all();
        return view('admin.cidades.index', compact('registros'));
    }


    public function buscar(Request $request, Cidade $buscarCidade)
    {
        $dataForm = $request->all();
        $registros = $buscarCidade->buscar($dataForm, $this->totalPage);

        return view('admin.cidades.index', compact('registros'));

    }

    public function create()
    {
        $this->authorize('update', Cidade::class);
        return view('admin.cidades.create');
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
        $registro = Cidade::create($dados);

        if($registro){
            \Session::flash('mensagem', ['msg'=>'Registro criado com sucesso!', 'class'=>'alert alert-success alert-dismissible fade show']); 
                return redirect()->route('cidade.index');
            }else{
                \Session::flash('mensagem', ['msg'=>'Não foi possível criar o registro!', 'class'=>'alert alert-danger alert-dismissible fade show']);
                return redirect()->route('cidade.index');
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
        $this->authorize('update', Cidade::class);

        $registro = Cidade::find($id);
        return view('admin.cidades.show', compact('registro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('update', Cidade::class);
                
        $registro = Cidade::find($id);
        return view('admin.cidades.edit', compact('registro'));
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
        $this->authorize('update', Usuario::class);

        $dados = $request->all(); 
        $registro = Cidade::find($id);
     
        $update = $registro->update($dados);

        if($registro){
            \Session::flash('mensagem', ['msg'=>'Registro atualizado com sucesso!', 'class'=>'alert alert-success alert-dismissible fade show']); 
                return redirect()->route('cidade.index');
            }else{
                \Session::flash('mensagem', ['msg'=>'Não foi possível atualizar o registro!', 'class'=>'alert alert-danger alert-dismissible fade show']);
                return redirect()->route('cidade.edit');
        }    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if(Igreja::where('cidade_id','=',$id)->count())
        {
            $msg = "Não é possível deletar essa cidade! As igrejas (";
            $igrejas = Igreja::where('cidade_id','=',$id)->get();
            
            foreach ($igrejas as $igreja) 
            {   
                $msg .= "id:".$igreja->id." ";
            }
           $msg .= ") estão relacionadas a ela.";
           \Session::flash('mensagem', ['msg'=>$msg,'class'=>'alert alert-danger']);
           return redirect()->route('cidade.index');        
        } 

        Cidade::find($id)->delete();

        \Session::flash('mensagem', ['msg'=>'Registro deletado com sucesso!', 'class'=>'alert alert-success']);
        return redirect()->route('cidade.index');
    }
}

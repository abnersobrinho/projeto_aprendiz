<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Area;

class AreaController extends Controller
{
    private $totalPage = 5;

    public function index() {
        $registros = Area::paginate($this->totalPage);
        return view('admin.areas.index', compact('registros'));
    }

    public function buscar(Request $request, Area $buscarArea) {
        $dataForm = $request->all();
        $registros = $buscarArea->buscar($dataForm, $this->totalPage);

        return view('admin.areas.index', compact('registros'));
    }


    public function create() {
        $this->authorize('update', Area::class);
        return view('admin.areas.create');
    }


    public function store(Request $request) {
        $dados = $request->all();
        $registro = Area::create($dados);

        if($registro){
            \Session::flash('mensagem', ['msg'=>'Registro criado com sucesso!', 'class'=>'alert alert-success']); 
            return redirect()->route('area.index');
        }else{
            \Session::flash('mensagem', ['msg'=>'Não foi possível criar o registro!', 'class'=>'alert alert-danger']);
        }
    }


    public function show($id)
    {
        $this->authorize('update', Area::class);

        $registro = Area::find($id);
        return view('admin.areas.show', compact('registro'));
    }


    public function edit($id)
    {
        $this->authorize('update', Area::class);
                
        $registro = Area::find($id);
        return view('admin.areas.edit', compact('registro'));
    }


    public function update(Request $request, $id)
    {
        $this->authorize('update', Area::class);

        $dados = $request->all(); 
        $registro = Area::find($id);
     
        $update = $registro->update($dados);

        if($update){
            \Session::flash('mensagem', ['msg'=>'Registro atualizado com sucesso!', 'class'=>'alert alert-success']); 
            return redirect()->route('area.index');
        }else{
            \Session::flash('mensagem', ['msg'=>'Falha ao editar registro!', 'class'=>'alert alert-danger']); 
            return redirect()->route('area.edit');
        }
    }


    public function destroy($id)
    {
     
     //ainda não criei o relacionamento area->igreja
     /*   if(Igreja::where('area_id','=',$id)->count())
        {
            $msg = "Não é possível deletar essa área! As igrejas (";
            $igrejas = Igreja::where('area_id','=',$id)->get();
            
            foreach ($igrejas as $igreja) 
            {   
                $msg .= "id:".$igreja->id." ";
            }
           $msg .= ") estão relacionadas a ela.";
           \Session::flash('mensagem', ['msg'=>$msg,'class'=>'alert alert-danger']);
           return redirect()->route('area.index');        
        } */

        Area::find($id)->delete();

        \Session::flash('mensagem', ['msg'=>'Registro deletado com sucesso!', 'class'=>'alert alert-success']);
        return redirect()->route('area.index');
    }
}

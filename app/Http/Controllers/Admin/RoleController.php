<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Role;
use Validator;

class RoleController extends Controller
{
    private $totalPage = 10;

    protected function validarRole($request)
    {
        $validator = Validator::make($request->all(), [
            "nome"      => "required",
            "descricao" => "required"
        ]);
        return $validator;
    }



    public function index()
    {

        $registros = Role::paginate($this->totalPage);
        return view('admin.roles.index', compact('registros'));
    }


    public function buscar(Request $request, Role $buscarRole)
    {
        $dataForm = $request->all();
        $registros = $buscarRole->buscar($dataForm, $this->totalPage);

        return view('admin.roles.index', compact('registros'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validarRole($request);    
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        $dados = $request->all();
        $registro = Role::create($dados);

        $registro->save();
        \Session::flash('mensagem', ['msg'=>'Registro criado com sucesso!', 'class'=>'alert alert-success']);

        return redirect()->route('role.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registro = Role::find($id);
        return view('admin.roles.edit', compact('registro'));
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
        $registro = Role::find($id);
        $dados = $request->all();
        
        $registro->nome = $dados['nome'];
        $registro->descricao = $dados['descricao'];       
        $registro->update();

        \Session::flash('mensagem', ['msg'=>'Registro atualizado com sucesso!', 'class'=>'alert alert-success']);
        return redirect()->route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
   /*     if(Oficina::where('cidade_id','=',$id)->count())
        {
            $msg = "Não é possível deletar essa cidade! As oficinas (";
            $oficinas = Oficina::where('cidade_id','=',$id)->get();
            
            foreach ($oficinas as $oficina) 
            {   
                $msg .= "id:".$oficina->id." ";
            }
           $msg .= ") estão relacionadas a ela.";
           \Session::flash('mensagem', ['msg'=>$msg,'class'=>'red accent-1 blue-grey-text']);
           return redirect()->route('cidade.index');        
        } */

        Role::find($id)->delete();

        \Session::flash('mensagem', ['msg'=>'Registro deletado com sucesso!', 'class'=>'alert alert-success']);
        return redirect()->route('role.index');
    }

    public function remover($id)
    {
        $role = Role::find($id);
        return view('admin.roles.remove', compact('role'));
    }
}

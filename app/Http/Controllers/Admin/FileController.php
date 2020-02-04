<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\File;
use App\Curso;

class FileController extends Controller
{

     //   $this->authorize('view', Usuario::class);
    public function index()
    {
        $registros = File::all(); // ($this->totalpage);

        return view('admin.files.index', compact('registros'));
    }

    public function create()
    {
        $cursos = Curso::all();
        return view('admin.files.create', compact('cursos'));
    }

    public function edit($id)
    {
     //   $this->authorize('update', Cidade::class);
                
        $registro = File::find($id);
        $cursos = Curso::all();

        return view('admin.files.edit', compact('registro', 'cursos'));
    }

    public function upload(Request $request)
    {
       // $this->authorize('update', Evento::class);

        $file = \Request::file('filenames');
        $curso_id = \Request::file('curso_id');
        $titulo = \Request::file('titulo');
        $usuario_id = \Request::get('usuario_id');

        $storagePath = storage_path().'/documentos/'.$usuario_id;
        $filename = $file->getClientOriginalName();

        /**
        * Database related
        */
        $fileModel = new \App\File();
        $fileModel->name = $filename;

    //    $user = \App\Usuario::find($usuario_id);
    //    $user->files()->save($fileModel);

        return $file->move($storagePath, $filename);

    /*        $file = $request->file('filenames');
        if(empty($file)){
            abort(400, 'Nenhum arquivo foi enviado.');
        }

        $path = $file->store('uploads');
        $diretorio = "arquivos/".$registro->usuario_id."/";
        $ext = $file->guessClientExtension();
        $nomeArquivo = str_slug($dados['titulo'],'_').".".$ext;
        $registro->filenames = $nomeArquivo;
        if(isset($ext) && trim($ext) == "pdf" ){
            $registro->icone = "<a style='font-size: 2em; color: gray'><i class='far fa-file-pdf'></i></a>";
        }
        elseif(isset($ext) && trim($ext) == "jpg" || trim($ext) == "png"){
            $registro->icone = "<a style='font-size: 2em; color: orange'><i class='far fa-file-image'></i></a>";
        } 
        elseif(isset($ext) && trim($ext) == "doc" || trim($ext) == "docx"){
            $registro->icone = "<a style='font-size: 2em; color: blue'><i class='far fa-file-word'></i></a>";
        }
        elseif(isset($ext) && trim($ext) == "xls" || trim($ext) == "xlsx"){
            $registro->icone = "<a style='font-size: 2em; color: green'><i class='far fa-file-excel'></i></a>";
        }
        elseif(isset($ext) && trim($ext) == "ppt" || trim($ext) == "pptx"){
            $registro->icone = "<a style='font-size: 2em; color: red'><i class='far fa-file-powerpoint'></i></a>";
        }
        elseif(isset($ext) && trim($ext) == "mp3" || trim($ext) == "wav"){
            $registro->icone = "<a style='font-size: 2em; color: yellowgreen'><i class='fas fa-music'></i></a>";
        } 
        elseif(isset($ext) && trim($ext) == "wmv" || trim($ext) == "avi" || trim($ext) == "flv" || trim($ext) == "mov" || trim($ext) == "mpeg"){
            $registro->icone = "<a style='font-size: 2em; color: olive'><i class='fas fa-music'></i></a>";
        } 
        $file->move($diretorio, $nomeArquivo);

        $registro->save(); */

        \Session::flash('mensagem', [
        	'titulo'=>'Inclusão de arquivo!', 
        	'msg'=>'O arquivo foi incluído com sucesso!', 
        	'class'=>'alert alert-success']); 
        return redirect()->route('file.index');
    }

    public function download($id)
    {

        $file = File::find($id);
        $path = $file->path('uploads');
        dd($path);

        return \Response::download($path = $file->filenames);

    }

    public function destroy($id)
    {

        File::find($id)->delete();

        \Session::flash('mensagem', [
            'titulo'=>'Deletar', 
            'msg'=>'O arquivo foi excluído com sucesso!', 
            'class'=>'alert alert-success']); 
        return redirect()->route('file.index');
    }


}

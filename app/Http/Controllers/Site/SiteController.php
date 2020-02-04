<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Cidade;
use App\Role;
use App\Igreja;
use App\Comentario;
use Auth;
use App\Evento;
use App\Instrumento;
use App\Curso;


class SiteController extends Controller
{
    private $totalPage = 5;

    public function index()
    {
        $cidades = Cidade::all();
        $roles = Role::all();
        $igrejas = Igreja::all();
        $instrumentos = Instrumento::all();
        $cursos = Curso::all();

    //	$turmas = Turma::where('publicar','=','s')->orderBy('id','desc')->paginate(10);
        $eventos = Evento::where('publicar','=','s')->orderBy('id','desc');
    	$paginacao = true;
    	$cidades = Cidade::orderBy('nome')->get();

    	return view('site.index', compact('eventos', 'paginacao', 'cidades', 'roles', 'igrejas', 'instrumentos', 'cursos'));
    }


    public function busca(Request $request)
    {
    	$busca = $request->all();
    	
    	$paginacao = false;

    	if($busca['tipo'] == 'todos'){
    		$testeTipo = [['tipo','<>',null]];
    		}else{$testeTipo = [['tipo','=',$busca['tipo']]];
    	}

    	if($busca['titulo'] != ''){
    		$testeTitulo = [['titulo','like','%'.$busca['titulo'].'%']];
    		}else{$testeTitulo = [['titulo','<>',null]];
    	}
    	
    	$turmas = Turma::where('publicar','=','s')->where($testeTipo)->where($testeTitulo)->orderBy('id','desc')->get();

    	return view('site.buscar',compact('busca','paginacao', 'turmas'));
    }
}

<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;
use App\Comentario;

class CursoController extends Controller
{
    private $totalPage = 5;


    public function show($id)
    {
        $curso = Curso::find($id);
        
        return view('site.cursos.show', compact('curso'));
    }
}

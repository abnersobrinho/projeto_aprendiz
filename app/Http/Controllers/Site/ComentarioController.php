<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comentario;
use Carbon\Carbon;

class ComentarioController extends Controller
{
    public function store(Request $request)
    {
    	$dados = $request->all();

        $comentario = new Comentario();

        $comentario->descricao = $dados['descricao'];
        $comentario->usu_id = $dados['usu_id'];
        $comentario->usu_nome   = $dados['usu_nome'];
        $comentario->usu_avatar   = $dados['usu_avatar'];
        $comentario->turma_id   = $dados['usu_turma'];
        $comentario->tempo   = "2020-1-20";
        $comentario->save();

        $turma = $dados['usu_turma'];
        return redirect()->route('turma.show', $turma);
    }
}

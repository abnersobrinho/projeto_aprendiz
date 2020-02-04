<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RespostaController extends Controller
{
        private $totalPage = 5;

    public function create()
    {
        $coment = Comentario::find($id);
        
        $respostas = Resposta::where([
            ['com_id', '=', $coment->id],
            ['usu_id', '=', Auth()->user()->id],
        ])->orderBy('id', 'desc')->paginate($this->totalPage);

        $agora = Carbon::now();  
        $resp = Resposta::where('com_id', '=', $coment->id)->first();
        
        if(empty($resp->created_at))
            $criacao = $agora;
            else
                $criacao = $resp->created_at;
        
        $date1 = Carbon::createFromFormat('Y-m-d H:i:s', $criacao);
        $date2 = Carbon::createFromFormat('Y-m-d H:i:s', $agora);       
        $segundo = $date2->diffInSeconds($date1);
        $minuto = $date2->diffInMinutes($date1);
        $hora   = $date2->diffInHours($date1);
        $dia    = $date2->diffInDays($date1);
        $mes    = $date2->diffInMonths($date1);
        $ano    = $date2->diffInYears($date1);

    //    $total = Resposta::where('com_id', '=', $coment->id)->count();

        return view('site.turmas.show', compact('coment', 'respostas', 'total', 'segundo', 'minuto', 'hora', 'dia', 'mes', 'ano'));
        return redirect()->route('turma.show', $comentario);
    }

   	public function store(Request $request)
    {
    	$dados = $request->all();

        $resposta = new Resposta();

        $resposta->descricao = $dados['descricao'];
        $resposta->com_id = $dados['usu_id'];
        $resposta->com_nome   = $dados['usu_nome'];
        $resposta->com_avatar   = $dados['usu_avatar'];
        $resposta->comentario_id   = $dados['usu_comentario'];
        $resposta->save();

        $comentario = $dados['usu_comentario'];
        return redirect()->route('turma.show', $comentario);
    }
}

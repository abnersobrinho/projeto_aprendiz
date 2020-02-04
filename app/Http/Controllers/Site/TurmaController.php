<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Turma;
use App\Comentario;
use App\Resposta;
use Carbon\Carbon;

class TurmaController extends Controller
{
    private $totalPage = 5;

    public function show($id)
    {
        $turma = Turma::find($id);
        $respostas = Resposta::all();
        
        $comentarios = Comentario::where([
        	['turma_id', '=', $turma->id],
        	['usu_id', '=', Auth()->user()->id],
        ])->orderBy('id', 'desc')->paginate($this->totalPage);

        $agora = Carbon::now();  
        $comm = Comentario::where('turma_id', '=', $turma->id)->first();
        
        if(empty($comm->created_at))
            $criacao = $agora;
            else
                $criacao = $comm->created_at;
        
        $date1 = Carbon::createFromFormat('Y-m-d H:i:s', $criacao);
        $date2 = Carbon::createFromFormat('Y-m-d H:i:s', $agora);       
        $segundo = $date2->diffInSeconds($date1);
        $minuto = $date2->diffInMinutes($date1);
        $hora   = $date2->diffInHours($date1);
        $dia    = $date2->diffInDays($date1);
        $mes    = $date2->diffInMonths($date1);
        $ano    = $date2->diffInYears($date1);

        $total = Comentario::where('turma_id', '=', $turma->id)->count();

        return view('site.turmas.show', compact('turma', 'comentarios', 'total', 'segundo', 'minuto', 'hora', 'dia', 'mes', 'ano', 'respostas'));
    }
}

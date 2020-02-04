<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
   	protected $fillable = [
      "usu_id", "usu_nome", "usu_avatar", "descricao", "exibir", "turma_id", "tempo"
    ];

    public function turma()
    {
    	return $this->belongsTo('App\Turma','turma_id');
    }

    protected $table = "comentarios";

    public function respostas()
    {
        return $this->hasMany('App\Resposta','com_id');
    }

}

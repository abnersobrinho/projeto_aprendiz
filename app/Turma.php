<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
   	protected $fillable = [
        "titulo",
        "datain",
        "datafim",
        "dia",
        "horario",
        "local",
        "imagem",
        "informacoes",
        "mapa",
        "tipo",
        "publicar",
        "visualizacoes",
        "usu_nome",
        "usu_email",
        "usu_celular",
        "usu_avatar"
    ];

    public function comentarios()
    {
        return $this->hasMany('App\Comentario','turma_id');
    }

    public function cursos()
    {
    	return $this->belongsTo('App\Curso','curso_id');
    }

    public function monitor()
    {
    	return $this->belongsTo('App\Usuario','usuario_id');
    }
}

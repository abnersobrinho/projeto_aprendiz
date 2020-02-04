<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
   	protected $fillable = [
        "titulo",
        "descricao",
        "imagem",
        "publico",
        "informacoes",
        "publicar",
        "visualizacoes"
    ];

    protected $table = "cursos";

    public function turmas()
    {
        return $this->hasMany('App\Turma','curso_id');
    }

    public function files()
    {
        return $this->hasMany('App\File','curso_id');
    }
}

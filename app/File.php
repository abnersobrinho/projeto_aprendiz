<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
      "filenames",
      "titulo",
      "icone"
    ];

    public function cursos()
    {
    	return $this->belongsTo('App\Curso','curso_id');
    }

    public function usuario()
    {
    	return $this->belongsTo('App\Usuario','usuario_id');
    }
}

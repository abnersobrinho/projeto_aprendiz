<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrumento extends Model
{
    protected $fillable = [
        "nome",
        "descricao"
    ];

    protected $table = "instrumentos";

    public function usuarios()
    {
        return $this->hasMany('App\Usuario','instrumento_id');
    }
}

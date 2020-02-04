<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
   	protected $fillable = [
 		"com_id", "com_nome", "com_avatar", "descricao", "exibir"
    ];

    public function comentario()
    {
    	return $this->belongsTo('App\Comentario','com_id');
    }
}

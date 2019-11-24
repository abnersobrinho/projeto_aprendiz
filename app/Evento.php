<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{

	use Notifiable;

    protected $fillable = [
        'titulo', 'descricao', 'data', 'hora', 'local', 'imagem', 'mapa', 'endereco', 'bairro', 'publicar', 'ordem', 'visualizacoes'
    ];

    public function usuario()
    {
    	return $this->belongsTo('App\Usuario','usuario_id');
    }

    public function cidade()
    {
    	return $this->belongsTo('App\Cidade','cidade_id');
    }

    public function buscar(Array $data, $totalPage)
    {
        return $this->where(function ($query) use ($data){
            if (isset($data['titulo']))
                $query->where('titulo', 'LIKE', '%' .$data['titulo']. '%');
            if (isset($data['descricao']))
                $query->where('descricao', 'LIKE', '%' .$data['descricao']. '%');            
            if (isset($data['data']))
                $query->where('data', $data['data']);

        })//->toSql(); dd($teste);
        ->paginate($totalPage);
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Igreja extends Model
{

   	protected $fillable = [
      "nome",
      "cidade_id",
      "area_id",
      "cep",
      "endereco",
      "mapa",
      "imagem",
      "bairro"
    ];
	
    protected $table = "igrejas";


    public function buscar(Array $data, $totalPage)
    {
        return $this->where(function ($query) use ($data){
            if (isset($data['nome']))
                $query->where('nome', 'LIKE', '%' .$data['nome']. '%');
            if (isset($data['bairro']))
                $query->where('bairro', 'LIKE', '%' .$data['bairro']. '%');

        })//->toSql(); dd($teste);
        ->paginate($totalPage);
    }


    public function cidade()
    {
    	return $this->belongsTo('App\Cidade','cidade_id');
    }

    public function area()
    {
      return $this->belongsTo('App\Area','area_id');
    }

    public function usuarios()
    {
    	return $this->hasMany('App\Usuario','igreja_id');
    }
}

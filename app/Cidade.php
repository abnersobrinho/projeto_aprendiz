<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{

   	protected $fillable = [
      "nome",
      "uf"
    ];
	
    protected $table = "cidades";

    public function igrejas()
    {
    	return $this->hasMany('App\Igreja','cidade_id');
    }

    public function usuarios()
    {
    	return $this->hasMany('App\Usuario','cidade_id');
    }

    public function eventos()
    {
        return $this->hasMany('App\Evento','cidade_id');
    }

    public function buscar(Array $data, $totalPage)
    {
        return $this->where(function ($query) use ($data){
            if (isset($data['nome']))
                $query->where('nome', 'LIKE', '%' .$data['nome']. '%');
            if (isset($data['uf']))
                $query->where('uf', $data['uf']);

        })//->toSql(); dd($teste);
        ->paginate($totalPage);
    }

}

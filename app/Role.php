<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
   	protected $fillable = [
      "nome", "descricao"
    ];
	
    protected $table = "roles";

    public function usuarios()
    {
    	return $this->hasMany('App\Usuario','role_id');
    }

    public function buscar(Array $data, $totalPage)
    {
        return $this->where(function ($query) use ($data){
            if (isset($data['nome']))
                $query->where('nome', 'LIKE', '%' .$data['nome']. '%');
            if (isset($data['descricao']))
                $query->where('descricao', $data['descricao']);

        })//->toSql(); dd($teste);
        ->paginate($totalPage);
    }
}
